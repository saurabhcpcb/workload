<?php
ini_set('display_errors','0');
include('includes/connect.php');
date_default_timezone_set('Asia/Kolkata');
?>
<?php

 

$month= date("m", strtotime($_GET['cid']));
$year= date("Y", strtotime($_GET['cid']));

switch ($_GET['eid'])
{
	case "activities0":
	$dhTable="tbl_activities0";
	break;
	
	case "activities1":
	$dhTable="tbl_activities1";
	break;
	
	case "activities2":
	$dhTable="tbl_activities2";
	break;
	
	case "activities3":
	$dhTable="tbl_activities3";
	break;
	
	case "activities4":
	$dhTable="tbl_activities4";
	break;
	
	case "activities5":
	$dhTable="tbl_activities5";
	break;
	
	case "activities6":
	$dhTable="tbl_activities6";
	break;
	
	case "activities7":
	$dhTable="tbl_activities7";
	break;
	
	case "activities8":
	$dhTable="tbl_activities8";
	 
	break;
	
	case "activities9":
	$dhTable="tbl_activities9";
	break;
	
	case "activities10":
	$dhTable="tbl_activities10";
	break;
	
	case "activities11":
	$dhTable="tbl_activities11";
	break;
	
	case "activities12":
	$dhTable="tbl_activities12";
	break;
	
	case "activities13":
	$dhTable="tbl_activities13";
	break;
	
	case "activities14":
	$dhTable="tbl_activities14";
	break;
	
	case "activities15":
	$dhTable="tbl_activities15";
	break;
	
	case "activities16":
	$dhTable="tbl_activities16";
	break;
	
	case "activities17":
	$dhTable="tbl_activities17";
	break;
	
} 
?>
<?php


 
$updateQuery=mysqli_query("DELETE FROM $dhTable WHERE  id = '".$_GET['cid']."'");
 

if($updateQuery)
{
?>
			<script type="text/javascript">
				alert('Successfull Delete.');
				 
			</script>
            
            
  
	<?php
	
	
	header("location:cpcb_data_list.php?month=".$_GET['month']."&rd_id12=".$_GET['rd_id12']."&searchRegionalDirectors=Search");
}
 
?>
 