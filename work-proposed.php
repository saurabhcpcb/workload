<?php
ini_set('display_errors','0');
include('includes/connect.php');
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');


if($_SESSION['userId']['user_type']!="MS")
{
header('location:index.php');
}

?>



<?php
$month= date("m", strtotime($_GET['month']));
$year= date("Y", strtotime($_GET['month']));

if(isset($_POST['submit']) && $_POST['submit']=="Final Allotment")
{
if(count($_POST['activities0'])>0 || count($_POST['activities1'])>0 || count($_POST['activities2'])>0  || count($_POST['activities3'])>0 || count($_POST['activities4'])>0 || count($_POST['activities5'])>0  || count($_POST['activities6'])>0 || count($_POST['activities7'])>0 || count($_POST['activities8'])>0 || count($_POST['activities9'])>0 || count($_POST['activities10'])>0 || count($_POST['activities11'])>0 || count($_POST['activities12'])>0 || count($_POST['activities13'])>0 || count($_POST['activities14'])>0 || count($_POST['activities15'])>0 || count($_POST['activities16'])>0 || count($_POST['activities17'])>0  ){

/*=================================Start Activities0==================================*/
if(isset($_POST['activities0']) && $_POST['activities0']!="")
{

$activities0=$_POST['activities0'] ;
$countActivities0 = count($activities0); 
 
for($i=0; $i<$countActivities0; $i++)
{
if(!empty($_POST['activities0'][$i])){

$updateQuery0="UPDATE tbl_activities0 SET status=1,final_Status=1, priority='".$_POST['Priority0'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date0'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor0'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId0'][$i]."'"; 
mysql_query($updateQuery0); 
}
}

}
/*====================================End Activities0===================================*/


/*=================================Start Activities1==================================*/
if(isset($_POST['activities1']) && $_POST['activities1']!="")
{

$activities1=$_POST['activities1'] ;
$countActivities1 = count($activities1); 
 
for($i=0; $i<$countActivities1; $i++)
{
if(!empty($_POST['activities1'][$i])){

$updateQuery1="UPDATE tbl_activities1 SET status=1,final_Status=1, priority='".$_POST['Priority1'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date1'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor1'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId1'][$i]."'"; 
mysql_query($updateQuery1); 
}
}

}
/*====================================End Activities1===================================*/


/*=================================Start Activities2==================================*/
if(isset($_POST['activities2']) && $_POST['activities2']!="")
{

$activities2=$_POST['activities2'] ;
$countActivities2 = count($activities2); 
 
for($i=0; $i<$countActivities2; $i++)
{
if(!empty($_POST['activities2'][$i])){

$updateQuery2="UPDATE tbl_activities2 SET status=1,final_Status=1, priority='".$_POST['Priority2'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date2'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor2'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId2'][$i]."'"; 
mysql_query($updateQuery2); 
}
}

}
/*====================================End Activities2===================================*/


/*=================================Start Activities3==================================*/
if(isset($_POST['activities3']) && $_POST['activities3']!="")
{

$activities3=$_POST['activities3'] ;
$countActivities3 = count($activities3); 
 
for($i=0; $i<$countActivities3; $i++)
{
if(!empty($_POST['activities3'][$i])){

$updateQuery3="UPDATE tbl_activities3 SET status=1,final_Status=1, priority='".$_POST['Priority3'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date3'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor3'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId3'][$i]."'"; 
mysql_query($updateQuery3); 
}
}

}
/*====================================End Activities3===================================*/



 
/*=================================Start Activities4==================================*/
if(isset($_POST['activities4']) && $_POST['activities4']!="")
{

$activities4=$_POST['activities4'] ;
$countActivities4 = count($activities4); 
 
for($i=0; $i<$countActivities4; $i++)
{
if(!empty($_POST['activities4'][$i])){

$updateQuery4="UPDATE tbl_activities4 SET status=1,final_Status=1, priority='".$_POST['Priority4'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date4'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor4'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId4'][$i]."'"; 
mysql_query($updateQuery4); 
}
}

}
/*====================================End Activities4===================================*/

/*=================================Start Activities5==================================*/
if(isset($_POST['activities5']) && $_POST['activities5']!="")
{

$activities5=$_POST['activities5'] ;
$countActivities5 = count($activities5); 
 
for($i=0; $i<$countActivities5; $i++)
{
if(!empty($_POST['activities5'][$i])){

$updateQuery5="UPDATE tbl_activities5 SET status=1,final_Status=1, priority='".$_POST['Priority5'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date5'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor5'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId5'][$i]."'"; 
mysql_query($updateQuery5); 
}
}

}
/*====================================End Activities5===================================*/


/*=================================Start Activities6==================================*/
if(isset($_POST['activities6']) && $_POST['activities6']!="")
{

$activities6=$_POST['activities6'] ;
$countActivities6 = count($activities6); 
 
for($i=0; $i<$countActivities6; $i++)
{
if(!empty($_POST['activities6'][$i])){

$updateQuery6="UPDATE tbl_activities6 SET status=1,final_Status=1, priority='".$_POST['Priority6'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date6'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor6'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId6'][$i]."'"; 
mysql_query($updateQuery6); 
}
}

}
/*====================================End Activities6===================================*/


/*=================================Start Activities7==================================*/
if(isset($_POST['activities7']) && $_POST['activities7']!="")
{

$activities7=$_POST['activities7'] ;
$countActivities7 = count($activities7); 
 
for($i=0; $i<$countActivities7; $i++)
{
if(!empty($_POST['activities7'][$i])){

$updateQuery7="UPDATE tbl_activities7 SET status=1,final_Status=1, priority='".$_POST['Priority7'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date7'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor7'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId7'][$i]."'"; 
mysql_query($updateQuery7); 
}
}

}
/*====================================End Activities7===================================*/




/*=================================Start Activities8==================================*/
if(isset($_POST['activities8']) && $_POST['activities8']!="")
{

$activities8=$_POST['activities8'] ;
$countActivities8 = count($activities8); 
 
for($i=0; $i<$countActivities8; $i++)
{
if(!empty($_POST['activities8'][$i])){

$updateQuery8="UPDATE tbl_activities8 SET status=1,final_Status=1, priority='".$_POST['Priority8'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date8'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor8'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId8'][$i]."'"; 
mysql_query($updateQuery8); 
}
}

}
/*====================================End Activities8===================================*/




/*=================================Start Activities9==================================*/
if(isset($_POST['activities9']) && $_POST['activities9']!="")
{

$activities9=$_POST['activities9'] ;
$countActivities9 = count($activities9); 
 
for($i=0; $i<$countActivities9; $i++)
{
if(!empty($_POST['activities9'][$i])){

$updateQuery9="UPDATE tbl_activities9 SET status=1,final_Status=1, priority='".$_POST['Priority9'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date9'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor9'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId9'][$i]."'"; 
mysql_query($updateQuery9); 
}
}

}
/*====================================End Activities9===================================*/





/*=================================Start Activities10==================================*/
if(isset($_POST['activities10']) && $_POST['activities10']!="")
{

$activities10=$_POST['activities10'] ;
$countActivities10 = count($activities10); 
 
for($i=0; $i<$countActivities10; $i++)
{
if(!empty($_POST['activities10'][$i])){

$updateQuery10="UPDATE tbl_activities10 SET status=1,final_Status=1, priority='".$_POST['Priority10'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date10'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor10'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId10'][$i]."'"; 
mysql_query($updateQuery10); 
}
}

}
/*====================================End Activities10===================================*/





/*=================================Start Activities11==================================*/
if(isset($_POST['activities11']) && $_POST['activities11']!="")
{

$activities11=$_POST['activities11'] ;
$countActivities11 = count($activities11); 
 
for($i=0; $i<$countActivities11; $i++)
{
if(!empty($_POST['activities11'][$i])){

$updateQuery11="UPDATE tbl_activities11 SET status=1,final_Status=1, priority='".$_POST['Priority11'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date11'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor11'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId11'][$i]."'"; 
mysql_query($updateQuery11); 
}
}

}
/*====================================End Activities11===================================*/




/*=================================Start Activities12==================================*/
if(isset($_POST['activities12']) && $_POST['activities12']!="")
{

$activities12=$_POST['activities12'] ;
$countActivities12 = count($activities12); 
 
for($i=0; $i<$countActivities12; $i++)
{
if(!empty($_POST['activities12'][$i])){

$updateQuery12="UPDATE tbl_activities12 SET status=1,final_Status=1, priority='".$_POST['Priority12'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date12'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor12'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId12'][$i]."'"; 
mysql_query($updateQuery12); 
}
}

}
/*====================================End Activities12===================================*/




/*=================================Start Activities13==================================*/
if(isset($_POST['activities13']) && $_POST['activities13']!="")
{

$activities13=$_POST['activities13'] ;
$countActivities13 = count($activities13); 
 
for($i=0; $i<$countActivities13; $i++)
{
if(!empty($_POST['activities13'][$i])){

$updateQuery13="UPDATE tbl_activities13 SET status=1,final_Status=1, priority='".$_POST['Priority13'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date13'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor13'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId13'][$i]."'"; 
mysql_query($updateQuery13); 
}
}

}
/*====================================End Activities13===================================*/




/*=================================Start Activities14==================================*/
if(isset($_POST['activities14']) && $_POST['activities14']!="")
{

$activities14=$_POST['activities14'] ;
$countActivities14 = count($activities14); 
 
for($i=0; $i<$countActivities14; $i++)
{
if(!empty($_POST['activities14'][$i])){

$updateQuery14="UPDATE tbl_activities14 SET status=1,final_Status=1, priority='".$_POST['Priority14'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date14'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor14'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId14'][$i]."'"; 
mysql_query($updateQuery14); 
}
}

}
/*====================================End Activities14===================================*/




/*=================================Start Activities15==================================*/
if(isset($_POST['activities15']) && $_POST['activities15']!="")
{

$activities15=$_POST['activities15'] ;
$countActivities15 = count($activities15); 
 
for($i=0; $i<$countActivities15; $i++)
{
if(!empty($_POST['activities15'][$i])){

$updateQuery15="UPDATE tbl_activities15 SET status=1,final_Status=1, priority='".$_POST['Priority15'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date15'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor15'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId15'][$i]."'"; 
mysql_query($updateQuery15); 
}
}

}
/*====================================End Activities15===================================*/




/*=================================Start Activities16==================================*/
if(isset($_POST['activities16']) && $_POST['activities16']!="")
{

$activities16=$_POST['activities16'] ;
$countActivities16 = count($activities16); 
 
for($i=0; $i<$countActivities16; $i++)
{
if(!empty($_POST['activities16'][$i])){

$updateQuery16="UPDATE tbl_activities16 SET status=1,final_Status=1, priority='".$_POST['Priority16'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date16'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor16'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId16'][$i]."'"; 
mysql_query($updateQuery16); 
}
}

}
/*====================================End Activities16===================================*/




/*=================================Start Activities17==================================*/
if(isset($_POST['activities17']) && $_POST['activities17']!="")
{

$activities17=$_POST['activities17'] ;
$countActivities17 = count($activities17); 
 
for($i=0; $i<$countActivities17; $i++)
{
if(!empty($_POST['activities17'][$i])){

$updateQuery17="UPDATE tbl_activities17 SET status=1,final_Status=1, priority='".$_POST['Priority17'][$i]."',target_date='".date("Y-m-d", strtotime($_POST['target_date17'][$i]))."',target_date_before='".date("Y-m-d", strtotime($_POST['target_dateBefor17'][$i]))."',target_date_status=1,proposed_date_by_ms='".date("Y-m-d")."' WHERE id ='".$_POST['activitiesId17'][$i]."'"; 
mysql_query($updateQuery17); 
}
}

}
/*====================================End Activities17===================================*/
?>
<script type="text/javascript">
alert('Alloted Successfully.');
window.opener.location.reload();

window.close();
</script>
<?php

}

else
{

?>
<script type="text/javascript">
alert('Please select atleast one activity.');
window.opener.location.reload();
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
 <script src="js/date.js"></script>
  
  <script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
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

<div class="box box-primary">
<form action="" method="post" enctype="multipart/form-data" name="proposedForm">
<div class="box-body">

<table width="100%" border="1">

<tr>
<td colspan="8"><h3 style="color:#d60c0c;  margin-top:10px;"><i class="fa fa-fw fa-long-arrow-right"></i>Work Proposed For <?=$_GET['rd']?>, Month: <?=$_GET['month']?>, Priority: <?=$_GET['activities']?></h3></td>
</tr>
<tr>
<td width="4%" style="background:#eeeff0;"><strong><input name="" type="checkbox" id="select_all" value=""></strong></td>

<td width="10%" style="background:#eeeff0;"><strong>Division</strong></td>
<td width="38%" style="background:#eeeff0;"><strong>Units Name</strong></td>
<td width="12%" style="background:#eeeff0;"><strong>Target Date</strong></td>
<td width="9%" style="background:#eeeff0;"><strong>Status</strong></td>
<td width="12%" style="background:#eeeff0;"><strong>Priority</strong></td>
<td width="13%" style="background:#eeeff0;"><strong>Assigned on</strong></td>
</tr>


 
 
<?php
$proposedQuery0=mysql_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status=0  GROUP BY  activities_name");
while ($proposed0=mysql_fetch_array($proposedQuery0,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed0['activities_name']?> </h4></td></tr> 
<?php
$i=1;
$proposedQuery0=mysql_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed0['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities0=mysql_fetch_array($proposedQuery0,MYSQL_ASSOC)){


$userQuery1=mysql_query("select * from tbl_user where id=".$activities0['user_id']."");

$userData1=mysql_fetch_array($userQuery1);
 
?>
 
<input name="target_dateBefor0[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities0['target_date']))?>">
<input name="table0" value="activities0" type="hidden">
<input name="activitiesId0[]" value="<?=$activities0['id']?>" type="hidden">
<tr>

<?php
$userQuery0=mysql_query("select * from tbl_user where id=".$activities0['user_id']."");
$userData0=mysql_fetch_array($userQuery0);
?>
<td><input name="activities0[]" type="checkbox"  value="<?=$activities0['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData0['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities0['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities0['file'])){ ?><a href="upload/<?=$activities0['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date0[]" type="text" value="<?=date("d-m-Y",strtotime($activities0['target_date']))?>" class="form-control"  id="datepicker<?=$i?>"></td>
<td><?php if($activities0['final_Status']==0){ echo "Pending";}?></td>


<td><select name="Priority0[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities0['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities0['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities0['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities0['priority']=="P4")?'selected':''?>>P4</option>
</select></td>

<td><?php if($activities0['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities0['Proposed_on']));} ?></td>

 
</tr>


<?php $i++;
}

 } ?>




<?php
$proposedQuery1=mysql_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed1=mysql_fetch_array($proposedQuery1,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed1['activities_name']?> </h4></td></tr> 
<?php
$i=1;
$proposedQuery1=mysql_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed1['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities1=mysql_fetch_array($proposedQuery1,MYSQL_ASSOC)){
 
?>

<input name="target_dateBefor1[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities1['target_date']))?>">
<input name="table1" value="activities1" type="hidden">
<input name="activitiesId1[]" value="<?=$activities1['id']?>" type="hidden">
<tr>

<?php
$userQuery1=mysql_query("select * from tbl_user where id=".$activities1['user_id']."");
$userData1=mysql_fetch_array($userQuery1);
?>
<td><input name="activities1[]" type="checkbox"  value="<?=$activities1['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData1['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities1['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities1['file'])){ ?><a href="upload/<?=$activities1['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date1[]" type="text" value="<?=date("d-m-Y",strtotime($activities1['target_date']))?>" class="form-control"  id="datepickera<?=$i?>"></td>
<td><?php if($activities1['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority1[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities1['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities1['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities1['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities1['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities1['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities1['Proposed_on']));} ?></td>
<td><input name="submit" value="Final Allotment" class="btn bg-orange" type="submit" onClick="return confirm('Are you sure....?');" ></td>

</tr>
<?php 
$i++;
}

}
 ?>



<?php
$proposedQuery2=mysql_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed2=mysql_fetch_array($proposedQuery2,MYSQL_ASSOC)){
?>
<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed2['activities_name']?> </h4></td></tr> 
 <?php
$i=1;
$proposedQuery2=mysql_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed2['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities2=mysql_fetch_array($proposedQuery2,MYSQL_ASSOC)){
 
?>

<input name="target_dateBefor2[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities2['target_date']))?>">
<input name="table2" value="activities2" type="hidden">
<input name="activitiesId2[]" value="<?=$activities2['id']?>" type="hidden">
<tr>

<?php
$userQuery2=mysql_query("select * from tbl_user where id=".$activities2['user_id']."");
$userData2=mysql_fetch_array($userQuery2);
?>
<td><input name="activities2[]" type="checkbox"  value="<?=$activities2['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData2['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities2['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities2['file'])){ ?><a href="upload/<?=$activities2['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date2[]" type="text" value="<?=date("d-m-Y",strtotime($activities2['target_date']))?>" class="form-control"  id="datepickerb<?=$i?>"></td>
<td><?php if($activities2['final_Status']==0){ echo "Pending";}?></td>

<td><select name="Priority2[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities2['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities2['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities2['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities2['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities2['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities2['Proposed_on']));} ?></td>
 
</tr>

<?php $i++;  }  } ?>


<?php
$proposedQuery3=mysql_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed3=mysql_fetch_array($proposedQuery3,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed3['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery3=mysql_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed3['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities3=mysql_fetch_array($proposedQuery3,MYSQL_ASSOC)){
 
?>

<input name="target_dateBefor3[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities3['target_date']))?>">
<input name="table3" value="activities3" type="hidden">
<input name="activitiesId3[]" value="<?=$activities3['id']?>" type="hidden">
<tr>

<?php
$userQuery3=mysql_query("select * from tbl_user where id=".$activities3['user_id']."");
$userData3=mysql_fetch_array($userQuery3);
?>
<td><input name="activities3[]" type="checkbox"  value="<?=$activities3['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData3['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities3['Unit_Name']?> 
 <br> 
<?php if(!empty($activities3['file'])){ ?><a href="upload/<?=$activities3['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date3[]" type="text" value="<?=date("d-m-Y",strtotime($activities3['target_date']))?>" class="form-control"  id="datepickerc<?=$i?>"></td>
<td><?php if($activities3['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority3[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities3['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities3['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities3['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities3['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities3['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities3['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; 

}
 } 
 
 ?>
 
 
 
 <?php
$proposedQuery4=mysql_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed4=mysql_fetch_array($proposedQuery4,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed4['activities_name']?> </h4></td></tr> 
 
<?php
$i=1;
$proposedQuery4=mysql_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed4['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities4=mysql_fetch_array($proposedQuery4,MYSQL_ASSOC)){
 
?>

<input name="table4" value="activities4" type="hidden">
<input name="target_dateBefor4[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities4['target_date']))?>">
<input name="activitiesId4[]" value="<?=$activities4['id']?>" type="hidden"> 
<tr>

<?php
$userQuery4=mysql_query("select * from tbl_user where id=".$activities4['user_id']."");
$userData4=mysql_fetch_array($userQuery4);
?>
<td><input name="activities4[]" type="checkbox"  value="<?=$activities4['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData4['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities4['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities4['file'])){ ?><a href="upload/<?=$activities4['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date4[]" type="text" value="<?=date("d-m-Y",strtotime($activities4['target_date']))?>" class="form-control"  id="datepickerd<?=$i?>"></td>
<td><?php if($activities4['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority4[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities4['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities4['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities4['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities4['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities4['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities4['Proposed_on']));} ?></td>
 
</tr>
<?php $i++;  } } ?>



 <?php
$proposedQuery5=mysql_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed5=mysql_fetch_array($proposedQuery5,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed5['activities_name']?> </h4></td></tr> 

<?php
$i=1;
$proposedQuery5=mysql_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed5['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities5=mysql_fetch_array($proposedQuery5,MYSQL_ASSOC)){
 
?>
<input name="activitiesId5[]" value="<?=$activities5['id']?>" type="hidden">
<input name="table5" value="activities5" type="hidden"> 
 <input name="target_dateBefor5[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities5['target_date']))?>">
<tr>

<?php
$userQuery5=mysql_query("select * from tbl_user where id=".$activities5['user_id']."");
$userData5=mysql_fetch_array($userQuery5);
?>
<td><input name="activities5[]" type="checkbox"  value="<?=$activities5['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData5['Division']?></td>
<td valign="top" align="left"> <?=$activities5['activities_name']?></td>
 <td valign="top" align="left"> 
 
<?=$activities5['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities5['file'])){ ?><a href="upload/<?=$activities5['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date5[]" type="text" value="<?=date("d-m-Y",strtotime($activities5['target_date']))?>" class="form-control"  id="datepickere<?=$i?>"></td>
<td><?php if($activities5['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority5[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities5['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities5['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities5['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities5['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities5['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities5['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>


 <?php
$proposedQuery6=mysql_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed6=mysql_fetch_array($proposedQuery6,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed6['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery6=mysql_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed6['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities6=mysql_fetch_array($proposedQuery6,MYSQL_ASSOC)){
 
?>
<input name="activitiesId6[]" value="<?=$activities6['id']?>" type="hidden">
<input name="table6" value="activities6" type="hidden">
<input name="target_dateBefor6[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities6['target_date']))?>">
<tr>

<?php
$userQuery6=mysql_query("select * from tbl_user where id=".$activities6['user_id']."");
$userData6=mysql_fetch_array($userQuery6);
?>
<td><input name="activities6[]" type="checkbox"  value="<?=$activities6['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData6['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities6['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities6['file'])){ ?><a href="upload/<?=$activities6['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date6[]" type="text" value="<?=date("d-m-Y",strtotime($activities6['target_date']))?>" class="form-control"  id="datepickerf<?=$i?>"></td>
<td><?php if($activities6['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority6[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities6['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities6['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities6['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities6['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities6['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities6['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>


 <?php
$proposedQuery7=mysql_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed7=mysql_fetch_array($proposedQuery7,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed7['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery7=mysql_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed7['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities7=mysql_fetch_array($proposedQuery7,MYSQL_ASSOC)){
 
?>


<tr>
<input name="activitiesId7[]" value="<?=$activities7['id']?>" type="hidden">
<input name="table7" value="activities7" type="hidden">
<input name="target_dateBefor7[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities7['target_date']))?>">
<?php
$userQuery7=mysql_query("select * from tbl_user where id=".$activities7['user_id']."");
$userData7=mysql_fetch_array($userQuery7);
?>
<td><input name="activities7[]" type="checkbox"  value="<?=$activities7['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData7['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities7['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities7['file'])){ ?><a href="upload/<?=$activities7['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date7[]" type="text" value="<?=date("d-m-Y",strtotime($activities7['target_date']))?>" class="form-control"  id="datepickerg<?=$i?>"></td>
<td><?php if($activities7['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority7[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities7['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities7['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities7['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities7['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities7['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities7['Proposed_on']));} ?></td>
</tr>

<?php $i++;  } } ?>



 <?php
$proposedQuery8=mysql_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed8=mysql_fetch_array($proposedQuery8,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed8['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery8=mysql_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND activities_name='".$proposed8['activities_name']."'AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities8=mysql_fetch_array($proposedQuery8,MYSQL_ASSOC)){
 
?>
<input name="activitiesId8[]" value="<?=$activities8['id']?>" type="hidden">
<input name="table8" value="activities8" type="hidden">
<input name="target_dateBefor8[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities8['target_date']))?>">
<tr>

<?php
$userQuery8=mysql_query("select * from tbl_user where id=".$activities8['user_id']."");
$userData8=mysql_fetch_array($userQuery8);
?>
<td><input name="activities8[]" type="checkbox"  value="<?=$activities8['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData8['Division']?></td>
 <td valign="top" align="left"> 
 
<?=$activities8['Unit_Name']?> 
 <br> 
<?php if(!empty($activities8['file'])){ ?><a href="upload/<?=$activities8['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date8[]" type="text" value="<?=date("d-m-Y",strtotime($activities8['target_date']))?>" class="form-control"  id="datepickerh<?=$i?>"></td>
<td><?php if($activities8['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority8[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities8['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities8['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities8['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities8['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities8['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities8['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; }  } ?>



 <?php
$proposedQuery9=mysql_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed9=mysql_fetch_array($proposedQuery9,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed9['activities_name']?> </h4></td></tr> 

<?php
$i=1;
$proposedQuery9=mysql_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed9['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities9=mysql_fetch_array($proposedQuery9,MYSQL_ASSOC)){

 
?>
<input name="activitiesId9[]" value="<?=$activities9['id']?>" type="hidden">
<input name="table9" value="activities9" type="hidden">
<input name="target_dateBefor9[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities9['target_date']))?>">
<tr>

<?php
$userQuery9=mysql_query("select * from tbl_user where id=".$activities9['user_id']."");
$userData9=mysql_fetch_array($userQuery9);
?>
<td><input name="activities9[]" type="checkbox"  value="<?=$activities9['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData9['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities9['Unit_Name']?> 
 <br> 
 <a href="upload/<?=$activities9['file']?>" target="_blank">View File</a> 
</td>
<td><input name="target_date9[]" type="text" value="<?=date("d-m-Y",strtotime($activities9['target_date']))?>" class="form-control"  id="datepickeri<?=$i?>"></td>
<td><?php if($activities9['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority9[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities9['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities9['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities9['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities9['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities9['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities9['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>



 <?php
$proposedQuery10=mysql_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed10=mysql_fetch_array($proposedQuery10,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed10['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery10=mysql_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed10['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities10=mysql_fetch_array($proposedQuery10,MYSQL_ASSOC)){

?>
<input name="activitiesId10[]" value="<?=$activities10['id']?>" type="hidden">
<input name="table10" value="activities10" type="hidden">
<input name="target_dateBefor10[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities10['target_date']))?>">
<tr>

<?php
$userQuery10=mysql_query("select * from tbl_user where id=".$activities10['user_id']."");
$userData10=mysql_fetch_array($userQuery10);
?>
<td><input name="activities10[]" type="checkbox"  value="<?=$activities10['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData10['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities10['Unit_Name']?> 
 <br> 
<?php if(!empty($activities10['file'])){ ?><a href="upload/<?=$activities10['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date10[]" type="text" value="<?=date("d-m-Y",strtotime($activities10['target_date']))?>" class="form-control"  id="datepickerj<?=$i?>"></td>
<td><?php if($activities10['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority10[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities10['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities10['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities10['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities10['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities10['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities10['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; } } ?>


 <?php
$proposedQuery11=mysql_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed11=mysql_fetch_array($proposedQuery11,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed11['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery11=mysql_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed11['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities11=mysql_fetch_array($proposedQuery11,MYSQL_ASSOC)){

?>
<input name="activitiesId11[]" value="<?=$activities11['id']?>" type="hidden">
<input name="table11" value="activities11" type="hidden">
<input name="target_dateBefor11[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities11['target_date']))?>">
<tr>

<?php
$userQuery11=mysql_query("select * from tbl_user where id=".$activities11['user_id']."");
$userData11=mysql_fetch_array($userQuery11);
?>
<td><input name="activities11[]" type="checkbox"  value="<?=$activities11['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData11['Division']?></td>

 
 <td valign="top" align="left"> 
 
<?=$activities11['Unit_Name']?> 
 <br> 
<?php if(!empty($activities11['file'])){ ?><a href="upload/<?=$activities11['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date11[]" type="text" value="<?=date("d-m-Y",strtotime($activities11['target_date']))?>" class="form-control"  id="datepickerk<?=$i?>"></td>
<td><?php if($activities11['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority11[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities11['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities11['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities11['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities11['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities11['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities11['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; }  } ?>


 <?php
$proposedQuery12=mysql_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed12=mysql_fetch_array($proposedQuery12,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed12['activities_name']?> </h4></td></tr> 



<?php
$i=1;
$proposedQuery12=mysql_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed12['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities12=mysql_fetch_array($proposedQuery12,MYSQL_ASSOC)){
  
?>
<input name="activitiesId12[]" value="<?=$activities12['id']?>" type="hidden">
<input name="table12" value="activities12" type="hidden">
<input name="target_dateBefor12[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities12['target_date']))?>">
<tr>

<?php
$userQuery12=mysql_query("select * from tbl_user where id=".$activities12['user_id']."");
$userData12=mysql_fetch_array($userQuery12);
?>
<td><input name="activities12[]" type="checkbox"  value="<?=$activities12['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData12['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities12['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities12['file'])){ ?><a href="upload/<?=$activities12['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date12[]" type="text" value="<?=date("d-m-Y",strtotime($activities12['target_date']))?>" class="form-control"  id="datepickerl<?=$i?>"></td>
<td><?php if($activities12['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority12[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities12['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities12['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities12['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities12['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities12['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities12['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




 <?php
$proposedQuery13=mysql_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed13=mysql_fetch_array($proposedQuery13,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed13['activities_name']?> </h4></td></tr> 



<?php
$i=1;
$proposedQuery13=mysql_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed13['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities13=mysql_fetch_array($proposedQuery13,MYSQL_ASSOC)){
 
?>
<input name="activitiesId13[]" value="<?=$activities13['id']?>" type="hidden">
<input name="table13" value="activities13" type="hidden">
<input name="target_dateBefor13[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities13['target_date']))?>">
<tr>

<?php
$userQuery13=mysql_query("select * from tbl_user where id=".$activities13['user_id']."");
$userData13=mysql_fetch_array($userQuery13);
?>
<td><input name="activities13[]" type="checkbox"  value="<?=$activities13['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData13['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities13['Unit_Name']?> 
 <br> 
<?php if(!empty($activities13['file'])){ ?><a href="upload/<?=$activities13['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date13[]" type="text" value="<?=date("d-m-Y",strtotime($activities13['target_date']))?>" class="form-control"  id="datepickerm<?=$i?>"></td>
<td><?php if($activities13['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority13[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities13['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities13['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities13['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities13['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities13['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities13['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




 <?php
$proposedQuery14=mysql_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed14=mysql_fetch_array($proposedQuery14,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed14['activities_name']?> </h4></td></tr> 

<?php
$i=1;

$proposedQuery14=mysql_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND activities_name='".$proposed14['activities_name']."' AND rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities14=mysql_fetch_array($proposedQuery14,MYSQL_ASSOC)){
 
?>
<input name="activitiesId14[]" value="<?=$activities14['id']?>" type="hidden">
<input name="table14" value="activities14" type="hidden">
<input name="target_dateBefor14[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities14['target_date']))?>">
<tr>

<?php
$userQuery14=mysql_query("select * from tbl_user where id=".$activities14['user_id']."");
$userData14=mysql_fetch_array($userQuery14);
?>
<td><input name="activities14[]" type="checkbox"  value="<?=$activities14['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData14['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities14['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities14['file'])){ ?><a href="upload/<?=$activities14['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date14[]" type="text" value="<?=date("d-m-Y",strtotime($activities14['target_date']))?>" class="form-control"  id="datepickern<?=$i?>"></td>
<td><?php if($activities14['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority14[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities14['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities14['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities14['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities14['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities14['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities14['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




<?php
$proposedQuery15=mysql_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed15=mysql_fetch_array($proposedQuery15,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed15['activities_name']?> </h4></td></tr>
<?php
$k=1;
$proposedQuery15=mysql_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed15['activities_name']."' AND  rd_id='".$_GET['rd']."'  AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities15=mysql_fetch_array($proposedQuery15,MYSQL_ASSOC)){
 
?>
<input name="activitiesId15[]" value="<?=$activities15['id']?>" type="hidden">
<input name="table15" value="activities15" type="hidden">
<input name="target_dateBefor15[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities15['target_date']))?>">
 
<tr>

<?php
$userQuery15=mysql_query("select * from tbl_user where id=".$activities15['user_id']."");
$userData15=mysql_fetch_array($userQuery15);
?>
<td><input name="activities15[]" type="checkbox"  value="<?=$activities15['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData15['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities15['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities15['file'])){ ?><a href="upload/<?=$activities15['file']?>" target="_blank">View File</a> <?php } ?> 
</td>
<td><input name="target_date15[]" type="text" value="<?=date("d-m-Y",strtotime($activities15['target_date']))?>" class="form-control"  id="datepickero<?=$k?>"></td>
<td><?php if($activities15['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority15[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities15['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities15['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities15['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities15['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities15['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities15['Proposed_on']));} ?></td>
 
</tr>
 
<?php $k++; 

 }

}
 ?>


<?php
$proposedQuery16=mysql_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed16=mysql_fetch_array($proposedQuery16,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed16['activities_name']?> </h4></td></tr>
<?php
$i=1;
$proposedQuery16=mysql_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed16['activities_name']."' AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities16=mysql_fetch_array($proposedQuery16,MYSQL_ASSOC)){
 
?>
<input name="activitiesId16[]" value="<?=$activities16['id']?>" type="hidden">
<input name="table16" value="activities16" type="hidden">
<input name="target_dateBefor16[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities16['target_date']))?>">
<tr>

<?php
$userQuery16=mysql_query("select * from tbl_user where id=".$activities16['user_id']."");
$userData16=mysql_fetch_array($userQuery16);
?>
<td><input name="activities16[]" type="checkbox"  value="<?=$activities16['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData16['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities16['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities16['file'])){ ?><a href="upload/<?=$activities16['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date16[]" type="text" value="<?=date("d-m-Y",strtotime($activities16['target_date']))?>" class="form-control"  id="datepickerp<?=$i?>"></td>
<td><?php if($activities16['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority16[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities16['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities16['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities16['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities16['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities16['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities16['Proposed_on']));} ?></td>
 
</tr>
<?php $i++;  }


} ?>


<?php
$proposedQuery17=mysql_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."'  AND final_Status=0  GROUP BY  activities_name");
while ($proposed17=mysql_fetch_array($proposedQuery17,MYSQL_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1d0cc6;"><i class="fa fa-fw fa-hand-o-right"></i><?=$proposed17['activities_name']?> </h4></td></tr>

<?php
$i=1;
$proposedQuery17=mysql_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed17['activities_name']."' AND   rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities17=mysql_fetch_array($proposedQuery17,MYSQL_ASSOC)){
 
?>


<tr>
<input name="activitiesId17[]" value="<?=$activities17['id']?>" type="hidden">
<input name="table17" value="activities17" type="hidden">
 <input name="target_dateBefor17[]" type="hidden" value="<?=date("d-m-Y",strtotime($activities17['target_date']))?>">
<?php
$userQuery17=mysql_query("select * from tbl_user where id=".$activities17['user_id']."");
$userData17=mysql_fetch_array($userQuery17);
?>
<td><input name="activities17[]" type="checkbox"  value="<?=$activities17['id']?>"  class="checkbox"></td>
<td valign="top" align="left"> <?=$userData17['Division']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities17['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities17['file'])){ ?><a href="upload/<?=$activities17['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date17[]" type="text" value="<?=date("d-m-Y",strtotime($activities17['target_date']))?>" class="form-control"  id="datepickerq<?=$i?>"></td>
<td><?php if($activities17['final_Status']==0){ echo "Pending";}?></td>
<td><select name="Priority17[]" class="form-control" style="width:114px; float:left;">

<option value="">Set Priority</option>
<option value="P1" <?=($activities17['priority']=="P1")?'selected':''?> >P1</option>
<option value="P2" <?=($activities17['priority']=="P2")?'selected':''?>>P2</option>
<option value="P3" <?=($activities17['priority']=="P3")?'selected':''?>>P3</option>
<option value="P4" <?=($activities17['priority']=="P4")?'selected':''?>>P4</option>
</select></td>
<td><?php if($activities17['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities17['Proposed_on']));} ?></td>
</tr>

<?php $i++;  } 
}
?>


</table>

<input name="submit" value="Final Allotment" class="btn bg-orange" style="margin:10px 0px;" type="submit">
</div>
</form>
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
