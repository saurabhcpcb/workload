 <?php 
 ob_start();
 session_start();
 ini_set('display_errors','0');
 include_once'includes/connect.php';
 include_once'includes/session.php';
 date_default_timezone_set('Asia/Kolkata');

 ?>
 <?php
 if(isset($_POST['submit1']) && $_POST['submit1']=="Save")
 {
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month']));
 
if($_POST['Activities']=="activities0"){
$sqlQuery="UPDATE tbl_activities0 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}


if($_POST['Activities']=="activities1"){
$sqlQuery="UPDATE tbl_activities1 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities2"){
$sqlQuery="UPDATE tbl_activities2 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  




if($_POST['Activities']=="activities3"){
$sqlQuery="UPDATE tbl_activities3 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  



if($_POST['Activities']=="activities4"){
$sqlQuery="UPDATE tbl_activities4 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities5"){
$sqlQuery="UPDATE tbl_activities5 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities6"){
$sqlQuery="UPDATE tbl_activities6 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities7"){
$sqlQuery="UPDATE tbl_activities7 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities8"){
$sqlQuery="UPDATE tbl_activities8 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities9"){
$sqlQuery="UPDATE tbl_activities9 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities10"){
$sqlQuery="UPDATE tbl_activities10 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  



if($_POST['Activities']=="activities11"){
$sqlQuery="UPDATE tbl_activities11 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  


if($_POST['Activities']=="activities12"){
$sqlQuery="UPDATE tbl_activities12 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities13"){
$sqlQuery="UPDATE tbl_activities13 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities14"){
$sqlQuery="UPDATE tbl_activities14 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities15"){
$sqlQuery="UPDATE tbl_activities15 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities16"){
$sqlQuery="UPDATE tbl_activities16 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  

if($_POST['Activities']=="activities17"){
$sqlQuery="UPDATE tbl_activities17 SET priority='".$_POST['type']."'  WHERE  activities_name='".$_POST['ActivitiesData']."' AND rd_id='".$_POST['rd']."' AND YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'";
}  
  

if(mysql_query($sqlQuery))
{
$_SESSION['messageData']="Activities Update";
header('location:'.$_SERVER['REQUEST_URI']); 
}
}
 
 
if(isset($_POST['submit']) && $_POST['submit']=="Final Allotment")
{ 
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month']));
 
 $getUserData1=mysql_query("SELECT * FROM tbl_user where board='".$_POST['rd']."'");
$user1=mysql_fetch_array($getUserData1);  
 
$updateQuery=mysql_query("UPDATE tbl_activities0 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities1 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'  AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities2 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities3 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities4 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities5 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities6 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities7 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities8 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities9 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities10 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities11 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities12 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities13 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities14 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities15 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities16 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysql_query("UPDATE tbl_activities17 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");


$_SESSION['success']="Work Allotted Successfully";
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
   
   
      <link rel="stylesheet" href="css/table.css">

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
      Work Allotment</h1>
       <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Work Allotment</li>
       </ol>
      </section>

      <!-- Main content -->
      <section class="content">

       <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
<?php
if(!empty($_SESSION['success']))
{
?>

<div class="alert alert-success">
<?=$_SESSION['success']?>

</div>

<?php
$_SESSION['success']="";
}
?>



         <div class="box box-primary no-print">
          <div class="box-body">
           <form action="" method="get">
            <table width="100%" border="1">
             <tr>
             
             <?php
			 if(isset($_GET['month']) && $_GET['month']!=""){
			 $month=$_GET['month'];
			 }
			 
			 else
			 {
			 $month=date("M-Y");
			 }
			 
			 ?>
              <td width="30%"> <input name="month"  value="<?=$month?>" class="form-control" id="datepicker-example111" type="text"></td>
               
           <td width="30%"><select name="rd_id12" class="form-control" style="width:49%; margin-left:10px; float:left;" required>
          
		   <?php $getQuery12=mysql_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); 
		   while($rd12=mysql_fetch_array($getQuery12)){?>
           <option value="<?=$rd12['board']?>"  <?=($rd12['board']==$_GET['rd_id12'])?'selected':''?> ><?=$rd12['board']?></option><?php }?>
           </select></td>

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>

           <?php
		   $getUserData=mysql_query("SELECT * FROM tbl_user where board='".$_GET['rd_id12']."'");
			$user=mysql_fetch_array($getUserData);  
			 
		$month= date("m", strtotime($_GET['month']));
		$year= date("Y", strtotime($_GET['month']));
		
	 
           if(isset($_GET['searchRegionalDirectors']) && $_GET['searchRegionalDirectors']!=""){
		   
			
		 
             ?> 

             <div class="wrap">
   
    <table class="comparison-table" style="width:100%;">
        <thead>
            <tr>
                <td>Activities</td>
                <td>Proposed by DH/RD</td>
                
                <td>Finalised by MS</td>
                <td>Complete Report </td>
                <td class="markers">Set Priority</td>
            </tr>
        </thead>
        <tr>
            <td><div class="direct-chat-text right">Water quality monitoring stations &amp; no. of inspection during the month</div></td>
            <td>
            <?php
            $queryByDate=mysql_query("SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=0 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow=mysql_num_rows($queryByDate);
            
            $queryByDateRd=mysql_query("SELECT * FROM tbl_activities_rd0 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd=mysql_num_rows($queryByDateRd);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow?></span>/<span class="btn bg-<?php if($dateRowRd>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus0=mysql_query("SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus0=mysql_num_rows($queryByDateStatus0);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus0>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus0?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal0=mysql_query("SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal0=mysql_num_rows($queryByDateFinal0);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal0>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal0?></span> 
            
            
            </td>
            <?php
			 $queryByPriority0=mysql_query("SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priorityData0=mysql_fetch_array($queryByPriority0);
			   
			?>
            <td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData0['priority'])){ echo "P1";} else{echo $priorityData0['priority'];}?></span><form action="" name="activities0" method="post">
            <input name="Activities" value="activities0" type="hidden"> 
            <input name="ActivitiesData" value="Water quality monitoring stations & no. of inspection during the month" type="hidden">
            <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
            <input name="month" type="hidden" value="<?=$_GET['month']?>">
            <select name="type" class="form-control" style="width:114px; float:left;">
            
            <option value="">Set Priority</option>
            <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
            <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
            <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
            <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
            </select>
            <input name="submit1" type="submit" value="Save" class="btn bg-orange">
            </form></td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Inspections for VIP complaint verification</div></td>
              <td>
            <?php
            $queryByDate11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow11=mysql_num_rows($queryByDate11);
            
            $queryByDateRd11=mysql_query("SELECT * FROM tbl_activities_rd11 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd11=mysql_num_rows($queryByDateRd11);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow11>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow11?></span>/<span class="btn bg-<?php if($dateRowRd11>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd11?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus11=mysql_num_rows($queryByDateStatus11);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus11>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus11?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal11=mysql_num_rows($queryByDateFinal11);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal11>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal11?></span> 
            
            
            </td>
               <?php
			 
			 $queryByPriority11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priorityData11=mysql_fetch_array($queryByPriority11);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData11['priority'])){ echo "P1";} else{echo $priorityData11['priority'];}?></span>
			<form action="" name="activities11" method="post"> 
			<input name="Activities" value="activities11" type="hidden">
            <input name="ActivitiesData" value="Inspections for VIP complaint verification" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Inspections based on SMS alerts from OCEMS of units</div></td>
             <td>
            <?php
            $queryByDate9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow9=mysql_num_rows($queryByDate9);
            
            $queryByDateRd9=mysql_query("SELECT * FROM tbl_activities_rd9 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd9=mysql_num_rows($queryByDateRd9);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow9>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow9?></span>/<span class="btn bg-<?php if($dateRowRd9>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd9?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus9=mysql_num_rows($queryByDateStatus9);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus9>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus9?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal9=mysql_num_rows($queryByDateFinal9);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal9>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal9?></span> 
            
            
            </td>
               <?php
			 
			 $queryByPriority9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priorityDatal9=mysql_fetch_array($queryByPriority9);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData9['priority'])){ echo "P2";} else{echo $priorityData9['priority'];}?></span>
			<form action="" name="activities9" method="post"> 
			<input name="Activities" value="activities9" type="hidden">
            <input name="ActivitiesData" value="Inspections based on SMS alerts from OCEMS of units" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Inspections related with NGT/court matter</div></td>
              <td>
            <?php
            $queryByDate12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow12=mysql_num_rows($queryByDate12);
            
            $queryByDateRd12=mysql_query("SELECT * FROM tbl_activities_rd12 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd12=mysql_num_rows($queryByDateRd12);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow12>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow12?></span>/<span class="btn bg-<?php if($dateRowRd12>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd12?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus12=mysql_num_rows($queryByDateStatus12);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus12>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus12?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal12=mysql_num_rows($queryByDateFinal12);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal12>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal12?></span> 
            
            
            </td>
             <?php
			 
			 $queryByPriority12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priority12=mysql_fetch_array($queryByPriority12);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority12['priority'])){ echo "P2";} else{echo $priority12['priority'];}?></span>
			<form action="" name="activities12" method="post"> 
			<input name="Activities" value="activities12" type="hidden">
            <input name="ActivitiesData" value="Inspections related with NGT/court matter" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Inspections for public complaint verification</div></td>
              <td>
            <?php
            $queryByDate16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow16=mysql_num_rows($queryByDate16);
            
            $queryByDateRd16=mysql_query("SELECT * FROM tbl_activities_rd16 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd16=mysql_num_rows($queryByDateRd16);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow16>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow16?></span>/<span class="btn bg-<?php if($dateRowRd16>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd16?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus16=mysql_num_rows($queryByDateStatus16);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus16>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus16?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal16=mysql_num_rows($queryByDateFinal16);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal16>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal16?></span> 
            
            
            </td>
            
                      <?php
			 
			 $queryByPriority16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priority16=mysql_fetch_array($queryByPriority16);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority16['priority'])){ echo "P3";} else{echo $priority16['priority'];}?></span>
			<form action="" name="activities16" method="post"> 
			<input name="Activities" value="activities16" type="hidden">
            <input name="ActivitiesData" value="Inspections for public complaint verification" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Re-inspections/Follow-up visits of units</div></td>
             <td>
            <?php
            $queryByDate10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow10=mysql_num_rows($queryByDate10);
            
            $queryByDateRd10=mysql_query("SELECT * FROM tbl_activities_rd10 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd10=mysql_num_rows($queryByDateRd10);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow10>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow10?></span>/<span class="btn bg-<?php if($dateRowRd10>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd10?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus10=mysql_num_rows($queryByDateStatus10);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus10>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus10?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal10=mysql_num_rows($queryByDateFinal10);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal10>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal10?></span> 
            
            
            </td>
            
                                  <?php
			 
			 $queryByPriority10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priority10=mysql_fetch_array($queryByPriority10);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority10['priority'])){ echo "P3";} else{echo $priority10['priority'];}?></span>
			<form action="" name="activities10" method="post"> 
			<input name="Activities" value="activities10" type="hidden">
            <input name="ActivitiesData" value="Re-inspections/Follow-up visits of units" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Ambient air quality monitoring stations &amp; no. of inspection during the month</div></td>
            <td>
            <?php
            $queryByDate1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=0 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow1=mysql_num_rows($queryByDate1);
            
            $queryByDateRd1=mysql_query("SELECT * FROM tbl_activities_rd1 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd1=mysql_num_rows($queryByDateRd1);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow1>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow1?></span>/<span class="btn bg-<?php if($dateRowRd1>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd1?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus1=mysql_num_rows($queryByDateStatus1);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus1>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus1?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal1=mysql_num_rows($queryByDateFinal1);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal1>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal1?></span> 
            
            
            </td>
            
                                            <?php
			 
			 $queryByPriority1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
			$priority1=mysql_fetch_array($queryByPriority1);
			   
			?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority1['priority'])){ echo "P4";} else{echo $priority1['priority'];}?></span>
			<form action="" name="activities1" method="post"> 
            <input name="Activities" value="activities1" type="hidden"> 
			<input name="ActivitiesData" value="Ambient air quality monitoring stations & no. of inspection during the month" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Inter state river monitoring</div></td>
            <td>
            <?php
            $queryByDate2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow2=mysql_num_rows($queryByDate2);
            
            $queryByDateRd2=mysql_query("SELECT * FROM tbl_activities_rd2 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd2=mysql_num_rows($queryByDateRd2);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow2>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow2?></span>/<span class="btn bg-<?php if($dateRowRd2>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd2?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus2=mysql_num_rows($queryByDateStatus2);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus2>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus2?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal2=mysql_num_rows($queryByDateFinal2);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal2>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal2?></span> 
            
            
            </td>
			<?php
            
            $queryByPriority2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority2=mysql_fetch_array($queryByPriority2);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority2['priority'])){ echo "P4";} else{echo $priority2['priority'];}?></span>
			<form action="" name="activities2" method="post"> 
			<input name="Activities" value="activities2" type="hidden">
            <input name="ActivitiesData" value="Inter state river monitoring" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">Monitoring of river/rivulets/drains</div></td>
           <td>
            <?php
            $queryByDate3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow3=mysql_num_rows($queryByDate3);
            
            $queryByDateRd3=mysql_query("SELECT * FROM tbl_activities_rd3 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd3=mysql_num_rows($queryByDateRd3);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow3>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow3?></span>/<span class="btn bg-<?php if($dateRowRd3>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd3?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus3=mysql_num_rows($queryByDateStatus3);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus3>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus3?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal3=mysql_num_rows($queryByDateFinal3);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal3>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal3?></span> 
            
            
            </td>
            <?php
            
            $queryByPriority3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority3=mysql_fetch_array($queryByPriority3);
            
            ?>
            
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority3['priority'])){ echo "P4";} else{echo $priority4['priority'];}?></span>
			<form action="" name="activities3" method="post"> 
			<input name="Activities" value="activities3" type="hidden">
            <input name="ActivitiesData" value="Monitoring of river/rivulets/drains" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">CETPs</div></td>
          <td>
            <?php
            $queryByDate4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow4=mysql_num_rows($queryByDate4);
            
            $queryByDateRd4=mysql_query("SELECT * FROM tbl_activities_rd4 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd4=mysql_num_rows($queryByDateRd4);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow4>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow4?></span>/<span class="btn bg-<?php if($dateRowRd4>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd4?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus4=mysql_num_rows($queryByDateStatus4);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus4>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus4?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal4=mysql_num_rows($queryByDateFinal4);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal4>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal4?></span> 
            
            
            </td>
            
              <?php
            
            $queryByPriority4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority4=mysql_fetch_array($queryByPriority4);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority4['priority'])){ echo "P4";} else{echo $priority4['priority'];}?></span>
			<form action="" name="activities4" method="post"> 
			<input name="Activities" value="activities4" type="hidden">
            <input name="ActivitiesData" value="CETPs" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">CHWTSDF</div></td>
            <td>
            <?php
            $queryByDate5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow5=mysql_num_rows($queryByDate5);
            
            $queryByDateRd5=mysql_query("SELECT * FROM tbl_activities_rd5 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd5=mysql_num_rows($queryByDateRd5);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow5>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow5?></span>/<span class="btn bg-<?php if($dateRowRd5>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd5?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus5=mysql_num_rows($queryByDateStatus5);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus5>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus5?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal5=mysql_num_rows($queryByDateFinal5);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal5>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal5?></span> 
            
            
            </td>
            
                  <?php
            
            $queryByPriority5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority5=mysql_fetch_array($queryByPriority5);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority5['priority'])){ echo "P4";} else{echo $priority5['priority'];}?></span>
			<form action="" name="activities5" method="post"> 
			<input name="Activities" value="activities5" type="hidden">
            <input name="ActivitiesData" value="CHWTSDF" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">CBMWTF</div></td>
              <td>
            <?php
            $queryByDate6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow6=mysql_num_rows($queryByDate6);
            
            $queryByDateRd6=mysql_query("SELECT * FROM tbl_activities_rd6 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd6=mysql_num_rows($queryByDateRd6);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow6>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow6?></span>/<span class="btn bg-<?php if($dateRowRd6>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd6?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus6=mysql_num_rows($queryByDateStatus6);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus6>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus6?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal6=mysql_num_rows($queryByDateFinal6);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal6>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal6?></span> 
            
            
            </td>
                      <?php
            
            $queryByPriority6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority6=mysql_fetch_array($queryByPriority6);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority6['priority'])){ echo "P4";} else{echo $priority6['priority'];}?></span>
			<form action="" name="activities6" method="post"> 
			<input name="Activities" value="activities6" type="hidden">
            <input name="ActivitiesData" value="CBMWTF" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        <tr>
            <td><div class="direct-chat-text right">STPs</div></td>
               <td>
            <?php
            $queryByDate7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow7=mysql_num_rows($queryByDate7);
            
            $queryByDateRd7=mysql_query("SELECT * FROM tbl_activities_rd7 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd7=mysql_num_rows($queryByDateRd7);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow7>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow7?></span>/<span class="btn bg-<?php if($dateRowRd7>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd7?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus7=mysql_num_rows($queryByDateStatus7);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus7>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus7?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal7=mysql_num_rows($queryByDateFinal7);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal7>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal7?></span> 
            
            
            </td>
                                  <?php
            
            $queryByPriority7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority7=mysql_fetch_array($queryByPriority7);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority7['priority'])){ echo "P4";} else{echo $priority7['priority'];}?></span>
			<form action="" name="activities7" method="post"> 
			<input name="Activities" value="activities7" type="hidden">
            <input name="ActivitiesData" value="STPs" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
         <tr>
            <td><div class="direct-chat-text right">SLFs(MSW)</div></td>
               <td>
            <?php
            $queryByDate8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow8=mysql_num_rows($queryByDate8);
            
            $queryByDateRd8=mysql_query("SELECT * FROM tbl_activities_rd8 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd8=mysql_num_rows($queryByDateRd8);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow8>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow8?></span>/<span class="btn bg-<?php if($dateRowRd8>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd8?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus8=mysql_num_rows($queryByDateStatus8);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus8>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus8?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal8=mysql_num_rows($queryByDateFinal8);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal8>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal8?></span> 
            
            
            </td>
            
                                            <?php
            
            $queryByPriority8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority8=mysql_fetch_array($queryByPriority8);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority8['priority'])){ echo "P4";} else{echo $priority8['priority'];}?></span>
			<form action="" name="activities8" method="post"> 
			<input name="Activities" value="activities8" type="hidden">
            <input name="ActivitiesData" value="SLFs(MSW)" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
         
        
         
        
         
        
         
        
         <tr>
            <td><div class="direct-chat-text right">Monitoring for trail run under HWM Rules</div></td>
          <td>
            <?php
            $queryByDate13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow13=mysql_num_rows($queryByDate13);
            
            $queryByDateRd13=mysql_query("SELECT * FROM tbl_activities_rd13 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd13=mysql_num_rows($queryByDateRd13);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow13>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow13?></span>/<span class="btn bg-<?php if($dateRowRd13>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd13?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus13=mysql_num_rows($queryByDateStatus13);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus13>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus13?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal13=mysql_num_rows($queryByDateFinal13);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal13>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal13?></span> 
            
            
            </td>
            
                                                       <?php
            
            $queryByPriority13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority13=mysql_fetch_array($queryByPriority13);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority13['priority'])){ echo "P4";} else{echo $priority13['priority'];}?></span>
			<form action="" name="activities13" method="post"> 
			<input name="Activities" value="activities13" type="hidden">
            <input name="ActivitiesData" value="Monitoring for trail run under HWM Rules" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
         <tr>
            <td><div class="direct-chat-text right">Inspections related with import of hazardous & other waste</div></td>
              <td>
            <?php
            $queryByDate14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow14=mysql_num_rows($queryByDate14);
            
            $queryByDateRd14=mysql_query("SELECT * FROM tbl_activities_rd14 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd14=mysql_num_rows($queryByDateRd14);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow14>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow14?></span>/<span class="btn bg-<?php if($dateRowRd14>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd14?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus14=mysql_num_rows($queryByDateStatus14);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus14>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus14?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal14=mysql_num_rows($queryByDateFinal14);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal14>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal14?></span> 
            
            
            </td>
                                                                 <?php
            
            $queryByPriority14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority14=mysql_fetch_array($queryByPriority14);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority14['priority'])){ echo "P4";} else{echo $priority14['priority'];}?></span>
			<form action="" name="activities14" method="post"> 
			<input name="Activities" value="activities14" type="hidden">
            <input name="ActivitiesData" value="Inspections related with import of hazardous & other waste" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
         <tr>
            <td><div class="direct-chat-text right">Meetings/workshops/Training</div></td>
              <td>
            <?php
            $queryByDate15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow15=mysql_num_rows($queryByDate15);
            
            $queryByDateRd15=mysql_query("SELECT * FROM tbl_activities_rd15 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd15=mysql_num_rows($queryByDateRd15);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow15>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow15?></span>/<span class="btn bg-<?php if($dateRowRd15>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd15?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus15=mysql_num_rows($queryByDateStatus15);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus15>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus15?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal15=mysql_num_rows($queryByDateFinal15);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal15>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal15?></span> 
            
            
            </td>
                                                                             <?php
            
            $queryByPriority15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority15=mysql_fetch_array($queryByPriority15);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority15['priority'])){ echo "P4";} else{echo $priority15['priority'];}?></span>
			<form action="" name="activities15" method="post"> 
			<input name="Activities" value="activities15" type="hidden">
            <input name="ActivitiesData" value="Meetings/workshops/Training" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
         
        
        
         <tr>
            <td><div class="direct-chat-text right">Inspections for Ganga complaince verification</div></td>
              <td>
            <?php
            $queryByDate17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND final_Status=0 AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  
            $dateRow17=mysql_num_rows($queryByDate17);
            
            $queryByDateRd17=mysql_query("SELECT * FROM tbl_activities_rd17 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
            $dateRowRd17=mysql_num_rows($queryByDateRd17);
            ?>
            
            
            <span class="btn bg-<?php if($dateRow17>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRow17?></span>/<span class="btn bg-<?php if($dateRowRd17>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_detailsrd.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowRd17?></span> 
            
            
            </td>
            <td class="marker">
            <?php
            $queryByDateStatus17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
            $dateRowStatus17=mysql_num_rows($queryByDateStatus17);
            ?>
            
            
            <span class="btn bg-<?php if($dateRowStatus17>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_view_report_details.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowStatus17?></span>  
            
            
            </td>
            <td class="marker">
            <?php
            
            $queryByDateFinal17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  
            
            $dateRowFinal17=mysql_num_rows($queryByDateFinal17);
            
            ?>
            
            
            <span class="btn bg-<?php if($dateRowFinal17>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('final_report1.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=900,height=500,scrollbar=0,menubar=0');"><?=$dateRowFinal17?></span> 
            
            
            </td>
                                                                                  <?php
            
            $queryByPriority17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY activities_name ");
            $priority17=mysql_fetch_array($queryByPriority17);
            
            ?>
			<td class="markers"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priority17['priority'])){ echo "P4";} else{echo $priority17['priority'];}?></span>
			<form action="" name="activities17" method="post"> 
			<input name="Activities" value="activities17" type="hidden">
            <input name="ActivitiesData" value="Inspections for ganga complaint verification" type="hidden">
			<input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
			<input name="month" type="hidden" value="<?=$_GET['month']?>">
			<select name="type" class="form-control" style="width:114px; float:left;">

			<option value="">Set Priority</option>
			<option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
			<option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
			<option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
			<option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
			</select>
			<input name="submit1" type="submit" value="Save" class="btn bg-orange">
			</form>
			</td>
        </tr>
        
        
    </table>
    
    <form action="" method="post" name="mainForm">
<input name="month" value="<?=$_GET['month']?>" type="hidden">
<input name="rd" value="<?=$_GET['rd_id12']?>" type="hidden">


<?php
$OtherActivities=mysql_query("SELECT * FROM  tbl_other_activities where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");

if(mysql_num_rows($OtherActivities)>0){
while($OtherResult=mysql_fetch_array($OtherActivities))
{
$OtherResultlist[]=$OtherResult;
}
 
?>
 <table   class="table table-bordered table-striped" style="margin-top:10px;">
  <tr>
    <td width="30%" rowspan="3"> Other Activities </td>
   
    <td width="70%"><?=$OtherResultlist[0]['activities']?></td>
  </tr>
   <tr>
   
    <td width="70%"><?=$OtherResultlist[1]['activities']?></td>
  </tr>
   <tr>
    
   
    <td width="70%"><?=$OtherResultlist[2]['activities']?></td>
  </tr>
</table>
<?php } ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin:10px 0px; padding:10px 0px;"><input name="submit" value="Final Allotment" style="padding:16px 20px; font-size:18px;" class="btn bg-olive btn-flat" type="submit"></td>
  
  </tr>
 
</table>
</form>
 
            






            </div>
  <?php
             }
			 
	?>
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
    <script  src="js/index.js"></script>
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
