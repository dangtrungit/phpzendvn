<?php
// ============================ PATHS ============================
define('DS', dirname(DIRECTORY_SEPARATOR)); //duong dan thu muc goc
define('ROOT_PATH', dirname(__FILE__)); //duong dan thu muc goc
define('LIBRARY_PATH', ROOT_PATH . DS . 'libs' . DS); //duong dan thu vien libs
define('CONTROLLER_PATH', ROOT_PATH . DS . 'controllers' . DS); //duong dan thu vien controllers
define('VIEW_PATH', ROOT_PATH . DS . 'views' . DS); //duong dan thu vien views
define('MODEL_PATH', ROOT_PATH . DS . 'models' . DS); //duong dan thu vien model
define('PUBLIC_PATH', ROOT_PATH . DS . 'public' . DS); //duong dan thu vien model

// ============================ URL ============================

define('ROOT_URL', DS . 'phpzendvn' . DS . 'chuong10-phpframework-oop-mvc' . DS . 'mysource' . DS . 'mvc-basic'); //duong dan thu vien mvc-basic
define('PUBLIC_URL', ROOT_URL . DS . 'public' . DS); //duong dan thu vien model
define('VIEW_URL', ROOT_URL . DS . 'views' . DS); //duong dan group

// ============================ DATABASE ============================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'manager_user');
define('DB_TABLE', 'user');
