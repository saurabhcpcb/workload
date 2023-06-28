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


$query=mysql_query("select * from $rdTable where rdid=".$_GET['cid']."");

$data=mysql_fetch_array($query);

if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
 
 
$updateQuery=mysql_query("UPDATE $rdTable SET Unit_Name='".addslashes($_POST['Unit_Name'])."' WHERE  rdid = '".$_POST['rdid']."'");
 

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
 <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
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
<h3>Edit Unit Details </h3>
<table width="100%" border="1">
<form action="" method="post" name="form1">
<input name="rdid" type="hidden" value="<?=$data['rdid']?>">

<tr>
 
<td valign="top" align="left"><textarea name="Unit_Name" cols="" rows="" class="form-control"><?=$data['Unit_Name']?></textarea></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Submit"></td>
</tr>
</form>
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
