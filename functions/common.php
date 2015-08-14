<?php
function redirect($url = '')
{
    header("location:".SITE_URL.$url);
    die();
}

function check_login()
{
    if(empty($_SESSION['_user']))
    {
    	redirect('admin/login.php');
    }
}
?>