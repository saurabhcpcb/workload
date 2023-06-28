 <?php 
 ob_start();
 session_start();
 ini_set('display_errors','0');
 include_once'includes/connect.php';
 include_once'includes/session.php';
 date_default_timezone_set('Asia/Kolkata');

 ?>
 <?php
 if(isset($_POST['submit']) && $_POST['submit']=="Submit")
 {
 
$sqlQuery="UPDATE tbl_activities SET type='".$_POST['type']."'  WHERE Activities='".$_POST['Activities']."' AND state=".$_POST['state']." AND month='".$_POST['month']."'"; 

if(mysql_query($sqlQuery))
{
$_SESSION['messageData']="Activities Update";
header('location:'.$_SERVER['REQUEST_URI']); 
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
             
             <?php
			 if(isset($_GET['searchRegionalDirectors'])){
			  $months= $_GET['month'];
			 }
			 ?>
              <td width="30%"> <input name="month" value="<?=$months?>"  placeholder="Choose previous month for earlier work allotments." class="form-control" id="datepicker-example112" type="text"></td>
               
           

               
                <td width="32%"> <input name="searchRegionalDirectors" type="submit"  class="btn bg-olive margin" value="Submit"></td>
               </tr>
              </table>
             </form>

            </div>
           </div>

           <?php
           if(isset($_GET['month'])){
		   
		$month= date("m", strtotime($_GET['month']));
		$year= date("Y", strtotime($_GET['month']));
		
		 
		 
             ?> 

             <div class="box box-primary">
              <div class="box-body">
 
         <h3 style="color:#2a9609; text-align:left; padding-bottom:5px;  border-bottom:2px double #2a9609; font-weight:600;"><?=$_GET['month']?></h3>
 <table   class="table table-bordered table-striped">
  <tr>
     <td width="7%" valign="top"><strong>Priority</strong></td>
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>Alloted By MS</strong></td>
     
  </tr>
  
<tr>
<?php
$queryByPriority0=mysql_query("SELECT * FROM tbl_activities0 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData0=mysql_fetch_array($queryByPriority0);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData0['priority'])){ echo "P1";} else{echo $priorityData0['priority'];}?></span></td>
<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<?php
 
$queryByDate=mysql_query("SELECT * FROM tbl_activities0 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  



$dateRow=mysql_num_rows($queryByDate);
 
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities0&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow?></span>
    
   <?php
 
$queryByDateFinal=mysql_query("SELECT * FROM tbl_activities0 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal=mysql_num_rows($queryByDateFinal);



 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities0&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal?></span></span>
    </td>
    
 
    
    <td width="25%">
    
    
	<?php
 $queryByDateData=mysql_query("SELECT * FROM tbl_activities0 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month."  AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData=mysql_fetch_array($queryByDateData)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>

 <tr>
<?php
$queryByPriority11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData11=mysql_fetch_array($queryByPriority11);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData11['priority'])){ echo "P1";} else{echo $priorityData11['priority'];}?></span></td>
<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow11=mysql_num_rows($queryByDate11);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow11>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities11&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow11?></span>
    
 	<?php
 
$queryByDateFinal11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal11=mysql_num_rows($queryByDateFinal11);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities11&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal11?></span></span>    
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData11=mysql_query("SELECT * FROM tbl_activities11 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData11=mysql_fetch_array($queryByDateData11)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData11['target_date']))?> </div>
    <?php
 	
	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>

<tr>
<?php
$queryByPriority9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData9=mysql_fetch_array($queryByPriority9);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData9['priority'])){ echo "P2";} else{echo $priorityData9['priority'];}?></span></td>
<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> 
<?php
$queryByDate9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow9=mysql_num_rows($queryByDate9);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow9>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities9&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow9?></span>
    
                    <?php
 
$queryByDateFinal9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal9=mysql_num_rows($queryByDateFinal9);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities9&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal9?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData9=mysql_query("SELECT * FROM tbl_activities9 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData9=mysql_fetch_array($queryByDateData9)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData9['target_date']))?> </div>
    <?php
 	
	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
<tr>
<?php
$queryByPriority12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData12=mysql_fetch_array($queryByPriority12);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData12['priority'])){ echo "P2";} else{echo $priorityData12['priority'];}?></span></td>
<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> 
<?php
$queryByDate12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND  final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow12=mysql_num_rows($queryByDate12);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow12>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities12&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow12?></span>
    
    	<?php
 
$queryByDateFinal12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal12=mysql_num_rows($queryByDateFinal12);
 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities12&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal12?></span></span>     
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData12=mysql_query("SELECT * FROM tbl_activities12 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData12=mysql_fetch_array($queryByDateData12)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData12['target_date']))?> </div>
    <?php
 	
	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
<tr>
<?php
$queryByPriority10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData10=mysql_fetch_array($queryByPriority10);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData10['priority'])){ echo "P3";} else{echo $priorityData10['priority'];}?></span></td>
<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"> 
<?php
$queryByDate10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow10=mysql_num_rows($queryByDate10);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow10>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities10&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow10?></span>                    
	
	<?php
 
$queryByDateFinal10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal10=mysql_num_rows($queryByDateFinal10);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities10&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal10?></span></span>  </td>
 
    <td width="25%">
	<?php
 $queryByDateData10=mysql_query("SELECT * FROM tbl_activities10 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData10=mysql_fetch_array($queryByDateData10)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData10['target_date']))?> </div>
    <?php
 	
	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
<tr>
<?php
$queryByPriority16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData16=mysql_fetch_array($queryByPriority16);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData16['priority'])){ echo "P3";} else{echo $priorityData16['priority'];}?></span></td>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow16=mysql_num_rows($queryByDate16);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow16>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities16&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow16?></span>
    
              	<?php
 
$queryByDateFinal16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal16=mysql_num_rows($queryByDateFinal16);
 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities16&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal16?></span></span>      
    </td>

    <td width="25%">
	<?php
 $queryByDateData16=mysql_query("SELECT * FROM tbl_activities16 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData16=mysql_fetch_array($queryByDateData16)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData16['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
<tr>
<?php
$queryByPriority1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name ");
$priorityData1=mysql_fetch_array($queryByPriority1);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData1['priority'])){ echo "P4";} else{echo $priorityData1['priority'];}?></span></td>
<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<?php
$queryByDate1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow1=mysql_num_rows($queryByDate1);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow1>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities1&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow1?></span> 
    
      <?php
 
