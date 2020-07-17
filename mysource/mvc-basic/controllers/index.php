        <?php
        class Index extends Controller
        {
            public function __construct()
            {
                parent::__construct();
                // echo '<h3>' . __METHOD__ . '</h3>';
            }

            public function index() // hien thi danh sach cac menu
            {
                // $this->view->render('index/index.php');
                $this->view->render('index/index');
            }
        }
