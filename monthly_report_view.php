<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
$getQuery=mysql_query("SELECT * FROM tbl_monthly_report WHERE month='".date("M-Y")."' AND monthly_user_id='".$_SESSION['userId']['id']."'");

$data=mysql_fetch_array($getQuery);
?>
<?php
$ActivitiesList = array();
$descriptionQuery="select * from tbl_activities_description where month_data='".date("M-Y")."' AND act_id='".$_SESSION['userId']['id']."'";
$getDescriptionQuery=mysql_query($descriptionQuery);
while ($activities=mysql_fetch_array($getDescriptionQuery,MYSQL_ASSOC)){


$ActivitiesList[]=$activities;

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
 
  
      <div class="box box-primary">
      <div class="box-body">
 
       <h3 align="center">Central Pollution Control Board 
  Regional  Directorate <strong><?=$data['m_rd']?></strong></h3>
  
  <h4 align="center">Reporting Month: <?=$data['month']?> </h4>
      <table   class="table table-bordered table-striped">
  <tr>
    <td width="4%" rowspan="2" valign="top"><strong>No.</strong></td>
    <td width="30%" rowspan="2" valign="top"><strong>Activities</strong></td>
    <td colspan="5" valign="top"><strong>Details of Activities</strong></td>
  </tr>
  <tr>
    
    
    <td width="20%" valign="top"><strong>Numbers to be covered in the month</strong></td>
	
	
	<td width="25%" valign="top"><strong>Unit Name/Activities</strong></td>
  </tr>
  <tr>
    <td valign="top">1</td>
    <td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>
   
     <td style="text-align:center;"><?=$data['data_2']?></td>
     <td valign="top">
     
<?php
if($ActivitiesList[0]['Unit_Name0']!=""){
?>
<div>
<?=$ActivitiesList[0]['Unit_Name0']?> 

</div>
<?php } ?>
<?php
if($ActivitiesList[1]['Unit_Name0']!=""){
?>
<div><?=$ActivitiesList[1]['Unit_Name0']?></div>
<?php
}
?>

<?php
if($ActivitiesList[2]['Unit_Name0']!=""){
?>
<div><?=$ActivitiesList[2]['Unit_Name0']?></div>
<?php
}
?>

<?php
if($ActivitiesList[3]['Unit_Name0']!=""){
?>
<div><?=$ActivitiesList[3]['Unit_Name0']?></div>
<?php
}
?>

<?php
if($ActivitiesList[4]['Unit_Name0']!=""){
?>
<div><?=$ActivitiesList[4]['Unit_Name0']?></div>
<?php
}
?>
    
     </td>
  </tr>
  <tr>
    <td valign="top">2</td>
    <td valign="top">Ambient air quality monitoring stations &amp; no. of inspection    during the month</td>
    
    <td style="text-align:center;"><?=$data['data_4']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name1']!=""){
	?>
     <div>
    <?=$ActivitiesList[0]['Unit_Name1']?>
     </div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[1]['Unit_Name1']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name1']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[2]['Unit_Name1']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name1']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[3]['Unit_Name1']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name1']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[4]['Unit_Name1']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name1']?></div>
    <?php
	}
	?>
    
    </td>
  </tr>
  <tr>
    <td valign="top">3</td>
    <td valign="top">Inter state river monitoring</td>
    
    <td style="text-align:center;"><?=$data['data_6']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name2']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name2']?>
    
     
    </div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[1]['Unit_Name2']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name2']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name2']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name2']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[3]['Unit_Name2']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name2']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[4]['Unit_Name2']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name2']?></div>
    <?php
	}
	?>
    
    
    </td>
  </tr>
  <tr>
    <td valign="top">4</td>
    <td valign="top">Monitoring of river/rivulets/drains</td>
    
    <td style="text-align:center;"><?=$data['data_8']?></td>
    <td valign="top"> 
     <?php
	if($ActivitiesList[0]['Unit_Name3']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name3']?>
    </div>
    <?php } ?>
    <?php
	if($ActivitiesList[1]['Unit_Name3']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name3']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[2]['Unit_Name3']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name3']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[3]['Unit_Name3']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name3']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[4]['Unit_Name3']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name3']?></div>
    <?php
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td valign="top">5</td>
    <td valign="top">CETPs</td>
    
    <td style="text-align:center;"><?=$data['data_10']?></td>
    <td valign="top">
      <?php
	if($ActivitiesList[0]['Unit_Name4']!=""){
	?><div>
    <?=$ActivitiesList[0]['Unit_Name4']?>
   </div>
   
   <?php } ?>
     <?php
	if($ActivitiesList[1]['Unit_Name4']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name4']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[2]['Unit_Name4']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name4']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[3]['Unit_Name4']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name4']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[4]['Unit_Name4']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name4']?></div>
    <?php
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td valign="top">6</td>
    <td valign="top">CHWTSDF</td>
     
    <td style="text-align:center;"><?=$data['data_12']?></td>
    <td valign="top">
    <?php
	if($ActivitiesList[0]['Unit_Name5']!=""){
	?>
      <div>
    <?=$ActivitiesList[0]['Unit_Name5']?> 
    </div>
    
    <?php
	}
	?>
     <?php
	if($ActivitiesList[1]['Unit_Name5']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name5']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[2]['Unit_Name5']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name5']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[3]['Unit_Name5']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name5']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[4]['Unit_Name5']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name5']?></div>
    <?php
	}
	?>
    
    </div>
    </td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td valign="top">7</td>
    <td valign="top">CBMWTF</td>
     
    <td style="text-align:center;"><?=$data['data_14']?></td>
    <td valign="top"> 
    <?php
	if($ActivitiesList[0]['Unit_Name6']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name6']?>
    </div>
   <?php
   }
   ?> 
     <?php
	if($ActivitiesList[1]['Unit_Name6']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name6']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name6']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name6']?></div>
    <?php
	}
	?>
     
     <?php
	if($ActivitiesList[3]['Unit_Name6']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name6']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[4]['Unit_Name6']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name6']?></div>
    <?php
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td valign="top">8</td>
    <td valign="top">STPs</td>
    
    <td style="text-align:center;"><?=$data['data_16']?></td>
    <td valign="top"> 
     <?php
	if($ActivitiesList[0]['Unit_Name7']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name7']?>
     
    </div>
    <?php } ?>
     <?php
	if($ActivitiesList[1]['Unit_Name7']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name7']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name7']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name7']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[3]['Unit_Name7']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name7']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[4]['Unit_Name7']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name7']?></div>
    <?php
	}
	?>
    </td>
  </tr>
  <tr>
    <td valign="top">9</td>
    <td valign="top">SLFs(MSW)</td>
     
    <td style="text-align:center;"><?=$data['data_18']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name8']!=""){
	?>
     <div>
     <?=$ActivitiesList[0]['Unit_Name8']?> 
 </div>
 <?php } ?>
  <?php
	if($ActivitiesList[1]['Unit_Name8']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name8']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[2]['Unit_Name8']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name8']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[3]['Unit_Name8']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name8']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[4]['Unit_Name8']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name8']?></div>
    <?php
	}
	?></td>
  </tr>
  <tr>
    <td valign="top">10</td>
    <td valign="top">Inspections based on SMS alerts from OCEMS of units</td>
     
    <td style="text-align:center;"><?=$data['data_20']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name9']!=""){
	?>
      <div>
    <?=$ActivitiesList[0]['Unit_Name9']?>
    </div>
    <?php } ?>
    <?php
	if($ActivitiesList[1]['Unit_Name9']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name9']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[2]['Unit_Name9']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name9']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[3]['Unit_Name9']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name9']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[4]['Unit_Name9']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name9']?></div>
    <?php
	}
	?>
    
    </td>
  </tr>
  <tr>
    <td valign="top">11</td>
    <td valign="top">Re-inspections/Follow-up visits of units</td>
     
    <td style="text-align:center;"><?=$data['data_22']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name10']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name10']?>
   
