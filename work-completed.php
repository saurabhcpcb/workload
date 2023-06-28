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

<div class="box box-primary">
<div class="box-body">

<table width="100%" border="1">

<tr>
<td valign="top" colspan="6"><h3 style="color:#d60c0c;  margin-top:10px;"><i class="fa fa-fw fa-long-arrow-right"></i>Work Allotted For <?=$_GET['rd']?>, Month: <?=$_GET['month']?>, Priority: <?=$_GET['activities']?></h3></td>
</tr>
<tr>
<td valign="top" width="11%" style="background:#eeeff0;"><strong>Division</strong></td>
<td valign="top" width="23%" style="background:#eeeff0;"><strong>Units Name</strong></td>
<td valign="top" width="11%" style="background:#eeeff0;"><strong>Target Date</strong></td>
<td valign="top" width="11%" style="background:#eeeff0;"><strong>Status</strong></td>
<td valign="top" width="15%" style="background:#eeeff0;"><strong>Assigned on</strong></td>
<td valign="top" width="44%" style="background:#eeeff0;"><strong>Comment</strong></td>
</tr>


 
<?php
$proposedQuery0=mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed0=mysqli_fetch_array($proposedQuery0,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed0['activities_name']?> </h4></td></tr>  
 <?php 
$i=0;

$proposedQuery0=mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed0['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2");

?>
<?php

while ($activities0=mysqli_fetch_array($proposedQuery0,mysqli_ASSOC)){
 
?>
<tr>


<?php
$userQuery0=mysqli_query("select * from tbl_user where id=".$activities0['user_id']."");
$userData0=mysqli_fetch_array($userQuery0);
?>
<td valign="top" align="left"> <?=$userData0['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities0['Unit_Name']?> 
 <br> 
<?php if(!empty($activities0['file'])){ ?><a href="upload/<?=$activities0['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities0['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities0['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities0['Proposed_on']));} ?></td>
<td valign="top"><?=$activities0['Comment'];?></td>
</tr>
<?php 

}
}

?>

<?php
$proposedQuery1=mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed1=mysqli_fetch_array($proposedQuery1,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed1['activities_name']?> </h4></td></tr>  
<?php
$proposedQuery1=mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed1['activities_name']."' AND final_Status =2");


while ($activities1=mysqli_fetch_array($proposedQuery1,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery1=mysqli_query("select * from tbl_user where id=".$activities1['user_id']."");
$userData1=mysqli_fetch_array($userQuery1);
?>
<td valign="top" align="left"> <?=$userData1['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities1['Unit_Name']?> 
 <br> 
<?php if(!empty($activities1['file'])){ ?><a href="upload/<?=$activities1['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities1['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities1['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities1['Proposed_on']));} ?></td>
<td valign="top"><?=$activities1['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery2=mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed2=mysqli_fetch_array($proposedQuery2,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed2['activities_name']?> </h4></td></tr> 
<?php
$proposedQuery2=mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed2['activities_name']."' AND final_Status =2");


while ($activities2=mysqli_fetch_array($proposedQuery2,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery2=mysqli_query("select * from tbl_user where id=".$activities2['user_id']."");
$userData2=mysqli_fetch_array($userQuery2);
?>
<td valign="top" align="left"> <?=$userData2['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities2['Unit_Name']?> 
 <br> 
<?php if(!empty($activities2['file'])){ ?><a href="upload/<?=$activities2['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities2['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities2['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities2['Proposed_on']));} ?></td>
<td valign="top"><?=$activities2['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery3=mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed3=mysqli_fetch_array($proposedQuery3,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed3['activities_name']?> </h4></td></tr> 

<?php
$proposedQuery3=mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed3['activities_name']."' AND final_Status =2");


while ($activities3=mysqli_fetch_array($proposedQuery3,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery3=mysqli_query("select * from tbl_user where id=".$activities3['user_id']."");
$userData3=mysqli_fetch_array($userQuery3);
?>
<td valign="top" align="left"> <?=$userData3['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities3['Unit_Name']?> 
 <br> 
<?php if(!empty($activities3['file'])){ ?><a href="upload/<?=$activities3['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities3['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities3['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities3['Proposed_on']));} ?></td>
<td valign="top"><?=$activities3['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery4=mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed4=mysqli_fetch_array($proposedQuery4,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed4['activities_name']?> </h4></td></tr> 
<?php
$proposedQuery4=mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed4['activities_name']."' AND final_Status =2");


while ($activities4=mysqli_fetch_array($proposedQuery4,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery4=mysqli_query("select * from tbl_user where id=".$activities4['user_id']."");
$userData4=mysqli_fetch_array($userQuery4);
?>
<td valign="top" align="left"> <?=$userData4['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities4['Unit_Name']?> 
 <br> 
<?php if(!empty($activities4['file'])){ ?><a href="upload/<?=$activities4['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities4['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities4['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities4['Proposed_on']));} ?></td>
<td valign="top"><?=$activities4['Comment'];?></td>
</tr>

<?php } }?>
 
 
 
<?php
$proposedQuery5=mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed5=mysqli_fetch_array($proposedQuery5,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed5['activities_name']?> </h4></td></tr>  
<?php
$proposedQuery5=mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed5['activities_name']."' AND final_Status =2");


while ($activities5=mysqli_fetch_array($proposedQuery5,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery5=mysqli_query("select * from tbl_user where id=".$activities5['user_id']."");
$userData5=mysqli_fetch_array($userQuery5);
?>
<td valign="top" align="left"> <?=$userData5['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities5['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities5['file'])){ ?><a href="upload/<?=$activities5['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities5['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities5['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities5['Proposed_on']));} ?></td>
<td valign="top"><?=$activities5['Comment'];?></td>
</tr>
<?php } }?>




<?php
$proposedQuery6=mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed6=mysqli_fetch_array($proposedQuery6,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed6['activities_name']?> </h4></td></tr>  
<?php
$proposedQuery6=mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed6['activities_name']."' AND final_Status =2");


while ($activities6=mysqli_fetch_array($proposedQuery6,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery6=mysqli_query("select * from tbl_user where id=".$activities6['user_id']."");
$userData6=mysqli_fetch_array($userQuery6);
?>
<td valign="top" align="left"> <?=$userData6['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities6['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities6['file'])){ ?><a href="upload/<?=$activities6['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities6['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities6['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities6['Proposed_on']));} ?></td>
<td valign="top"><?=$activities6['Comment'];?></td>
</tr>
<?php  } }?>



<?php
$proposedQuery7=mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed7=mysqli_fetch_array($proposedQuery7,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed7['activities_name']?> </h4></td></tr> 
<?php
$proposedQuery7=mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed7['activities_name']."' AND final_Status =2");


while ($activities7=mysqli_fetch_array($proposedQuery7,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery7=mysqli_query("select * from tbl_user where id=".$activities7['user_id']."");
$userData7=mysqli_fetch_array($userQuery7);
?>
<td valign="top" align="left"> <?=$userData7['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities7['Unit_Name']?> 
 <br> 
<?php if(!empty($activities7['file'])){ ?><a href="upload/<?=$activities7['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities7['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities7['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities7['Proposed_on']));} ?></td>
<td valign="top"><?=$activities7['Comment'];?></td>
</tr>
<?php } }?>



<?php
$proposedQuery8=mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed8=mysqli_fetch_array($proposedQuery8,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed8['activities_name']?> </h4></td></tr> 
<?php
$proposedQuery8=mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed8['activities_name']."' AND final_Status =2");

while ($activities8=mysqli_fetch_array($proposedQuery8,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery8=mysqli_query("select * from tbl_user where id=".$activities8['user_id']."");
$userData8=mysqli_fetch_array($userQuery8);
?>
<td valign="top" align="left"> <?=$userData8['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities8['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities8['file'])){ ?><a href="upload/<?=$activities8['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities8['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities8['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities8['Proposed_on']));} ?></td>
<td valign="top"><?=$activities8['Comment'];?></td>
</tr>
<?php } }?>




<?php
$proposedQuery9=mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed9=mysqli_fetch_array($proposedQuery9,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed9['activities_name']?> </h4></td></tr> 
<?php

$proposedQuery9=mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND activities_name='".$proposed9['activities_name']."' AND final_Status =2");


while ($activities9=mysqli_fetch_array($proposedQuery9,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery9=mysqli_query("select * from tbl_user where id=".$activities9['user_id']."");
$userData9=mysqli_fetch_array($userQuery9);
?>
<td valign="top" align="left"> <?=$userData9['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities9['Unit_Name']?> 
 <br> 
<?php if(!empty($activities9['file'])){ ?><a href="upload/<?=$activities9['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities9['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities9['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities9['Proposed_on']));} ?></td>
<td valign="top"><?=$activities9['Comment'];?></td>
</tr>
<?php }}?>



<?php
$proposedQuery10=mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed10=mysqli_fetch_array($proposedQuery10,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed10['activities_name']?> </h4></td></tr> 

<?php
$proposedQuery10=mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed10['activities_name']."' AND final_Status =2");


while ($activities10=mysqli_fetch_array($proposedQuery10,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery10=mysqli_query("select * from tbl_user where id=".$activities10['user_id']."");
$userData10=mysqli_fetch_array($userQuery10);
?>
<td valign="top" align="left"> <?=$userData10['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities10['Unit_Name']?> 
 <br> 
<?php if(!empty($activities10['file'])){ ?><a href="upload/<?=$activities10['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities10['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities10['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities10['Proposed_on']));} ?></td>
<td valign="top"><?=$activities10['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery11=mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed11=mysqli_fetch_array($proposedQuery11,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed11['activities_name']?> </h4></td></tr> 

<?php
$proposedQuery11=mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed11['activities_name']."' AND final_Status =2");


while ($activities11=mysqli_fetch_array($proposedQuery11,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery11=mysqli_query("select * from tbl_user where id=".$activities11['user_id']."");
$userData11=mysqli_fetch_array($userQuery11);
?>
<td valign="top" align="left"> <?=$userData11['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities11['Unit_Name']?> 
 <br> 
<?php if(!empty($activities11['file'])){ ?><a href="upload/<?=$activities11['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities11['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities11['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities11['Proposed_on']));} ?></td>
<td valign="top"><?=$activities11['Comment'];?></td>
</tr>
<?php } }?>





<?php
$proposedQuery12=mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed12=mysqli_fetch_array($proposedQuery12,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed12['activities_name']?> </h4></td></tr> 
<?php
$proposedQuery12=mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND activities_name='".$proposed12['activities_name']."' AND final_Status =2");

while ($activities12=mysqli_fetch_array($proposedQuery12,mysqli_ASSOC)){
 
?>
<tr>
<?php



$userQuery12=mysqli_query("select * from tbl_user where id=".$activities12['user_id']."");
$userData12=mysqli_fetch_array($userQuery12);
?>
<td valign="top" align="left"> <?=$userData12['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities12['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities12['file'])){ ?><a href="upload/<?=$activities12['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities12['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities12['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities12['Proposed_on']));} ?></td>
<td valign="top"><?=$activities12['Comment'];?></td>
</tr>
<?php } }?>



<?php
$proposedQuery13=mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed13=mysqli_fetch_array($proposedQuery13,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed13['activities_name']?> </h4></td></tr> 


<?php
$proposedQuery13=mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed13['activities_name']."' AND final_Status =2");


while ($activities13=mysqli_fetch_array($proposedQuery13,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery13=mysqli_query("select * from tbl_user where id=".$activities13['user_id']."");
$userData13=mysqli_fetch_array($userQuery13);
?>
<td valign="top" align="left"> <?=$userData13['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities13['Unit_Name']?> 
 <br> 
<?php if(!empty($activities13['file'])){ ?><a href="upload/<?=$activities13['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities13['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities13['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities13['Proposed_on']));} ?></td>
<td valign="top"><?=$activities13['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery14=mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed14=mysqli_fetch_array($proposedQuery14,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed14['activities_name']?> </h4></td></tr> 


<?php
$proposedQuery14=mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed14['activities_name']."' AND final_Status =2");


while ($activities14=mysqli_fetch_array($proposedQuery14,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery14=mysqli_query("select * from tbl_user where id=".$activities14['user_id']."");
$userData14=mysqli_fetch_array($userQuery14);
?>
<td valign="top" align="left"> <?=$userData14['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities14['Unit_Name']?> 
 <br> 
<?php if(!empty($activities14['file'])){ ?><a href="upload/<?=$activities14['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities14['target_date']))?></td>
<td valign="top" valign="top">Completed</td>
<td valign="top"><?php if($activities14['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities14['Proposed_on']));} ?></td>
<td valign="top"><?=$activities14['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery15=mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed15=mysqli_fetch_array($proposedQuery15,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed15['activities_name']?> </h4></td></tr> 




<?php
$proposedQuery15=mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed15['activities_name']."'  AND final_Status =2");


while ($activities15=mysqli_fetch_array($proposedQuery15,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery15=mysqli_query("select * from tbl_user where id=".$activities15['user_id']."");
$userData15=mysqli_fetch_array($userQuery15);
?>
<td valign="top" align="left"> <?=$userData15['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities15['Unit_Name']?> 
 <br> 
<?php if(!empty($activities15['file'])){ ?><a href="upload/<?=$activities15['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities15['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities15['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities15['Proposed_on']));} ?></td>
<td valign="top"><?=$activities15['Comment'];?></td>
</tr>
<?php } }?>


<?php
$proposedQuery16=mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed16=mysqli_fetch_array($proposedQuery16,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed16['activities_name']?> </h4></td></tr> 




<?php
$proposedQuery16=mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND 
priority='".$_GET['activities']."' AND activities_name='".$proposed16['activities_name']."' AND final_Status =2");

while ($activities16=mysqli_fetch_array($proposedQuery16,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery16=mysqli_query("select * from tbl_user where id=".$activities16['user_id']."");
$userData16=mysqli_fetch_array($userQuery16);
?>
<td valign="top" align="left"> <?=$userData16['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities16['Unit_Name']?> 
 <br> 
<?php if(!empty($activities16['file'])){ ?><a href="upload/<?=$activities16['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities16['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities16['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities16['Proposed_on']));} ?></td>
<td valign="top"><?=$activities16['Comment'];?></td>
</tr>
<?php } }?>




<?php
$proposedQuery17=mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status =2  GROUP BY  activities_name");
while ($proposed17=mysqli_fetch_array($proposedQuery17,mysqli_ASSOC)){
?>

<tr><td valign="top" colspan="6"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed17['activities_name']?> </h4></td></tr> 



<?php

$proposedQuery17=mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND activities_name='".$proposed17['activities_name']."' AND final_Status =2");
while ($activities17=mysqli_fetch_array($proposedQuery17,mysqli_ASSOC)){
 
?>
<tr>
<?php
$userQuery17=mysqli_query("select * from tbl_user where id=".$activities0['user_id']."");
$userData17=mysqli_fetch_array($userQuery17);
?>
<td valign="top" align="left"> <?=$userData17['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities17['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities17['file'])){ ?><a href="upload/<?=$activities17['file']?>" target="_blank">View File</a> <?php }?>
</td>
<td valign="top"><?=date("d-m-Y",strtotime($activities17['target_date']))?></td>
<td valign="top">Completed</td>
<td valign="top"><?php if($activities17['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities17['Proposed_on']));} ?></td>
<td valign="top"><?=$activities17['Comment'];?></td>
</tr>
<?php  }}?>  


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
