 <?php 
 ob_start();
 session_start();
 ini_set('display_errors','0');
 include_once'includes/connect.php';
 include_once'includes/session.php';
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

<table width="100%" border="1">

<tr>
<td colspan="5"><h4>Comment</h4></td>
</tr>
  


 
 

<?php 
$i=1;

$descriptionQuery="SELECT * FROM $dhTable where id = ".$_GET['id']."";
$getDescriptionQuery=mysql_query($descriptionQuery);
$activities=mysql_fetch_array($getDescriptionQuery,MYSQL_ASSOC);
 
?>
 
<tr>
<td valign="top"> 
<?=$activities['Comment']?> 
 
</td>
 
</tr>
 

</table>


</div>
</div>


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