</div>
<?php } ?>
 <?php
	if($ActivitiesList[1]['Unit_Name10']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name10']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[2]['Unit_Name10']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name10']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[3]['Unit_Name10']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name10']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[4]['Unit_Name10']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name10']?></div>
    <?php
	}
	?></td>
  </tr>
  <tr>
    <td valign="top">12</td>
    <td valign="top">Inspections for VIP complaint verification </td>
    
    <td style="text-align:center;"><?=$data['data_24']?></td>
    <td valign="top"> 
    <?php
	if($ActivitiesList[0]['Unit_Name11']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name11']?>
</div>
<?php
}
?>
 <?php
	if($ActivitiesList[1]['Unit_Name11']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name11']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name11']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name11']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[3]['Unit_Name11']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name11']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[4]['Unit_Name11']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name11']?></div>
    <?php
	}
	?></td>
  </tr>
  <tr>
    <td valign="top">13</td>
    <td valign="top">Inspections related with NGT/court matter</td>
    
    <td style="text-align:center;"><?=$data['data_26']?></td>
    <td valign="top"> 
     <?php
	if($ActivitiesList[0]['Unit_Name12']!=""){
	?>
    <div>
   <?=$ActivitiesList[0]['Unit_Name12']?>
</div>
<?php } ?>
 <?php
	if($ActivitiesList[1]['Unit_Name12']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name12']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[2]['Unit_Name12']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name12']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[3]['Unit_Name12']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name12']?></div>
    <?php
	}
	?>
    
    <?php
	if($ActivitiesList[4]['Unit_Name12']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name12']?></div>
    <?php
	}
	?></td>
  </tr>
  <tr>
    <td valign="top">14</td>
    <td valign="top">Monitoring for trail run under HWM Rules</td>
     
    <td style="text-align:center;"><?=$data['data_28']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name13']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name13']?>
 </div>
 <?php 
 }
 ?>
  <?php
	if($ActivitiesList[1]['Unit_Name13']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name13']?></div>
    <?php
	}
	?>
    
      <?php
	if($ActivitiesList[2]['Unit_Name13']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name13']?></div>
    <?php
	}
	?>
      <?php
	if($ActivitiesList[3]['Unit_Name13']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name13']?></div>
    <?php
	}
	?>
    
    
      <?php
	if($ActivitiesList[4]['Unit_Name13']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name13']?></div>
    <?php
	}
	?>
    
    </td>
  </tr>
  <tr>
    <td valign="top">15</td>
    <td valign="top">Inspections related with import of hazardous & other waste</td>
     
    <td style="text-align:center;"><?=$data['data_30']?></td>
    <td valign="top">
          <?php
	if($ActivitiesList[0]['Unit_Name14']!=""){
	?>
    <div>
   <?=$ActivitiesList[0]['Unit_Name14']?>
    </div>
    <?php 
	}
	?>
      <?php
	if($ActivitiesList[1]['Unit_Name14']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name14']?></div>
    <?php
	}
	?>
    
       <?php
	if($ActivitiesList[2]['Unit_Name14']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name14']?></div>
    <?php
	}
	?>
    
       <?php
	if($ActivitiesList[3]['Unit_Name14']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name14']?></div>
    <?php
	}
	?>
    
       <?php
	if($ActivitiesList[4]['Unit_Name14']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name14']?></div>
    <?php
	}
	?></td>
  </tr>
 
   <tr>
    <td valign="top">16</td>
    <td valign="top">Meetings/workshops/Training</td>
    
    <td style="text-align:center;"><?=$data['data_32']?></td>
    <td valign="top"> 
      <?php
	if($ActivitiesList[0]['Unit_Name15']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name15']?>
    </div>
    <?php 
	}
	?>
     <?php
	if($ActivitiesList[1]['Unit_Name15']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name15']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name15']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name15']?></div>
    <?php
	}
	?>
    
    
     <?php
	if($ActivitiesList[3]['Unit_Name15']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name15']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[4]['Unit_Name15']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name15']?></div>
    <?php
	}
	?>
    </td>
  </tr>
  
  <tr>
    <td valign="top">17</td>
    <td valign="top">Inspections for public complaint verification </td>
    
    <td style="text-align:center;"><?=$data['data_55']?></td>
    <td valign="top">
    <?php
	if($ActivitiesList[0]['Unit_Name16']!=""){
	?>
     <div>
    <?=$ActivitiesList[0]['Unit_Name16']?>
 </div>
 <?php
 }
 ?>
  <?php
	if($ActivitiesList[1]['Unit_Name16']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name16']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[2]['Unit_Name16']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name16']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[3]['Unit_Name16']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name16']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[4]['Unit_Name16']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name16']?></div>
    <?php
	}
	?>
    
    </td>
  </tr>
  
  
  <tr>
    <td valign="top">18</td>
    <td valign="top">Inspections for ganga complaint verification </td>
    
    <td style="text-align:center;"><?=$data['data_58']?></td>
    <td valign="top">
     <?php
	if($ActivitiesList[0]['Unit_Name17']!=""){
	?>
    <div>
    <?=$ActivitiesList[0]['Unit_Name17']?>
</div>
<?php 
}
?>
    <?php
	if($ActivitiesList[1]['Unit_Name17']!=""){
	?>
    <div><?=$ActivitiesList[1]['Unit_Name17']?></div>
    <?php
	}
	?>
     <?php
	if($ActivitiesList[2]['Unit_Name17']!=""){
	?>
    <div><?=$ActivitiesList[2]['Unit_Name17']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[3]['Unit_Name17']!=""){
	?>
    <div><?=$ActivitiesList[3]['Unit_Name17']?></div>
    <?php
	}
	?>
    
     <?php
	if($ActivitiesList[4]['Unit_Name17']!=""){
	?>
    <div><?=$ActivitiesList[4]['Unit_Name17']?></div>
    <?php
	}
	?></td>
  </tr>
  
  
  
  
  
  
   <tr>
    <td valign="top">19</td>
    <td valign="top">Other Activities</td>
    <td valign="top" colspan="5"> 
    <textarea  cols="10" readonly class="form-control" rows="1"><?=$data['data_33']?></textarea>
	<textarea  cols="10" readonly class="form-control" rows="1"><?=$data['data_50']?></textarea>
	<textarea  cols="10" readonly class="form-control" rows="1"><?=$data['data_51']?></textarea>
	<textarea cols="10" readonly class="form-control" rows="1"><?=$data['data_52']?></textarea>
	<textarea  cols="10" readonly class="form-control" rows="1"><?=$data['data_53']?></textarea>
	
	
	</td>
     
  </tr>
   
</table>
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
