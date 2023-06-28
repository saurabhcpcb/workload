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


$query=mysqli_query($mysqli, " select * from $dhTable where id=".$_GET['cid']."");

$data=mysqli_fetch_array($query);

if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
 
$updateQuery=mysqli_query($mysqli, " UPDATE $dhTable SET Unit_Name='".addslashes($_POST['Unit_Name'])."', rd_id='".addslashes($_POST['rd_id12'])."' , priority='".addslashes($_POST['Priority'])."', target_date='".date("Y-m-d",strtotime($_POST['target_date']))."' WHERE  id = '".$_POST['rdid']."'");
 

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

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
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
<h3>Edit Unit Details </h3>
<table width="100%" border="1">
<form action="" method="post" name="form1">
<input name="rdid" type="hidden" value="<?=$data['id']?>">

<tr>
 
<td valign="top" align="left"><textarea name="Unit_Name" cols="" rows="" class="form-control"><?=$data['Unit_Name']?></textarea></td>
</tr>
<tr>
 
<td valign="top" align="left"><select name="rd_id12" class="form-control" style="width:40%; float:left;" required>
          
		   <?php $getQuery12=mysqli_query($mysqli, " SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); 
		   while($rd12=mysqli_fetch_array($getQuery12)){?>
           <option value="<?=$rd12['board']?>"  <?=($rd12['board']==$data['rd_id'])?'selected':''?> ><?=$rd12['board']?></option><?php }?>
           </select></td>
 </tr>
 
 
 <tr>
 <td><select name="Priority" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($data['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($data['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($data['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($data['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
 </tr>
 <tr>          
           
<td valign="top" align="left"><input name="target_date" type="text" value="<?=date("d-m-Y",strtotime($data['target_date']))?>" style="width:40%; float:left;" class="form-control"  id="datepicker1"></td>           
</tr>
<tr>
<td><input name="submit" type="submit" value="Submit"></td>
</tr>
</form>
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
