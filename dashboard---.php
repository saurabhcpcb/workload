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
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.js"></script>
 
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
 

.licl
{
float:left;  padding:0px; margin:2px 0px 2px 0px; width:870px;   color:#000;
}
.division
{
 background:#eeeff0; float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:110px;
}

.unit
{
 background:#eeeff0; float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:430px;
}


.target
{
 background:#eeeff0; float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:110px;
}

 
.Priority
{
 background:#eeeff0; float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:70px;
}


.Assigned
{
 background:#eeeff0; float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:140px;
}





.division1
{
 float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:110px;
}

.unit1
{
float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:430px;
}


.target1
{
 float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:110px;
}

 
.Priority1
{
float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:70px;
}


.Assigned1
{
float:left; line-height:18px; height:auto;  border:1px solid #CCCCCC; padding:10px; margin:0px 1px 0px 1px; width:140px;
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
     Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php
	   if($_SESSION['userId']['user_type']=="MS" ){
	 
	   ?>
    <div class="box">
        
        <div class="box-body">
        
          <div class="row">
          <div class="col-xs-12 text-center">
         <form action="" method="get">
            <table width="100%" border="0">
             <tr>
             
             <?php
			
			 if(isset($_GET['month']))
			 {
			 $months=$_GET['month'];
			 }
			 else
			 {
			 $months=date("M-Y");
			 }
			 ?>
              <td width="44%"> <input name="month"  value="<?=$months?>" class="form-control" id="datepicker-example111" type="text"></td>
<td width="13%"><input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
            
            <td width="43%"></td>   </tr>
              </table>
             </form>
          </div>
          </div>
           
        </div>
      
      </div>
      <!-- Main row -->
       <div class="row">
       
    
        <!-- left column -->
        <div class="col-md-12">

<?php 
if(isset($_GET['searchRegionalDirectors']) && $_GET['searchRegionalDirectors']=="Search"){
?>
<?php

$month= date("m", strtotime($_GET['month']));
$year= date("Y", strtotime($_GET['month']));


$i=1;
$rdQuery=mysqli_query("SELECT * FROM tbl_rd ORDER BY RD ASC");
while($rd=mysqli_fetch_array($rdQuery)){
?>        
<h2 class="page-header">


<?=$rd['RD']?></h2>
<div class="row">
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');">P1</span></h3>

</div>
<?php
$proposedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));
$proposedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));
$proposedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));


$totalProposed=$proposedQuery0+$proposedQuery1+$proposedQuery2+$proposedQuery3+$proposedQuery4+$proposedQuery5+$proposedQuery6+$proposedQuery7+$proposedQuery8+$proposedQuery9+$proposedQuery10+$proposedQuery11+$proposedQuery12+$proposedQuery13+$proposedQuery14+$proposedQuery15+$proposedQuery16+$proposedQuery17;
?>


<?php
$allotedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));
$allotedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status =1"));

$allotedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));


$totalalloted=$allotedQuery0+$allotedQuery1+$allotedQuery2+$allotedQuery3+$allotedQuery4+$allotedQuery5+$allotedQuery6+$allotedQuery7+$allotedQuery8+$allotedQuery9+$allotedQuery10+$allotedQuery11+$allotedQuery12+$allotedQuery13+$allotedQuery14+$allotedQuery15+$allotedQuery16+$allotedQuery17;
?>


<?php
$completedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));
$completedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status =2"));

$completedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));


$totalcompleted=$completedQuery0+$completedQuery1+$completedQuery2+$completedQuery3+$completedQuery4+$completedQuery5+$completedQuery6+$completedQuery7+$completedQuery8+$completedQuery9+$completedQuery10+$completedQuery11+$completedQuery12+$completedQuery13+$completedQuery14+$completedQuery15+$completedQuery16+$completedQuery17;
?>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposed?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalalloted?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompleted?></span></a></li>

</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">P2</span></h3>



<?php
$proposedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));
$proposedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));


$totalProposedP2=$proposedP2Query0+$proposedP2Query1+$proposedP2Query2+$proposedP2Query3+$proposedP2Query4+$proposedP2Query5+$proposedP2Query6+$proposedP2Query7+$proposedP2Query8+$proposedP2Query9+$proposedP2Query10+$proposedP2Query11+$proposedP2Query12+$proposedP2Query13+$proposedP2Query14+$proposedP2Query15+$proposedP2Query16+$proposedP2Query17;
?>


<?php
$allotedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));
$allotedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status =1"));

$allotedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));


$totalallotedP2=$allotedP2Query0+$allotedP2Query1+$allotedP2Query2+$allotedP2Query3+$allotedP2Query4+$allotedP2Query5+$allotedP2Query6+$allotedP2Query7+$allotedP2Query8+$allotedP2Query9+$allotedP2Query10+$allotedP2Query11+$allotedP2Query12+$allotedP2Query13+$allotedP2Query14+$allotedP2Query15+$allotedP2Query16+$allotedP2Query17;
?>


<?php
$completedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));
$completedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status =2"));

$completedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));


$totalcompletedP2=$completedP2Query0+$completedP2Query1+$completedP2Query2+$completedP2Query3+$completedP2Query4+$completedP2Query5+$completedP2Query6+$completedP2Query7+$completedP2Query8+$completedP2Query9+$completedP2Query10+$completedP2Query11+$completedP2Query12+$completedP2Query13+$completedP2Query14+$completedP2Query15+$completedP2Query16+$completedP2Query17;
?>
</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP2?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP2?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP2?></span></a></li>

</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">P3</span></h3>

<?php
$proposedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));
$proposedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));


