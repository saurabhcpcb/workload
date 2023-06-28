<?php
ini_set('display_errors','0');
include('includes/connect.php');
date_default_timezone_set('Asia/Kolkata');
?>
<?php

$getUserData=mysql_query("SELECT * FROM tbl_user where board='".$_GET['rd']."'");
$user=mysql_fetch_array($getUserData);  


$month= date("m", strtotime($_GET['cid']));
$year= date("Y", strtotime($_GET['cid']));

switch ($_GET['eid'])
{
	case "activities0":
	$rdTable="tbl_activities_rd0";
	break;
	
	case "activities1":
	$rdTable="tbl_activities_rd1";
	break;
	
	case "activities2":
	$rdTable="tbl_activities_rd2";
	break;
	
	case "activities3":
	$rdTable="tbl_activities_rd3";
	break;
	
	case "activities4":
	$rdTable="tbl_activities_rd4";
	break;
	
	case "activities5":
	$rdTable="tbl_activities_rd5";
	break;
	
	case "activities6":
	$rdTable="tbl_activities_rd6";
	break;
	
	case "activities7":
	$rdTable="tbl_activities_rd7";
	break;
	
	case "activities8":
	$dhTable="tbl_activities8";
	$rdTable="tbl_activities_rd8";
	break;
	
	case "activities9":
	$rdTable="tbl_activities_rd9";
	break;
	
	case "activities10":
	$rdTable="tbl_activities_rd10";
	break;
	
	case "activities11":
	$rdTable="tbl_activities_rd11";
	break;
	
	case "activities12":
	$rdTable="tbl_activities_rd12";
	break;
	
	case "activities13":
	$rdTable="tbl_activities_rd13";
	break;
	
	case "activities14":
	$rdTable="tbl_activities_rd14";
	break;
	
	case "activities15":
	$rdTable="tbl_activities_rd15";
	break;
	
	case "activities16":
	$rdTable="tbl_activities_rd16";
	break;
	
	case "activities17":
	$rdTable="tbl_activities_rd17";
	break;
	
} 
?>
<?php

 
$updateQuery=mysql_query("delete from $rdTable WHERE  rdid = '".$_GET['cid']."'");
 

if($updateQuery)
{
 
header("Location:rd_data_list.php?month=".$_GET['month']."&rd_id12=".$_GET['rd_id12']."&searchRegionalDirectors=Search");

}
?>

