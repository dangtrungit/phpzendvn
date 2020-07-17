    <?php
    // require_once 'libs/Controller.php';
    // require_once 'libs/Bootstrap.php';
    // require_once 'libs/View.php';
    // require_once 'libs/Model.php';
    require_once 'define.php';
    function __autoload($class_name)
    {
        require_once LIBRARY_PATH . "{$class_name}.php";
    }
    $index = new Bootstrap();
