<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
//echo "select * from tbl_user where username='".$_SESSION['userId']['username']."'";
$ses_sql1= mysqli_query("select * from tbl_user where username='".$_SESSION['userId']['username']."'");
$row1 = mysqli_fetch_array($ses_sql1);

?>



<?php
if(isset($_POST['submit']))
{
	
	
$insetUserQuery="INSERT INTO tbl_agenda (user_id,name_of_division, subject, regional_director, created) VALUES 
('".$row1['id']."',
 '".addslashes($_POST['name_of_division'])."', 
 
 '".addslashes($_POST['subject'])."',
  '".addslashes($_POST['regional_director'])."', 
  '".date("Y-m-d")."')";
  
if(mysqli_query($insetUserQuery))
{
$_SESSION['message']="Agenda added in the list.";
header("location:view_agenda.php");

}  
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Workload Allotment System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
 
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
       Add Agenda
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Agenda</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-8">
        
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
          
          <!-- /.box -->
 <div class="box box-primary no-print">
             <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  method="post"  action="" enctype="multipart/form-data">
			<table  border="1" class="table table-bordered table-striped">
            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Name Of Division</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="name_of_division" value="<?=$row1['Division']?>"  id="inputEmail3" tabindex="-1" readonly>
                  </div>
                </div>
              
				
				 
			
			
			
			
			
			
			
			 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Subject</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="subject" rows="3" ></textarea>
                  </div>
                </div>
				
				 
				
				
			  
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Regional Director</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="regional_director" rows="3" id="inputEmail3" >
                  </div>
                </div>
			
                
             
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
			  </table>
			  <div class="col-sm-10">
                <input  type="submit" name="submit" value="Submit" class="btn btn-primary" >
              </div>
            </form>
			 </div>
          </div>
     

        </div>
     
        <!--/.col (right) -->
      </div>
      <!-- /.row (main row) -->

    </section>
	</div>
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

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>
<link rel="stylesheet" href="js/default.css" type="text/css">
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
 

<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
 
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->

</body>
</html>