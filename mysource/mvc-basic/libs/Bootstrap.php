<?php

class Bootstrap
{

    public function __construct()
    {
        $controllerUrl = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
        $actionUrl = (isset($_GET['action'])) ? $_GET['action'] : 'index';
     
        $controllerName = ucfirst($controllerUrl);

        $file = CONTROLLER_PATH . $controllerUrl . '.php';

        if (file_exists($file) == true) {
            require_once $file;
            $controller = new $controllerName(); // construc
            if (method_exists($controller, $actionUrl) == true) {
                $controller->loadModel($controllerUrl);
                $controller->$actionUrl();
            } else {
                $this->error();
            }
        } else {
            $this->error();
        }
    }

    public function error()
    {
        require_once CONTROLLER_PATH . 'error.php';
        $error = new Errors();
        $error->index();
        // $error->errorShow();
    }
}
