<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';

//echo $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

 if(!isset($_SESSION['userId']['id'])) 
 
    {
	
    header("location:index.php");
    
    }
 
?>
