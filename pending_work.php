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
  <title>Workload Assessment System</title>
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
tr td
{
padding:6px;
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
     Pending Data By RD</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Pending Data By RD</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div class="box box-primary no-print">
          <div class="box-body">
           <form action="" method="post">
            <table width="100%" border="0">
             <tr>
          
              <td width="30%"> <input name="fromDate"  value="<?=$_POST['fromDate']?>" placeholder="From Date" class="form-control" id="datepicker-example121" type="text"></td>
               
              <td width="30%"> <input name="toDate"  value="<?=$_POST['toDate']?>" placeholder="To Date" class="form-control" id="datepicker-example122" type="text"></td>
               
                <td width="32%"> <input name="search" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>
      <!-- Main row -->
       <div class="row">
       
    
        <!-- left column -->
        <div class="col-md-12">

<?php 
if(isset($_POST['search']) && $_POST['search']=="Search"){


?>
 
 
   
<h2 class="page-header"> Pending Data</h2>
 
<div class="row">
<?php
 
 
 
//echo "select * from tbl_activities11 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1' AND priority='P1' AND final_Status=1";
$queryByCPCB0=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities0 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1' AND final_Status=1"));
$queryByCPCB1=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities1 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB2=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities2 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB3=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities3 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB4=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities4 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB5=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities5 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB6=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities6 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB7=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities7 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB8=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities8 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB9=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities9 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB10=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities10 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB11=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities11 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB12=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities12 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB13=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities13 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB14=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities14 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB15=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities15 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB16=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities16 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));
$queryByCPCB17=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities17 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P1'  AND final_Status=1"));


$totalqueryByCPCB=$queryByCPCB0+$queryByCPCB1+$queryByCPCB2+$queryByCPCB3+$queryByCPCB4+$queryByCPCB5+$queryByCPCB6+$queryByCPCB7+$queryByCPCB8+$queryByCPCB9+$queryByCPCB10+$queryByCPCB11+$queryByCPCB12+$queryByCPCB13+$queryByCPCB14+$queryByCPCB15+$queryByCPCB16+$queryByCPCB17;
?>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red" onClick="window.open('pending_data.php?fromDate=<?=$_POST['fromDate']?>&toDate=<?=$_POST['toDate']?>&priority=P1','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');"  style="cursor:pointer;">
            <span class="info-box-icon"><i class="fa fa-fw fa-file"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Priority<sup style="text-transform:capitalize">1st</sup></span>
              <span class="info-box-number"><?=$totalqueryByCPCB?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
        
        <?php
		
		$queryP2ByCPCBP0=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities0 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2' AND final_Status=1"));
$queryP2ByCPCBP1=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities1 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP2=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities2 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP3=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities3 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP4=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities4 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP5=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities5 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP6=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities6 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP7=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities7 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP8=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities8 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP9=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities9 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP10=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities10 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP11=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities11 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP12=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities12 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP13=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities13 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP14=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities14 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP15=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities15 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP16=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities16 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));
$queryP2ByCPCBP17=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities17 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P2'  AND final_Status=1"));


$totalqueryP2ByCPCBP=$queryP2ByCPCBP0+$queryP2ByCPCBP1+$queryP2ByCPCBP2+$queryP2ByCPCBP3+$queryP2ByCPCBP4+$queryP2ByCPCBP5+$queryP2ByCPCBP6+$queryP2ByCPCBP7+$queryP2ByCPCBP8+$queryP2ByCPCBP9+$queryP2ByCPCBP10+$queryP2ByCPCBP11+$queryP2ByCPCBP12+$queryP2ByCPCBP13+$queryP2ByCPCBP14+$queryP2ByCPCBP15+$queryP2ByCPCBP16+$queryP2ByCPCBP17;
?>
          <div class="info-box bg-orange" onClick="window.open('pending_data.php?fromDate=<?=$_POST['fromDate']?>&toDate=<?=$_POST['toDate']?>&priority=P2','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');"  style="cursor:pointer;">
            <span class="info-box-icon"><i class="fa fa-fw fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Priority<sup style="text-transform:capitalize">2nd</sup></span>
              <span class="info-box-number"><?=$totalqueryP2ByCPCBP?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
        
         <?php
		
		$queryP3ByCPCBP0=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities0 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3' AND final_Status=1"));
