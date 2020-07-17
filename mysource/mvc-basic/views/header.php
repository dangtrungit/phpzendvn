<?php
$cssUrl = PUBLIC_URL  . 'css' . DS;
$jsUrl = PUBLIC_URL  . 'js' . DS;

Session::init();
$menu = '<a class="index" href="index.php?controller=index&action=index">Home</a>';

if (Session::get("loggedIn") == true) {
    $menu .= ' <a class="group" href="index.php?controller=group&action=index">Group</a>';
    $menu .= '<a class="user" href="index.php?controller=user&action=logout">Logout</a>';
} else {
    $menu .= '<a class="user" href="index.php?controller=user&action=login">Login</a>';
}
$fileJs = '';
if (isset($this->js)) {
    foreach ($this->js as $js) {
        $fileJs .= '<script type="text/javascript" src="' . VIEW_URL . $js . '"></script>';
    }
}

$fileCss = '';
if (isset($this->css)) {
    foreach ($this->css as $css) {
        $fileCss .= '<link rel="stylesheet" href="' . VIEW_URL . $css . '">';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="<?php echo  $cssUrl; ?>style.css">
    <script type="text/javascript" src="<?php echo $jsUrl ?>jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo  $jsUrl ?>custom.js"></script>
    <?php echo $fileJs . $fileCss; ?>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h3>Header</h3>
            <?php echo $menu; ?>
        </div>