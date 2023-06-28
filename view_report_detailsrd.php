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
	$dhTable="tbl_activities0";
	$rdTable="tbl_activities_rd0";
	break;
	
	case "activities1":
	$dhTable="tbl_activities1";
	$rdTable="tbl_activities_rd1";
	break;
	
	case "activities2":
	$dhTable="tbl_activities2";
	$rdTable="tbl_activities_rd2";
	break;
	
	case "activities3":
	$dhTable="tbl_activities3";
	$rdTable="tbl_activities_rd3";
	break;
	
	case "activities4":
	$dhTable="tbl_activities4";
	$rdTable="tbl_activities_rd4";
	break;
	
	case "activities5":
	$dhTable="tbl_activities5";
	$rdTable="tbl_activities_rd5";
	break;
	
	case "activities6":
	$dhTable="tbl_activities6";
	$rdTable="tbl_activities_rd6";
	break;
	
	case "activities7":
	$dhTable="tbl_activities7";
	$rdTable="tbl_activities_rd7";
	break;
	
	case "activities8":
	$dhTable="tbl_activities8";
	$rdTable="tbl_activities_rd8";
	break;
	
	case "activities9":
	$dhTable="tbl_activities9";
	$rdTable="tbl_activities_rd9";
	break;
	
	case "activities10":
	$dhTable="tbl_activities10";
	$rdTable="tbl_activities_rd10";
	break;
	
	case "activities11":
	$dhTable="tbl_activities11";
	$rdTable="tbl_activities_rd11";
	break;
	
	case "activities12":
	$dhTable="tbl_activities12";
	$rdTable="tbl_activities_rd12";
	break;
	
	case "activities13":
	$dhTable="tbl_activities13";
	$rdTable="tbl_activities_rd13";
	break;
	
	case "activities14":
	$dhTable="tbl_activities14";
	$rdTable="tbl_activities_rd14";
	break;
	
	case "activities15":
	$dhTable="tbl_activities15";
	$rdTable="tbl_activities_rd15";
	break;
	
	case "activities16":
	$dhTable="tbl_activities16";
	$rdTable="tbl_activities_rd16";
	break;
	
	case "activities17":
	$dhTable="tbl_activities17";
	$rdTable="tbl_activities_rd17";
	break;
	
} 
?>
<?php


if(isset($_POST['submit']) && $_POST['submit']=="Save"){

 

$dhId="'".implode("','",$_POST['dhId'])."'";
$rdId="'".implode("','",$_POST['rdId'])."'";

 
$updateQuery=mysql_query("UPDATE $dhTable SET status=1 WHERE id in ($dhId)  AND  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd']."'");
mysql_query("UPDATE $rdTable SET status=1 WHERE rdid in ($rdId)  AND  month = '".$_GET['cid']."' AND user_id= '".$user['id']."'");

if($updateQuery)
{
?>
			<script type="text/javascript">
				alert('Successfull Update.');
				window.opener.location.reload();
			 
				window.close();
			</script>
	<?php
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Workload Allotment System</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="plugins/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
body

{
padding:30px;}
.btn
{
background:#FFFFFF;
}

tr td { padding:6px;}

@media print
{    
.no-print, .no-print *
{
display: none !important;
}
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="box box-primary no-print">
<div class="box-body">

<table width="100%" border="1">
<?php
$queryByRd1=mysql_query("SELECT * FROM $rdTable as a,tbl_user as b where a.month='".$_GET['cid']."' AND a.user_id=b.id AND a.user_id= '".$user['id']."' ORDER BY a.rdid ASC ");
$rdDetails1=mysql_fetch_array($queryByRd1);
?>
<tr>
<td colspan="4"><h4>Units/Activities Proposed by <?=$rdDetails1['board']?></h4></td>
</tr>
<tr>
<td width="8%"><strong>S.No.</strong></td>
<td width="72%"><strong>Units Name</strong></td>
 
 
</tr>


 
 
 <?php
$j=1;
$queryByRd=mysql_query("SELECT * FROM $rdTable as a,tbl_user as b where a.month='".$_GET['cid']."' AND a.user_id=b.id AND a.user_id= '".$user['id']."' ORDER BY a.rdid ASC ");
while($rdDetails=mysql_fetch_array($queryByRd)){

?>
<tr>
<td><?=$j?></td>
<td valign="top" align="left"> 
 
<?=$rdDetails['Unit_Name']?> 
 
</td>
 
</tr>
<?php
$j++;
}
?>



 


</table>


</div>
</div>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
<link rel="stylesheet" href="js/default.css" type="text/css">
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
$("#example1").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false
});
});
</script>
</body>
</html>
