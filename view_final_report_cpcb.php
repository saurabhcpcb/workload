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
 
$sqlQuery="UPDATE tbl_user_activities_date_wise SET type='".$_POST['type']."'  WHERE Activities='".$_POST['Activities']."' AND rd='".$_POST['rd']."' AND dateMonth='".$_POST['month']."'";  

if(mysqli_query($sqlQuery))
{
$_SESSION['messageData']="Activities Update";
header('location:'.$_SERVER['REQUEST_URI']); 
}
}
 
 
if(isset($_POST['submit']) && $_POST['submit']=="Final Report")
{ 
$month= date("m", strtotime($_POST['month']));
$year= date("Y", strtotime($_POST['month']));
 
 $getUserData1=mysqli_query($mysqli, " SELECT * FROM tbl_user where board='".$_POST['rd']."'");
$user1=mysqli_fetch_array($getUserData1);  
 
$updateQuery=mysqli_query($mysqli, " UPDATE tbl_activities0 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities1 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."'  AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities2 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities3 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities4 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities5 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities6 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities7 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities8 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities9 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities10 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities11 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities12 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities13 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities14 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities15 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities16 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");
mysqli_query($mysqli, " UPDATE tbl_activities17 SET final_Status='1' WHERE YEAR(target_date) = '".$year."' AND MONTH(target_date) = '".$month."' AND status=1 AND rd_id='".$_POST['rd']."'");


mysqli_query($mysqli, " UPDATE tbl_activities_rd0 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd1 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd2 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd3 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd4 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd5 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");

mysqli_query($mysqli, " UPDATE tbl_activities_rd6 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd7 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd8 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd9 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd10 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd11 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd12 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd13 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd14 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd15 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd16 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
mysqli_query($mysqli, " UPDATE tbl_activities_rd17 SET final_Status='1' WHERE month = '".$_POST['month']."'  AND status=1 AND user_id='".$user1['id']."'");
$_SESSION['success']="Successfull Final Report Generated";
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
       Monthly Report</h1>
       <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Monthly Report</li>
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
              <td width="30%"> <input name="month"  value="<?=$_GET['month']?>" class="form-control" id="datepicker-example111" type="text"></td>
               
           <td width="30%"><select name="rd_id12" class="form-control" style="width:49%; margin-left:10px; float:left;" required>
           <option value="">Select RD</option>
		   <?php $getQuery12=mysqli_query($mysqli, " SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); 
		   while($rd12=mysqli_fetch_array($getQuery12)){?>
           <option value="<?=$rd12['board']?>"  <?=($rd12['board']==$_GET['rd_id12'])?'selected':''?> ><?=$rd12['board']?></option><?php }?>
           </select></td>

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Search"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>

           <?php
           if(isset($_GET['searchRegionalDirectors'])){
		   
			$getUserData=mysqli_query($mysqli, " SELECT * FROM tbl_user where board='".$_GET['rd_id12']."'");
			$user=mysqli_fetch_array($getUserData);  
			 
		$month= date("m", strtotime($_GET['month']));
		$year= date("Y", strtotime($_GET['month']));
		 
             ?> 

             <div class="box box-primary">
              <div class="box-body">
 
        
 <table   class="table table-bordered table-striped">
  
 <tr><td colspan="5"><h3 style="color:#ff0000;">P1</h3></td></tr>
 <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width:145px;">Proposed by RD/DH</td>
    <td style="width:147px;">Finalised by MS</td>
    <td style="width:180px;">Target Date</td>
    <td colspan="2">Set Priority</td>
    
  </tr>
</table>
</td>
    
     
  </tr>
        
        <?php
		 
        $queryP1=mysqli_query($mysqli, " select * from   tbl_user_activities_date_wise where type = 'P1' AND rd='".$_GET['rd_id12']."' AND dateMonth='".$_GET['month']."'");
        while($p1=mysqli_fetch_array($queryP1))
        {
        $p1List[]=$p1['Activities'];
		
		$p1ListRdStatus[]=$p1['rd_status'];
        }
		
        ?> 
  <tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<?php

$queryByDate=mysqli_query($mysqli, " SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow=mysqli_num_rows($queryByDate);
 
$queryByDateRd=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd0 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd=mysqli_num_rows($queryByDateRd);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow+$dateRowRd>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow+$dateRowRd?></span></td>
    
<?php
$queryByDateStatus0=mysqli_query($mysqli, " SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
$dateRowStatus0=mysqli_num_rows($queryByDateStatus0);
$queryByDateRdStatus0=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd0 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus0=mysqli_num_rows($queryByDateRdStatus0);
$total=$dateRowStatus0+$dateRowRdStatus0;




?>
<td width="20%"><span class="<?php if($total>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus0+$dateRowRdStatus0?></span>




   <?php
 
$queryByDateFinal=mysqli_query($mysqli, " SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  

$dateRowFinal=mysqli_num_rows($queryByDateFinal);

$queryByDateRdFinal=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd0 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal=mysqli_num_rows($queryByDateRdFinal);

$totalFinal=$dateRowFinal+$dateRowRdFinal;
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities0&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal+$dateRowRdFinal?></span></span>
</td>
    
    <td width="25%">
	<?php

$queryByDateData=mysqli_query($mysqli, " SELECT * FROM tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData=mysqli_fetch_array($queryByDateData)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData['target_date']))?>
    <?php if($totalFinal!=$total){?>
    <span onClick="window.open('change_date.php?eid=activities0&cid=<?=date("d-m-Y",strtotime($dateRowData['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities0" method="post"> 
        <input name="Activities" value="Water quality monitoring stations & no. of inspection during the month" type="hidden">
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
 <?php 
 $activitiesFile0=mysqli_query($mysqli, " SELECT * FROM  tbl_activities0 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile0)>0){
while($activitiesFileList0=mysqli_fetch_array($activitiesFile0)){
?>
<span  style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList0['file']?>" target="_blank"><?=$activitiesFileList0['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
  <tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<?php
$queryByDate1=mysqli_query($mysqli, " SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow1=mysqli_num_rows($queryByDate1);
 ?>
  <?php

$queryByDateRd1=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd1 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd1=mysqli_num_rows($queryByDateRd1);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow1+$dateRowRd1>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow1+$dateRowRd1?></span></td>
    <?php
$queryByDateStatus1=mysqli_query($mysqli, " SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
$dateRowStatus1=mysqli_num_rows($queryByDateStatus1);
$queryByDateRdStatus1=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd1 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus1=mysqli_num_rows($queryByDateRdStatus1);
$total1=$dateRowStatus1+$dateRowRdStatus1;
?>
<td width="20%"><span class="<?php if($total1>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus1+$dateRowRdStatus1?></span>



   <?php
 
$queryByDateFinal1=mysqli_query($mysqli, " SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal1=mysqli_num_rows($queryByDateFinal1);

$queryByDateRdFinal1=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd1 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal1=mysqli_num_rows($queryByDateRdFinal1);

$totalFinal1=$dateRowFinal1+$dateRowRdFinal1;
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities1&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal1+$dateRowRdFinal1?></span></span>
</td>
    <td width="25%">
	<?php

$queryByDateData1=mysqli_query($mysqli, " SELECT * FROM tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData1=mysqli_fetch_array($queryByDateData1)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData1['target_date']))?>
    
    <?php if($totalFinal1!=$total1){?>
    <span onClick="window.open('change_date.php?eid=activities1&cid=<?=date("d-m-Y",strtotime($dateRowData1['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities1" method="post"> 
        <input name="Activities" value="Ambient air quality monitoring stations & no. of inspection during the month" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
  <?php 
 $activitiesFile1=mysqli_query($mysqli, " SELECT * FROM  tbl_activities1 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile1)>0){
while($activitiesFileList1=mysqli_fetch_array($activitiesFile1)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList1['file']?>" target="_blank"><?=$activitiesFileList1['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  <tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5"> 
<?php
$queryByDate2=mysqli_query($mysqli, " SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow2=mysqli_num_rows($queryByDate2);
 ?>
  <?php

$queryByDateRd2=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd2 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd2=mysqli_num_rows($queryByDateRd2);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow2+$dateRowRd2>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow2+$dateRowRd2?></span></td>
    <?php
$queryByDateStatus2=mysqli_query($mysqli, " SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus2=mysqli_num_rows($queryByDateStatus2);
$queryByDateRdStatus2=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd2 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus2=mysqli_num_rows($queryByDateRdStatus2);
$total2=$dateRowStatus2+$dateRowRdStatus2;
?>
<td width="20%"><span class="<?php if($total2>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus2+$dateRowRdStatus2?></span>



   <?php
 
$queryByDateFinal2=mysqli_query($mysqli, " SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal2=mysqli_num_rows($queryByDateFinal2);

$queryByDateRdFinal2=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd2 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal2=mysqli_num_rows($queryByDateRdFinal2);

$totalFinal2=$dateRowFinal2+$dateRowRdFinal2;
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities2&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal2+$dateRowRdFinal2?></span></span>
</td>
    <td width="25%">
	<?php

$queryByDateData2=mysqli_query($mysqli, " SELECT * FROM tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData2=mysqli_fetch_array($queryByDateData2)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData2['target_date']))?>
    
    <?php if($totalFinal2!=$total2){?>
    <span onClick="window.open('change_date.php?eid=activities2&cid=<?=date("d-m-Y",strtotime($dateRowData2['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities2" method="post"> 
        <input name="Activities" value="Inter state river monitoring" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile2=mysqli_query($mysqli, " SELECT * FROM  tbl_activities2 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile2)>0){
while($activitiesFileList2=mysqli_fetch_array($activitiesFile2)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList2['file']?>" target="_blank"><?=$activitiesFileList2['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  <tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"> 
<?php
$queryByDate3=mysqli_query($mysqli, " SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow3=mysqli_num_rows($queryByDate3);
 ?>
  <?php

$queryByDateRd3=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd3 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd3=mysqli_num_rows($queryByDateRd3);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow3+$dateRowRd3>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow3+$dateRowRd3?></span></td>
    <?php
$queryByDateStatus3=mysqli_query($mysqli, " SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
$dateRowStatus3=mysqli_num_rows($queryByDateStatus3);
$queryByDateRdStatus3=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd3 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus3=mysqli_num_rows($queryByDateRdStatus3);
$total3=$dateRowStatus3+$dateRowRdStatus3;
?>
<td width="20%"><span class="<?php if($total3>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus3+$dateRowRdStatus3?></span>





<?php

$queryByDateFinal3=mysqli_query($mysqli, " SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  

$dateRowFinal3=mysqli_num_rows($queryByDateFinal3);

$queryByDateRdFinal3=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd3 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal3=mysqli_num_rows($queryByDateRdFinal3);

$totalFinal3=$dateRowFinal3+$dateRowRdFinal3;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities3&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal3+$dateRowRdFinal3?></span></span>

</td>
    <td width="25%">
	<?php

$queryByDateData3=mysqli_query($mysqli, " SELECT * FROM tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData3=mysqli_fetch_array($queryByDateData3)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData3['target_date']))?>
    
     <?php if($totalFinal3!=$total3){?>
    <span onClick="window.open('change_date.php?eid=activities3&cid=<?=date("d-m-Y",strtotime($dateRowData3['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php }?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities3" method="post"> 
        <input name="Activities" value="Monitoring of river/rivulets/drains" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile3=mysqli_query($mysqli, " SELECT * FROM  tbl_activities3 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile3)>0){
while($activitiesFileList3=mysqli_fetch_array($activitiesFile3)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList3['file']?>" target="_blank"><?=$activitiesFileList3['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  <tr>

<td valign="top">CETPs</td>


<td colspan="5"> 
<?php
$queryByDate4=mysqli_query($mysqli, " SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow4=mysqli_num_rows($queryByDate4);
 ?>
  <?php

$queryByDateRd4=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd4 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd4=mysqli_num_rows($queryByDateRd4);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow4+$dateRowRd4>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow4+$dateRowRd4?></span></td>
    <?php
$queryByDateStatus4=mysqli_query($mysqli, " SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus4=mysqli_num_rows($queryByDateStatus4);
$queryByDateRdStatus4=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd4 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus4=mysqli_num_rows($queryByDateRdStatus4);
$total4=$dateRowStatus4+$dateRowRdStatus4;
?>
<td width="20%"><span class="<?php if($total4>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus4+$dateRowRdStatus4?></span>



<?php

$queryByDateFinal4=mysqli_query($mysqli, " SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal4=mysqli_num_rows($queryByDateFinal4);

$queryByDateRdFinal4=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd4 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal4=mysqli_num_rows($queryByDateRdFinal4);

$totalFinal4=$dateRowFinal4+$dateRowRdFinal4;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities4&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal4+$dateRowRdFinal4?></span></span>

</td>
    <td width="25%">
	<?php

$queryByDateData4=mysqli_query($mysqli, " SELECT * FROM tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData4=mysqli_fetch_array($queryByDateData4)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData4['target_date']))?>
    
     <?php if($totalFinal4!=$total4){?>
    <span onClick="window.open('change_date.php?eid=activities4&cid=<?=date("d-m-Y",strtotime($dateRowData4['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities4" method="post"> 
        <input name="Activities" value="CETPs" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile4=mysqli_query($mysqli, " SELECT * FROM  tbl_activities4 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile4)>0){
while($activitiesFileList4=mysqli_fetch_array($activitiesFile4)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList4['file']?>" target="_blank"><?=$activitiesFileList4['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
   
<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> 
<?php
$queryByDate5=mysqli_query($mysqli, " SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow5=mysqli_num_rows($queryByDate5);
 ?>
  <?php

$queryByDateRd5=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd5 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd5=mysqli_num_rows($queryByDateRd5);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow5+$dateRowRd5>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow5+$dateRowRd5?></span>
    
    
 
    
    
    </td>
    <?php
$queryByDateStatus5=mysqli_query($mysqli, " SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus5=mysqli_num_rows($queryByDateStatus5);
$queryByDateRdStatus5=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd5 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus5=mysqli_num_rows($queryByDateRdStatus5);
$total5=$dateRowStatus5+$dateRowRdStatus5;
?>
<td width="20%"><span class="<?php if($total5>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus5+$dateRowRdStatus5?></span>


<?php

$queryByDateFinal5=mysqli_query($mysqli, " SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  

$dateRowFinal5=mysqli_num_rows($queryByDateFinal5);

$queryByDateRdFinal5=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd5 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal5=mysqli_num_rows($queryByDateRdFinal5);

$totalFinal5=$dateRowFinal5+$dateRowRdFinal5;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities5&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal5+$dateRowRdFinal5?></span></span>   
</td>
    <td width="25%">
	<?php

$queryByDateData5=mysqli_query($mysqli, " SELECT * FROM tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData5=mysqli_fetch_array($queryByDateData5)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData5['target_date']))?>
     <?php if($totalFinal5!=$total5){?>
    <span onClick="window.open('change_date.php?eid=activities5&cid=<?=date("d-m-Y",strtotime($dateRowData5['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities5" method="post"> 
        <input name="Activities" value="CHWTSDF" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile5=mysqli_query($mysqli, " SELECT * FROM  tbl_activities5 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile5)>0){
while($activitiesFileList5=mysqli_fetch_array($activitiesFile5)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList5['file']?>" target="_blank"><?=$activitiesFileList5['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  <tr>

<td valign="top">CBMWTF</td>


<td colspan="5"> 
<?php
$queryByDate6=mysqli_query($mysqli, " SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow6=mysqli_num_rows($queryByDate6);
 ?>
  <?php

$queryByDateRd6=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd6 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd6=mysqli_num_rows($queryByDateRd6);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow6+$dateRowRd6>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow6+$dateRowRd6?></span></td>
    <?php
$queryByDateStatus6=mysqli_query($mysqli, " SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus6=mysqli_num_rows($queryByDateStatus6);
$queryByDateRdStatus6=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd6 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus6=mysqli_num_rows($queryByDateRdStatus6);
$total6=$dateRowStatus6+$dateRowRdStatus6;
?>
<td width="20%"><span class="<?php if($total6>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus6+$dateRowRdStatus6?></span>

<?php

$queryByDateFinal6=mysqli_query($mysqli, " SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal6=mysqli_num_rows($queryByDateFinal6);

$queryByDateRdFinal6=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd6 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal6=mysqli_num_rows($queryByDateRdFinal6);

$totalFinal6=$dateRowFinal6+$dateRowRdFinal6;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities6&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal6+$dateRowRdFinal6?></span></span>    
</td>
    <td width="25%">
	<?php

$queryByDateData6=mysqli_query($mysqli, " SELECT * FROM tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData6=mysqli_fetch_array($queryByDateData6)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData6['target_date']))?>
     <?php if($totalFinal6!=$total6){?>
    <span onClick="window.open('change_date.php?eid=activities6&cid=<?=date("d-m-Y",strtotime($dateRowData6['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities6" method="post"> 
        <input name="Activities" value="CBMWTF" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile6=mysqli_query($mysqli, " SELECT * FROM  tbl_activities6 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile6)>0){
while($activitiesFileList6=mysqli_fetch_array($activitiesFile6)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList6['file']?>" target="_blank"><?=$activitiesFileList6['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   <tr>

<td valign="top">STPs</td>


<td colspan="5"> 
<?php
$queryByDate7=mysqli_query($mysqli, " SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow7=mysqli_num_rows($queryByDate7);
 ?>
 <?php

$queryByDateRd7=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd7 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd7=mysqli_num_rows($queryByDateRd7);
 ?> 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow7+$dateRowRd7>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow7+$dateRowRd7?></span></td>
    <?php
$queryByDateStatus7=mysqli_query($mysqli, " SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
$dateRowStatus7=mysqli_num_rows($queryByDateStatus7);
$queryByDateRdStatus7=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd7 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus7=mysqli_num_rows($queryByDateRdStatus7);
$total7=$dateRowStatus2+$dateRowRdStatus7;
?>
<td width="20%"><span class="<?php if($total7>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus7+$dateRowRdStatus7?></span>



<?php

$queryByDateFinal7=mysqli_query($mysqli, " SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND final_Status=2 AND rd_id='".$_GET['rd_id12']."'");  

$dateRowFinal7=mysqli_num_rows($queryByDateFinal7);

$queryByDateRdFinal7=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd7 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal7=mysqli_num_rows($queryByDateRdFinal7);

$totalFinal7=$dateRowFinal7+$dateRowRdFinal7;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities7&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal7+$dateRowRdFinal7?></span></span>   

</td>
    <td width="25%">
	<?php

$queryByDateData7=mysqli_query($mysqli, " SELECT * FROM tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData7=mysqli_fetch_array($queryByDateData7)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData7['target_date']))?>
    
     <?php if($totalFinal7!=$total7){?>
    <span onClick="window.open('change_date.php?eid=activities7&cid=<?=date("d-m-Y",strtotime($dateRowData7['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php
    
	}
	?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities7" method="post"> 
        <input name="Activities" value="STPs" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile7=mysqli_query($mysqli, " SELECT * FROM  tbl_activities7 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile7)>0){
while($activitiesFileList7=mysqli_fetch_array($activitiesFile7)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList7['file']?>" target="_blank"><?=$activitiesFileList7['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  
 <tr>
 <td valign="top">SLFs(MSW)</td>
<td colspan="5"> 
<?php
$queryByDate8=mysqli_query($mysqli, " SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow8=mysqli_num_rows($queryByDate8);
 ?>
  <?php

$queryByDateRd8=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd8 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd8=mysqli_num_rows($queryByDateRd8);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow8+$dateRowRd8>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow8+$dateRowRd8?></span></td>
    <?php
$queryByDateStatus8=mysqli_query($mysqli, " SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus8=mysqli_num_rows($queryByDateStatus8);
$queryByDateRdStatus8=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd8 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus8=mysqli_num_rows($queryByDateRdStatus8);
$total8=$dateRowStatus8+$dateRowRdStatus8;
?>
<td width="20%"><span class="<?php if($total8>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus8+$dateRowRdStatus8?></span>


<?php

$queryByDateFinal8=mysqli_query($mysqli, " SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal8=mysqli_num_rows($queryByDateFinal8);

$queryByDateRdFinal8=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd8 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal8=mysqli_num_rows($queryByDateRdFinal8);

$totalFinal8=$dateRowFinal8+$dateRowRdFinal8;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities8&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal8+$dateRowRdFinal8?></span></span>   
</td>
    <td width="25%">
	<?php

$queryByDateData8=mysqli_query($mysqli, " SELECT * FROM tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData8=mysqli_fetch_array($queryByDateData8)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData8['target_date']))?>
    
     <?php if($totalFinal8!=$total8){?>
    <span onClick="window.open('change_date.php?eid=activities8&cid=<?=date("d-m-Y",strtotime($dateRowData8['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php }?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities8" method="post"> 
        <input name="Activities" value="SLFs(MSW)" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile8=mysqli_query($mysqli, " SELECT * FROM  tbl_activities8 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile8)>0){
while($activitiesFileList8=mysqli_fetch_array($activitiesFile8)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList8['file']?>" target="_blank"><?=$activitiesFileList8['file']?></a></span>
<?php
}
}
 ?>
 </td>
 </tr>
 
  
 <tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> 
<?php
$queryByDate9=mysqli_query($mysqli, " SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND rd_id='".$_GET['rd_id12']."' AND MONTH(target_date) = ".$month."");  

$dateRow9=mysqli_num_rows($queryByDate9);
 ?>
  <?php

$queryByDateRd9=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd9 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd9=mysqli_num_rows($queryByDateRd9);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow9+$dateRowRd9>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow9+$dateRowRd9?></span></td>
   <?php
$queryByDateStatus9=mysqli_query($mysqli, " SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus9=mysqli_num_rows($queryByDateStatus9);
$queryByDateRdStatus9=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd9 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus9=mysqli_num_rows($queryByDateRdStatus9);

$total9=$dateRowStatus9+$dateRowRdStatus9;
?>
<td width="20%"><span class="<?php if($total9>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus9+$dateRowRdStatus9?></span>



<?php

$queryByDateFinal9=mysqli_query($mysqli, " SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal9=mysqli_num_rows($queryByDateFinal9);

$queryByDateRdFinal9=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd9 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal9=mysqli_num_rows($queryByDateRdFinal9);

$totalFinal9=$dateRowFinal9+$dateRowRdFinal9;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities9&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal9+$dateRowRdFinal9?></span></span>  
</td> 
    <td width="25%">
	<?php

$queryByDateData9=mysqli_query($mysqli, " SELECT * FROM tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData9=mysqli_fetch_array($queryByDateData9)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData9['target_date']))?>
    
    <?php if($totalFinal9!=$total9){?>
    <span onClick="window.open('change_date.php?eid=activities9&cid=<?=date("d-m-Y",strtotime($dateRowData9['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities9" method="post"> 
        <input name="Activities" value="Inspections based on SMS alerts from OCEMS of units" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
  <?php 
 $activitiesFile9=mysqli_query($mysqli, " SELECT * FROM  tbl_activities9 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile9)>0){
while($activitiesFileList9=mysqli_fetch_array($activitiesFile9)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList9['file']?>" target="_blank"><?=$activitiesFileList9['file']?></a></span>
<?php
}
}
 ?> 
 </td>
</tr>
 
      
<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"> 
<?php
$queryByDate10=mysqli_query($mysqli, " SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow10=mysqli_num_rows($queryByDate10);
 ?>
  <?php

$queryByDateRd10=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd10 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd10=mysqli_num_rows($queryByDateRd10);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow10+$dateRowRd10>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow10+$dateRowRd10?></span></td>
    <?php
$queryByDateStatus10=mysqli_query($mysqli, " SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus10=mysqli_num_rows($queryByDateStatus10);
$queryByDateRdStatus10=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd10 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus10=mysqli_num_rows($queryByDateRdStatus10);

$total10=$dateRowStatus2+$dateRowRdStatus10;
?>
<td width="20%"><span class="<?php if($total10>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus10+$dateRowRdStatus10?></span>



<?php

$queryByDateFinal10=mysqli_query($mysqli, " SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal10=mysqli_num_rows($queryByDateFinal10);

$queryByDateRdFinal10=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd10 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal10=mysqli_num_rows($queryByDateRdFinal10);

$totalFinal10=$dateRowFinal10+$dateRowRdFinal10;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities10&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal10+$dateRowRdFinal10?></span></span>  

</td>
    <td width="25%">
	<?php

$queryByDateData10=mysqli_query($mysqli, " SELECT * FROM tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData10=mysqli_fetch_array($queryByDateData10)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData10['target_date']))?>
     <?php if($totalFinal10!=$total10){?>
    <span onClick="window.open('change_date.php?eid=activities10&cid=<?=date("d-m-Y",strtotime($dateRowData10['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities10" method="post"> 
        <input name="Activities" value="Re-inspections/Follow-up visits of units" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile10=mysqli_query($mysqli, " SELECT * FROM  tbl_activities10 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile10)>0){
while($activitiesFileList10=mysqli_fetch_array($activitiesFile10)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList10['file']?>" target="_blank"><?=$activitiesFileList10['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   
<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate11=mysqli_query($mysqli, " SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow11=mysqli_num_rows($queryByDate11);
 ?>
  <?php

$queryByDateRd11=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd11 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd11=mysqli_num_rows($queryByDateRd11);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow11+$dateRowRd11>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow11+$dateRowRd11?></span></td>
    <?php
$queryByDateStatus11=mysqli_query($mysqli, " SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus11=mysqli_num_rows($queryByDateStatus11);
$queryByDateRdStatus11=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd11 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus11=mysqli_num_rows($queryByDateRdStatus11);
$total11=$dateRowStatus11+$dateRowRdStatus11;
?>
<td width="20%"><span class="<?php if($total11>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus11+$dateRowRdStatus11?></span>


<?php

$queryByDateFinal11=mysqli_query($mysqli, " SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal11=mysqli_num_rows($queryByDateFinal11);

$queryByDateRdFinal11=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd11 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal11=mysqli_num_rows($queryByDateRdFinal11);

$totalFinal11=$dateRowFinal11+$dateRowRdFinal11;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities11&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal11+$dateRowRdFinal11?></span></span>  

</td>
    <td width="25%">
	<?php

$queryByDateData11=mysqli_query($mysqli, " SELECT * FROM tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData11=mysqli_fetch_array($queryByDateData11)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData11['target_date']))?>
     <?php if($totalFinal11!=$total11){?>
    <span onClick="window.open('change_date.php?eid=activities11&cid=<?=date("d-m-Y",strtotime($dateRowData11['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities11" method="post"> 
        <input name="Activities" value="Inspections for VIP complaint verification" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile11=mysqli_query($mysqli, " SELECT * FROM  tbl_activities11 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile11)>0){
while($activitiesFileList11=mysqli_fetch_array($activitiesFile11)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList11['file']?>" target="_blank"><?=$activitiesFileList11['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   
<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> 
<?php
$queryByDate12=mysqli_query($mysqli, " SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow12=mysqli_num_rows($queryByDate12);
 ?>
  <?php

$queryByDateRd12=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd12 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd12=mysqli_num_rows($queryByDateRd12);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow12+$dateRowRd12>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow12+$dateRowRd12?></span></td>
    <?php
$queryByDateStatus12=mysqli_query($mysqli, " SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus12=mysqli_num_rows($queryByDateStatus12);
$queryByDateRdStatus12=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd12 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus12=mysqli_num_rows($queryByDateRdStatus12);
$total12=$dateRowStatus12+$dateRowRdStatus12;
?>
<td width="20%"><span class="<?php if($total12>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus12+$dateRowRdStatus12?></span>

<?php

$queryByDateFinal12=mysqli_query($mysqli, " SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal12=mysqli_num_rows($queryByDateFinal12);

$queryByDateRdFinal12=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd12 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal12=mysqli_num_rows($queryByDateRdFinal12);

$totalFinal12=$dateRowFinal12+$dateRowRdFinal12;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities12&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal12+$dateRowRdFinal12?></span></span> 
</td>
    <td width="25%">
	<?php

$queryByDateData12=mysqli_query($mysqli, " SELECT * FROM tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData12=mysqli_fetch_array($queryByDateData12)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData12['target_date']))?>
    
     <?php if($totalFinal12!=$total12){?>
    <span onClick="window.open('change_date.php?eid=activities12&cid=<?=date("d-m-Y",strtotime($dateRowData12['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities12" method="post"> 
        <input name="Activities" value="Inspections related with NGT/court matter" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile12=mysqli_query($mysqli, " SELECT * FROM  tbl_activities12 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile12)>0){
while($activitiesFileList12=mysqli_fetch_array($activitiesFile12)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList12['file']?>" target="_blank"><?=$activitiesFileList12['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   
<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> 
<?php
$queryByDate13=mysqli_query($mysqli, " SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow13=mysqli_num_rows($queryByDate13);
 ?>
 <?php

$queryByDateRd13=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd13 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd13=mysqli_num_rows($queryByDateRd13);
 ?> 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow13+$dateRowRd13>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow13+$dateRowRd13?></span></td>
    <?php
$queryByDateStatus13=mysqli_query($mysqli, " SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus13=mysqli_num_rows($queryByDateStatus13);
$queryByDateRdStatus13=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd13 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus13=mysqli_num_rows($queryByDateRdStatus13);
$total13=$dateRowStatus13+$dateRowRdStatus13;
?>
<td width="20%"><span class="<?php if($total13>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus13+$dateRowRdStatus13?></span>

<?php

$queryByDateFinal13=mysqli_query($mysqli, " SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal13=mysqli_num_rows($queryByDateFinal13);

$queryByDateRdFinal13=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd13 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal13=mysqli_num_rows($queryByDateRdFinal13);

$totalFinal13=$dateRowFinal13+$dateRowRdFinal13;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities13&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal13+$dateRowRdFinal13?></span></span> 
</td>
    <td width="25%">
	<?php

$queryByDateData13=mysqli_query($mysqli, " SELECT * FROM tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData13=mysqli_fetch_array($queryByDateData13)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData13['target_date']))?>
    
     <?php if($totalFinal13!=$total13){?>
    <span onClick="window.open('change_date.php?eid=activities13&cid=<?=date("d-m-Y",strtotime($dateRowData13['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities13" method="post"> 
        <input name="Activities" value="Monitoring for trail run under HWM Rules" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile13=mysqli_query($mysqli, " SELECT * FROM  tbl_activities13 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile13)>0){
while($activitiesFileList13=mysqli_fetch_array($activitiesFile13)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList13['file']?>" target="_blank"><?=$activitiesFileList13['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   
<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> 
<?php
$queryByDate14=mysqli_query($mysqli, " SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow14=mysqli_num_rows($queryByDate14);
 ?>
  <?php

$queryByDateRd14=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd14 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd14=mysqli_num_rows($queryByDateRd14);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow14+$dateRowRd14>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow14+$dateRowRd14?></span></td>
    <?php
$queryByDateStatus14=mysqli_query($mysqli, " SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus14=mysqli_num_rows($queryByDateStatus14);
$queryByDateRdStatus14=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd14 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus14=mysqli_num_rows($queryByDateRdStatus14);
$total14=$dateRowStatus14+$dateRowRdStatus14;
?>
<td width="20%"><span class="<?php if($total14>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus14+$dateRowRdStatus14?></span>


<?php

$queryByDateFinal14=mysqli_query($mysqli, " SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal14=mysqli_num_rows($queryByDateFinal14);

$queryByDateRdFinal14=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd14 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal14=mysqli_num_rows($queryByDateRdFinal14);
$totalFinal14=$dateRowFinal14+$dateRowRdFinal14;

?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities14&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal14+$dateRowRdFinal14?></span></span> 
</td>
    <td width="25%">
	<?php

$queryByDateData14=mysqli_query($mysqli, " SELECT * FROM tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData14=mysqli_fetch_array($queryByDateData14)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData14['target_date']))?>
    
     <?php if($totalFinal14!=$total14){?>
    <span onClick="window.open('change_date.php?eid=activities14&cid=<?=date("d-m-Y",strtotime($dateRowData14['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities14" method="post"> 
        <input name="Activities" value="Monitoring for trail run under HWM Rules" type="hidden">
         
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile14=mysqli_query($mysqli, " SELECT * FROM  tbl_activities14 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile14)>0){
while($activitiesFileList14=mysqli_fetch_array($activitiesFile14)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList14['file']?>" target="_blank"><?=$activitiesFileList14['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
  
<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> 
<?php
$queryByDate15=mysqli_query($mysqli, " SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow15=mysqli_num_rows($queryByDate15);
 ?>
  <?php

$queryByDateRd15=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd15 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd15=mysqli_num_rows($queryByDateRd15);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow15+$dateRowRd15>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow15+$dateRowRd15?></span></td>
    <?php
$queryByDateStatus15=mysqli_query($mysqli, " SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND status=1 AND rd_id='".$_GET['rd_id12']."'");  
$dateRowStatus15=mysqli_num_rows($queryByDateStatus15);
$queryByDateRdStatus15=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd15 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus15=mysqli_num_rows($queryByDateRdStatus15);
$total15=$dateRowStatus15+$dateRowRdStatus15;
?>
<td width="20%"><span class="<?php if($total15>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus15+$dateRowRdStatus15?></span>


<?php

$queryByDateFinal15=mysqli_query($mysqli, " SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal15=mysqli_num_rows($queryByDateFinal15);

$queryByDateRdFinal15=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd15 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal15=mysqli_num_rows($queryByDateRdFinal15);

$totalFinal15=$dateRowFinal15+$dateRowRdFinal15;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities15&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal15+$dateRowRdFinal15?></span></span> 

</td>
    <td width="25%">
	<?php

$queryByDateData15=mysqli_query($mysqli, " SELECT * FROM tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData15=mysqli_fetch_array($queryByDateData15)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData15['target_date']))?>
    
     <?php if($totalFinal15!=$total15){?>
    <span onClick="window.open('change_date.php?eid=activities15&cid=<?=date("d-m-Y",strtotime($dateRowData15['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities15" method="post"> 
        <input name="Activities" value="Meetings/workshops/Training" type="hidden">
        <input name="state" value="<?=$_GET['userId']?>" type="hidden">
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
        <input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile15=mysqli_query($mysqli, " SELECT * FROM  tbl_activities15 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile15)>0){
while($activitiesFileList15=mysqli_fetch_array($activitiesFile15)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList15['file']?>" target="_blank"><?=$activitiesFileList15['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
   
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate16=mysqli_query($mysqli, " SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow16=mysqli_num_rows($queryByDate16);
 ?>
  <?php

$queryByDateRd16=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd16 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd16=mysqli_num_rows($queryByDateRd16);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow16+$dateRowRd16>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow16+$dateRowRd16?></span></td>
    <?php
$queryByDateStatus16=mysqli_query($mysqli, " SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus16=mysqli_num_rows($queryByDateStatus16);
$queryByDateRdStatus16=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd16 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus16=mysqli_num_rows($queryByDateRdStatus16);
$total16=$dateRowStatus16+$dateRowRdStatus16;
?>
<td width="20%"><span class="<?php if($total16>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus16+$dateRowRdStatus16?></span>


<?php

$queryByDateFinal16=mysqli_query($mysqli, " SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal16=mysqli_num_rows($queryByDateFinal16);

$queryByDateRdFinal16=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd16 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal16=mysqli_num_rows($queryByDateRdFinal16);

$totalFinal16=$dateRowFinal16+$dateRowRdFinal16;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities16&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal16+$dateRowRdFinal16?></span></span> 
</td>
    <td width="25%">
	<?php

$queryByDateData16=mysqli_query($mysqli, " SELECT * FROM tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData16=mysqli_fetch_array($queryByDateData16)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData16['target_date']))?>
    
     <?php if($totalFinal16!=$total16){?>
    
    <span onClick="window.open('change_date.php?eid=activities16&cid=<?=date("d-m-Y",strtotime($dateRowData16['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span>
    <?php } ?>
    </div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities16" method="post"> 
        <input name="Activities" value="Inspections for public complaint verification" type="hidden">
        <input name="state" value="<?=$_GET['userId']?>" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
<input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile16=mysqli_query($mysqli, " SELECT * FROM  tbl_activities16 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile16)>0){
while($activitiesFileList16=mysqli_fetch_array($activitiesFile16)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList16['file']?>" target="_blank"><?=$activitiesFileList16['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>
 
 
 <tr>

<td valign="top">Inspections for ganga complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate17=mysqli_query($mysqli, " SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."'");  

$dateRow17=mysqli_num_rows($queryByDate17);
 ?>
  <?php

$queryByDateRd17=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd17 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  

$dateRowRd17=mysqli_num_rows($queryByDateRd17);
 ?>
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="<?php if($dateRow17+$dateRowRd17>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('view_report_details.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow17+$dateRowRd17?></span></td>
    <?php
$queryByDateStatus17=mysqli_query($mysqli, " SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND status=1");  
$dateRowStatus17=mysqli_num_rows($queryByDateStatus17);
$queryByDateRdStatus17=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd17 where month = '".$_GET['month']."'  AND status=1 AND user_id= '".$user['id']."'");  
$dateRowRdStatus17=mysqli_num_rows($queryByDateRdStatus17);
$total17=$dateRowStatus17+$dateRowRdStatus17;
?>
<td width="20%"><span class="<?php if($total17>0){echo "totalNumbers";} else { echo"totalNumber";}?>" onClick="window.open('final_view_report_details.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i><?=$dateRowStatus17+$dateRowRdStatus17?></span>



<?php

$queryByDateFinal17=mysqli_query($mysqli, " SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' AND final_Status=2");  

$dateRowFinal17=mysqli_num_rows($queryByDateFinal17);

$queryByDateRdFinal17=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd17 where month = '".$_GET['month']."' AND final_Status=2 AND user_id= '".$user['id']."'");  

$dateRowRdFinal17=mysqli_num_rows($queryByDateRdFinal17);

$totalFinal17=$dateRowFinal17+$dateRowRdFinal17;
?> 
<span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report1.php?eid=activities17&cid=<?=$_GET['month']?>&rd=<?=$_GET['rd_id12']?>','','width=718,height=800,scrollbar=0,menubar=0');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal17+$dateRowRdFinal17?></span></span> 
</td>
    <td width="25%">
	<?php

$queryByDateData17=mysqli_query($mysqli, " SELECT * FROM tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month." AND rd_id='".$_GET['rd_id12']."' GROUP BY target_date");  

while($dateRowData17=mysqli_fetch_array($queryByDateData17)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData17['target_date']))?>
     <?php if($totalFinal17!=$total17){?>
    <span onClick="window.open('change_date.php?eid=activities17&cid=<?=date("d-m-Y",strtotime($dateRowData17['target_date']))?>','','width=518,height=300,scrollbar=0,menubar=0');" style="float:right; cursor:pointer; font-size:10px; color:#FF0000;"><i class="fa fa-fw fa-long-arrow-right"></i> Change Date</span><?php } ?></div>
    <?php
	}
	?>
    </td>
    <td  width="35%"><form action="" name="activities17" method="post"> 
        <input name="Activities" value="Inspections for ganga complaint verification" type="hidden">
        <input name="state" value="<?=$_GET['userId']?>" type="hidden">
        
        <input name="rd" type="hidden" value="<?=$_GET['rd_id12']?>">
<input name="month" type="hidden" value="<?=$_GET['month']?>">
        
        <select name="type" class="form-control" style="width:140px; float:left;">
        
        <option value="">Set Priority</option>
        <option value="P1" <?=($_POST['type']=="P1")?'selected':''?> >P1</option>
        <option value="P2" <?=($_POST['type']=="P2")?'selected':''?>>P2</option>
        <option value="P3" <?=($_POST['type']=="P3")?'selected':''?>>P3</option>
        <option value="P4" <?=($_POST['type']=="P4")?'selected':''?>>P4</option>
        </select>
        <input name="submit1" type="submit" value="Save" class="select">
        </form></td>
  </tr>
 
</table>
 
   <?php 
 $activitiesFile17=mysqli_query($mysqli, " SELECT * FROM  tbl_activities17 where YEAR(target_date) = ".$year." AND MONTH(target_date) = ".$month."  AND rd_id='".$_GET['rd_id12']."' GROUP BY main_id");
 if(mysqli_num_rows($activitiesFile17)>0){
while($activitiesFileList17=mysqli_fetch_array($activitiesFile17)){
?>
<span style="height:30px; line-height:14px; padding:6px; width:100%; float:left; background:#FFFFFF; border:1px solid #CCCCCC;">View Document : <a href="upload/<?=$activitiesFileList17['file']?>" target="_blank"><?=$activitiesFileList17['file']?></a></span>
<?php
}
}
 ?>
 </td>
</tr>

 

 
   
    
</table>

<form action="" method="post" name="mainForm">
<input name="month" value="<?=$_GET['month']?>" type="hidden">
<input name="rd" value="<?=$_GET['rd_id12']?>" type="hidden">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><input name="submit" value="Final Report" class="select" type="submit"></td>
  
  </tr>
 
</table>
</form>






            

             </div>
             </div>
             <?php
             }
             ?>  






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