$totalProposedP3=$proposedP3Query0+$proposedP3Query1+$proposedP3Query2+$proposedP3Query3+$proposedP3Query4+$proposedP3Query5+$proposedP3Query6+$proposedP3Query7+$proposedP3Query8+$proposedP3Query9+$proposedP3Query10+$proposedP3Query11+$proposedP3Query12+$proposedP3Query13+$proposedP3Query14+$proposedP3Query15+$proposedP3Query16+$proposedP3Query17;
?>


<?php
$allotedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));
$allotedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status =1"));

$allotedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));


$totalallotedP3=$allotedP3Query0+$allotedP3Query1+$allotedP3Query2+$allotedP3Query3+$allotedP3Query4+$allotedP3Query5+$allotedP3Query6+$allotedP3Query7+$allotedP3Query8+$allotedP3Query9+$allotedP3Query10+$allotedP3Query11+$allotedP3Query12+$allotedP3Query13+$allotedP3Query14+$allotedP3Query15+$allotedP3Query16+$allotedP3Query17;
?>


<?php
$completedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));
$completedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status =2"));

$completedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));


$totalcompletedP3=$completedP3Query0+$completedP3Query1+$completedP3Query2+$completedP3Query3+$completedP3Query4+$completedP3Query5+$completedP3Query6+$completedP3Query7+$completedP3Query8+$completedP3Query9+$completedP3Query10+$completedP3Query11+$completedP3Query12+$completedP3Query13+$completedP3Query14+$completedP3Query15+$completedP3Query16+$completedP3Query17;
?>

</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP3?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP3?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP3?></span></a></li>


</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->

<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">P4</span></h3>

<?php
$proposedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));
$proposedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));


$totalProposedP4=$proposedP4Query0+$proposedP4Query1+$proposedP4Query2+$proposedP4Query3+$proposedP4Query4+$proposedP4Query5+$proposedP4Query6+$proposedP4Query7+$proposedP4Query8+$proposedP4Query9+$proposedP4Query10+$proposedP4Query11+$proposedP4Query12+$proposedP4Query13+$proposedP4Query14+$proposedP4Query15+$proposedP4Query16+$proposedP4Query17;
?>


<?php
$allotedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));
$allotedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status =1"));

$allotedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));


$totalallotedP4=$allotedP4Query0+$allotedP4Query1+$allotedP4Query2+$allotedP4Query3+$allotedP4Query4+$allotedP4Query5+$allotedP4Query6+$allotedP4Query7+$allotedP4Query8+$allotedP4Query9+$allotedP4Query10+$allotedP4Query11+$allotedP4Query12+$allotedP4Query13+$allotedP4Query14+$allotedP4Query15+$allotedP4Query16+$allotedP4Query17;
?>


<?php
$completedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));
$completedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status =2"));

$completedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));


$totalcompletedP4=$completedP4Query0+$completedP4Query1+$completedP4Query2+$completedP4Query3+$completedP4Query4+$completedP4Query5+$completedP4Query6+$completedP4Query7+$completedP4Query8+$completedP4Query9+$completedP4Query10+$completedP4Query11+$completedP4Query12+$completedP4Query13+$completedP4Query14+$completedP4Query15+$completedP4Query16+$completedP4Query17;
?>
</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP4?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP4?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=$_GET['month']?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP4?></span></a></li>


</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
</div>

<?php 
$i++;
}
}

else
{

$month= date("m");
$year= date("Y");
$i=1;
$rdQuery=mysqli_query("SELECT * FROM tbl_rd ORDER BY RD ASC");
while($rd=mysqli_fetch_array($rdQuery)){
 
?>        
<h2 class="page-header"><?=$rd['RD']?></h2>
<div class="row">
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=date("M-Y")?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">P1</span></h3>

</div>
<?php
$proposedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));
$proposedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));

$proposedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 0"));


$totalProposed=$proposedQuery0+$proposedQuery1+$proposedQuery2+$proposedQuery3+$proposedQuery4+$proposedQuery5+$proposedQuery6+$proposedQuery7+$proposedQuery8+$proposedQuery9+$proposedQuery10+$proposedQuery11+$proposedQuery12+$proposedQuery13+$proposedQuery14+$proposedQuery15+$proposedQuery16+$proposedQuery17;
?>


<?php
$allotedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));
$allotedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status =1"));

$allotedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));

$allotedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 1"));


$totalalloted=$allotedQuery0+$allotedQuery1+$allotedQuery2+$allotedQuery3+$allotedQuery4+$allotedQuery5+$allotedQuery6+$allotedQuery7+$allotedQuery8+$allotedQuery9+$allotedQuery10+$allotedQuery11+$allotedQuery12+$allotedQuery13+$allotedQuery14+$allotedQuery15+$allotedQuery16+$allotedQuery17;
?>


<?php
$completedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));
$completedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status =2"));

$completedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));

$completedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P1' AND final_Status = 2"));


$totalcompleted=$completedQuery0+$completedQuery1+$completedQuery2+$completedQuery3+$completedQuery4+$completedQuery5+$completedQuery6+$completedQuery7+$completedQuery8+$completedQuery9+$completedQuery10+$completedQuery11+$completedQuery12+$completedQuery13+$completedQuery14+$completedQuery15+$completedQuery16+$completedQuery17;
?>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=date("M-Y")?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposed?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=date("M-Y")?>','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalalloted?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P1&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompleted?></span></a></li>

</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">P2</span></h3>



<?php
$proposedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));
$proposedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));

$proposedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 0"));


$totalProposedP2=$proposedP2Query0+$proposedP2Query1+$proposedP2Query2+$proposedP2Query3+$proposedP2Query4+$proposedP2Query5+$proposedP2Query6+$proposedP2Query7+$proposedP2Query8+$proposedP2Query9+$proposedP2Query10+$proposedP2Query11+$proposedP2Query12+$proposedP2Query13+$proposedP2Query14+$proposedP2Query15+$proposedP2Query16+$proposedP2Query17;
?>


