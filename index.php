<?php 
ob_start();
session_start();
ini_set('display_errors','1');
include_once'includes/connect.php';
?>

<?php
if(isset($_POST['process'])=="loginDetails" && isset($_POST['process'])!="") {
 
$username=trim($_POST['username']);
$password=trim($_POST['password']);
 
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$query = mysql_query("SELECT * FROM tbl_user WHERE BINARY username = '".$username."'  AND BINARY password = '".$password."'");

if(mysql_num_rows($query)>0) {

$rows = mysql_fetch_array($query); 

$_SESSION['userId']=$rows;

 
if($rows['user_type']=="Admin"){
header("location:dashboard.php");
}

if($rows['user_type']=="SPCB"){
header("location:add_monthly_rd.php");
}
if($rows['user_type']=="MS"){
header("location:dashboard.php");
}
if($rows['user_type']=="CPCB"){
header("location:add_monthly.php");
} 

} 

else 

{

$_SESSION['message'] = "Email Id or Password is invalid. Please try again.";

}

}
?>
<!DOCTYPE HTML>
<html>
<head>
 <title>Workload Allotment System</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
 
</head>
<body>
<div class="agileinfo-dot">
<!--background-->
<!-- login -->
		 
		<div class="container login-section">
	        <div class="login-w3l">	
            <img src="images/logo.png">
<?php
if(!empty($_SESSION['message']))
{
?>
<div class="alert alert-danger">
<?=$_SESSION['message']?>
</div>
<?php
$_SESSION['message']="";
}
?>
						<div class="login-form">			
							<form action="" method="post">
                               <input name="process" type="hidden" value="loginDetails">
								<div class="w3ls-icon">
									 
									<input type="text" class="user" name="username" value="<?=$_POST['username']?>"  placeholder="User Name" required="" />
								</div>
								<div class="w3ls-icon">
									 
									<input type="password" class="lock" name="password" value="<?=$_POST['password']?>" placeholder="Password" required="" />
								</div>
								<div class="signin-rit">
									<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked="">Remember me</label>
									</span>
								 
								<div class="clear"> </div>
								</div>
								<input type="submit" value="Sign in">
							</form>	
							
						</div>
			<!-- //login -->
				</div>	
			<!--<p class="footer">Copyright &copy; 2017-18 Software Designed and Developed By I.T. Division </p>
		</div> 	
		<div class="clearfix"></div> -->
		
			<!--//login-->
				
		</div>

		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


</body>
</html>