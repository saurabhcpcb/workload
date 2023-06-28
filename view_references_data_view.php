<?php 
ob_start();
session_start();
ini_set('display_errors','0');
 
 
date_default_timezone_set('Asia/Kolkata');
 
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password = "";
$mysql_database = "project_management";
@mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some thing went wrong");
mysql_select_db($mysql_database) or die("Opps some thing went wrong");
 
 
$getQuery=mysql_query("SELECT * FROM projects where id ='".$_GET['id']."'"); 
$row=mysql_fetch_array($getQuery);



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
        
        <li class="active">View References</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
             <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                 
                </tr>
                <tr>
                  <td>1</td>
                  <td>Subject</td>
                   
                  <td><?=$row['projectTitle']?></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Issues to be addressed</td>
                  <td><?=$row['Remark']?></td>
                  
                </tr>
                <tr>
                  <td>3</td>
                  <td>Minister’s Remarks</td>
                  
                  <td><?=$row['Minister_Remark']?></td>
                </tr>
				


                <tr>
                  <td>4</td>
                  <td>Target Date</td>
                  <td><?=date("d-m-Y", strtotime($row['Target_Date']))?></td>
                   
                </tr>
				
				<tr>
                  <td>5</td>
                  <td>Name</td>
                  <td><?=$_SESSION['userId']['Officer']?></td>
                   
                </tr>
				 
				<tr>
                  <td>6</td>
                  <td>Action required and Action taken</td>
                  <td><?=$row['Action_Taken']?></td>
                  
                </tr>
				
				<tr>
                  <td>7</td>
                  <td>Facts in the case as ascertained by CPCB</td>
                  <td><?=$row['Facts_Case']?></td>
                  
                </tr>
				
				<tr>
                  <td>8.</td>
                  <td>Any action required in future with timeline</td>
                  <td><?=$row['Action_Required_Future']?></td>
                  
                </tr>
				
				<tr>
                  <td>9</td>
                  <td>Date</td>
                 
                  <td><?=date("d-m-Y", strtotime($row['Recieved_Date']))?></td>
                </tr>
				
				
				<tr>
                  <td>10</td>
                  <td>Status</td>
                  <td><?=$row['status']?></td>
                  
                </tr>
              </table>
            </div>
          </div>
         

        </div>
        <!--/.col (left) -->
        <!-- right column -->
         <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
             <div class="box-body">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Trand</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Action required and Action taken</th>
                  <th>Facts in the case as ascertained by CPCB</th>
                  <th>Any action required in future with timeline</th>
                  <th>Target Date</th>
				  <th>Comment Added By</th>
                </tr>
                </thead>
                <tbody>
				<?php
$i=1;
$query="SELECT * FROM  comments_table where activity_id='".$_GET['id']."'  ORDER BY  id ASC  ";
$res=mysql_query($query);
while($row=mysql_fetch_array($res)){
?> 
<tr>
<td><?=$i?></td>
<td><?=$row['Action_Taken']?></td>
<td><?=$row['Facts_Case']?></td>
<td><?=$row['Action_Future']?></td>
<td><?=date("d-m-Y",strtotime($row['Target_date']))?></td>
<td><?=$row['Comment_Added_By']?></td>
</tr>

<?php
$i++;
}
?>
                
                </tbody>
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
          </div>
         

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php
  include_once"includes/footer.php";
  ?>

 
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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
