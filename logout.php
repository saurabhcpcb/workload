<?php
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
 
if($_SESSION['message']=="changeStatus")
{
mysql_query("update tbl_user set web_status=1 where id=".$_SESSION['userId']['id']."");
session_destroy();
unset($_SESSION['admin']['first_name']);

header('location:index.php');
}
else
{
session_destroy();
unset($_SESSION['admin']['first_name']);

header('location:index.php');
}

?>