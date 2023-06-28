 <?php 
 ob_start();
 session_start();
 ini_set('display_errors','0');
 include_once'includes/connect.php';
 include_once'includes/session.php';
 date_default_timezone_set('Asia/Kolkata');

 ?>
 <?php
 if(isset($_POST['submit1']) && $_POST['submit1']=="Save")
 {
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month']));
 
if($_POST['Activities']=="activities0"){
$sqlQuery="UPDATE tbl_activities0 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}


if($_POST['Activities']=="activities1"){
$sqlQuery="UPDATE tbl_activities1 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities2"){
$sqlQuery="UPDATE tbl_activities2 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  




if($_POST['Activities']=="activities3"){
$sqlQuery="UPDATE tbl_activities3 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  



if($_POST['Activities']=="activities4"){
$sqlQuery="UPDATE tbl_activities4 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities5"){
$sqlQuery="UPDATE tbl_activities5 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities6"){
$sqlQuery="UPDATE tbl_activities6 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities7"){
$sqlQuery="UPDATE tbl_activities7 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities8"){
$sqlQuery="UPDATE tbl_activities8 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities9"){
$sqlQuery="UPDATE tbl_activities9 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities10"){
$sqlQuery="UPDATE tbl_activities10 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  



if($_POST['Activities']=="activities11"){
$sqlQuery="UPDATE tbl_activities11 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities12"){
$sqlQuery="UPDATE tbl_activities12 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities13"){
$sqlQuery="UPDATE tbl_activities13 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities14"){
$sqlQuery="UPDATE tbl_activities14 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities15"){
$sqlQuery="UPDATE tbl_activities15 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities16"){
$sqlQuery="UPDATE tbl_activities16 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities17"){
$sqlQuery="UPDATE tbl_activities17 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  
  

if(mysql_query($sqlQuery))
{
$_SESSION['messageData']="Activities Update";
header('location:'.$_SERVER['REQUEST_URI']); 
}
}
 
 
if(isset($_POST['submit']) && $_POST['submit']=="Final Allotment")
{ 
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month']));
 
 $getUserData1=mysql_query("SELECT * FROM tbl_user where board='".$_POST['rd']."'");
$user1=mysql_fetch_array($getUserData1);  
 
$updateQuery=mysql_query("UPDATE tbl_activities0 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities1 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'  AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities2 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities3 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities4 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities5 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities6 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities7 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities8 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities9 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities10 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities11 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities12 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities13 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities14 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities15 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities16 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities17 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");


$_SESSION['success']="Work Allotted Successfully";
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
   
   
      <link rel="stylesheet" href="css/table.css">

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
      Work Allotment</h1>
       <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Work Allotment</li>
       </ol>
      </section>

      <!-- Main content -->
      <section class="content">

       <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
<?php
if(!empty($_SESSION['success']))
{
?>

<div class="alert alert-success">
<?=$_SESSION['success']?>

</div>

<?php
$_SESSION['success']="";
}
?>



         <div class="box box-primary no-print">
          <div class="box-body">
           <form action="" method="get">
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
               
           <td width="30%"><select name="rd_id12" class="form-control" style="width:49%; margin-left:10px; float:left;" required>
          
		   <?php $getQuery12=mysql_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); 
		   while($rd12=mysql_fetch_array($getQuery12)){?>
           <option value="<?=$rd12['board']?>"  <?=($rd12['board']==$_GET['rd_id12'])?'selected':''?> ><?=$rd12['board']?></option><?php }?>
           </select></td>

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>

           <?php
		   $getUserData=mysql_query("SELECT * FROM tbl_user where board='".$_GET['rd_id12']."'");
			$user=mysql_fetch_array($getUserData);  
			 
		$month= date("m", strtotime($_GET['month']));
		$year= date("Y", strtotime($_GET['month']));
		
	 
           if(isset($_GET['searchRegionalDirectors']) && $_GET['searchRegionalDirectors']!=""){
		   
			
		 
             ?> 

             <div class="wrap">
   
  
 
            
       <table   class="table table-bordered table-striped">
  <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>S. No./Unit Details</strong></td>
     
  </tr>
 
 
<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities0=mysql_query("SELECT * FROM  tbl_activities_rd0 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList0=mysql_fetch_array($activities0)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList0['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

 
<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities1=mysql_query("SELECT * FROM  tbl_activities_rd1 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList1=mysql_fetch_array($activities1)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList1['Unit_Name']?></td>
    
 
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
 <tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities2=mysql_query("SELECT * FROM  tbl_activities_rd2 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList2=mysql_fetch_array($activities2)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList2['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities3=mysql_query("SELECT * FROM  tbl_activities_rd3 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList3=mysql_fetch_array($activities3)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList3['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">CETPs</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities4=mysql_query("SELECT * FROM  tbl_activities_rd4 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList4=mysql_fetch_array($activities4)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList4['Unit_Name']?></td>
    
     
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities5=mysql_query("SELECT * FROM  tbl_activities_rd5 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList5=mysql_fetch_array($activities5)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList5['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">CBMWTF</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities6=mysql_query("SELECT * FROM  tbl_activities_rd6 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList6=mysql_fetch_array($activities6)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList6['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">STPs</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities7=mysql_query("SELECT * FROM  tbl_activities_rd7 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList7=mysql_fetch_array($activities7)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList7['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">SLFs(MSW)</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities8=mysql_query("SELECT * FROM  tbl_activities_rd8 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList8=mysql_fetch_array($activities8)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList8['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities9=mysql_query("SELECT * FROM  tbl_activities_rd9 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList9=mysql_fetch_array($activities9)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList9['Unit_Name']?></td>
    
   
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities10=mysql_query("SELECT * FROM  tbl_activities_rd10 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList10=mysql_fetch_array($activities10)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList10['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities11=mysql_query("SELECT * FROM  tbl_activities_rd11 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList11=mysql_fetch_array($activities11)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList11['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities12=mysql_query("SELECT * FROM  tbl_activities_rd12 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList12=mysql_fetch_array($activities12)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList12['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities13=mysql_query("SELECT * FROM  tbl_activities_rd13 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList13=mysql_fetch_array($activities13)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList13['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>

<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities14=mysql_query("SELECT * FROM  tbl_activities_rd14 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList14=mysql_fetch_array($activities14)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList14['Unit_Name']?></td>
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 

<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities15=mysql_query("SELECT * FROM  tbl_activities_rd15 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList15=mysql_fetch_array($activities15)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList15['Unit_Name']?></td>
    
     
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities16=mysql_query("SELECT * FROM  tbl_activities_rd16 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList16=mysql_fetch_array($activities16)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList16['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
<tr>

<td valign="top">Inspections for Ganga complaince verification </td>


<td colspan="5"> 
<table width="100%" border="1" style="margin:2px 0px;">
<?php
$i=1;
$activities17=mysql_query("SELECT * FROM  tbl_activities_rd17 where user_id='".$user['id']."' and month='".$_GET['month']."'");
while($activitiesList17=mysql_fetch_array($activities17)){
?>

  <tr>
  <td width="5%"><?=$i?></td>
    <td width="95%"><?=$activitiesList17['Unit_Name']?></td>
    
    
    
  </tr>
  <?php $i++; } ?>
</table>
 
</td>
</tr>
 
 
   
</table>

<?php
$OtherActivities=mysql_query("SELECT * FROM  tbl_other_activities where user_id='".$user['id']."' and month='".$_GET['month']."'");

if(mysql_num_rows($OtherActivities)>0){
while($OtherResult=mysql_fetch_array($OtherActivities))
{
$OtherResultlist[]=$OtherResult;
}
 
?>
<h3><i class="fa fa-fw fa-long-arrow-right"></i>Other Activities</h3>
 <table   class="table table-bordered table-striped" style="margin-top:10px;">
  
   <?php if(!empty($OtherResultlist[0]['activities'])){?>
   <tr>
    <td width="70%"><?=$OtherResultlist[0]['activities']?></td>
  </tr>
  <?php } ?>
  <?php if(!empty($OtherResultlist[1]['activities'])){?>
   <tr>
   
    <td width="70%"><?=$OtherResultlist[1]['activities']?></td>
  </tr>
  <?php } ?>
  <?php if(!empty($OtherResultlist[2]['activities'])){?>
   <tr>
    
   
    <td width="70%"><?=$OtherResultlist[2]['activities']?></td>
  </tr>
  
  <?php } ?>
</table>
<?php } ?>






            </div>
  <?php
             }
			 
	?>
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
    <script  src="js/index.js"></script>
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
