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
  
<script src="js/highcharts.js"></script>
 
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
  <style>
  .btn
  {
  background:#FFFFFF;
  }
 tr th 
 {
 padding:6px;
 }
  tr td 
 {
 padding:6px;
 }
.tag
{
padding:5px;  float:left; margin:1px; 
    color: #fff;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.1) !important;
    background-color: #009fe2;
    background-image: -moz-linear-gradient(top,#00adf7,#0089c4);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#00adf7),to(#0089c4));
    background-image: -webkit-linear-gradient(top,#00adf7,#0089c4);
    background-image: -o-linear-gradient(top,#00adf7,#0089c4);
    background-image: linear-gradient(to bottom,#00adf7,#0089c4);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff00acf6', endColorstr='#ff0089c3', GradientType=0);
    border: 1px solid #007eb4; border-radius:1px;
    -webkit-box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset;
    -moz-box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset;
    box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset; font-weight:600;
}


.bgSearch
{
padding:6px;  float:left; margin:2px 2px 10px 2px; 
    color: #fff;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.1) !important;
    background-color: #f1f1f3;
    background-image: -moz-linear-gradient(top,#f1f1f3,#f9f9fb);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#f1f1f3),to(#f9f9fb));
    background-image: -webkit-linear-gradient(top,#f1f1f3,#f9f9fb);
    background-image: -o-linear-gradient(top,#f1f1f3,#f9f9fb);
    background-image: linear-gradient(to bottom,#f1f1f3,#f9f9fb);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff00acf6', endColorstr='#ff0089c3', GradientType=0);
    border: 1px solid #dcdcdf; border-radius:1px;
    -webkit-box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset;
    -moz-box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset;
    box-shadow: 0 0 2px 1px rgba(0,0,0,0.05) inset; font-weight:600; height:42px; width:100%;
}
.btn {
    display: inline-block;
    padding: 3px 8px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
   
	margin-bottom:10px;
	
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
      Monthly Report</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Monthly Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
       <div class="row">
       
       <?php
	   if($_SESSION['userId']['username']=="ms"){
	 
	   ?>
        <!-- left column -->
        <div class="col-md-12">
        
           <div class="box box-primary no-print">
          <div class="box-body">
           <form action="" method="post">
            <table width="100%" border="1">
             <tr>
             <?php
			 if($_POST['month']=="")
			 {
			 $month=date("M-Y");
			 }
			 else
			 {
			 $month=$_POST['month'];
			 }
			 ?>
             
              <td width="30%"> <input name="month"  value="<?=$month?>" class="form-control" id="datepicker-example111" type="text"></td>
               
           <td width="30%"><select name="Priority" class="form-control" style="width:49%; margin-left:10px; float:left;" required>
          
		    
           <option value="P1"  <?=("P1"==$_POST['Priority'])?'selected':''?> >P1</option> 
           <option value="P2"  <?=("P2"==$_POST['Priority'])?'selected':''?> >P2</option> 
           <option value="P3"  <?=("P3"==$_POST['Priority'])?'selected':''?> >P3</option> 
           <option value="P4"  <?=("P4"==$_POST['Priority'])?'selected':''?> >P4</option> 
           </select></td>

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>
 
 <?php
 
 if(isset($_POST['searchRegionalDirectors']) && $_POST['searchRegionalDirectors']!=""  && $_POST['Priority']!=""){
?>
<div class="box box-primary no-print">
<div class="box-body">
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<?php 
$rdQuery=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC ");
while($zo=mysqli_fetch_array($rdQuery))
{

$zoList[]=$zo['board'];


$activitiesQuery=mysqli_query("SELECT * FROM tbl_user_activities_date_wise where dateMonth ='".$_POST['month']."' AND rd='".$zo['board']."' AND type='".$_POST['Priority']."' GROUP BY Activities");

while($activitiesListData=mysqli_fetch_array($activitiesQuery))
{
$activitiesList[]=$activitiesListData['Activities'];
}

/*------------------------------------------------------------
*/if (in_array("Water quality monitoring stations & no. of inspection during the month", $activitiesList))
  {
  
  
  $arrayActvities[]="Water quality monitoring stations & no. of inspection during the month";
	$activitiesCount=mysqli_query("SELECT count(*) as total FROM tbl_activities0 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult=mysqli_fetch_array($activitiesCount,mysqli_ASSOC) ;
	$totalPending[]=$activitiesCountResult['total'];
	
	
	
	$countComplete=mysqli_query("SELECT count(*) as total FROM tbl_activities0 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult=mysqli_fetch_array($countComplete,mysqli_ASSOC) ;
	$totalComplete[]=$countCompleteResult['total'];
  }
 
 
 /*------------------------------------------------------------
*/if (in_array("Ambient air quality monitoring stations & no. of inspection during the month", $activitiesList))
  {
  $arrayActvities[]="Ambient air quality monitoring stations & no. of inspection during the month";
  
	$activitiesCount1=mysqli_query("SELECT count(*) as total FROM tbl_activities1 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult1=mysqli_fetch_array($activitiesCount1,mysqli_ASSOC) ;
	$totalPending1[]=$activitiesCountResult1['total'];
	
	
	
	$countComplete1=mysqli_query("SELECT count(*) as total FROM tbl_activities1 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult1=mysqli_fetch_array($countComplete1,mysqli_ASSOC) ;
	$totalComplete1[]=$countCompleteResult1['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Inter state river monitoring", $activitiesList))
  {
  $arrayActvities[]="Inter state river monitoring";
	$activitiesCount2=mysqli_query("SELECT count(*) as total FROM tbl_activities2 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult2=mysqli_fetch_array($activitiesCount2,mysqli_ASSOC) ;
	$totalPending2[]=$activitiesCountResult2['total'];
	
	
	
	$countComplete2=mysqli_query("SELECT count(*) as total FROM tbl_activities2 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult2=mysqli_fetch_array($countComplete2,mysqli_ASSOC) ;
	$totalComplete2[]=$countCompleteResult2['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Monitoring of river/rivulets/drains", $activitiesList))
  {
  $arrayActvities[]="Monitoring of river/rivulets/drains";
	$activitiesCount3=mysqli_query("SELECT count(*) as total FROM tbl_activities3 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult3=mysqli_fetch_array($activitiesCount3,mysqli_ASSOC) ;
	$totalPending3[]=$activitiesCountResult3['total'];
	
	
	
	$countComplete3=mysqli_query("SELECT count(*) as total FROM tbl_activities3 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult3=mysqli_fetch_array($countComplete3,mysqli_ASSOC) ;
	$totalComplete3[]=$countCompleteResult3['total'];
  }
  /*-------------------------------------------------------------------*/



 /*------------------------------------------------------------
*/if (in_array("CETPs", $activitiesList))
  {
  $arrayActvities[]="CETPs";
	$activitiesCount4=mysqli_query("SELECT count(*) as total FROM tbl_activities4 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult4=mysqli_fetch_array($activitiesCount4,mysqli_ASSOC) ;
	$totalPending4[]=$activitiesCountResult4['total'];
	
	
	
	$countComplete4=mysqli_query("SELECT count(*) as total FROM tbl_activities4 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult4=mysqli_fetch_array($countComplete4,mysqli_ASSOC) ;
	$totalComplete4[]=$countCompleteResult4['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("CHWTSDF", $activitiesList))
  {
  $arrayActvities[]="CHWTSDF";
	$activitiesCount5=mysqli_query("SELECT count(*) as total FROM tbl_activities5 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult5=mysqli_fetch_array($activitiesCount5,mysqli_ASSOC) ;
	$totalPending5[]=$activitiesCountResult5['total'];
	
	
	
	$countComplete5=mysqli_query("SELECT count(*) as total FROM tbl_activities5 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult5=mysqli_fetch_array($countComplete5,mysqli_ASSOC) ;
	$totalComplete5[]=$countCompleteResult5['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("CBMWTF", $activitiesList))
  {
  $arrayActvities[]="CBMWTF";
	$activitiesCount6=mysqli_query("SELECT count(*) as total FROM tbl_activities6 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult6=mysqli_fetch_array($activitiesCount6,mysqli_ASSOC) ;
	$totalPending6[]=$activitiesCountResult6['total'];
	
	
	
	$countComplete6=mysqli_query("SELECT count(*) as total FROM tbl_activities6 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult6=mysqli_fetch_array($countComplete6,mysqli_ASSOC) ;
	$totalComplete6[]=$countCompleteResult6['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("STPs", $activitiesList))
  {
  $arrayActvities[]="STPs";
	$activitiesCount7=mysqli_query("SELECT count(*) as total FROM tbl_activities7 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult7=mysqli_fetch_array($activitiesCount7,mysqli_ASSOC) ;
	$totalPending7[]=$activitiesCountResult7['total'];
	
	
	
	$countComplete7=mysqli_query("SELECT count(*) as total FROM tbl_activities7 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult7=mysqli_fetch_array($countComplete7,mysqli_ASSOC) ;
	$totalComplete7[]=$countCompleteResult7['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("SLFs(MSW)", $activitiesList))
  {
  $arrayActvities[]="SLFs(MSW)";
	$activitiesCount8=mysqli_query("SELECT count(*) as total FROM tbl_activities8 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult8=mysqli_fetch_array($activitiesCount8,mysqli_ASSOC) ;
	$totalPending8[]=$activitiesCountResult8['total'];
	
	
	
	$countComplete8=mysqli_query("SELECT count(*) as total FROM tbl_activities8 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult8=mysqli_fetch_array($countComplete8,mysqli_ASSOC) ;
	$totalComplete8[]=$countCompleteResult8['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Inspections based on SMS alerts from OCEMS of units", $activitiesList))
  {
     $arrayActvities[]="Inspections based on SMS alerts from OCEMS of units";
	$activitiesCount9=mysqli_query("SELECT count(*) as total FROM tbl_activities9 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult9=mysqli_fetch_array($activitiesCount9,mysqli_ASSOC) ;
	$totalPending9[]=$activitiesCountResult9['total'];
	
	
	
	$countComplete9=mysqli_query("SELECT count(*) as total FROM tbl_activities9 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult9=mysqli_fetch_array($countComplete9,mysqli_ASSOC) ;
	$totalComplete9[]=$countCompleteResult9['total'];
	
	

  }
  /*-------------------------------------------------------------------*/
  
  
   /*------------------------------------------------------------
*/if (in_array("Re-inspections/Follow-up visits of units", $activitiesList))
  {
  $arrayActvities[]="Re-inspections/Follow-up visits of units";
	$activitiesCount10=mysqli_query("SELECT count(*) as totals FROM tbl_activities10 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult10=mysqli_fetch_array($activitiesCount10,mysqli_ASSOC) ;
	$totalPending10[]=$activitiesCountResult10['totals'];
	
	
	
	$countComplete10=mysqli_query("SELECT count(*) as totals FROM tbl_activities10 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult10=mysqli_fetch_array($countComplete10,mysqli_ASSOC) ;
	$totalComplete10[]=$countCompleteResult10['totals'];
  }
  /*-------------------------------------------------------------------*/
 

   /*------------------------------------------------------------
*/if (in_array("Inspections for VIP complaint verification", $activitiesList))
  {
 $arrayActvities[]="Inspections for VIP complaint verification";
	$activitiesCount11=mysqli_query("SELECT count(*) as total FROM tbl_activities11 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult11=mysqli_fetch_array($activitiesCount11,mysqli_ASSOC) ;
	$totalPending11[]=$activitiesCountResult11['total'];
	
	
	
	$countComplete11=mysqli_query("SELECT count(*) as total FROM tbl_activities11 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult11=mysqli_fetch_array($countComplete11,mysqli_ASSOC) ;
	$totalComplete11[]=$countCompleteResult11['total'];
  }
  /*-------------------------------------------------------------------*/
   /*------------------------------------------------------------
*/if (in_array("Inspections related with NGT/court matter", $activitiesList))
  {
  $arrayActvities[]="Inspections related with NGT/court matter";
	$activitiesCount12=mysqli_query("SELECT count(*) as total FROM tbl_activities12 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult12=mysqli_fetch_array($activitiesCount12,mysqli_ASSOC) ;
	$totalPending12[]=$activitiesCountResult12['total'];
	
	
	
	$countComplete12=mysqli_query("SELECT count(*) as total FROM tbl_activities12 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult12=mysqli_fetch_array($countComplete12,mysqli_ASSOC) ;
	$totalComplete12[]=$countCompleteResult12['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Monitoring for trail run under HWM Rules", $activitiesList))
  {
    $arrayActvities[]="Monitoring for trail run under HWM Rules";
	$activitiesCount13=mysqli_query("SELECT count(*) as total FROM tbl_activities13 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult13=mysqli_fetch_array($activitiesCount13,mysqli_ASSOC) ;
	$totalPending13[]=$activitiesCountResult13['total'];
	
	
	
	$countComplete13=mysqli_query("SELECT count(*) as total FROM tbl_activities13 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult13=mysqli_fetch_array($countComplete13,mysqli_ASSOC) ;
	$totalComplete13[]=$countCompleteResult13['total'];
  }
  /*-------------------------------------------------------------------*/


   /*------------------------------------------------------------
*/if (in_array("Inspections related with import of hazardous & other waste", $activitiesList))
  {
     $arrayActvities[]="Inspections related with import of hazardous & other waste";
	$activitiesCount14=mysqli_query("SELECT count(*) as total FROM tbl_activities14 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult14=mysqli_fetch_array($activitiesCount14,mysqli_ASSOC) ;
	$totalPending14[]=$activitiesCountResult14['total'];
	
	
	
	$countComplete14=mysqli_query("SELECT count(*) as total FROM tbl_activities14 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult14=mysqli_fetch_array($countComplete14,mysqli_ASSOC) ;
	$totalComplete14[]=$countCompleteResult14['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Meetings/workshops/Training", $activitiesList))
  {
    $arrayActvities[]="Meetings/workshops/Trainingk";
	$activitiesCount15=mysqli_query("SELECT count(*) as total FROM tbl_activities15 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult15=mysqli_fetch_array($activitiesCount15,mysqli_ASSOC) ;
	$totalPending15[]=$activitiesCountResult15['total'];
	
	
	
	$countComplete15=mysqli_query("SELECT count(*) as total FROM tbl_activities15 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult15=mysqli_fetch_array($countComplete15,mysqli_ASSOC) ;
	$totalComplete15[]=$countCompleteResult15['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Inspections for public complaint verification", $activitiesList))
  {
    $arrayActvities[]="Inspections for public complaint verification";
	$activitiesCount16=mysqli_query("SELECT count(*) as total FROM tbl_activities16 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult16=mysqli_fetch_array($activitiesCount16,mysqli_ASSOC) ;
	$totalPending16[]=$activitiesCountResult16['total'];
	
	
	
	$countComplete16=mysqli_query("SELECT count(*) as total FROM tbl_activities16 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult16=mysqli_fetch_array($countComplete16,mysqli_ASSOC) ;
	$totalComplete16[]=$countCompleteResult16['total'];
  }
  /*-------------------------------------------------------------------*/


   /*------------------------------------------------------------
*/if (in_array("Inspections for ganga complaint verification", $activitiesList))
  {
    $arrayActvities[]="Inspections for ganga complaint verification";
	$activitiesCount17=mysqli_query("SELECT count(*) as total FROM tbl_activities17 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult17=mysqli_fetch_array($activitiesCount17,mysqli_ASSOC) ;
	$totalPending17[]=$activitiesCountResult17['total'];
	
	
	
	$countComplete17=mysqli_query("SELECT count(*) as total FROM tbl_activities17 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult17=mysqli_fetch_array($countComplete17,mysqli_ASSOC) ;
	$totalComplete17[]=$countCompleteResult17['total'];
  }
  /*-------------------------------------------------------------------*/

}

 

 


if(!empty($totalPending)){
$varPending=$totalPending;
}
else
{
$varPending=array(0,0,0,0,0,0);
}

if(!empty($totalPending1)){
$varPending1=$totalPending1;
}
else
{
$varPending1=array(0,0,0,0,0,0);
}

if(!empty($totalPending2)){
$varPending2=$totalPending2;
}
else
{
$varPending2=array(0,0,0,0,0,0);
}


if(!empty($totalPending3)){
$varPending3=$totalPending3;
}
else
{
$varPending3=array(0,0,0,0,0,0);
}

if(!empty($totalPending4)){
$varPending4=$totalPending4;
}
else
{
$varPending4=array(0,0,0,0,0,0);
}

if(!empty($totalPending5)){
$varPending5=$totalPending5;
}
else
{
$varPending5=array(0,0,0,0,0,0);
}

if(!empty($totalPending6)){
$varPending6=$totalPending6;
}
else
{
$varPending6=array(0,0,0,0,0,0);
}

if(!empty($totalPending7)){
$varPending7=$totalPending7;
}
else
{
$varPending7=array(0,0,0,0,0,0);
}


if(!empty($totalPending8)){
$varPending8=$totalPending8;
}
else
{
$varPending8=array(0,0,0,0,0,0);
}



if(!empty($totalPending9)){
$varPending9=$totalPending9;
}
else
{
$varPending9=array(0,0,0,0,0,0);
}

if(!empty($totalPending10)){
$varPending10=$totalPending10;
}
else
{
$varPending10=array(0,0,0,0,0,0);
}


if(!empty($totalPending11)){
$varPending11=$totalPending11;
}
else
{
$varPending11=array(0,0,0,0,0,0);
}


if(!empty($totalPending12)){
$varPending12=$totalPending12;
}
else
{
$varPending12=array(0,0,0,0,0,0);
}


if(!empty($totalPending13)){
$varPending13=$totalPending13;
}
else
{
$varPending13=array(0,0,0,0,0,0);
}

if(!empty($totalPending14)){
$varPending14=$totalPending14;
 }
else
{
$varPending14=array(0,0,0,0,0,0);
}

if(!empty($totalPending15)){
$varPending15=$totalPending15;
 }
else
{
$varPending15=array(0,0,0,0,0,0);
}



if(!empty($totalPending16)){
$varPending16=$totalPending16;
 }
else
{
$varPending16=array(0,0,0,0,0,0);
}


if(!empty($totalPending17)){
$varPending17=$totalPending17;
}
else
{
$varPending17=array(0,0,0,0,0,0);
}



if(!empty($totalComplete)){
$varComplete=$totalComplete;
}
else
{
$varComplete=array(0,0,0,0,0,0);
}


if(!empty($totalComplete1)){
$varComplete1=$totalComplete1;
}
else
{
$varComplete1=array(0,0,0,0,0,0);
}

if(!empty($totalComplete2)){
$varComplete2=$totalComplete2;
}
else
{
$varComplete2=array(0,0,0,0,0,0);
}

if(!empty($totalComplete3)){
$varComplete3=$totalComplete3;
}
else
{
$varComplete3=array(0,0,0,0,0,0);
}

if(!empty($totalComplete4)){
$varComplete4=$totalComplete4;
}
else
{
$varComplete4=array(0,0,0,0,0,0);
}

if(!empty($totalComplete5)){
$varComplete5=$totalComplete5;
}
else
{
$varComplete5=array(0,0,0,0,0,0);
}

if(!empty($totalComplete6)){
$varComplete6=$totalComplete6;
}
else
{
$varComplete6=array(0,0,0,0,0,0);
}

if(!empty($totalComplete7)){
$varComplete7=$totalComplete7;
}
else
{
$varComplete7=array(0,0,0,0,0,0);
}

if(!empty($totalComplete8)){
$varComplete8=$totalComplete8;
}
else
{
$varComplete8=array(0,0,0,0,0,0);
}

if(!empty($totalComplete9)){
$varComplete9=$totalComplete9;
}
else
{
$varComplete9=array(0,0,0,0,0,0);
}
if(!empty($totalComplete10)){
$varComplete10=$totalComplete10;
}
else
{
$varComplete10=array(0,0,0,0,0,0);
}

if(!empty($totalComplete11)){
$varComplete11=$totalComplete11;
}
else
{
$varComplete11=array(0,0,0,0,0,0);
}

if(!empty($totalComplete12)){
$varComplete12=$totalComplete12;
}
else
{
$varComplete12=array(0,0,0,0,0,0);
}

if(!empty($totalComplete13)){
$varComplete13=$totalComplete13;
}
else
{
$varComplete13=array(0,0,0,0,0,0);
}

if(!empty($totalComplete14)){
$varComplete14=$totalComplete14;
}
else
{
$varComplete14=array(0,0,0,0,0,0);
}

if(!empty($totalComplete15)){
$varComplete15=$totalComplete15;
}
else
{
$varComplete15=array(0,0,0,0,0,0);
}

if(!empty($totalComplete16)){
$varComplete16=$totalComplete16;
}
else
{
$varComplete16=array(0,0,0,0,0,0);
}

if(!empty($totalComplete17)){
$varComplete17=$totalComplete17;
}
else
{
$varComplete17=array(0,0,0,0,0,0);
}
 
$arrayList=array_unique($arrayActvities);
$arrayListImplode=implode("<br>",$arrayList);
 

$c = array_map(function () {
    return array_sum(func_get_args());
}, $varPending,$varPending1,$varPending2,$varPending3,$varPending4,$varPending5,$varPending6,$varPending7,$varPending8,$varPending9,$varPending10,$varPending11,$varPending12,$varPending13,$varPending14,$varPending15,$varPending16,$varPending17);


$d = array_map(function () {
    return array_sum(func_get_args());
}, $varComplete,$varComplete1,$varComplete2,$varComplete3,$varComplete4,$varComplete5,$varComplete6,$varComplete7,$varComplete8,$varComplete9,$varComplete10,$varComplete11,$varComplete12,$varComplete13,$varComplete14,$varComplete15,$varComplete16,$varComplete17);



$zoListData = "'".implode("','", $zoList)."'";
$totalPendingData = implode(',', $c);
$totalCompleteData = implode(',', $d);
	

 
?>

<script type="text/javascript">

Highcharts.chart('container', {
chart: {
type: 'column'
},
title: {
text: 'Status of Work Load of Rds as of <?=$_POST['month']?>'
},
xAxis: {
categories: [<?=$zoListData?>]
},
yAxis: {
min: 0,
allowDecimals: false,
title: {
text: 'Total No of Inspections/Activities Assigned'
},
stackLabels: {
enabled: true,
style: {
fontWeight: 'bold',
color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
}
}
},
legend: {
align: 'right',
x: -30,
verticalAlign: 'top',
y: 25,
floating: true,
backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
borderColor: '#CCC',
borderWidth: 1,
shadow: false
},
tooltip: {
headerFormat: '<b>{point.x}</b><br/>',
pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
},
plotOptions: {
column: {
stacking: 'normal',
dataLabels: {
enabled: false,
color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
}
}
},
series: [
{
name: 'Completed Inbspections',
data: [<?=$totalCompleteData?>]
},{
name: 'Alloted Inspections',
data: [<?=$totalPendingData?>]
}
]
});
</script>
</div>
</div>
<div class="box box-primary no-print">
<div class="box-body">
<h4><span style="color:#FF0000;"><i class="fa fa-fw fa-hand-o-right"></i> Activities</span> :</h4>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="7%">S. No.</th>
    <th width="93%">Activities</th>
  </tr>
  <?php
  $i=1;
   foreach($arrayList as $list){
  
  ?>
  <tr>
    <td><?=$i?></td>
    <td><?=$list?></td>
  </tr>
  <?php $i++; } ?>
</table>

</div></div>
<?php 

}


 else
{
 ?>
 <div class="box box-primary no-print">
<div class="box-body">
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 

<?php 
$rdQuery=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC ");
while($zo=mysqli_fetch_array($rdQuery))
{

$zoList[]=$zo['board'];


$activitiesQuery=mysqli_query("SELECT * FROM tbl_user_activities_date_wise where dateMonth ='".date("M-Y")."' AND rd='".$zo['board']."' AND type='P1' GROUP BY Activities");

while($activitiesListData=mysqli_fetch_array($activitiesQuery))
{
$activitiesList[]=$activitiesListData['Activities'];
}

/*------------------------------------------------------------
*/if (in_array("Water quality monitoring stations & no. of inspection during the month", $activitiesList))
  {
  
  
  $arrayActvities[]="Water quality monitoring stations & no. of inspection during the month";
	$activitiesCount=mysqli_query("SELECT count(*) as total FROM tbl_activities0 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult=mysqli_fetch_array($activitiesCount,mysqli_ASSOC) ;
	$totalPending[]=$activitiesCountResult['total'];
	
	
	
	$countComplete=mysqli_query("SELECT count(*) as total FROM tbl_activities0 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult=mysqli_fetch_array($countComplete,mysqli_ASSOC) ;
	$totalComplete[]=$countCompleteResult['total'];
  }
 
 
 /*------------------------------------------------------------
*/if (in_array("Ambient air quality monitoring stations & no. of inspection during the month", $activitiesList))
  {
  $arrayActvities[]="Ambient air quality monitoring stations & no. of inspection during the month";
  
	$activitiesCount1=mysqli_query("SELECT count(*) as total FROM tbl_activities1 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult1=mysqli_fetch_array($activitiesCount1,mysqli_ASSOC) ;
	$totalPending1[]=$activitiesCountResult1['total'];
	
	
	
	$countComplete1=mysqli_query("SELECT count(*) as total FROM tbl_activities1 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult1=mysqli_fetch_array($countComplete1,mysqli_ASSOC) ;
	$totalComplete1[]=$countCompleteResult1['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Inter state river monitoring", $activitiesList))
  {
  $arrayActvities[]="Inter state river monitoring";
	$activitiesCount2=mysqli_query("SELECT count(*) as total FROM tbl_activities2 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult2=mysqli_fetch_array($activitiesCount2,mysqli_ASSOC) ;
	$totalPending2[]=$activitiesCountResult2['total'];
	
	
	
	$countComplete2=mysqli_query("SELECT count(*) as total FROM tbl_activities2 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult2=mysqli_fetch_array($countComplete2,mysqli_ASSOC) ;
	$totalComplete2[]=$countCompleteResult2['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Monitoring of river/rivulets/drains", $activitiesList))
  {
  $arrayActvities[]="Monitoring of river/rivulets/drains";
	$activitiesCount3=mysqli_query("SELECT count(*) as total FROM tbl_activities3 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult3=mysqli_fetch_array($activitiesCount3,mysqli_ASSOC) ;
	$totalPending3[]=$activitiesCountResult3['total'];
	
	
	
	$countComplete3=mysqli_query("SELECT count(*) as total FROM tbl_activities3 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult3=mysqli_fetch_array($countComplete3,mysqli_ASSOC) ;
	$totalComplete3[]=$countCompleteResult3['total'];
  }
  /*-------------------------------------------------------------------*/



 /*------------------------------------------------------------
*/if (in_array("CETPs", $activitiesList))
  {
  $arrayActvities[]="CETPs";
	$activitiesCount4=mysqli_query("SELECT count(*) as total FROM tbl_activities4 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult4=mysqli_fetch_array($activitiesCount4,mysqli_ASSOC) ;
	$totalPending4[]=$activitiesCountResult4['total'];
	
	
	
	$countComplete4=mysqli_query("SELECT count(*) as total FROM tbl_activities4 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult4=mysqli_fetch_array($countComplete4,mysqli_ASSOC) ;
	$totalComplete4[]=$countCompleteResult4['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("CHWTSDF", $activitiesList))
  {
  $arrayActvities[]="CHWTSDF";
	$activitiesCount5=mysqli_query("SELECT count(*) as total FROM tbl_activities5 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult5=mysqli_fetch_array($activitiesCount5,mysqli_ASSOC) ;
	$totalPending5[]=$activitiesCountResult5['total'];
	
	
	
	$countComplete5=mysqli_query("SELECT count(*) as total FROM tbl_activities5 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult5=mysqli_fetch_array($countComplete5,mysqli_ASSOC) ;
	$totalComplete5[]=$countCompleteResult5['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("CBMWTF", $activitiesList))
  {
  $arrayActvities[]="CBMWTF";
	$activitiesCount6=mysqli_query("SELECT count(*) as total FROM tbl_activities6 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult6=mysqli_fetch_array($activitiesCount6,mysqli_ASSOC) ;
	$totalPending6[]=$activitiesCountResult6['total'];
	
	
	
	$countComplete6=mysqli_query("SELECT count(*) as total FROM tbl_activities6 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult6=mysqli_fetch_array($countComplete6,mysqli_ASSOC) ;
	$totalComplete6[]=$countCompleteResult6['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("STPs", $activitiesList))
  {
  $arrayActvities[]="STPs";
	$activitiesCount7=mysqli_query("SELECT count(*) as total FROM tbl_activities7 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult7=mysqli_fetch_array($activitiesCount7,mysqli_ASSOC) ;
	$totalPending7[]=$activitiesCountResult7['total'];
	
	
	
	$countComplete7=mysqli_query("SELECT count(*) as total FROM tbl_activities7 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult7=mysqli_fetch_array($countComplete7,mysqli_ASSOC) ;
	$totalComplete7[]=$countCompleteResult7['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("SLFs(MSW)", $activitiesList))
  {
  $arrayActvities[]="SLFs(MSW)";
	$activitiesCount8=mysqli_query("SELECT count(*) as total FROM tbl_activities8 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult8=mysqli_fetch_array($activitiesCount8,mysqli_ASSOC) ;
	$totalPending8[]=$activitiesCountResult8['total'];
	
	
	
	$countComplete8=mysqli_query("SELECT count(*) as total FROM tbl_activities8 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult8=mysqli_fetch_array($countComplete8,mysqli_ASSOC) ;
	$totalComplete8[]=$countCompleteResult8['total'];
  }
  /*-------------------------------------------------------------------*/

 /*------------------------------------------------------------
*/if (in_array("Inspections based on SMS alerts from OCEMS of units", $activitiesList))
  {
     $arrayActvities[]="Inspections based on SMS alerts from OCEMS of units";
	$activitiesCount9=mysqli_query("SELECT count(*) as total FROM tbl_activities9 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult9=mysqli_fetch_array($activitiesCount9,mysqli_ASSOC) ;
	$totalPending9[]=$activitiesCountResult9['total'];
	
	
	
	$countComplete9=mysqli_query("SELECT count(*) as total FROM tbl_activities9 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult9=mysqli_fetch_array($countComplete9,mysqli_ASSOC) ;
	$totalComplete9[]=$countCompleteResult9['total'];
	
	

  }
  /*-------------------------------------------------------------------*/
  
  
   /*------------------------------------------------------------
*/if (in_array("Re-inspections/Follow-up visits of units", $activitiesList))
  {
  $arrayActvities[]="Re-inspections/Follow-up visits of units";
	$activitiesCount10=mysqli_query("SELECT count(*) as totals FROM tbl_activities10 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult10=mysqli_fetch_array($activitiesCount10,mysqli_ASSOC) ;
	$totalPending10[]=$activitiesCountResult10['totals'];
	
	
	
	$countComplete10=mysqli_query("SELECT count(*) as totals FROM tbl_activities10 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult10=mysqli_fetch_array($countComplete10,mysqli_ASSOC) ;
	$totalComplete10[]=$countCompleteResult10['totals'];
  }
  /*-------------------------------------------------------------------*/
 

   /*------------------------------------------------------------
*/if (in_array("Inspections for VIP complaint verification", $activitiesList))
  {
 $arrayActvities[]="Inspections for VIP complaint verification";
	$activitiesCount11=mysqli_query("SELECT count(*) as total FROM tbl_activities11 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult11=mysqli_fetch_array($activitiesCount11,mysqli_ASSOC) ;
	$totalPending11[]=$activitiesCountResult11['total'];
	
	
	
	$countComplete11=mysqli_query("SELECT count(*) as total FROM tbl_activities11 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult11=mysqli_fetch_array($countComplete11,mysqli_ASSOC) ;
	$totalComplete11[]=$countCompleteResult11['total'];
  }
  /*-------------------------------------------------------------------*/
   /*------------------------------------------------------------
*/if (in_array("Inspections related with NGT/court matter", $activitiesList))
  {
  $arrayActvities[]="Inspections related with NGT/court matter";
	$activitiesCount12=mysqli_query("SELECT count(*) as total FROM tbl_activities12 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult12=mysqli_fetch_array($activitiesCount12,mysqli_ASSOC) ;
	$totalPending12[]=$activitiesCountResult12['total'];
	
	
	
	$countComplete12=mysqli_query("SELECT count(*) as total FROM tbl_activities12 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult12=mysqli_fetch_array($countComplete12,mysqli_ASSOC) ;
	$totalComplete12[]=$countCompleteResult12['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Monitoring for trail run under HWM Rules", $activitiesList))
  {
    $arrayActvities[]="Monitoring for trail run under HWM Rules";
	$activitiesCount13=mysqli_query("SELECT count(*) as total FROM tbl_activities13 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult13=mysqli_fetch_array($activitiesCount13,mysqli_ASSOC) ;
	$totalPending13[]=$activitiesCountResult13['total'];
	
	
	
	$countComplete13=mysqli_query("SELECT count(*) as total FROM tbl_activities13 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult13=mysqli_fetch_array($countComplete13,mysqli_ASSOC) ;
	$totalComplete13[]=$countCompleteResult13['total'];
  }
  /*-------------------------------------------------------------------*/


   /*------------------------------------------------------------
*/if (in_array("Inspections related with import of hazardous & other waste", $activitiesList))
  {
     $arrayActvities[]="Inspections related with import of hazardous & other waste";
	$activitiesCount14=mysqli_query("SELECT count(*) as total FROM tbl_activities14 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult14=mysqli_fetch_array($activitiesCount14,mysqli_ASSOC) ;
	$totalPending14[]=$activitiesCountResult14['total'];
	
	
	
	$countComplete14=mysqli_query("SELECT count(*) as total FROM tbl_activities14 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult14=mysqli_fetch_array($countComplete14,mysqli_ASSOC) ;
	$totalComplete14[]=$countCompleteResult14['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Meetings/workshops/Training", $activitiesList))
  {
    $arrayActvities[]="Meetings/workshops/Trainingk";
	$activitiesCount15=mysqli_query("SELECT count(*) as total FROM tbl_activities15 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult15=mysqli_fetch_array($activitiesCount15,mysqli_ASSOC) ;
	$totalPending15[]=$activitiesCountResult15['total'];
	
	
	
	$countComplete15=mysqli_query("SELECT count(*) as total FROM tbl_activities15 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult15=mysqli_fetch_array($countComplete15,mysqli_ASSOC) ;
	$totalComplete15[]=$countCompleteResult15['total'];
  }
  /*-------------------------------------------------------------------*/

   /*------------------------------------------------------------
*/if (in_array("Inspections for public complaint verification", $activitiesList))
  {
    $arrayActvities[]="Inspections for public complaint verification";
	$activitiesCount16=mysqli_query("SELECT count(*) as total FROM tbl_activities16 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult16=mysqli_fetch_array($activitiesCount16,mysqli_ASSOC) ;
	$totalPending16[]=$activitiesCountResult16['total'];
	
	
	
	$countComplete16=mysqli_query("SELECT count(*) as total FROM tbl_activities16 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult16=mysqli_fetch_array($countComplete16,mysqli_ASSOC) ;
	$totalComplete16[]=$countCompleteResult16['total'];
  }
  /*-------------------------------------------------------------------*/


   /*------------------------------------------------------------
*/if (in_array("Inspections for ganga complaint verification", $activitiesList))
  {
    $arrayActvities[]="Inspections for ganga complaint verification";
	$activitiesCount17=mysqli_query("SELECT count(*) as total FROM tbl_activities17 where final_Status in(0,1) AND rd_id='".$zo['board']."'");
	$activitiesCountResult17=mysqli_fetch_array($activitiesCount17,mysqli_ASSOC) ;
	$totalPending17[]=$activitiesCountResult17['total'];
	
	
	
	$countComplete17=mysqli_query("SELECT count(*) as total FROM tbl_activities17 where final_Status=2 AND rd_id='".$zo['board']."'");
	$countCompleteResult17=mysqli_fetch_array($countComplete17,mysqli_ASSOC) ;
	$totalComplete17[]=$countCompleteResult17['total'];
  }
  /*-------------------------------------------------------------------*/

}

 $arrayList=array_unique($arrayActvities);
$arrayListImplode=implode(",",$arrayList);
 
 


if(!empty($totalPending)){
$varPending=$totalPending;
}
else
{
$varPending=array(0,0,0,0,0,0);
}

if(!empty($totalPending1)){
$varPending1=$totalPending1;
}
else
{
$varPending1=array(0,0,0,0,0,0);
}

if(!empty($totalPending2)){
$varPending2=$totalPending2;
}
else
{
$varPending2=array(0,0,0,0,0,0);
}


if(!empty($totalPending3)){
$varPending3=$totalPending3;
}
else
{
$varPending3=array(0,0,0,0,0,0);
}

if(!empty($totalPending4)){
$varPending4=$totalPending4;
}
else
{
$varPending4=array(0,0,0,0,0,0);
}

if(!empty($totalPending5)){
$varPending5=$totalPending5;
}
else
{
$varPending5=array(0,0,0,0,0,0);
}

if(!empty($totalPending6)){
$varPending6=$totalPending6;
}
else
{
$varPending6=array(0,0,0,0,0,0);
}

if(!empty($totalPending7)){
$varPending7=$totalPending7;
}
else
{
$varPending7=array(0,0,0,0,0,0);
}


if(!empty($totalPending8)){
$varPending8=$totalPending8;
}
else
{
$varPending8=array(0,0,0,0,0,0);
}



if(!empty($totalPending9)){
$varPending9=$totalPending9;
}
else
{
$varPending9=array(0,0,0,0,0,0);
}

if(!empty($totalPending10)){
$varPending10=$totalPending10;
}
else
{
$varPending10=array(0,0,0,0,0,0);
}


if(!empty($totalPending11)){
$varPending11=$totalPending11;
}
else
{
$varPending11=array(0,0,0,0,0,0);
}


if(!empty($totalPending12)){
$varPending12=$totalPending12;
}
else
{
$varPending12=array(0,0,0,0,0,0);
}


if(!empty($totalPending13)){
$varPending13=$totalPending13;
}
else
{
$varPending13=array(0,0,0,0,0,0);
}

if(!empty($totalPending14)){
$varPending14=$totalPending14;
 }
else
{
$varPending14=array(0,0,0,0,0,0);
}

if(!empty($totalPending15)){
$varPending15=$totalPending15;
 }
else
{
$varPending15=array(0,0,0,0,0,0);
}



if(!empty($totalPending16)){
$varPending16=$totalPending16;
 }
else
{
$varPending16=array(0,0,0,0,0,0);
}


if(!empty($totalPending17)){
$varPending17=$totalPending17;
}
else
{
$varPending17=array(0,0,0,0,0,0);
}



if(!empty($totalComplete)){
$varComplete=$totalComplete;
}
else
{
$varComplete=array(0,0,0,0,0,0);
}


if(!empty($totalComplete1)){
$varComplete1=$totalComplete1;
}
else
{
$varComplete1=array(0,0,0,0,0,0);
}

if(!empty($totalComplete2)){
$varComplete2=$totalComplete2;
}
else
{
$varComplete2=array(0,0,0,0,0,0);
}

if(!empty($totalComplete3)){
$varComplete3=$totalComplete3;
}
else
{
$varComplete3=array(0,0,0,0,0,0);
}

if(!empty($totalComplete4)){
$varComplete4=$totalComplete4;
}
else
{
$varComplete4=array(0,0,0,0,0,0);
}

if(!empty($totalComplete5)){
$varComplete5=$totalComplete5;
}
else
{
$varComplete5=array(0,0,0,0,0,0);
}

if(!empty($totalComplete6)){
$varComplete6=$totalComplete6;
}
else
{
$varComplete6=array(0,0,0,0,0,0);
}

if(!empty($totalComplete7)){
$varComplete7=$totalComplete7;
}
else
{
$varComplete7=array(0,0,0,0,0,0);
}

if(!empty($totalComplete8)){
$varComplete8=$totalComplete8;
}
else
{
$varComplete8=array(0,0,0,0,0,0);
}

if(!empty($totalComplete9)){
$varComplete9=$totalComplete9;
}
else
{
$varComplete9=array(0,0,0,0,0,0);
}
if(!empty($totalComplete10)){
$varComplete10=$totalComplete10;
}
else
{
$varComplete10=array(0,0,0,0,0,0);
}

if(!empty($totalComplete11)){
$varComplete11=$totalComplete11;
}
else
{
$varComplete11=array(0,0,0,0,0,0);
}

if(!empty($totalComplete12)){
$varComplete12=$totalComplete12;
}
else
{
$varComplete12=array(0,0,0,0,0,0);
}

if(!empty($totalComplete13)){
$varComplete13=$totalComplete13;
}
else
{
$varComplete13=array(0,0,0,0,0,0);
}

if(!empty($totalComplete14)){
$varComplete14=$totalComplete14;
}
else
{
$varComplete14=array(0,0,0,0,0,0);
}

if(!empty($totalComplete15)){
$varComplete15=$totalComplete15;
}
else
{
$varComplete15=array(0,0,0,0,0,0);
}

if(!empty($totalComplete16)){
$varComplete16=$totalComplete16;
}
else
{
$varComplete16=array(0,0,0,0,0,0);
}

if(!empty($totalComplete17)){
$varComplete17=$totalComplete17;
}
else
{
$varComplete17=array(0,0,0,0,0,0);
}
 

$c = array_map(function () {
    return array_sum(func_get_args());
}, $varPending,$varPending1,$varPending2,$varPending3,$varPending4,$varPending5,$varPending6,$varPending7,$varPending8,$varPending9,$varPending10,$varPending11,$varPending12,$varPending13,$varPending14,$varPending15,$varPending16,$varPending17);


$d = array_map(function () {
    return array_sum(func_get_args());
}, $varComplete,$varComplete1,$varComplete2,$varComplete3,$varComplete4,$varComplete5,$varComplete6,$varComplete7,$varComplete8,$varComplete9,$varComplete10,$varComplete11,$varComplete12,$varComplete13,$varComplete14,$varComplete15,$varComplete16,$varComplete17);



$zoListData = "'".implode("','", $zoList)."'";
$totalPendingData = implode(',', $c);
$totalCompleteData = implode(',', $d);
	

 
?>

<script type="text/javascript">

Highcharts.chart('container', {
chart: {
type: 'column'
},
title: {
text: 'Status of Work Load of Rds as of <?=date("M-Y")?>'
},
xAxis: {
categories: [<?=$zoListData?>]
},
yAxis: {
allowDecimals: false,
min: 0,

title: {
text: 'Total No of Inspections/Activities Assigned'
},
stackLabels: {
enabled: true,
style: {
fontWeight: 'bold',
color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
}
}
},
legend: {
align: 'right',
x: -30,
verticalAlign: 'top',
y: 25,
floating: true,
backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
borderColor: '#CCC',
borderWidth: 1,
shadow: false
},
tooltip: {
headerFormat: '<b>{point.x}</b><br/>',
pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
},
plotOptions: {
column: {
stacking: 'normal',
dataLabels: {
enabled: false,
color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
}
}
},
series: [
{
name: 'Completed Inbspections',
data: [<?=$totalCompleteData?>]
},{
name: 'Alloted Inspections',
data: [<?=$totalPendingData?>]
}
]
});
</script>
</div>

</div>
<div class="box box-primary no-print">
<div class="box-body">
<h4><span style="color:#FF0000;"><i class="fa fa-fw fa-hand-o-right"></i> Activities</span> :</h4>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="7%">S. No.</th>
    <th width="93%">Activities</th>
  </tr>
  <?php
  $i=1;
   foreach($arrayList as $list){
  
  ?>
  <tr>
    <td><?=$i?></td>
    <td><?=$list?></td>
  </tr>
  <?php $i++; } ?>
</table>

</div></div>
<?php } ?>
 

        </div>
     <?php } ?>
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