<?php
$allotedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));
$allotedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status =1"));

$allotedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));

$allotedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 1"));


$totalallotedP2=$allotedP2Query0+$allotedP2Query1+$allotedP2Query2+$allotedP2Query3+$allotedP2Query4+$allotedP2Query5+$allotedP2Query6+$allotedP2Query7+$allotedP2Query8+$allotedP2Query9+$allotedP2Query10+$allotedP2Query11+$allotedP2Query12+$allotedP2Query13+$allotedP2Query14+$allotedP2Query15+$allotedP2Query16+$allotedP2Query17;
?>


<?php
$completedP2Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));
$completedP2Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status =2"));

$completedP2Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));

$completedP2Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P2' AND final_Status = 2"));


$totalcompletedP2=$completedP2Query0+$completedP2Query1+$completedP2Query2+$completedP2Query3+$completedP2Query4+$completedP2Query5+$completedP2Query6+$completedP2Query7+$completedP2Query8+$completedP2Query9+$completedP2Query10+$completedP2Query11+$completedP2Query12+$completedP2Query13+$completedP2Query14+$completedP2Query15+$completedP2Query16+$completedP2Query17;
?>
</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP2?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP2?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P2&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP2?></span></a></li>

</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->
<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">P3</span></h3>

<?php
$proposedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));
$proposedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));

$proposedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 0"));


$totalProposedP3=$proposedP3Query0+$proposedP3Query1+$proposedP3Query2+$proposedP3Query3+$proposedP3Query4+$proposedP3Query5+$proposedP3Query6+$proposedP3Query7+$proposedP3Query8+$proposedP3Query9+$proposedP3Query10+$proposedP3Query11+$proposedP3Query12+$proposedP3Query13+$proposedP3Query14+$proposedP3Query15+$proposedP3Query16+$proposedP3Query17;
?>


<?php
$allotedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));
$allotedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status =1"));

$allotedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));

$allotedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 1"));


$totalallotedP3=$allotedP3Query0+$allotedP3Query1+$allotedP3Query2+$allotedP3Query3+$allotedP3Query4+$allotedP3Query5+$allotedP3Query6+$allotedP3Query7+$allotedP3Query8+$allotedP3Query9+$allotedP3Query10+$allotedP3Query11+$allotedP3Query12+$allotedP3Query13+$allotedP3Query14+$allotedP3Query15+$allotedP3Query16+$allotedP3Query17;
?>


<?php
$completedP3Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));
$completedP3Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status =2"));

$completedP3Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));

$completedP3Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P3' AND final_Status = 2"));


$totalcompletedP3=$completedP3Query0+$completedP3Query1+$completedP3Query2+$completedP3Query3+$completedP3Query4+$completedP3Query5+$completedP3Query6+$completedP3Query7+$completedP3Query8+$completedP3Query9+$completedP3Query10+$completedP3Query11+$completedP3Query12+$completedP3Query13+$completedP3Query14+$completedP3Query15+$completedP3Query16+$completedP3Query17;
?>

</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP3?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP3?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P3&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP3?></span></a></li>


</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
<!-- /.col -->

<div class="col-md-3">
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class="widget-user-header <?php if($i==1){echo"bg-aqua";} if($i==2){echo"bg-yellow";} if($i==3){echo"bg-light-blue";} if($i==4){echo"bg-purple";} if($i==5){echo"bg-olive";}if($i==6){echo"bg-gray";}?>">

<!-- /.widget-user-image -->
<h3 class="widget-user-username"><span onClick="window.open('priority.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">P4</span></h3>

<?php
$proposedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));
$proposedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));

$proposedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 0"));


$totalProposedP4=$proposedP4Query0+$proposedP4Query1+$proposedP4Query2+$proposedP4Query3+$proposedP4Query4+$proposedP4Query5+$proposedP4Query6+$proposedP4Query7+$proposedP4Query8+$proposedP4Query9+$proposedP4Query10+$proposedP4Query11+$proposedP4Query12+$proposedP4Query13+$proposedP4Query14+$proposedP4Query15+$proposedP4Query16+$proposedP4Query17;
?>


<?php
$allotedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));
$allotedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status =1"));

$allotedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));

$allotedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 1"));


$totalallotedP4=$allotedP4Query0+$allotedP4Query1+$allotedP4Query2+$allotedP4Query3+$allotedP4Query4+$allotedP4Query5+$allotedP4Query6+$allotedP4Query7+$allotedP4Query8+$allotedP4Query9+$allotedP4Query10+$allotedP4Query11+$allotedP4Query12+$allotedP4Query13+$allotedP4Query14+$allotedP4Query15+$allotedP4Query16+$allotedP4Query17;
?>


<?php
$completedP4Query0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));
$completedP4Query1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status =2"));

$completedP4Query2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));

$completedP4Query17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND  rd_id='".$rd['RD']."' AND priority='P4' AND final_Status = 2"));


$totalcompletedP4=$completedP4Query0+$completedP4Query1+$completedP4Query2+$completedP4Query3+$completedP4Query4+$completedP4Query5+$completedP4Query6+$completedP4Query7+$completedP4Query8+$completedP4Query9+$completedP4Query10+$completedP4Query11+$completedP4Query12+$completedP4Query13+$completedP4Query14+$completedP4Query15+$completedP4Query16+$completedP4Query17;
?>
</div>
<div class="box-footer<?=$i?> no-padding">
<ul class="nav nav-stacked">
<li><a href="javascript:;" onClick="window.open('work-proposed.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Proposed <span class="pull-right badge bg-blue"><?=$totalProposedP4?></span></a></li>

<li><a href="javascript:;" onClick="window.open('work-alloted.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Alloted <span class="pull-right badge bg-aqua"><?=$totalallotedP4?></span></a></li>