$queryP3ByCPCBP1=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities1 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP2=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities2 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP3=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities3 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP4=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities4 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP5=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities5 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP6=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities6 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP7=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities7 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP8=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities8 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP9=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities9 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP10=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities10 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP11=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities11 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP12=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities12 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP13=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities13 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP14=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities14 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP15=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities15 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP16=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities16 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));
$queryP3ByCPCBP17=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities17 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P3'  AND final_Status=1"));


$totalqueryP3ByCPCBP=$queryP3ByCPCBP0+$queryP3ByCPCBP1+$queryP3ByCPCBP2+$queryP3ByCPCBP3+$queryP3ByCPCBP4+$queryP3ByCPCBP5+$queryP3ByCPCBP6+$queryP3ByCPCBP7+$queryP3ByCPCBP8+$queryP3ByCPCBP9+$queryP3ByCPCBP10+$queryP3ByCPCBP11+$queryP3ByCPCBP12+$queryP3ByCPCBP13+$queryP3ByCPCBP14+$queryP3ByCPCBP15+$queryP3ByCPCBP16+$queryP3ByCPCBP17;
?>
          <div class="info-box bg-yellow" onClick="window.open('pending_data.php?fromDate=<?=$_POST['fromDate']?>&toDate=<?=$_POST['toDate']?>&priority=P3','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');"  style="cursor:pointer;">
            <span class="info-box-icon"><i class="fa fa-fw fa-file-text-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Priority<sup  style="text-transform:capitalize">3rd</sup></span>
              <span class="info-box-number"><?=$totalqueryP3ByCPCBP?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
        
                 <?php
$queryP4ByCPCBP0=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities0 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4' AND final_Status=1"));
$queryP4ByCPCBP1=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities1 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP2=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities2 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP3=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities3 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP4=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities4 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP5=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities5 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP6=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities6 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP7=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities7 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP8=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities8 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP9=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities9 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP10=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities10 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP11=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities11 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP12=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities12 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP13=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities13 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP14=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities14 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP15=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities15 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP16=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities16 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));
$queryP4ByCPCBP17=mysqli_num_rows(mysqli_query($mysqli, " select * from tbl_activities17 where  target_date between '".date("Y-m-d",strtotime($_POST['fromDate']))."' AND '".date("Y-m-d",strtotime($_POST['toDate']))."' AND priority='P4'  AND final_Status=1"));


$totalqueryP4ByCPCBP=$queryP4ByCPCBP0+$queryP4ByCPCBP1+$queryP4ByCPCBP2+$queryP4ByCPCBP3+$queryP4ByCPCBP4+$queryP4ByCPCBP5+$queryP4ByCPCBP6+$queryP4ByCPCBP7+$queryP4ByCPCBP8+$queryP4ByCPCBP9+$queryP4ByCPCBP10+$queryP4ByCPCBP11+$queryP4ByCPCBP12+$queryP4ByCPCBP13+$queryP4ByCPCBP14+$queryP4ByCPCBP15+$queryP4ByCPCBP16+$queryP4ByCPCBP17;
?>
          <div class="info-box bg-green" onClick="window.open('pending_data.php?fromDate=<?=$_POST['fromDate']?>&toDate=<?=$_POST['toDate']?>&priority=P4','','width=1100,height=500,Window1',
'toolbar=yes,status=yes,scrollbars=yes,resizable=yes,menubar=yes');"  style="cursor:pointer;">
            <span class="info-box-icon"><i class="fa fa-fw fa-file-text"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Priority<sup  style="text-transform:capitalize">4th</sup></span>
              <span class="info-box-number"><?=$totalqueryP4ByCPCBP?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div> 
 
 

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

</body>
</html>
