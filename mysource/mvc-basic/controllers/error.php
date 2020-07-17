<?php

class Errors extends Controller
{
    public function index()
    {
        $this->view->msg  = 'This is an error!';
        $this->view->render('error/index');
    }

    public function errorShow()
    {
        echo 'This is an error!';
    }
}
