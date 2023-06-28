<?php 
ob_start();
session_start();
ini_set('display_errors','0');
 
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
 
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password = "";
$mysql_database = "project_management";
@mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some thing went wrong");
mysql_select_db($mysql_database) or die("Opps some thing went wrong");
 
 
$Officer=$_SESSION['userId']['Officer'];
 
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
      View References
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> View References</li>
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
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>S. No.</th>
                  <th>Subject</th>
                   <th>Received From </th>
				  <th> Received Date</th>
                    <th>Minister’s Remarks</th>
                   <th>Issues to be addressed</th>
                  <th>Status</th>
                  
                <th>Action</th>


 



                  
                 
                </tr>
                </thead>
                <tbody>
                
<?php
$i=1;
$query="SELECT * FROM  projects where user_id_1='".$Officer."' OR user_id_2='".$Officer."' ORDER BY  id DESC  ";
$res=mysql_query($query);
while($row=mysql_fetch_array($res)){
?> 
                        <tr>
                        <td><?=$i?></td>
                        
                          <td><?=$row['projectTitle']?></td>
                          <td><?=$row['RecievedFrom']?></td>
                          <td><?=date("d-m-Y",strtotime($row['Recieved_Date']))?></td>
						  <td><?=$row['Minister_Remark']?></td>
                           <td><?=$row['Remark']?></td>
                      
                          <td><?=$row['status']?></td>
						  <td><?php if($row['status']=="Pending"){?><a href="view_references_data_update.php?id=<?=$row['id']?>">Update</a><?php } else { ?> <a href="view_references_data_view.php?id=<?=$row['id']?>">View</a> <?php } ?></td>
                        </tr>
                         <?php
						  $i++;
						 }
						
						 ?>
               </table>
            </div>
          </div>
          <!-- /.box -->

     

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
