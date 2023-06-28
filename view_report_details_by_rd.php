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


if(isset($_POST['submit']) && $_POST['submit']=="Complete"){
 
$updateQuery=mysql_query("UPDATE $dhTable SET final_Status=2, Comment='".addslashes($_POST['Comment'])."',completed_date_by_rd='".date("Y-m-d")."' WHERE id ='".$_POST['postId']."'  AND rd_id='".$_SESSION['userId']['board']."'");
 
if($updateQuery)
{
?>
			<script type="text/javascript">
				alert('Final Report Completed Successfull...');
				window.opener.location.reload();
			 
				window.close();
			</script>
	<?php
}
}
?>


<?php


if(isset($_POST['submit']) && $_POST['submit']=="Postpone"){

$updateQuery=mysql_query("UPDATE $dhTable SET Comment='".addslashes($_POST['Comment'])."',Postpone='1', target_date='".date("Y-m-d", strtotime($_POST['target_date']))."',completed_date_by_rd='".date("Y-m-d")."' WHERE id ='".$_POST['postId']."'  AND rd_id='".$_SESSION['userId']['board']."'");
 
if($updateQuery)
{
?>
			<script type="text/javascript">
				alert('Postpone Successfull...');
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

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
  
  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker4" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker5" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker6" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker7" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker8" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker9" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker10" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker11" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker12" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker13" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker14" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker15" ).datepicker();
  } );
  </script>

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
<td colspan="7"><h4>Units/Activities(Divisional Head)</h4></td>
</tr>
<tr>
<td width="4%"><strong>S.No.</strong></td>
<td width="20%"><strong>Units Name</strong></td>
<td width="11%"><strong>Given By Division</strong></td>
<td width="25%"><strong>Target Date</strong></td>

<td width="25%"><strong>Assigned Date By MS</strong></td>

<td width="31%" colspan="2"><strong>Status/Comment</strong></td>

 
</tr>


 
 

<?php 
$i=1;

$descriptionQuery="SELECT * FROM $dhTable where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'";$getDescriptionQuery=mysql_query($descriptionQuery);
while ($activities=mysql_fetch_array($getDescriptionQuery,MYSQL_ASSOC)){
 
 
$userData=mysql_query("select * from tbl_user where id=".$activities['user_id'].""); 

$user=mysql_fetch_array($userData);
?>
<form action="" method="post" name="form<?=$i?>">
<input name="postId" type="hidden" value="<?=$activities['id']?>">
<tr>
<td valign="top"><?=$i?></td>
<td valign="top" align="left"> 
 
<?=$activities['Unit_Name']?> 
 
</td>

<td valign="top"><?=$user['Division']?>

<br>
<?php if(isset($activities['file'])){?><a href="upload/<?=$activities['file']?>" target="_blank">View uploaded File</a><?php } else { echo"No File"; } ?>

</td>
<td valign="top"><input name="target_date" type="text" value="<?=date("d-m-Y",strtotime($activities['target_date']))?>" class="form-control"  id="datepicker<?=$i?>">
<?php if($activities['Postpone']==1){?>
 
<h4 style="font-weight:700; color:#FF0000; text-decoration:underline;">Reason for Postpone</h4>
<?=$activities['Comment']?>
<?php } ?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities['proposed_date_by_ms']))?></td>
<td valign="top"> <textarea name="Comment" cols="" rows="" class="form-control"></textarea></td>

<td width="9%" valign="top"><input name="submit" value="Complete" class="btn bg-olive" type="submit" style="margin-bottom:4px;">

<?php if($activities['priority']=="P3" || $activities['priority']=="P4"){?>
<input name="submit" value="Postpone" class="btn bg-maroon" type="submit">
<?php } ?>

</td>
</tr>
</form>
<?php  $i++;} ?>
 


<tr>

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