$queryByDateFinal1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal1=mysql_num_rows($queryByDateFinal1);
 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities1&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal1?></span></span></td>
 
    <td width="25%">
	<?php
 $queryByDateData1=mysql_query("SELECT * FROM tbl_activities1 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData1=mysql_fetch_array($queryByDateData1)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData1['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name ");
$priorityData2=mysql_fetch_array($queryByPriority2);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData2['priority'])){ echo "P4";} else{echo $priorityData2['priority'];}?></span></td>
<td valign="top">Inter state river monitoring</td>


<td colspan="5"> 
<?php
$queryByDate2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow2=mysql_num_rows($queryByDate2);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow2>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities2&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow2?></span>
     <?php
 
$queryByDateFinal2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal2=mysql_num_rows($queryByDateFinal2);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities2&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal2?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData2=mysql_query("SELECT * FROM tbl_activities2 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData2=mysql_fetch_array($queryByDateData2)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData2['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData3=mysql_fetch_array($queryByPriority3);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData3['priority'])){ echo "P4";} else{echo $priorityData3['priority'];}?></span></td>
<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"> 
<?php
$queryByDate3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name ");  

$dateRow3=mysql_num_rows($queryByDate3);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow3>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities3&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow3?></span>
         <?php
 
$queryByDateFinal3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal3=mysql_num_rows($queryByDateFinal3);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities3&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal3?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData3=mysql_query("SELECT * FROM tbl_activities3 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData3=mysql_fetch_array($queryByDateData3)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData3['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData4=mysql_fetch_array($queryByPriority4);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData4['priority'])){ echo "P4";} else{echo $priorityData4['priority'];}?></span></td>
<td valign="top">CETPs</td>


<td colspan="5"> 
<?php
$queryByDate4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow4=mysql_num_rows($queryByDate4);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow4>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities4&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow4?></span>
    
      <?php
 
$queryByDateFinal4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal4=mysql_num_rows($queryByDateFinal4);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities4&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal4+$dateRowRdFinal4?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData4=mysql_query("SELECT * FROM tbl_activities4 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData4=mysql_fetch_array($queryByDateData4)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData4['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData5=mysql_fetch_array($queryByPriority5);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData5['priority'])){ echo "P4";} else{echo $priorityData5['priority'];}?></span></td>
<td valign="top">CHWTSDF</td>


<td colspan="5"> 
<?php
$queryByDate5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow5=mysql_num_rows($queryByDate5);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow5>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities5&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow5?></span>
    
        <?php
 
$queryByDateFinal5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal5=mysql_num_rows($queryByDateFinal5);
 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities5&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal5?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData5=mysql_query("SELECT * FROM tbl_activities5 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData5=mysql_fetch_array($queryByDateData5)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData5['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData6=mysql_fetch_array($queryByPriority6);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData6['priority'])){ echo "P4";} else{echo $priorityData6['priority'];}?></span></td>
<td valign="top">CBMWTF</td>


<td colspan="5"> 
<?php
$queryByDate6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow6=mysql_num_rows($queryByDate6);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow6>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities6&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow6?></span>
    
    
           <?php
 
$queryByDateFinal6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal6=mysql_num_rows($queryByDateFinal6);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities6&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal6+$dateRowRdFinal6?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData6=mysql_query("SELECT * FROM tbl_activities6 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData6=mysql_fetch_array($queryByDateData6)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData6['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 <tr>
 
 <?php
$queryByPriority7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData7=mysql_fetch_array($queryByPriority7);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData7['priority'])){ echo "P4";} else{echo $priorityData7['priority'];}?></span></td>
<td valign="top">STPs</td>


<td colspan="5"> 
<?php
$queryByDate7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow7=mysql_num_rows($queryByDate7);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow7>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities7&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow7?></span>
            <?php
 
$queryByDateFinal7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal7=mysql_num_rows($queryByDateFinal7);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities7&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal7?></span></span>    
    
    </td>
 
    <td width="25%">
	<?php

$queryByDateData7=mysql_query("SELECT * FROM tbl_activities7 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData7=mysql_fetch_array($queryByDateData7)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData7['target_date']))?> </div>
    <?php
	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
<tr>
<?php
$queryByPriority8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData8=mysql_fetch_array($queryByPriority8);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData8['priority'])){ echo "P4";} else{echo $priorityData8['priority'];}?></span></td>
 <td valign="top">SLFs(MSW)</td>
<td colspan="5"> 
<?php
$queryByDate8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow8=mysql_num_rows($queryByDate8);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow8>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities8&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow8?></span>
                <?php
 
$queryByDateFinal8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal8=mysql_num_rows($queryByDateFinal8);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities8&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal8?></span></span>  
    
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData8=mysql_query("SELECT * FROM tbl_activities8 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData8=mysql_fetch_array($queryByDateData8)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData8['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
 </tr>

  

 

 

 
<tr>
<?php
$queryByPriority13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData13=mysql_fetch_array($queryByPriority13);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData13['priority'])){ echo "P4";} else{echo $priorityData13['priority'];}?></span></td>
<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> 
<?php
$queryByDate13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow13=mysql_num_rows($queryByDate13);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow13>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities13&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow13?></span>
    
        	<?php
 
$queryByDateFinal13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal13=mysql_num_rows($queryByDateFinal13);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities13&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal13?></span></span>  
    </td>
 
    <td width="25%">
	<?php
 $queryByDateData13=mysql_query("SELECT * FROM tbl_activities13 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData13=mysql_fetch_array($queryByDateData13)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData13['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 
<tr>
<?php
$queryByPriority14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData14=mysql_fetch_array($queryByPriority14);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData14['priority'])){ echo "P4";} else{echo $priorityData14['priority'];}?></span></td>
<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> 
<?php
$queryByDate14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow14=mysql_num_rows($queryByDate14);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow14>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities14&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow14?></span>
    
    
         	<?php
 
