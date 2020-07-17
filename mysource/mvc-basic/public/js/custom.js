$(document).ready(function() {
    var controller = (getUrlVar('controller') != "") ? getUrlVar("controller") : "login";
    // var controller = '<?php echo isset($_GET["controller"]) ? $_GET["controller"] : "index"; ?>';
    $('.header a.' + controller).addClass('active')

    $('.success , .notice, .error').click(function() {
        $(this).toggle("slow");
    });
})

function getUrlVar(key) {
    var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
    return result && unescape(result[1]) || "";
}