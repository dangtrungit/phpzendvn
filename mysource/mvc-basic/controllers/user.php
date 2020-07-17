<?php
class User extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();

    }
  
    public function login() // hien thi danh sach cac menu
    {
        if (Session::get("loggedIn") == true) {
               
            $this->redirect('group','index');
        }
        if (isset($_POST['submit'])) {

           
            $source = array("username" => $_POST['username']);
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $validate  = new Validate($source);

            $query = "SELECT `id` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
            $validate->addRule('username', 'existRecord', array('database' => $this->db, 'query' => $query));
            $validate->run();

            if ($validate->isValid() == true) {
                Session::set("loggedIn",true);
                $this->redirect('group','index');
            } else {
                $this->view->errors = $validate->showErrors();
            }
        }
        $this->view->render('user/login');
    }
    
    public function logout() {
        $this->view->render('user/logout');
        Session::destroy();
    }
    
}