$queryByDateFinal14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal14=mysql_num_rows($queryByDateFinal14);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities14&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal14?></span></span>     
    </td>

    <td width="25%">
	<?php
 $queryByDateData14=mysql_query("SELECT * FROM tbl_activities14 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData14=mysql_fetch_array($queryByDateData14)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData14['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 

<tr>
<?php
$queryByPriority15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData15=mysql_fetch_array($queryByPriority15);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData15['priority'])){ echo "P4";} else{echo $priorityData15['priority'];}?></span></td>
<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> 
<?php
$queryByDate15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow15=mysql_num_rows($queryByDate15);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow15>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities15&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow15?></span>
           	<?php
 
$queryByDateFinal15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal15=mysql_num_rows($queryByDateFinal15);
 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities15&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal15?></span></span>       
    
    </td>

    <td width="25%">
	<?php
 $queryByDateData15=mysql_query("SELECT * FROM tbl_activities15 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData15=mysql_fetch_array($queryByDateData15)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData15['target_date']))?></div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>
 

 
<tr>
<?php
$queryByPriority17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY activities_name");
$priorityData17=mysql_fetch_array($queryByPriority17);

?>
<td valign="top"><span style="line-height:34px; font-weight:600; width:40px; float:left;"><?php if(empty($priorityData17['priority'])){ echo "P4";} else{echo $priorityData17['priority'];}?></span></td>
<td valign="top">Inspections for ganga complaint verification </td>


<td colspan="5"> 
<?php
$queryByDate17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRow17=mysql_num_rows($queryByDate17);
 ?>
 
 <table width="100%" border="1" style="margin:6px 0px;">
 

  <tr>
 
    <td width="20%"><span class="btn bg-<?php if($dateRow17>0){echo"orange";} else { echo"purple";}?> btn-flat margin" onClick="window.open('view_report_details_by_rd.php?eid=activities17&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i> <?=$dateRow17?></span>
    
                	<?php
 
$queryByDateFinal17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=2 AND rd_id='".$_SESSION['userId']['board']."'");  

$dateRowFinal17=mysql_num_rows($queryByDateFinal17);

 
 ?> 
    <span style="float:right; cursor:pointer; font-size:10px; color:#006633;" onClick="window.open('final_report.php?eid=activities17&cid=<?=$_GET['month']?>','','width=1100,height=500,scrollbar=yes');"><i class="fa fa-fw fa-long-arrow-right"></i>View Complete Report<span style="color:#FF0000; border:1px solid #FF0000; padding:0px 5px; border-radius:100px; font-size:12px;"><?=$dateRowFinal17?></span></span>     
    </td>
   
    <td width="25%">
	<?php
 $queryByDateData17=mysql_query("SELECT * FROM tbl_activities17 where YEAR(proposed_date_by_ms) = ".$year." AND MONTH(proposed_date_by_ms) = ".$month." AND final_Status=1 AND rd_id='".$_SESSION['userId']['board']."' GROUP BY target_date");  

while($dateRowData17=mysql_fetch_array($queryByDateData17)){
 ?>
	<div style="width:98%; padding:6px; border:1px solid #CCCCCC; margin:4px;"><?=date("d-M-Y",strtotime($dateRowData17['target_date']))?> </div>
    <?php
 	}
	?>
    </td>
     
  </tr>
 
</table>
 
 
 </td>
</tr>

 
 
   
</table>

 






            

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
