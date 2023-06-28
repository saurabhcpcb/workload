<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
?>
<?php
if($_POST['process']=="addData" && $_POST['process']!="")
{

 

 $insetQuery="INSERT INTO tbl_user (username,password,user_type,Officer,board,emailid,phone,Division) VALUES ('".addslashes($_POST['username'])."','".addslashes($_POST['password'])."','".addslashes($_POST['user_type'])."','".addslashes($_POST['Officer'])."','".addslashes($_POST['board'])."','".addslashes($_POST['emailid'])."','".addslashes($_POST['phone'])."','".addslashes($_POST['division'])."')"; 

if(mysql_query($insetQuery)){

$id = mysql_insert_id();
$activities=$_POST['activities'] ;
$countActivities = count($activities); 
 
for($i=0; $i<$countActivities; $i++)
{
if(!empty($_POST['activities'][$i])){

$strquery1="insert into  tbl_user_activities_list(user_id,activities_id) values ('".$id."','".$_POST['activities'][$i]."')"; 
mysql_query($strquery1);
}
}
$_SESSION['message']="Added Successfull..";
header('location:view_user.php');

}
else
{

$_SESSION['errors']="Allready Added.";
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
       User Details
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> User Details</li>
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
            <form role="form" method="post">
            <input name="process" type="hidden" value="addData">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" class="form-control"  name="username" required="">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control"  name="password" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">User Type</label>
                   <select name="user_type" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="MS" >MS</option>
                     <option  value="CPCB">CPCB</option>
                    <option  value="SPCB">SPCB</option>
                    
                    
                       
                   </select>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Division</label>
                   <select name="division" class="form-control">
				   <option value="">Select Division</option>
				   <?php 
				   
				  $getdiv="select * from tbl_division ORDER BY division ASC";
				  $getdivdata=mysql_query($getdiv);
				while($row3=mysql_fetch_array($getdivdata)){
				  ?> 
                    <option value="<?=$row3['division']?>"><?=$row3['division']?></option>
				<?php }
				?>
                    
                    
                       
                   </select>
                </div>
                 
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Officer Name</label>
                  <input type="text" class="form-control"  name="Officer">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Id</label>
                  <input type="text" class="form-control"  name="emailid">
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No.</label>
                  <input type="text" class="form-control"  name="phone">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Select Zone</label>
                   <select name="board" class="form-control">
                    <option value="">Select Zone</option>
                 <?php 
				 $rdQuery=mysql_query("SELECT * FROM tbl_rd ORDER BY RD ASC ");
				 while($rd=mysql_fetch_array($rdQuery)){
				 ?>
                   <option  value="<?=$rd['RD']?>"><?=$rd['RD']?></option>
                    
                    <?php 
					}
					?>
                       
                   </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Activities</label>
                  <div style="padding:6px; border:1px solid #CCCCCC; margin:2px; height:auto; width:100%; float:left;">	
               	<?php
				$i=1;
                $activitiesQueryResult=mysql_query("select * from tbl_user_activities  ORDER BY Activities ASC" );
                
                while($activities=mysql_fetch_array($activitiesQueryResult)){
                ?> 
                <div style="padding:6px; border:1px solid #CCCCCC; margin:2px; float:left;">	
                
                <input name="activities[]" id="langOpt12" type="checkbox"  value="<?=$activities['id']?>" <?php if(in_array($activities['id'],$_POST['activities'])){ echo"checked";} ?> />&nbsp;<?=$i?><i class="fa fa-fw fa-long-arrow-right"></i><?=$activities['Activities']?> </div>
                
                <?php
				$i++;
                }
                ?>  
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
