<?php
ini_set('display_errors','0');
include('includes/connect.php');
date_default_timezone_set('Asia/Kolkata');
?>
<?php
 
$month= date("m", strtotime($_GET['month']));
$year= date("Y", strtotime($_GET['month']));

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
<td colspan="4"><h4>Work Completed For <?=$_GET['rd']?>, Month: <?=$_GET['month']?>, Set Priority: <?=$_GET['activities']?></h4></td>
</tr>
<tr>
<td width="54%"><strong>Activities Name</strong></td>
 
</tr>


 
 
 <?php 
$i=0;

$proposedQuery0=mysqli_query($mysqli, " select * from tbl_activities0 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' GROUP BY  activities_name");
$proposedQuery1=mysqli_query($mysqli, " select * from tbl_activities1 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' GROUP BY  activities_name");

$proposedQuery2=mysqli_query($mysqli, " select * from tbl_activities2 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery3=mysqli_query($mysqli, " select * from tbl_activities3 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery4=mysqli_query($mysqli, " select * from tbl_activities4 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery5=mysqli_query($mysqli, " select * from tbl_activities5 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery6=mysqli_query($mysqli, " select * from tbl_activities6 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' GROUP BY  activities_name");

$proposedQuery7=mysqli_query($mysqli, " select * from tbl_activities7 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery8=mysqli_query($mysqli, " select * from tbl_activities8 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery9=mysqli_query($mysqli, " select * from tbl_activities9 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery10=mysqli_query($mysqli, " select * from tbl_activities10 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery11=mysqli_query($mysqli, " select * from tbl_activities11 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery12=mysqli_query($mysqli, " select * from tbl_activities12 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery13=mysqli_query($mysqli, " select * from tbl_activities13 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery14=mysqli_query($mysqli, " select * from tbl_activities14 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery15=mysqli_query($mysqli, " select * from tbl_activities15 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery16=mysqli_query($mysqli, " select * from tbl_activities16 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND 
priority='".$_GET['activities']."'  GROUP BY  activities_name");

$proposedQuery17=mysqli_query($mysqli, " select * from tbl_activities17 where  YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  GROUP BY  activities_name");
?>
<?php

while ($activities0=mysqli_fetch_array($proposedQuery0,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities0['activities_name']?> 
 
</tr>
<?php } ?>


<?php

while ($activities1=mysqli_fetch_array($proposedQuery1,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities1['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities2=mysqli_fetch_array($proposedQuery2,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities2['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities3=mysqli_fetch_array($proposedQuery3,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities3['activities_name']?> 

</tr>
<?php } ?>
<?php

while ($activities4=mysqli_fetch_array($proposedQuery4,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities4['activities_name']?> 

</tr>
<?php } ?>
 
<?php

while ($activities5=mysqli_fetch_array($proposedQuery5,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities5['activities_name']?> 

</tr>
<?php } ?>


<?php

while ($activities6=mysqli_fetch_array($proposedQuery6,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities6['activities_name']?> 
 
</tr>
<?php } ?>


<?php

while ($activities7=mysqli_fetch_array($proposedQuery7,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities7['activities_name']?> 
 
</tr>
<?php } ?>


<?php

while ($activities8=mysqli_fetch_array($proposedQuery8,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities8['activities_name']?> 

</tr>
<?php } ?>


<?php

while ($activities9=mysqli_fetch_array($proposedQuery9,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities9['activities_name']?> 
 
</tr>
<?php } ?>

<?php

while ($activities10=mysqli_fetch_array($proposedQuery10,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities10['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities11=mysqli_fetch_array($proposedQuery11,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities11['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities12=mysqli_fetch_array($proposedQuery12,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities12['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities13=mysqli_fetch_array($proposedQuery13,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities13['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities14=mysqli_fetch_array($proposedQuery14,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities14['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities15=mysqli_fetch_array($proposedQuery15,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities15['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities16=mysqli_fetch_array($proposedQuery16,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities16['activities_name']?> 

</tr>
<?php } ?>

<?php

while ($activities17=mysqli_fetch_array($proposedQuery17,mysqli_ASSOC)){
 
?>
<tr>
 <td valign="top" align="left"> 
 
<?=$activities17['activities_name']?> 

</tr>
<?php } ?> 


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
