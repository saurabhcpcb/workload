<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
 
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
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>



 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .btn
  {
  background:#FFFFFF; 
  }
  
  tr td { padding:6px;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include_once"includes/header.php";
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include_once"includes/side_bar.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Report From
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">  Report Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        
<?php
if(!empty($_SESSION['message']))
{
?>

<div class="alert alert-success">
<?=$_SESSION['message']?>

</div>

<?php
$_SESSION['message']="";
}
?>

<?php
if(!empty($_SESSION['errors']))
{
?>

<div class="alert alert-danger">
<?=$_SESSION['errors']?>

</div>

<?php
$_SESSION['errors']="";
}
?>
 
         
      <div class="box box-primary">
      <div class="box-body">
      
      
       <table   class="table table-bordered table-striped">
  <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>Unit Details/RD</strong></td>
     
  </tr>
<?php 

$getActivitis=mysqli_query("select * from tbl_user_activities_list where user_id=".$_SESSION['userId']['id']."");
while($row=mysqli_fetch_array($getActivitis))
{
$dataList[]=$row['activities_id'];
}
?> 
<?php if (in_array(18, $dataList)) {?>

<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities0=mysqli_query("SELECT * FROM  tbl_activities0 where main_id=".$_GET['id']."");
while($activitiesList0=mysqli_fetch_array($activities0)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList0['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList0['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile0=mysqli_query("SELECT * FROM  tbl_activities0 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile0)>0){
$activitiesFileList0=mysqli_fetch_array($activitiesFile0);
?>
  <tr>
      <td width="55%">Upload File : <?php if($activitiesFileList0['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList0['file']?>" target="_blank"><?=$activitiesFileList0['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList0['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList0['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>

<?php } ?>
<?php if (in_array(17, $dataList)) {?>
<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities1=mysqli_query("SELECT * FROM  tbl_activities1 where main_id=".$_GET['id']."");
while($activitiesList1=mysqli_fetch_array($activities1)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList1['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList1['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile1=mysqli_query("SELECT * FROM  tbl_activities1 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile1)>0){
$activitiesFileList1=mysqli_fetch_array($activitiesFile1);
?>
  <tr>
    <td width="55%">Upload File : <?php if($activitiesFileList1['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList1['file']?>" target="_blank"><?=$activitiesFileList1['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList1['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList1['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(16, $dataList)) {?>
<tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities2=mysqli_query("SELECT * FROM  tbl_activities2 where main_id=".$_GET['id']."");
while($activitiesList2=mysqli_fetch_array($activities2)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList2['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList2['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile2=mysqli_query("SELECT * FROM  tbl_activities2 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile2)>0){
$activitiesFileList2=mysqli_fetch_array($activitiesFile2);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList2['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList2['file']?>" target="_blank"><?=$activitiesFileList2['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList2['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList2['target_date']));} ?></td>
        
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(15, $dataList)) {?>
<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities3=mysqli_query("SELECT * FROM  tbl_activities3 where main_id=".$_GET['id']."");
while($activitiesList3=mysqli_fetch_array($activities3)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList3['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList3['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile3=mysqli_query("SELECT * FROM  tbl_activities3 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile3)>0){
$activitiesFileList3=mysqli_fetch_array($activitiesFile3);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList3['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList3['file']?>" target="_blank"><?=$activitiesFileList3['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList3['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList3['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(8, $dataList)) {?>
<tr>

<td valign="top">CETPs</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities4=mysqli_query("SELECT * FROM  tbl_activities4 where main_id=".$_GET['id']."");
while($activitiesList4=mysqli_fetch_array($activities4)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList4['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList4['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile4=mysqli_query("SELECT * FROM  tbl_activities4 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile4)>0){
$activitiesFileList4=mysqli_fetch_array($activitiesFile4);
?>
  <tr>
   <td width="55%">Upload File : <?php if($activitiesFileList4['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList4['file']?>" target="_blank"><?=$activitiesFileList4['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList4['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList4['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(9, $dataList)) {?>
<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities5=mysqli_query("SELECT * FROM  tbl_activities5 where main_id=".$_GET['id']."");
while($activitiesList5=mysqli_fetch_array($activities5)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList5['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList5['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile5=mysqli_query("SELECT * FROM  tbl_activities5 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile5)>0){
$activitiesFileList5=mysqli_fetch_array($activitiesFile5);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList5['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList5['file']?>" target="_blank"><?=$activitiesFileList5['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList5['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList5['target_date']));} ?></td>
       
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(10, $dataList)) {?>
<tr>

<td valign="top">CBMWTF</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities6=mysqli_query("SELECT * FROM  tbl_activities6 where main_id=".$_GET['id']."");
while($activitiesList6=mysqli_fetch_array($activities6)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList6['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList6['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile6=mysqli_query("SELECT * FROM  tbl_activities6 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile6)>0){
$activitiesFileList6=mysqli_fetch_array($activitiesFile6);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList6['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList6['file']?>" target="_blank"><?=$activitiesFileList6['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList6['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList6['target_date']));} ?></td>
       
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(11, $dataList)) {?>
<tr>

<td valign="top">STPs</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities7=mysqli_query("SELECT * FROM  tbl_activities7 where main_id=".$_GET['id']."");
while($activitiesList7=mysqli_fetch_array($activities7)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList7['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList7['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile7=mysqli_query("SELECT * FROM  tbl_activities7 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile7)>0){
$activitiesFileList7=mysqli_fetch_array($activitiesFile7);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList7['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList7['file']?>" target="_blank"><?=$activitiesFileList7['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList7['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList7['target_date']));} ?></td>
     
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(12, $dataList)) {?>
<tr>

<td valign="top">SLFs(MSW)</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities8=mysqli_query("SELECT * FROM  tbl_activities8 where main_id=".$_GET['id']."");
while($activitiesList8=mysqli_fetch_array($activities8)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList8['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList8['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile8=mysqli_query("SELECT * FROM  tbl_activities8 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile8)>0){
$activitiesFileList8=mysqli_fetch_array($activitiesFile8);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList8['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList8['file']?>" target="_blank"><?=$activitiesFileList8['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList8['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList8['target_date']));} ?></td>
        
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(3, $dataList)) {?>
<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities9=mysqli_query("SELECT * FROM  tbl_activities9 where main_id=".$_GET['id']."");
while($activitiesList9=mysqli_fetch_array($activities9)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList9['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList9['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile9=mysqli_query("SELECT * FROM  tbl_activities9 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile9)>0){
$activitiesFileList9=mysqli_fetch_array($activitiesFile9);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList9['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList9['file']?>" target="_blank"><?=$activitiesFileList9['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList9['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList9['target_date']));} ?></td>
      
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(6, $dataList)) {?>
<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities10=mysqli_query("SELECT * FROM  tbl_activities10 where main_id=".$_GET['id']."");
while($activitiesList10=mysqli_fetch_array($activities10)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList10['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList10['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile10=mysqli_query("SELECT * FROM  tbl_activities10 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile10)>0){
$activitiesFileList10=mysqli_fetch_array($activitiesFile10);
?>
  <tr>
   <td width="55%">Upload File : <?php if($activitiesFileList10['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList10['file']?>" target="_blank"><?=$activitiesFileList10['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList10['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList10['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(1, $dataList)) {?>
<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities11=mysqli_query("SELECT * FROM  tbl_activities11 where main_id=".$_GET['id']."");
while($activitiesList11=mysqli_fetch_array($activities11)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList11['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList11['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile11=mysqli_query("SELECT * FROM  tbl_activities11 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile11)>0){
$activitiesFileList11=mysqli_fetch_array($activitiesFile11);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList11['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList11['file']?>" target="_blank"><?=$activitiesFileList11['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList11['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList11['target_date']));} ?></td>
        
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(2, $dataList)) {?>
<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities12=mysqli_query("SELECT * FROM  tbl_activities12 where main_id=".$_GET['id']."");
while($activitiesList12=mysqli_fetch_array($activities12)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList12['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList12['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile12=mysqli_query("SELECT * FROM  tbl_activities12 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile12)>0){
$activitiesFileList12=mysqli_fetch_array($activitiesFile12);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList12['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList12['file']?>" target="_blank"><?=$activitiesFileList12['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList12['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList12['target_date']));} ?></td>
    
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(14, $dataList)) {?>
<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities13=mysqli_query("SELECT * FROM  tbl_activities13 where main_id=".$_GET['id']."");
while($activitiesList13=mysqli_fetch_array($activities13)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList13['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList13['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile13=mysqli_query("SELECT * FROM  tbl_activities13 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile13)>0){
$activitiesFileList13=mysqli_fetch_array($activitiesFile13);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList13['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList13['file']?>" target="_blank"><?=$activitiesFileList13['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList13['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList13['target_date']));} ?></td>
      
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(13, $dataList)) {?>
<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities14=mysqli_query("SELECT * FROM  tbl_activities14 where main_id=".$_GET['id']."");
while($activitiesList14=mysqli_fetch_array($activities14)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList14['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList14['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile14=mysqli_query("SELECT * FROM  tbl_activities14 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile14)>0){
$activitiesFileList14=mysqli_fetch_array($activitiesFile14);
?>
  <tr>
   <td width="55%">Upload File : <?php if($activitiesFileList14['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList14['file']?>" target="_blank"><?=$activitiesFileList14['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList14['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList14['target_date']));} ?></td>
       
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(7, $dataList)) {?>

<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities15=mysqli_query("SELECT * FROM  tbl_activities15 where main_id=".$_GET['id']."");
while($activitiesList15=mysqli_fetch_array($activities15)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList15['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList15['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile15=mysqli_query("SELECT * FROM  tbl_activities15 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile15)>0){
$activitiesFileList15=mysqli_fetch_array($activitiesFile15);
?>
  <tr>
   <td width="55%">Upload File : <?php if($activitiesFileList15['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList15['file']?>" target="_blank"><?=$activitiesFileList15['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList15['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList15['target_date']));} ?></td>
       
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(5, $dataList)) {?>
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities16=mysqli_query("SELECT * FROM  tbl_activities16 where main_id=".$_GET['id']."");
while($activitiesList16=mysqli_fetch_array($activities16)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList16['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList16['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile16=mysqli_query("SELECT * FROM  tbl_activities16 where main_id=".$_GET['id']."");
if(mysqli_num_rows($activitiesFile16)>0){
$activitiesFileList16=mysqli_fetch_array($activitiesFile16);
?>
  <tr>
  <td width="55%">Upload File : <?php if($activitiesFileList16['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList16['file']?>" target="_blank"><?=$activitiesFileList16['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList16['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList16['target_date']));} ?></td>
       
  </tr>
  <?php } ?>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(4, $dataList)) {?>
<tr>

<td valign="top">Inspections for ganga complaint verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities17=mysqli_query("SELECT * FROM  tbl_activities17 where main_id=".$_GET['id']."");
while($activitiesList17=mysqli_fetch_array($activities17)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="50%"><?=$activitiesList17['Unit_Name']?></td>
    
    <td width="45%"><?=$activitiesList17['rd_id']?></td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile17=mysqli_query("SELECT * FROM  tbl_activities17 where main_id=".$_GET['id']."");

if(mysqli_num_rows($activitiesFile17)>0){
$activitiesFileList17=mysqli_fetch_array($activitiesFile17);
?>
  <tr>
   <td width="55%">Upload File : <?php if($activitiesFileList17['file']==""){ echo"No File";} else {?><a href="upload/<?=$activitiesFileList17['file']?>" target="_blank"><?=$activitiesFileList17['file']?></a><?php } ?></td>
    
    <td width="45%">Target Date : <?php if($activitiesFileList17['target_date']=="1970-01-01"){ echo"00-00-0000";} else { echo date("d-M-Y", strtotime($activitiesFileList17['target_date']));} ?></td>
      
  </tr>
  <?php } ?>
</table>
</td>
</tr>

 <?php } ?>
 
   
</table>

 

     
      </div></div>
      
 

        </div>
     
        <!--/.col (right) -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include_once"includes/footer.php";
  ?>

  <!-- Control Sidebar -->
   
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
<link rel="stylesheet" href="js/default.css" type="text/css">
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
