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
.style3 {color: #000000}
  body {
	background-image: url(images/bg.jpg);
	background-color: #CCCCCC;
}
.style5 {color: #000000; font-weight: bold; }
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
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
     Default Priorities</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       
     
        
        <div class="box box-primary no-print">
        
          <div class="row">
          <div class="col-xs-12 text-left">
         <table cellspacing="0" cellpadding="0" width="100%" border="1">
         <tr>
<td width="5%" bgcolor="#CCCCCC"><strong>S. No.</strong></td>
<td width="6%" bgcolor="#CCCCCC"><strong>Priority</strong></td>
<td width="89%" bordercolor="#000000" bgcolor="#CCCCCC"><span class="style5">Activities Name</span></td>
</tr>
<tr>
<td>1</td>
<td bgcolor="#E2E2E2"><strong>P1</strong></td>
<td bordercolor="#000000"><span class="style3">Water quality monitoring stations & no. of inspection during the month</span></td>
</tr>
<tr>
<td>2</td>
<td bgcolor="#E2E2E2"><strong>P1</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections for VIP complaint verification</span></td>
</tr>
<tr>
<td>3</td>
<td bgcolor="#E2E2E2"><strong>P2</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections based on SMS alerts from OCEMS of units</span></td>
</tr>
<tr>
<td>4</td>
<td bgcolor="#E2E2E2"><strong>P2</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections related with NGT/court matter</span></td>
</tr>
<tr>
<td>5</td>
<td bgcolor="#E2E2E2"><strong>P3</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections for public complaint verification</span></td>
</tr>
<tr>
<td>6</td>
<td bgcolor="#E2E2E2"><strong>P3</strong></td>
<td bordercolor="#000000"><span class="style3">Re-inspections/Follow-up visits of units</span></td>
</tr>

<tr>
<td>7</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Ambient air quality monitoring stations &amp;amp; no. of inspection    during the month</span></td>
</tr>
<tr>
<td>8</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Inter state river monitoring</span></td>
</tr>
<tr>
<td>9</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Monitoring of river/rivulets/drains</span></td>
</tr>
<tr>
<td>10</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">CETPs</span></td>
</tr>
<tr>
<td>11</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">CHWTSDF</span></td>
</tr>
<tr>
<td>12</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">CBMWTF</span></td>
</tr>
<tr>
<td>13</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">STPs</span></td>
</tr>
<tr>
<td>14</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">SLFs(MSW)</span></td>
</tr>



<tr>
<td>15</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Monitoring for trail run under HWM Rules</span></td>
</tr>
<tr>
<td>16</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections related with import of hazardous &amp; other waste</span></td>
</tr>
<tr>
<td>17</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Meetings/workshops/Training</span></td>
</tr>

<tr>
<td>18</td>
<td bgcolor="#E2E2E2"><strong>P4</strong></td>
<td bordercolor="#000000"><span class="style3">Inspections for Ganga complaince verification</span></td>
</tr>
</table>
          </div>
          </div>
           
        </div>
      
     
      <!-- Main row -->
        
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