<li><a <a href="javascript:;" onClick="window.open('work-completed.php?rd=<?=urlencode($rd['RD'])?>&activities=P4&month=<?=date("M-Y")?>','','width=1100,height=500,scrollbar=yes');">Work Completed  <span class="pull-right badge bg-green"><?=$totalcompletedP4?></span></a></li>


</ul>
</div>
</div>
<!-- /.widget-user -->
</div>
</div>

<?php 
$i++;
}
}
?>  
 
 

        </div>
     
        <!--/.col (right) -->
      </div>
      <!-- /.row (main row) -->
<?php } ?>
    </section>
    <!-- /.content -->
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
  </div>
  <!-- /.content-wrapper -->
  
 
 <?php
$month=date("m"); 
$year=date("Y"); 
$TotalAllotedQuery0=mysqli_num_rows(mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery1=mysqli_num_rows(mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status =0"));
$TotalAllotedQuery2=mysqli_num_rows(mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery3=mysqli_num_rows(mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery4=mysqli_num_rows(mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery5=mysqli_num_rows(mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery6=mysqli_num_rows(mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery7=mysqli_num_rows(mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery8=mysqli_num_rows(mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery9=mysqli_num_rows(mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery10=mysqli_num_rows(mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery11=mysqli_num_rows(mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery12=mysqli_num_rows(mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery13=mysqli_num_rows(mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery14=mysqli_num_rows(mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery15=mysqli_num_rows(mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery16=mysqli_num_rows(mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));
$TotalAllotedQuery17=mysqli_num_rows(mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status = 0"));


$totalallotedData=$TotalAllotedQuery0+$TotalAllotedQuery1+$TotalAllotedQuery2+$TotalAllotedQuery3+$TotalAllotedQuery4+$TotalAllotedQuery5+$TotalAllotedQuery6+$TotalAllotedQuery7+$TotalAllotedQuery8+$TotalAllotedQuery9+$TotalAllotedQuery10+$TotalAllotedQuery11+$TotalAllotedQuery12+$TotalAllotedQuery13+$TotalAllotedQuery14+$TotalAllotedQuery15+$TotalAllotedQuery16+$TotalAllotedQuery17;
 
 
if($totalallotedData>0 && $_SESSION['userId']['user_type']=="MS"){


?>
 
 <style>
 #fvpp-blackout {
display: none;
z-index: 499;
position: fixed;
width: 100%;
height: 100%;
top: 0;
left: 0;
background: #000;
opacity: 0.8;
}
.close {
color: #000;
float: right;
font-size: 12px; 
opacity: 1; padding:6px;
text-shadow: 0 1px 0 #fff;
}
#my-welcome-message {
display: none;
z-index: 500;
position: fixed;
width: 66%;
left:17%;
top: 20%;
padding: 20px 2%;
font-family: Calibri, Arial, sans-serif;
background: #FFF;
}

#fvpp-close {
position: absolute;
top: 2px;
right: 7px;
cursor: pointer;
}

#fvpp-dialog h2 {
font-size: 2em;
margin: 0;
}

#fvpp-dialog p { margin: 0; }

 </style>
  
 <div id="my-welcome-message" >
<?php
 
$month= date("m");
$year= date("Y");
?>   
       <div class="row">
            <div class="col-md-12" style="overflow-y : auto; height:400px;">
           <h3 style="color:#2a9609; text-align:center; padding-bottom:5px;  border-bottom:4px double #2a9609; font-weight:600;">New Work Proposed</h3>
            
        <table width="100%" border="1">

 <tbody>
<tr>
 
<th width="10%" style="background:#eeeff0;"><strong>Division</strong></th>
<th width="10%" style="background:#eeeff0;"><strong>RD</strong></th>
<th width="38%" style="background:#eeeff0;"><strong>Units Name</strong></th>
<th width="12%" style="background:#eeeff0;"><strong>Target Date</strong></th>
<th width="9%" style="background:#eeeff0;"><strong>Status</strong></th>
<th width="10%" style="background:#eeeff0;"><strong>Priority</strong></th>
<th width="15%" style="background:#eeeff0;"><strong>Assigned on</strong></th>
</tr>  
</tbody>
 
 
<?php
$proposedQuery0=mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND final_Status=0  GROUP BY  activities_name");
while ($proposed0=mysqli_fetch_array($proposedQuery0,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed0['activities_name']?> </h4></td></tr> 
<?php
$i=1;
$proposedQuery0=mysqli_query("select * from tbl_activities0 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed0['activities_name']."' AND final_Status = 0");
while ($activities0=mysqli_fetch_array($proposedQuery0,mysqli_ASSOC)){


$userQuery1=mysqli_query("select * from tbl_user where id=".$activities0['user_id']."");

$userData1=mysqli_fetch_array($userQuery1);
 
?>
 
 
<tr>

<?php
$userQuery0=mysqli_query("select * from tbl_user where id=".$activities0['user_id']."");
$userData0=mysqli_fetch_array($userQuery0);
?>
 
<td valign="top" align="left"> <?=$userData0['Division']?></td>
<td valign="top" align="left"> <?=$activities0['rd_id']?></td>

 <td valign="top" align="left"> 
 
<?=$activities0['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities0['file'])){ ?><a href="upload/<?=$activities0['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities0['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities0['target_date'])); } ?></td>
<td><?php if($activities0['final_Status']==0){ echo "Pending";}?></td>


<td>
<?php if($activities0['priority']=="P1"){echo "P1";}?>
<?php if($activities0['priority']=="P2"){echo "P2";}?>
<?php if($activities0['priority']=="P3"){echo "P3";}?>
<?php if($activities0['priority']=="P4"){echo "P4";}?>

</td>

<td><?php if($activities0['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities0['Proposed_on']));} ?></td>

 
</tr>


<?php $i++;
}

 } ?>




<?php
$proposedQuery1=mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed1=mysqli_fetch_array($proposedQuery1,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed1['activities_name']?> </h4></td></tr> 
<?php
$i=1;
$proposedQuery1=mysqli_query("select * from tbl_activities1 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed1['activities_name']."' AND final_Status = 0");
while ($activities1=mysqli_fetch_array($proposedQuery1,mysqli_ASSOC)){
 
?>

 
<tr>

<?php
$userQuery1=mysqli_query("select * from tbl_user where id=".$activities1['user_id']."");
$userData1=mysqli_fetch_array($userQuery1);
?>
 <td valign="top" align="left"> <?=$userData1['Division']?></td>
 <td valign="top" align="left"> <?=$activities1['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities1['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities1['file'])){ ?><a href="upload/<?=$activities1['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities1['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities1['target_date'])); } ?></td>
<td><?php if($activities1['final_Status']==0){ echo "Pending";}?></td>
<td>

<?php if($activities1['priority']=="P1"){echo "P1";}?>
<?php if($activities1['priority']=="P2"){echo "P2";}?>
<?php if($activities1['priority']=="P3"){echo "P3";}?>
<?php if($activities1['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities1['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities1['Proposed_on']));} ?></td>
<td><input name="submit" value="Final Allotment" class="btn bg-orange" type="submit" onClick="return confirm('Are you sure....?');" ></td>

</tr>
<?php 
$i++;
}

}
 ?>



<?php
$proposedQuery2=mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed2=mysqli_fetch_array($proposedQuery2,mysqli_ASSOC)){
?>
<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed2['activities_name']?> </h4></td></tr> 
 <?php
$i=1;
$proposedQuery2=mysqli_query("select * from tbl_activities2 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed2['activities_name']."' AND final_Status = 0");
while ($activities2=mysqli_fetch_array($proposedQuery2,mysqli_ASSOC)){
 
?>

 
<tr>

<?php
$userQuery2=mysqli_query("select * from tbl_user where id=".$activities2['user_id']."");
$userData2=mysqli_fetch_array($userQuery2);
?>
 <td valign="top" align="left"> <?=$userData2['Division']?></td>
 <td valign="top" align="left"> <?=$activities2['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities2['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities2['file'])){ ?><a href="upload/<?=$activities2['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><input name="target_date2[]" type="text" value="<?=date("d-m-Y",strtotime($activities2['target_date']))?>" class="form-control"  id="datepickerb<?=$i?>"></td>
<td><?php if($activities2['final_Status']==0){ echo "Pending";}?></td>

<td>

<?php if($activities2['priority']=="P1"){echo "P1";}?>
<?php if($activities2['priority']=="P2"){echo "P2";}?>
<?php if($activities2['priority']=="P3"){echo "P3";}?>
<?php if($activities2['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities2['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities2['Proposed_on']));} ?></td>
 
</tr>

<?php $i++;  }  } ?>


<?php
$proposedQuery3=mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed3=mysqli_fetch_array($proposedQuery3,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed3['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery3=mysqli_query("select * from tbl_activities3 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed3['activities_name']."' AND final_Status = 0");
while ($activities3=mysqli_fetch_array($proposedQuery3,mysqli_ASSOC)){
 
?>

 
<tr>

<?php
$userQuery3=mysqli_query("select * from tbl_user where id=".$activities3['user_id']."");
$userData3=mysqli_fetch_array($userQuery3);
?>
 
<td valign="top" align="left"> <?=$userData3['Division']?></td>
 <td valign="top" align="left"> <?=$activities3['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities3['Unit_Name']?> 
 <br> 
<?php if(!empty($activities3['file'])){ ?><a href="upload/<?=$activities3['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities3['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities3['target_date'])); } ?></td>
<td><?php if($activities3['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities3['priority']=="P1"){echo "P1";}?>
<?php if($activities3['priority']=="P2"){echo "P2";}?>
<?php if($activities3['priority']=="P3"){echo "P3";}?>
<?php if($activities3['priority']=="P4"){echo "P4";}?>
</td>
<td><?php if($activities3['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities3['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; 

}
 } 
 
 ?>
 
 
 
 <?php
$proposedQuery4=mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed4=mysqli_fetch_array($proposedQuery4,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed4['activities_name']?> </h4></td></tr> 
 
<?php
$i=1;
$proposedQuery4=mysqli_query("select * from tbl_activities4 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed4['activities_name']."' AND final_Status = 0");
while ($activities4=mysqli_fetch_array($proposedQuery4,mysqli_ASSOC)){
 
?>

 
<tr>

<?php
$userQuery4=mysqli_query("select * from tbl_user where id=".$activities4['user_id']."");
$userData4=mysqli_fetch_array($userQuery4);
?>
 
<td valign="top" align="left"> <?=$userData4['Division']?></td>
<td valign="top" align="left"> <?=$activities4['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities4['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities4['file'])){ ?><a href="upload/<?=$activities4['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities4['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities4['target_date'])); } ?></td>
<td><?php if($activities4['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities4['priority']=="P1"){echo "P1";}?>
<?php if($activities4['priority']=="P2"){echo "P2";}?>
<?php if($activities4['priority']=="P3"){echo "P3";}?>
<?php if($activities4['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities4['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities4['Proposed_on']));} ?></td>
 
</tr>
<?php $i++;  } } ?>



 <?php
$proposedQuery5=mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed5=mysqli_fetch_array($proposedQuery5,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed5['activities_name']?> </h4></td></tr> 

<?php
$i=1;
$proposedQuery5=mysqli_query("select * from tbl_activities5 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed5['activities_name']."' AND final_Status = 0");
while ($activities5=mysqli_fetch_array($proposedQuery5,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery5=mysqli_query("select * from tbl_user where id=".$activities5['user_id']."");
$userData5=mysqli_fetch_array($userQuery5);
?>
 
<td valign="top" align="left"> <?=$userData5['Division']?></td>

<td valign="top" align="left"> <?=$activities5['rd_id']?></td>
<td valign="top" align="left"> 
 
<?=$activities5['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities5['file'])){ ?><a href="upload/<?=$activities5['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities5['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities5['target_date'])); } ?></td>
<td><?php if($activities5['final_Status']==0){ echo "Pending";}?></td>
<td>

<?php if($activities5['priority']=="P1"){echo "P1";}?>
<?php if($activities5['priority']=="P2"){echo "P2";}?>
<?php if($activities5['priority']=="P3"){echo "P3";}?>
<?php if($activities5['priority']=="P4"){echo "P4";}?>
</td>
<td><?php if($activities5['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities5['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>


 <?php
$proposedQuery6=mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed6=mysqli_fetch_array($proposedQuery6,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed6['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery6=mysqli_query("select * from tbl_activities6 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed6['activities_name']."' AND final_Status = 0");
while ($activities6=mysqli_fetch_array($proposedQuery6,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery6=mysqli_query("select * from tbl_user where id=".$activities6['user_id']."");
$userData6=mysqli_fetch_array($userQuery6);
?>
 
<td valign="top" align="left"> <?=$userData6['Division']?></td>
 <td valign="top" align="left"> <?=$activities6['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities6['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities6['file'])){ ?><a href="upload/<?=$activities6['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities6['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities6['target_date'])); } ?></td>
<td><?php if($activities6['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities6['priority']=="P1"){echo "P1";}?>
<?php if($activities6['priority']=="P2"){echo "P2";}?>
<?php if($activities6['priority']=="P3"){echo "P3";}?>
<?php if($activities6['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities6['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities6['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>


 <?php
$proposedQuery7=mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed7=mysqli_fetch_array($proposedQuery7,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed7['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery7=mysqli_query("select * from tbl_activities7 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed7['activities_name']."' AND final_Status = 0");
while ($activities7=mysqli_fetch_array($proposedQuery7,mysqli_ASSOC)){
 
?>


<tr>
 
<?php
$userQuery7=mysqli_query("select * from tbl_user where id=".$activities7['user_id']."");
$userData7=mysqli_fetch_array($userQuery7);
?>
 
<td valign="top" align="left"> <?=$userData7['Division']?></td>
 <td valign="top" align="left"> <?=$activities7['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities7['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities7['file'])){ ?><a href="upload/<?=$activities7['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities7['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities7['target_date'])); } ?></td>
<td><?php if($activities7['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities7['priority']=="P1"){echo "P1";}?>
<?php if($activities7['priority']=="P2"){echo "P2";}?>
<?php if($activities7['priority']=="P3"){echo "P3";}?>
<?php if($activities7['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities7['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities7['Proposed_on']));} ?></td>
</tr>

<?php $i++;  } } ?>



 <?php
$proposedQuery8=mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed8=mysqli_fetch_array($proposedQuery8,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed8['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery8=mysqli_query("select * from tbl_activities8 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND activities_name='".$proposed8['activities_name']."'AND  rd_id='".$_GET['rd']."' AND priority='".$_GET['activities']."' AND final_Status = 0");
while ($activities8=mysqli_fetch_array($proposedQuery8,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery8=mysqli_query("select * from tbl_user where id=".$activities8['user_id']."");
$userData8=mysqli_fetch_array($userQuery8);
?>
 
<td valign="top" align="left"> <?=$userData8['Division']?></td>
<td valign="top" align="left"> <?=$activities8['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities8['Unit_Name']?> 
 <br> 
<?php if(!empty($activities8['file'])){ ?><a href="upload/<?=$activities8['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities8['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities8['target_date'])); } ?></td>
<td><?php if($activities8['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities8['priority']=="P1"){echo "P1";}?>
<?php if($activities8['priority']=="P2"){echo "P2";}?>
<?php if($activities8['priority']=="P3"){echo "P3";}?>
<?php if($activities8['priority']=="P4"){echo "P4";}?>


</td>
<td><?php if($activities8['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities8['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; }  } ?>



 <?php
$proposedQuery9=mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed9=mysqli_fetch_array($proposedQuery9,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed9['activities_name']?> </h4></td></tr> 

<?php
$i=1;
$proposedQuery9=mysqli_query("select * from tbl_activities9 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed9['activities_name']."' AND final_Status = 0");
while ($activities9=mysqli_fetch_array($proposedQuery9,mysqli_ASSOC)){

 
?>
 
<tr>

<?php
$userQuery9=mysqli_query("select * from tbl_user where id=".$activities9['user_id']."");
$userData9=mysqli_fetch_array($userQuery9);
?>
 
<td valign="top" align="left"> <?=$userData9['Division']?></td>
<td valign="top" align="left"> <?=$activities9['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities9['Unit_Name']?> 
 <br> 
 <a href="upload/<?=$activities9['file']?>" target="_blank">View File</a> 
</td>
<td><?php if($activities9['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities9['target_date'])); } ?></td>
<td><?php if($activities9['final_Status']==0){ echo "Pending";}?></td>
<td>

<?php if($activities9['priority']=="P1"){echo "P1";}?>
<?php if($activities9['priority']=="P2"){echo "P2";}?>
<?php if($activities9['priority']=="P3"){echo "P3";}?>
<?php if($activities9['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities9['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities9['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>



 <?php
$proposedQuery10=mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed10=mysqli_fetch_array($proposedQuery10,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed10['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery10=mysqli_query("select * from tbl_activities10 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed10['activities_name']."' AND final_Status = 0");
while ($activities10=mysqli_fetch_array($proposedQuery10,mysqli_ASSOC)){

?>
 
<tr>

<?php
$userQuery10=mysqli_query("select * from tbl_user where id=".$activities10['user_id']."");
$userData10=mysqli_fetch_array($userQuery10);
?>
 
<td valign="top" align="left"> <?=$userData10['Division']?></td>
<td valign="top" align="left"> <?=$activities10['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities10['Unit_Name']?> 
 <br> 
<?php if(!empty($activities10['file'])){ ?><a href="upload/<?=$activities10['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities10['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities10['target_date'])); } ?></td>
<td><?php if($activities10['final_Status']==0){ echo "Pending";}?></td>
<td>

<?php if($activities10['priority']=="P1"){echo "P1";}?>
<?php if($activities10['priority']=="P2"){echo "P2";}?>
<?php if($activities10['priority']=="P3"){echo "P3";}?>
<?php if($activities10['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities10['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities10['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; } } ?>


 <?php
$proposedQuery11=mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed11=mysqli_fetch_array($proposedQuery11,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed11['activities_name']?> </h4></td></tr> 


<?php
$i=1;
$proposedQuery11=mysqli_query("select * from tbl_activities11 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed11['activities_name']."' AND final_Status = 0");
while ($activities11=mysqli_fetch_array($proposedQuery11,mysqli_ASSOC)){

?>
 
<tr>

<?php
$userQuery11=mysqli_query("select * from tbl_user where id=".$activities11['user_id']."");
$userData11=mysqli_fetch_array($userQuery11);
?>
 
<td valign="top" align="left"> <?=$userData11['Division']?></td>
<td valign="top" align="left"> <?=$activities11['rd_id']?></td>
 
 <td valign="top" align="left"> 
 
<?=$activities11['Unit_Name']?> 
 <br> 
<?php if(!empty($activities11['file'])){ ?><a href="upload/<?=$activities11['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities11['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities11['target_date'])); } ?></td>
<td><?php if($activities11['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities11['priority']=="P1"){echo "P1";}?>
<?php if($activities11['priority']=="P2"){echo "P2";}?>
<?php if($activities11['priority']=="P3"){echo "P3";}?>
<?php if($activities11['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities11['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities11['Proposed_on']));} ?></td>
 
</tr>

<?php $i++; }  } ?>


 <?php
$proposedQuery12=mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed12=mysqli_fetch_array($proposedQuery12,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed12['activities_name']?> </h4></td></tr> 



<?php
$i=1;
$proposedQuery12=mysqli_query("select * from tbl_activities12 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed12['activities_name']."' AND final_Status = 0");
while ($activities12=mysqli_fetch_array($proposedQuery12,mysqli_ASSOC)){
  
?>
 
<tr>

<?php
$userQuery12=mysqli_query("select * from tbl_user where id=".$activities12['user_id']."");
$userData12=mysqli_fetch_array($userQuery12);
?>
 
<td valign="top" align="left"> <?=$userData12['Division']?></td>
<td valign="top" align="left"> <?=$activities12['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities12['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities12['file'])){ ?><a href="upload/<?=$activities12['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities12['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities12['target_date'])); } ?></td>
<td><?php if($activities12['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities12['priority']=="P1"){echo "P1";}?>
<?php if($activities12['priority']=="P2"){echo "P2";}?>
<?php if($activities12['priority']=="P3"){echo "P3";}?>
<?php if($activities12['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities12['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities12['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




 <?php
$proposedQuery13=mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed13=mysqli_fetch_array($proposedQuery13,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed13['activities_name']?> </h4></td></tr> 



<?php
$i=1;
$proposedQuery13=mysqli_query("select * from tbl_activities13 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed13['activities_name']."' AND final_Status = 0");
while ($activities13=mysqli_fetch_array($proposedQuery13,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery13=mysqli_query("select * from tbl_user where id=".$activities13['user_id']."");
$userData13=mysqli_fetch_array($userQuery13);
?>
 
<td valign="top" align="left"> <?=$userData13['Division']?></td>
 <td valign="top" align="left"> <?=$activities13['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities13['Unit_Name']?> 
 <br> 
<?php if(!empty($activities13['file'])){ ?><a href="upload/<?=$activities13['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities13['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities13['target_date'])); } ?></td>
<td><?php if($activities13['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities13['priority']=="P1"){echo "P1";}?>
<?php if($activities13['priority']=="P2"){echo "P2";}?>
<?php if($activities13['priority']=="P3"){echo "P3";}?>
<?php if($activities13['priority']=="P4"){echo "P4";}?>


</td>
<td><?php if($activities13['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities13['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




 <?php
//echo "select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name"; 
$proposedQuery14=mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed14=mysqli_fetch_array($proposedQuery14,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed14['activities_name']?> </h4></td></tr> 

<?php
$i=1;
$proposedQuery14=mysqli_query("select * from tbl_activities14 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed14['activities_name']."' AND final_Status = 0");


while ($activities14=mysqli_fetch_array($proposedQuery14,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery14=mysqli_query("select * from tbl_user where id=".$activities14['user_id']."");
$userData14=mysqli_fetch_array($userQuery14);
?>
 
<td valign="top" align="left"> <?=$userData14['Division']?></td>
 <td valign="top" align="left"> <?=$activities14['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities14['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities14['file'])){ ?><a href="upload/<?=$activities14['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities14['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities14['target_date'])); } ?></td>
<td><?php if($activities14['final_Status']==0){ echo "Pending";}?></td>
<td>

<?php if($activities14['priority']=="P1"){echo "P1";}?>
<?php if($activities14['priority']=="P2"){echo "P2";}?>
<?php if($activities14['priority']=="P3"){echo "P3";}?>
<?php if($activities14['priority']=="P4"){echo "P4";}?>
</td>
<td><?php if($activities14['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities14['Proposed_on']));} ?></td>
 
</tr>
<?php $i++; } } ?>




<?php
$proposedQuery15=mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed15=mysqli_fetch_array($proposedQuery15,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed15['activities_name']?> </h4></td></tr>
<?php
$k=1;
$proposedQuery15=mysqli_query("select * from tbl_activities15 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed15['activities_name']."' AND final_Status = 0");
while ($activities15=mysqli_fetch_array($proposedQuery15,mysqli_ASSOC)){
 
?>
 
 
<tr>

<?php
$userQuery15=mysqli_query("select * from tbl_user where id=".$activities15['user_id']."");
$userData15=mysqli_fetch_array($userQuery15);
?>

<td valign="top" align="left"> <?=$userData15['Division']?></td>
<td valign="top" align="left"> <?=$activities15['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities15['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities15['file'])){ ?><a href="upload/<?=$activities15['file']?>" target="_blank">View File</a> <?php } ?> 
</td>
<td><?php if($activities15['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities15['target_date'])); } ?></td>
<td><?php if($activities15['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities15['priority']=="P1"){echo "P1";}?>
<?php if($activities15['priority']=="P2"){echo "P2";}?>
<?php if($activities15['priority']=="P3"){echo "P3";}?>
<?php if($activities15['priority']=="P4"){echo "P4";}?>

</td>
<td><?php if($activities15['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities15['Proposed_on']));} ?></td>
 
</tr>
 
<?php $k++; 

 }

}
 ?>


<?php
$proposedQuery16=mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed16=mysqli_fetch_array($proposedQuery16,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed16['activities_name']?> </h4></td></tr>
<?php
$i=1;
$proposedQuery16=mysqli_query("select * from tbl_activities16 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed16['activities_name']."' AND final_Status = 0");
while ($activities16=mysqli_fetch_array($proposedQuery16,mysqli_ASSOC)){
 
?>
 
<tr>

<?php
$userQuery16=mysqli_query("select * from tbl_user where id=".$activities16['user_id']."");
$userData16=mysqli_fetch_array($userQuery16);
?>
 
<td valign="top" align="left"> <?=$userData16['Division']?></td>
<td valign="top" align="left"> <?=$activities16['rd_id']?></td> 
 <td valign="top" align="left"> 
 
<?=$activities16['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities16['file'])){ ?><a href="upload/<?=$activities16['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities16['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities16['target_date'])); } ?></td>
<td><?php if($activities16['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities16['priority']=="P1"){echo "P1";}?>
<?php if($activities16['priority']=="P2"){echo "P2";}?>
<?php if($activities16['priority']=="P3"){echo "P3";}?>
<?php if($activities16['priority']=="P4"){echo "P4";}?>
</td>
<td><?php if($activities16['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities16['Proposed_on']));} ?></td>
 
</tr>
<?php $i++;  }


} ?>


<?php
$proposedQuery17=mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month."  AND final_Status=0  GROUP BY  activities_name");
while ($proposed17=mysqli_fetch_array($proposedQuery17,mysqli_ASSOC)){
?>

<tr><td colspan="8"><h4 style="color:#1155cc; text-decoration:underline; font-weight:600;"><i class="fa fa-fw fa-long-arrow-right"></i><?=$proposed17['activities_name']?> </h4></td></tr>

<?php
$i=1;
$proposedQuery17=mysqli_query("select * from tbl_activities17 where  YEAR(Proposed_on) = ".$year." AND MONTH(Proposed_on) = ".$month." AND activities_name='".$proposed17['activities_name']."' AND final_Status = 0");
while ($activities17=mysqli_fetch_array($proposedQuery17,mysqli_ASSOC)){
 
?>


<tr>
 
<?php
$userQuery17=mysqli_query("select * from tbl_user where id=".$activities17['user_id']."");
$userData17=mysqli_fetch_array($userQuery17);
?>
 
<td valign="top" align="left"> <?=$userData17['Division']?></td>
 <td valign="top" align="left"> <?=$activities17['rd_id']?></td>
 <td valign="top" align="left"> 
 
<?=$activities17['Unit_Name']?> 
 <br> 
 <?php if(!empty($activities17['file'])){ ?><a href="upload/<?=$activities17['file']?>" target="_blank">View File</a> <?php } ?>
</td>
<td><?php if($activities17['target_date']=="1970-01-01"){ echo "---";} else { echo date("d-m-Y",strtotime($activities17['target_date'])); } ?></td>
<td><?php if($activities17['final_Status']==0){ echo "Pending";}?></td>
<td>
<?php if($activities17['priority']=="P1"){echo "P1";}?>
<?php if($activities17['priority']=="P2"){echo "P2";}?>
<?php if($activities17['priority']=="P3"){echo "P3";}?>
<?php if($activities17['priority']=="P4"){echo "P4";}?>
</td>
<td><?php if($activities17['Proposed_on']=="0000-00-00 00:00:00") { echo "0000-00-00 00:00:00"; } else { echo date("d-m-Y h:i a", strtotime($activities17['Proposed_on']));} ?></td>
</tr>

<?php $i++;  } 
}
?>
                          
 </table>    
             

 </div>
</div>
            </div>
            
      <script src="js/firstVisitPopup.js"></script> 
<script>
 
			$(function () {
				$('#my-welcome-message').firstVisitPopup({
					cookieName : 'homepage',
					showAgainSelector: '#show-message'
				});
			});
		</script>        
            
  <?php } ?>       
        
      
      
        
 

    
    
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
