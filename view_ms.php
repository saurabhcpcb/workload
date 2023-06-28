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
      View Report</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> View Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        
        
<div class="box box-primary no-print">
          <div class="box-body">
           <form action="" method="post">
            <table width="100%" border="1">
             <tr>
             
             <?php
			 if(isset($_GET['month']) && $_GET['month']!=""){
			 $month=$_GET['month'];
			 }
			 
			 else
			 {
			 $month=date("M-Y");
			 }
			 
			 ?>
              <td width="30%"> <input name="month"  value="<?=$month?>" class="form-control" id="datepicker-example111" type="text"></td>
               
           <td width="30%"><select name="user_id" class="form-control" style="width:49%; margin-left:10px; float:left;" required>
          
		   <?php $getQuery12=mysqli_query("SELECT * FROM tbl_user where user_type='CPCB' ORDER BY Division ASC"); 
		   while($rd12=mysqli_fetch_array($getQuery12)){?>
           <option value="<?=$rd12['id']?>"  <?=($rd12['id']==$_POST['user_id'])?'selected':''?> ><?=$rd12['Division']?></option><?php }?>
           </select></td>

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>

<?php
if(isset($_POST['searchRegionalDirectors'])){
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month'])); 
?> 

<div class="box box-primary">
      <div class="box-body">

  
  
  <h4 align="left" style="font-weight:600; color:#1155cc; text-transform:capitalize; text-decoration:underline;">Month : <?=date("M-Y", strtotime($_GET['month']))?>, 
  <?php
  $getQuery=mysqli_query("SELECT * FROM tbl_user where  id=".$_POST['user_id'].""); 
  $rd=mysqli_fetch_array($getQuery);
  ?>
  
  Division : <?=$rd['Division'] ?></h4>
            
 
   
<table   class="table table-bordered table-striped">
  <tr>
    
    <td width="22%" valign="top"><strong>Activities</strong></td>
    <td width="78%"  valign="top"><strong>Unit Details/RD</strong></td>
     
  </tr>
<?php 

$getActivitis=mysqli_query("select * from tbl_user_activities_list where user_id=".$_POST['user_id']."");
while($row=mysqli_fetch_array($getActivitis))
{
$dataList[]=$row['activities_id'];
}
?> 
<?php if (in_array(18, $dataList)) {?>

<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<?php
$queryByDate=mysqli_query("SELECT * FROM tbl_activities0 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow=mysqli_fetch_array($queryByDate)){
?>
 <table width="100%" border="1" style="margin:6px 0px;">
<?php
$i=1;


$activities0=mysqli_query("SELECT * FROM  tbl_activities0 where user_id=".$_POST['user_id']." AND main_id=".$dateRow['main_id']."");
while($activitiesList0=mysqli_fetch_array($activities0)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList0['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList0['rd_id']?>  <?php if($activitiesList0['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities0&id=<?=$activitiesList0['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList0['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList0['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    <br>
    
    Target Date :  <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList0['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList0['target_date_before'])  && $activitiesList0['target_date']!=$activitiesList0['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList0['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList0['target_date_before'])); }?></span><?php } ?>
    
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:6px 0px;">
<?php
$activitiesFile0=mysqli_query("SELECT * FROM  tbl_activities0 where user_id=".$_POST['user_id']." AND main_id=".$dateRow['main_id']."");
$activitiesFileList0=mysqli_fetch_array($activitiesFile0);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList0['file'])){?><a href="upload/<?=$activitiesFileList0['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
   
  </tr>
</table>
 
<?php } ?>
</td>
</tr>

<?php } ?>
<?php if (in_array(17, $dataList)) {?>
<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5">
<?php
$queryByDate1=mysqli_query("SELECT * FROM tbl_activities1 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow1=mysqli_fetch_array($queryByDate1)){
?> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities1=mysqli_query("SELECT * FROM  tbl_activities1 where user_id=".$_POST['user_id']." AND main_id=".$dateRow1['main_id']."");
while($activitiesList1=mysqli_fetch_array($activities1)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList1['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList1['rd_id']?>  <?php if($activitiesList1['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities1&id=<?=$activitiesList1['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList1['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList1['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList1['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList1['target_date_before']) && $activitiesList1['target_date']!=$activitiesList1['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList1['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList1['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile1=mysqli_query("SELECT * FROM  tbl_activities1 where user_id=".$_POST['user_id']." AND main_id=".$dateRow1['main_id']."");
$activitiesFileList1=mysqli_fetch_array($activitiesFile1);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList1['file'])){?><a href="upload/<?=$activitiesFileList1['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
   
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(16, $dataList)) {?>
<tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5">
<?php
$queryByDate2=mysqli_query("SELECT * FROM tbl_activities2 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow2=mysqli_fetch_array($queryByDate2)){
?> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities2=mysqli_query("SELECT * FROM  tbl_activities2 where user_id=".$_POST['user_id']." AND main_id=".$dateRow2['main_id']."");
while($activitiesList2=mysqli_fetch_array($activities2)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList2['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList2['rd_id']?>  <?php if($activitiesList2['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities2&id=<?=$activitiesList2['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList2['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList2['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList2['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList2['target_date_before']) && $activitiesList2['target_date']!=$activitiesList2['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList2['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList2['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile2=mysqli_query("SELECT * FROM  tbl_activities2 where user_id=".$_POST['user_id']." AND main_id=".$dateRow2['main_id']."");
$activitiesFileList2=mysqli_fetch_array($activitiesFile2);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList2['file'])){?><a href="upload/<?=$activitiesFileList2['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
  
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(15, $dataList)) {?>
<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"> 
<?php
$queryByDate3=mysqli_query("SELECT * FROM tbl_activities3 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow3=mysqli_fetch_array($queryByDate3)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities3=mysqli_query("SELECT * FROM  tbl_activities3 where user_id=".$_POST['user_id']." AND  main_id=".$dateRow3['main_id']."");
while($activitiesList3=mysqli_fetch_array($activities3)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList3['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList3['rd_id']?>  <?php if($activitiesList3['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities3&id=<?=$activitiesList3['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList3['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList3['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList3['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList3['target_date_before']) && $activitiesList3['target_date']!=$activitiesList3['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList3['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList3['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile3=mysqli_query("SELECT * FROM  tbl_activities3 where user_id=".$_POST['user_id']." AND  main_id=".$dateRow3['main_id']."");
$activitiesFileList3=mysqli_fetch_array($activitiesFile3);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList3['file'])){?><a href="upload/<?=$activitiesFileList3['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
     
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(8, $dataList)) {?>
<tr>

<td valign="top">CETPs</td>


<td colspan="5"> 
<?php
$queryByDate4=mysqli_query("SELECT * FROM tbl_activities4 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow4=mysqli_fetch_array($queryByDate4)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities4=mysqli_query("SELECT * FROM  tbl_activities4 where user_id=".$_POST['user_id']." AND main_id=".$dateRow4['main_id']."");
while($activitiesList4=mysqli_fetch_array($activities4)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList4['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList4['rd_id']?>  <?php if($activitiesList4['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities4&id=<?=$activitiesList4['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList4['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList4['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
 Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList4['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList4['target_date_before']) && $activitiesList4['target_date']!=$activitiesList4['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList4['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList4['target_date_before'])); }?></span><?php } ?>   
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile4=mysqli_query("SELECT * FROM  tbl_activities4 where user_id=".$_POST['user_id']." AND main_id=".$dateRow4['main_id']."");
$activitiesFileList4=mysqli_fetch_array($activitiesFile4);
?>
  <tr>
    <td width="29%">Upload Document : <?php if(isset($activitiesFileList4['file'])){?><a href="upload/<?=$activitiesFileList4['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
  
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(9, $dataList)) {?>
<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> 
<?php
$queryByDate5=mysqli_query("SELECT * FROM tbl_activities5 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow5=mysqli_fetch_array($queryByDate5)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities5=mysqli_query("SELECT * FROM  tbl_activities5 where user_id=".$_POST['user_id']." AND main_id=".$dateRow5['main_id']."");
while($activitiesList5=mysqli_fetch_array($activities5)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList5['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList5['rd_id']?>  <?php if($activitiesList5['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities5&id=<?=$activitiesList5['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList5['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList5['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList5['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList5['target_date_before']) && $activitiesList5['target_date']!=$activitiesList5['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList5['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList5['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile5=mysqli_query("SELECT * FROM  tbl_activities5 where user_id=".$_POST['user_id']." AND main_id=".$dateRow5['main_id']."");
$activitiesFileList5=mysqli_fetch_array($activitiesFile5);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList5['file'])){?><a href="upload/<?=$activitiesFileList5['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
     
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(10, $dataList)) {?>
<tr>

<td valign="top">CBMWTF</td>


<td colspan="5">
<?php
$queryByDate6=mysqli_query("SELECT * FROM tbl_activities6 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow6=mysqli_fetch_array($queryByDate6)){
?> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities6=mysqli_query("SELECT * FROM  tbl_activities6 where user_id=".$_POST['user_id']." AND main_id=".$dateRow6['main_id']."");
while($activitiesList6=mysqli_fetch_array($activities6)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList6['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList6['rd_id']?>  <?php if($activitiesList6['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities6&id=<?=$activitiesList6['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList6['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList6['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList6['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList6['target_date_before']) && $activitiesList6['target_date']!=$activitiesList6['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList6['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList6['target_date_before'])); }?></span><?php } ?>
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile6=mysqli_query("SELECT * FROM  tbl_activities6 where user_id=".$_POST['user_id']." AND main_id=".$dateRow6['main_id']."");
$activitiesFileList6=mysqli_fetch_array($activitiesFile6);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList6['file'])){?><a href="upload/<?=$activitiesFileList6['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
   
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(11, $dataList)) {?>
<tr>

<td valign="top">STPs</td>


<td colspan="5"> 
<?php
$queryByDate7=mysqli_query("SELECT * FROM tbl_activities7 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow7=mysqli_fetch_array($queryByDate7)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities7=mysqli_query("SELECT * FROM  tbl_activities7 where  user_id=".$_POST['user_id']." AND main_id=".$dateRow7['main_id']."");
while($activitiesList7=mysqli_fetch_array($activities7)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList7['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList7['rd_id']?>  <?php if($activitiesList7['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities7&id=<?=$activitiesList7['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList7['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList7['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList7['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList7['target_date_before']) && $activitiesList7['target_date']!=$activitiesList7['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList7['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList7['target_date_before'])); }?></span><?php } ?>
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile7=mysqli_query("SELECT * FROM  tbl_activities7 where user_id=".$_POST['user_id']." AND main_id=".$dateRow7['main_id']."");
$activitiesFileList7=mysqli_fetch_array($activitiesFile7);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList7['file'])){?><a href="upload/<?=$activitiesFileList7['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
    
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(12, $dataList)) {?>
<tr>

<td valign="top">SLFs(MSW)</td>


<td colspan="5"> 
<?php
$queryByDate8=mysqli_query("SELECT * FROM tbl_activities8 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow8=mysqli_fetch_array($queryByDate8)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities8=mysqli_query("SELECT * FROM  tbl_activities8 where user_id=".$_POST['user_id']." AND main_id=".$dateRow8['main_id']."");
while($activitiesList8=mysqli_fetch_array($activities8)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList8['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList8['rd_id']?>  <?php if($activitiesList8['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities8&id=<?=$activitiesList8['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList8['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList8['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList8['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList8['target_date_before']) && $activitiesList8['target_date']!=$activitiesList8['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList8['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList8['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile8=mysqli_query("SELECT * FROM  tbl_activities8 where user_id=".$_POST['user_id']." AND main_id=".$dateRow8['main_id']."");
$activitiesFileList8=mysqli_fetch_array($activitiesFile8);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList8['file'])){?><a href="upload/<?=$activitiesFileList8['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
     
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(3, $dataList)) {?>
<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> 
<?php
$queryByDate9=mysqli_query("SELECT * FROM tbl_activities9 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow9=mysqli_fetch_array($queryByDate9)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities9=mysqli_query("SELECT * FROM  tbl_activities9 where user_id=".$_POST['user_id']." AND main_id=".$dateRow9['main_id']."");
while($activitiesList9=mysqli_fetch_array($activities9)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList9['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList9['rd_id']?>  <?php if($activitiesList9['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities9&id=<?=$activitiesList9['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList9['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList9['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?> 
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList9['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList9['target_date_before']) && $activitiesList9['target_date']!=$activitiesList9['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList9['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList9['target_date_before'])); }?></span><?php } ?>
    
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile9=mysqli_query("SELECT * FROM  tbl_activities9 where user_id=".$_POST['user_id']." AND main_id=".$dateRow9['main_id']."");
$activitiesFileList9=mysqli_fetch_array($activitiesFile9);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList9['file'])){?><a href="upload/<?=$activitiesFileList9['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
  
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(6, $dataList)) {?>
<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"> 
<?php
$queryByDate10=mysqli_query("SELECT * FROM tbl_activities10 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow10=mysqli_fetch_array($queryByDate10)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities10=mysqli_query("SELECT * FROM  tbl_activities10 where user_id=".$_POST['user_id']." AND main_id=".$dateRow10['main_id']."");
while($activitiesList10=mysqli_fetch_array($activities10)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList10['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList10['rd_id']?>  <?php if($activitiesList10['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities10&id=<?=$activitiesList10['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList10['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList10['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
  <br>
  
  Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList10['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList10['target_date_before']) && $activitiesList10['target_date']!=$activitiesList10['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList10['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList10['target_date_before'])); }?></span><?php } ?>  
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile10=mysqli_query("SELECT * FROM  tbl_activities10 where user_id=".$_POST['user_id']." AND main_id=".$dateRow10['main_id']."");
$activitiesFileList10=mysqli_fetch_array($activitiesFile10);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList10['file'])){?><a href="upload/<?=$activitiesFileList10['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
   
    
  </tr>
</table>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(1, $dataList)) {?>
<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate11=mysqli_query("SELECT * FROM tbl_activities11 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow11=mysqli_fetch_array($queryByDate11)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities11=mysqli_query("SELECT * FROM  tbl_activities11 where user_id=".$_POST['user_id']." AND main_id=".$dateRow11['main_id']."");
while($activitiesList11=mysqli_fetch_array($activities11)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList11['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList11['rd_id']?>  <?php if($activitiesList11['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities11&id=<?=$activitiesList11['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList11['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList11['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?> <br>
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList11['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList11['target_date_before']) && $activitiesList11['target_date']!=$activitiesList11['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList11['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList11['target_date_before'])); }?></span><?php } ?></td>
    
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile11=mysqli_query("SELECT * FROM  tbl_activities11 where user_id=".$_POST['user_id']." AND main_id=".$dateRow11['main_id']."");
$activitiesFileList11=mysqli_fetch_array($activitiesFile11);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList11['file'])){?><a href="upload/<?=$activitiesFileList11['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(2, $dataList)) {?>
<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5">
<?php
$queryByDate12=mysqli_query("SELECT * FROM tbl_activities12 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow12=mysqli_fetch_array($queryByDate12)){
?> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities12=mysqli_query("SELECT * FROM  tbl_activities12 where user_id=".$_POST['user_id']." AND main_id=".$dateRow12['main_id']."");
while($activitiesList12=mysqli_fetch_array($activities12)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList12['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList12['rd_id']?>  <?php if($activitiesList12['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities12&id=<?=$activitiesList12['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
  
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList12['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList12['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
      <br>
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList12['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList12['target_date_before']) && $activitiesList12['target_date']!=$activitiesList13['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList12['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList12['target_date_before'])); }?></span><?php } ?>
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile12=mysqli_query("SELECT * FROM  tbl_activities12 where user_id=".$_POST['user_id']." AND main_id=".$dateRow12['main_id']."");
$activitiesFileList12=mysqli_fetch_array($activitiesFile12);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList12['file'])){?><a href="upload/<?=$activitiesFileList12['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
   
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(14, $dataList)) {?>
<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> 
<?php
$queryByDate13=mysqli_query("SELECT * FROM tbl_activities13 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow13=mysqli_fetch_array($queryByDate13)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities13=mysqli_query("SELECT * FROM  tbl_activities13 where user_id=".$_POST['user_id']." AND main_id=".$dateRow13['main_id']."");
while($activitiesList13=mysqli_fetch_array($activities13)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList13['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList13['rd_id']?>  <?php if($activitiesList13['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities13&id=<?=$activitiesList13['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    
    
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList13['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList13['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
    <br>
    
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList13['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList13['target_date_before']) && $activitiesList13['target_date']!=$activitiesList13['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList13['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList13['target_date_before'])); }?></span><?php } ?>
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile13=mysqli_query("SELECT * FROM  tbl_activities13 where user_id=".$_POST['user_id']." AND main_id=".$dateRow13['main_id']."");
$activitiesFileList13=mysqli_fetch_array($activitiesFile13);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList13['file'])){?><a href="upload/<?=$activitiesFileList13['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
    
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(13, $dataList)) {?>
<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> 
<?php
$queryByDate14=mysqli_query("SELECT * FROM tbl_activities14 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow14=mysqli_fetch_array($queryByDate14)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities14=mysqli_query("SELECT * FROM  tbl_activities14 where user_id=".$_POST['user_id']." AND main_id=".$dateRow14['main_id']."");
while($activitiesList14=mysqli_fetch_array($activities14)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList14['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList14['rd_id']?>  <?php if($activitiesList14['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities14&id=<?=$activitiesList14['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
   
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList14['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList14['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
     <br>
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList14['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList14['target_date_before']) && $activitiesList14['target_date']!=$activitiesList14['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList14['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList14['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile14=mysqli_query("SELECT * FROM  tbl_activities14 where user_id=".$_POST['user_id']." AND main_id=".$dateRow14['main_id']."");
$activitiesFileList14=mysqli_fetch_array($activitiesFile14);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList14['file'])){?><a href="upload/<?=$activitiesFileList14['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
  
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(7, $dataList)) {?>

<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> 
<?php
$queryByDate15=mysqli_query("SELECT * FROM tbl_activities15 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow15=mysqli_fetch_array($queryByDate15)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities15=mysqli_query("SELECT * FROM  tbl_activities15 where user_id=".$_POST['user_id']." AND main_id=".$dateRow15['main_id']."");
while($activitiesList15=mysqli_fetch_array($activities15)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList15['Unit_Name']?>  </td>
    
    <td width="71%"><?=$activitiesList15['rd_id']?> <?php if($activitiesList15['final_Status']==2){?>
    
    <span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities15&id=<?=$activitiesList15['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
    
   
    
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span><?php } if($activitiesList15['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList15['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
     <br>
    Target Date : <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList15['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList15['target_date_before']) && $activitiesList15['target_date']!=$activitiesList15['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList15['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList15['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile15=mysqli_query("SELECT * FROM  tbl_activities15 where user_id=".$_POST['user_id']." AND main_id=".$dateRow15['main_id']."");
$activitiesFileList15=mysqli_fetch_array($activitiesFile15);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList15['file'])){?><a href="upload/<?=$activitiesFileList15['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
    
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(5, $dataList)) {?>
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate16=mysqli_query("SELECT * FROM tbl_activities16 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow16=mysqli_fetch_array($queryByDate16)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities16=mysqli_query("SELECT * FROM  tbl_activities16 where user_id=".$_POST['user_id']." AND main_id=".$dateRow16['main_id']."");
while($activitiesList16=mysqli_fetch_array($activities16)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList16['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList16['rd_id']?>  <?php if($activitiesList16['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities16&id=<?=$activitiesList16['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
  
    
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList16['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList16['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
     <br>
    Target Date: <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList16['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList16['target_date_before']) && $activitiesList16['target_date']!=$activitiesList16['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList16['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList16['target_date_before'])); }?></span><?php } ?> 
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile16=mysqli_query("SELECT * FROM  tbl_activities16 where user_id=".$_POST['user_id']." AND main_id=".$dateRow16['main_id']."");
$activitiesFileList16=mysqli_fetch_array($activitiesFile16);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList16['file'])){?><a href="upload/<?=$activitiesFileList16['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
    
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>
<?php } ?>
<?php if (in_array(4, $dataList)) {?>
<tr>

<td valign="top">Inspections for Ganga complaince verification </td>


<td colspan="5"> 
<?php
$queryByDate17=mysqli_query("SELECT * FROM tbl_activities17 where user_id=".$_POST['user_id']." AND YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." GROUP BY main_id ORDER BY main_id DESC");  

while($dateRow17=mysqli_fetch_array($queryByDate17)){
?>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities17=mysqli_query("SELECT * FROM  tbl_activities17 where user_id=".$_POST['user_id']." AND main_id=".$dateRow17['main_id']."");
while($activitiesList17=mysqli_fetch_array($activities17)){
?>

  <tr>
  
    <td width="29%"><?=$activitiesList17['Unit_Name']?></td>
    
    <td width="71%"><?=$activitiesList17['rd_id']?>  <?php if($activitiesList17['final_Status']==2){?><span style="color:#006600; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i><span style="color:#006600; float:right; text-align:right; cursor:pointer;" onClick="window.open('Completed.php?eid=activities17&id=<?=$activitiesList17['id']?>','','width=700,height=300,scrollbar=0,menubar=0');">
    
   
    
    
    <i class="fa fa-fw fa-long-arrow-right"></i>Completed</span></span><?php } if($activitiesList17['final_Status']==1) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at RD</span> <?php }  if($activitiesList17['final_Status']==0) {?><span style="color:#FF0000; float:right; text-align:right;"><i class="fa fa-fw fa-long-arrow-right"></i>Pending at MS</span> <?php }?>
    
     <br>
    
    Target Date <span style="color:#237a1a; font-size:14px; font-weight:600;" ><?=date("d-M-Y", strtotime($activitiesList17['target_date']))?></span>&nbsp;&nbsp;&nbsp; <?php if(!empty($activitiesList17['target_date_before']) && $activitiesList17['target_date']!=$activitiesList17['target_date_before']){?> <span style="color:#FF0000; font-size:14px; font-weight:600; text-decoration:line-through;" ><?php if($activitiesList17['target_date_before']=="1970-01-01"){ echo "";} else { echo date("d-M-Y", strtotime($activitiesList17['target_date_before'])); }?></span><?php } ?>
    
    </td>
    
  </tr>
  <?php $i++; } ?>
</table>
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$activitiesFile17=mysqli_query("SELECT * FROM  tbl_activities17 where user_id=".$_POST['user_id']." AND main_id=".$dateRow17['main_id']."");
$activitiesFileList17=mysqli_fetch_array($activitiesFile17);
?>
  <tr>
    <td colspan="2">Upload Document : <?php if(isset($activitiesFileList17['file'])){?><a href="upload/<?=$activitiesFileList17['file']?>" target="_blank">View File</a><?php } else { echo"No File"; } ?></td>
    
   
    
  </tr>
</table>
 <?php } ?>
</td>
</tr>

 <?php } ?>
 
   
</table>

 
 

</div></div>
<?php
 
}
?>  
  
      
       
      
 

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
