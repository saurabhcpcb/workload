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
      Search Agenda </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Search Agenda</li>
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
<form action="" method="get">
<table width="100%" border="1">
  <tr>
    <td width="20%">
	<input name="from_date"  value="<?=$_GET['from_date']?>" placeholder="From Date" class="form-control" id="datepicker-example11" type="text"></td>
	<td width="20%">
	<input name="to_date"  value="<?=$_GET['to_date']?>" placeholder="To Date" class="form-control" id="datepicker-example13" type="text"></td>
    <td width="38%"><select name="userId" class="form-control" required>
								<option value=" ">Select Option</option>
                              <option value="Regional Director" <?=($_GET['userId']=="Regional Director")?'selected':''?>  >Regional Directors</option>
                              <option value="Divisional Head" <?=($_GET['userId']=="Divisional Head")?'selected':''?> >Divisional Head</option>
                  </select></td>
    <td width="32%"> <input name="monthlyActivities" type="submit"  class="btn bg-olive margin" value="Submit"></td>
  </tr>
</table>
</form>

</div>
</div>

<?php
if(isset($_GET['monthlyActivities']) && $_GET['userId']=="Divisional Head") {

 $date_from=date("Y-m-d",strtotime($_GET['from_date']));
 $date_to=date("Y-m-d",strtotime($_GET['to_date']));	  
					 
?> 

<div class="box box-primary">
      <div class="box-body">
<?php

if(!empty($_SESSION['messageData']))
{
?>

<div class="alert alert-success">
<?=$_SESSION['messageData']?>

</div>

<?php
$_SESSION['messageData']="";
}
?>
   <h3 align="center">Central Pollution Control Board 
</h3>
  
  <h4 align="center">Agenda for Video Conferencing </h4>
            
 
   
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>S. No.</th>
                  <th>Division</th>
                   <th>Subject</th>
                    <th>Regional Director</th>
                   <th>Created Date</th>
                 
                  
                
                  
                 
                </tr>
                </thead>
                <tbody>
                
               <?php
				
					 
					  
					  

					  $i=1;
			  $query="select * from tbl_agenda where created BETWEEN '".$date_from."' AND '".$date_to."'   ORDER BY id DESC ";
					  
					  $res=mysqli_query($query);
					  while($row=mysqli_fetch_array($res)){
					  ?> 
                        <tr>
                        <td><?=$i?></td>
                        
                          <td><?=$row['name_of_division']?></td>
                          <td><?=$row['subject']?></td>
                          <td><?=$row['regional_director']?></td>
                           <td><?=date("d-m-Y",strtotime($row['created']))?></td>
                      
                          
                        </tr>
                         <?php
						  $i++;
						 }
						
						 ?>
               </table>

                                                        
 
                                                            
 
                     
         
<?php
}



?>  

<?php
if(isset($_GET['monthlyActivities']) && $_GET['userId']=="Regional Director") {

 $date_from=date("Y-m-d",strtotime($_GET['from_date']));
 $date_to=date("Y-m-d",strtotime($_GET['to_date']));	  
					 
?> 
  
<div class="box box-primary">
      <div class="box-body">
<?php

if(!empty($_SESSION['messageData']))
{
?>

<div class="alert alert-success">
<?=$_SESSION['messageData']?>

</div>

<?php
$_SESSION['messageData']="";
}
?>
   <h3 align="center">Central Pollution Control Board 
</h3>
  
  <h4 align="center">Agenda for Video Conferencing </h4>
            
 
   
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>S. No.</th>
                  <th>Regional Director</th>
                   <th>Subject</th>
                    <th>Division</th>
                   <th>Created Date</th>
                 
                  
                
                  
                 
                </tr>
                </thead>
                <tbody>
                
               <?php
				
					 
					  
					  

					  $i=1;
			  $query="select * from tbl_agenda_rd where created BETWEEN '".$date_from."' AND '".$date_to."'   ORDER BY id DESC ";
					  
					  $res=mysqli_query($query);
					  while($row=mysqli_fetch_array($res)){
					  ?> 
                        <tr>
                        <td><?=$i?></td>
                        <td><?=$row['name_of_board']?></td>
                          
                          <td><?=$row['subject']?></td>
                          <td><?=$row['division']?></td>
                           <td><?=date("d-m-Y",strtotime($row['created']))?></td>
                      
                          
                        </tr>
                         <?php
						  $i++;
						 }
						
						 ?>
               </table>

                                                        
 
                                                            
 
                     
         
<?php
}
 ?>
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
