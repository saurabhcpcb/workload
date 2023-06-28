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
 
 
$getQuery=mysql_query("SELECT * FROM projects where id ='".$_GET['id']."'"); 
$row=mysql_fetch_array($getQuery);



?>

<?php
if($_POST['submit'] && $_POST['submit']=="Submit")
{
 
$updateQuery=mysql_query("UPDATE projects SET Action_Taken='".addslashes($_POST['Action_Taken'])."',Facts_Case='".addslashes($_POST['Facts_Case'])."',Action_Required_Future='".addslashes($_POST['Action_Required_Future'])."',Recieved_Date='".addslashes($_POST['Recieved_Date'])."',status='".addslashes($_POST['status'])."' where id=".$_POST['dataId']."");

if($updateQuery){

$insertQuery="INSERT INTO comments_table(activity_id, Action_Taken, Facts_Case, Action_Future, Target_date, user_id, Comment_Added_By, created) VALUES (".$_POST['dataId'].",'".addslashes($_POST['Action_Taken'])."','".addslashes($_POST['Facts_Case'])."','".addslashes($_POST['Action_Required_Future'])."','".addslashes($_POST['Target_Date'])."','".addslashes($_POST['username'])."','".addslashes($_POST['Officer'])."','".date("Y-m-d H:i:s")."')";

mysql_query($insertQuery);

$_SESSION['message']="Successfully update";
header('location:view_references_data.php');
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
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
 
			
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
			<input name="dataId" type="hidden" value="<?=$_GET['id']?>">
			 <input type="hidden" value="<?=$_SESSION['userId']['username']?>" name="username" >
              <div class="box-body">
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" value="<?=$row['projectTitle']?>" readonly class="form-control">
                </div>
                <div class="form-group">
                  <label>Issues to be addressed</label>
                  <input type="text" value="<?=$row['Remark']?>" readonly class="form-control">
                </div>
				
				  <div class="form-group">
                  <label>Minister’s Remarks</label>
                  <input type="text" value="<?=$row['Minister_Remark']?>" readonly class="form-control">
                </div>
				
				<div class="form-group">
                  <label>Target Date</label>
                  <input type="text" value="<?=$row['Target_Date']?>"  name="Target_Date"  readonly class="form-control">
                </div>
				
				 
				  <div class="form-group">
                  <label>Name</label>
                  <input type="text" value="<?=$_SESSION['userId']['Officer']?>" name="Officer" readonly  class="form-control">
                </div>
				
				  
				  <div class="form-group">
                  <label>Action required and Action taken</label>
				  <textarea name="Action_Taken" cols="" rows="" class="form-control"><?=$row['Action_Taken']?></textarea>
                  
                </div>
				  <div class="form-group"> 
                  <label>Facts in the case as ascertained by CPCB</label>
                   <textarea name="Facts_Case" cols="" rows="" class="form-control"><?=$row['Facts_Case']?></textarea>
                </div>
				  <div class="form-group">
                  <label>Any action required in future with timeline</label>
                   <textarea name="Action_Required_Future" cols="" rows="" class="form-control"><?=$row['Action_Required_Future']?></textarea>
                </div>
				  <div class="form-group">
                  <label>Select Date: (Calender)</label>
                  <input type="date" class="form-control" name="Recieved_Date" value="<?=$row['Recieved_Date']?>" style="line-height: 20px;">
                </div>
                  <div class="form-group">
                  <label>Status : Pending or completed in dropdown</label>
                   <select name="status" class="form-control">
				   <option value="Pending">Pending</option>
				   <option value="Completed ">Completed</option>
				   </select>
                </div>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                
              </div>
            </form>
          </div>
         

        </div>
        <!--/.col (left) -->
        <!-- right column -->
         
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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
