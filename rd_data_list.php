<?php 
ob_start();
session_start();
ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
 
?>

<?php
if(isset($_POST['submit']) && $_POST['submit']=="Save")
{

$main="INSERT INTO tbl_activities_main(user_id) VALUES (".$_SESSION['userId']['id'].")";
$mainQuery=mysqli_query($main);


if($main){

$id = mysqli_insert_id();
$location="upload/"; 
/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file0']["name"])){
$temp0 = explode(".",$_FILES['file0']["name"]);
$extension0 = end($temp0);
$fileName0=time()."".rand()."1".".".$extension0;
}
else
{
$fileName0="";
}

$Unit_Name0=$_POST['Unit_Name0'] ;
$countUnit_Name0 = count($Unit_Name0); 
 
for($i=0; $i<$countUnit_Name0; $i++)
{
if(!empty($_POST['Unit_Name0'][$i])){

$strquery0="insert into  tbl_activities0(main_id,user_id, activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id0']."','".$_POST['priority0']."','".$_POST['Unit_Name0'][$i]."','".$_POST['rd_id0'][$i]."','".$fileName0."','".date("Y-m-d",strtotime($_POST['target_date0']))."')";
mysqli_query($strquery0);
}
}
move_uploaded_file($_FILES['file0']['tmp_name'],$location.$fileName0);
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file1']["name"])){
$temp1 = explode(".",$_FILES['file1']["name"]);
$extension1 = end($temp1);
$fileName1=time()."".rand()."2".".".$extension1;
}
else
{
$fileName1="";
}

$Unit_Name1=$_POST['Unit_Name1'] ;
$countUnit_Name1 = count($Unit_Name1); 
 
for($i=0; $i<$countUnit_Name1; $i++)
{
if(!empty($_POST['Unit_Name1'][$i])){

$strquery1="insert into  tbl_activities1(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id1']."','".$_POST['priority1']."','".$_POST['Unit_Name1'][$i]."','".$_POST['rd_id1'][$i]."','".$fileName1."','".date("Y-m-d",strtotime($_POST['target_date1']))."')";
mysqli_query($strquery1);
}
}
move_uploaded_file($_FILES['file1']['tmp_name'],$location.$fileName1);
/*------------------------------------------------------------------------------------------------------------------*/



/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file2']["name"])){
$temp2 = explode(".",$_FILES['file2']["name"]);
$extension2 = end($temp2);
$fileName2=time()."".rand()."3".".".$extension2;
}
else
{
$fileName2="";
}

$Unit_Name2=$_POST['Unit_Name2'] ;
$countUnit_Name2 = count($Unit_Name2); 
 
for($i=0; $i<$countUnit_Name2; $i++)
{
if(!empty($_POST['Unit_Name2'][$i])){

$strquery2="insert into  tbl_activities2(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id2']."','".$_POST['priority2']."','".$_POST['Unit_Name2'][$i]."','".$_POST['rd_id2'][$i]."','".$fileName2."','".date("Y-m-d",strtotime($_POST['target_date2']))."')";
mysqli_query($strquery2);
}
}
move_uploaded_file($_FILES['file2']['tmp_name'],$location.$fileName2);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file3']["name"])){
$temp3 = explode(".",$_FILES['file3']["name"]);
$extension3 = end($temp3);
$fileName3=time()."".rand()."4".".".$extension3;
}
else
{
$fileName3="";
}

$Unit_Name3=$_POST['Unit_Name3'] ;
$countUnit_Name3 = count($Unit_Name3); 
 
for($i=0; $i<$countUnit_Name3; $i++)
{
if(!empty($_POST['Unit_Name3'][$i])){

$strquery3="insert into  tbl_activities3(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id3']."','".$_POST['priority3']."','".$_POST['Unit_Name3'][$i]."','".$_POST['rd_id3'][$i]."','".$fileName3."','".date("Y-m-d",strtotime($_POST['target_date3']))."')";
mysqli_query($strquery3);
}
}
move_uploaded_file($_FILES['file3']['tmp_name'],$location.$fileName3);
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file4']["name"])){
$temp4 = explode(".",$_FILES['file4']["name"]);
$extension4 = end($temp4);
$fileName4=time()."".rand()."5".".".$extension4;
}
else
{
$fileName4="";
}

$Unit_Name4=$_POST['Unit_Name4'] ;
$countUnit_Name4 = count($Unit_Name4); 
 
for($i=0; $i<$countUnit_Name4; $i++)
{
if(!empty($_POST['Unit_Name4'][$i])){

$strquery4="insert into  tbl_activities4(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id4']."','".$_POST['priority4']."','".$_POST['Unit_Name4'][$i]."','".$_POST['rd_id4'][$i]."','".$fileName4."','".date("Y-m-d",strtotime($_POST['target_date4']))."')";
mysqli_query($strquery4);
}
}
move_uploaded_file($_FILES['file4']['tmp_name'],$location.$fileName4);
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file5']["name"])){
$temp5 = explode(".",$_FILES['file5']["name"]);
$extension5 = end($temp5);
$fileName5=time()."".rand()."6".".".$extension5;
}
else
{
$fileName5="";
}

$Unit_Name5=$_POST['Unit_Name5'] ;
$countUnit_Name5 = count($Unit_Name5); 
 
for($i=0; $i<$countUnit_Name5; $i++)
{
if(!empty($_POST['Unit_Name5'][$i])){

$strquery5="insert into  tbl_activities5(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id5']."','".$_POST['priority5']."','".$_POST['Unit_Name5'][$i]."','".$_POST['rd_id5'][$i]."','".$fileName5."','".date("Y-m-d",strtotime($_POST['target_date5']))."')";
mysqli_query($strquery5);
}
}
move_uploaded_file($_FILES['file5']['tmp_name'],$location.$fileName5);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file6']["name"])){
$temp6 = explode(".",$_FILES['file6']["name"]);
$extension6 = end($temp6);
$fileName6=time()."".rand()."7".".".$extension6;
}
else
{
$fileName6="";
}

$Unit_Name6=$_POST['Unit_Name6'] ;
$countUnit_Name6 = count($Unit_Name6); 
 
for($i=0; $i<$countUnit_Name6; $i++)
{
if(!empty($_POST['Unit_Name6'][$i])){

$strquery6="insert into  tbl_activities6(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id6']."','".$_POST['priority6']."','".$_POST['Unit_Name6'][$i]."','".$_POST['rd_id6'][$i]."','".$fileName6."','".date("Y-m-d",strtotime($_POST['target_date6']))."')";
mysqli_query($strquery6);
}
}
move_uploaded_file($_FILES['file6']['tmp_name'],$location.$fileName6);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file7']["name"])){
$temp7 = explode(".",$_FILES['file7']["name"]);
$extension7 = end($temp7);
$fileName7=time()."".rand()."7".".".$extension7;
}
else
{
$fileName7="";
}

$Unit_Name7=$_POST['Unit_Name7'] ;
$countUnit_Name7 = count($Unit_Name7); 
 
for($i=0; $i<$countUnit_Name7; $i++)
{
if(!empty($_POST['Unit_Name7'][$i])){

$strquery7="insert into  tbl_activities7(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id7']."','".$_POST['priority7']."','".$_POST['Unit_Name7'][$i]."','".$_POST['rd_id7'][$i]."','".$fileName7."','".date("Y-m-d",strtotime($_POST['target_date7']))."')";
mysqli_query($strquery7);
}
}
move_uploaded_file($_FILES['file7']['tmp_name'],$location.$fileName7);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file8']["name"])){
$temp8 = explode(".",$_FILES['file8']["name"]);
$extension8 = end($temp8);
$fileName8=time()."".rand()."9".".".$extension8;
}
else
{
$fileName8="";
}

$Unit_Name8=$_POST['Unit_Name8'] ;
$countUnit_Name8 = count($Unit_Name8); 
 
for($i=0; $i<$countUnit_Name8; $i++)
{
if(!empty($_POST['Unit_Name8'][$i])){

$strquery8="insert into  tbl_activities8(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id8']."','".$_POST['priority8']."','".$_POST['Unit_Name8'][$i]."','".$_POST['rd_id8'][$i]."','".$fileName8."','".date("Y-m-d",strtotime($_POST['target_date8']))."')";
mysqli_query($strquery8);
}
}
move_uploaded_file($_FILES['file8']['tmp_name'],$location.$fileName8);
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file9']["name"])){
$temp9 = explode(".",$_FILES['file9']["name"]);
$extension9 = end($temp9);
$fileName9=time()."".rand()."10".".".$extension9;
}
else
{
$fileName9="";
}

$Unit_Name9=$_POST['Unit_Name9'] ;
$countUnit_Name9 = count($Unit_Name9); 
 
for($i=0; $i<$countUnit_Name9; $i++)
{
if(!empty($_POST['Unit_Name9'][$i])){

$strquery9="insert into  tbl_activities9(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id9']."','".$_POST['priority9']."','".$_POST['Unit_Name9'][$i]."','".$_POST['rd_id9'][$i]."','".$fileName9."','".date("Y-m-d",strtotime($_POST['target_date9']))."')";
mysqli_query($strquery9);
}
}
move_uploaded_file($_FILES['file9']['tmp_name'],$location.$fileName9);
/*------------------------------------------------------------------------------------------------------------------*/




/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file10']["name"])){
$temp10 = explode(".",$_FILES['file10']["name"]);
$extension10 = end($temp10);
$fileName10=time()."".rand()."11".".".$extension10;
}
else
{
$fileName10="";
}

$Unit_Name10=$_POST['Unit_Name10'] ;
$countUnit_Name10 = count($Unit_Name10); 
 
for($i=0; $i<$countUnit_Name10; $i++)
{
if(!empty($_POST['Unit_Name10'][$i])){

$strquery10="insert into  tbl_activities10(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id10']."','".$_POST['priority10']."','".$_POST['Unit_Name10'][$i]."','".$_POST['rd_id10'][$i]."','".$fileName10."','".date("Y-m-d",strtotime($_POST['target_date10']))."')";
mysqli_query($strquery10);
}
}
move_uploaded_file($_FILES['file10']['tmp_name'],$location.$fileName10);
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file11']["name"])){
$temp11 = explode(".",$_FILES['file11']["name"]);
$extension11 = end($temp11);
$fileName11=time()."".rand()."12".".".$extension11;
}
else
{
$fileName11="";
}

$Unit_Name11=$_POST['Unit_Name11'] ;
$countUnit_Name11 = count($Unit_Name11); 
 
for($i=0; $i<$countUnit_Name11; $i++)
{
if(!empty($_POST['Unit_Name11'][$i])){

$strquery11="insert into  tbl_activities11(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id11']."','".$_POST['priority11']."','".$_POST['Unit_Name11'][$i]."','".$_POST['rd_id11'][$i]."','".$fileName11."','".date("Y-m-d",strtotime($_POST['target_date11']))."')";
mysqli_query($strquery11);
}
}
move_uploaded_file($_FILES['file11']['tmp_name'],$location.$fileName11);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file12']["name"])){
$temp12 = explode(".",$_FILES['file12']["name"]);
$extension12 = end($temp12);
$fileName12=time()."".rand()."13".".".$extension12;
}
else
{
$fileName12="";
}

$Unit_Name12=$_POST['Unit_Name12'] ;
$countUnit_Name12 = count($Unit_Name12); 
 
for($i=0; $i<$countUnit_Name12; $i++)
{
if(!empty($_POST['Unit_Name12'][$i])){

$strquery12="insert into  tbl_activities12(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id12']."','".$_POST['priority12']."','".$_POST['Unit_Name12'][$i]."','".$_POST['rd_id12'][$i]."','".$fileName12."','".date("Y-m-d",strtotime($_POST['target_date12']))."')";
mysqli_query($strquery12);
}
}
move_uploaded_file($_FILES['file12']['tmp_name'],$location.$fileName12);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file13']["name"])){
$temp13 = explode(".",$_FILES['file13']["name"]);
$extension13 = end($temp13);
$fileName13=time()."".rand()."14".".".$extension13;
}
else
{
$fileName13="";
}

$Unit_Name13=$_POST['Unit_Name13'] ;
$countUnit_Name13 = count($Unit_Name13); 
 
for($i=0; $i<$countUnit_Name13; $i++)
{
if(!empty($_POST['Unit_Name13'][$i])){

$strquery13="insert into  tbl_activities13(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id13']."','".$_POST['priority13']."','".$_POST['Unit_Name13'][$i]."','".$_POST['rd_id13'][$i]."','".$fileName13."','".date("Y-m-d",strtotime($_POST['target_date13']))."')";
mysqli_query($strquery13);
}
}
move_uploaded_file($_FILES['file13']['tmp_name'],$location.$fileName13);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file14']["name"])){
$temp14 = explode(".",$_FILES['file14']["name"]);
$extension14 = end($temp14);
$fileName14=time()."".rand()."15".".".$extension14;
}
else
{
$fileName14="";
}

$Unit_Name14=$_POST['Unit_Name14'] ;
$countUnit_Name14 = count($Unit_Name14); 
 
for($i=0; $i<$countUnit_Name14; $i++)
{
if(!empty($_POST['Unit_Name14'][$i])){

$strquery14="insert into  tbl_activities14(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id14']."','".$_POST['priority14']."','".$_POST['Unit_Name14'][$i]."','".$_POST['rd_id14'][$i]."','".$fileName14."','".date("Y-m-d",strtotime($_POST['target_date14']))."')";
mysqli_query($strquery14);
}
}
move_uploaded_file($_FILES['file14']['tmp_name'],$location.$fileName14);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file15']["name"])){
$temp15 = explode(".",$_FILES['file15']["name"]);
$extension15 = end($temp15);
$fileName15=time()."".rand()."16".".".$extension15;
}
else
{
$fileName15="";
}

$Unit_Name15=$_POST['Unit_Name15'] ;
$countUnit_Name15 = count($Unit_Name15); 
 
for($i=0; $i<$countUnit_Name15; $i++)
{
if(!empty($_POST['Unit_Name15'][$i])){

$strquery15="insert into  tbl_activities15(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id15']."','".$_POST['priority15']."','".$_POST['Unit_Name15'][$i]."','".$_POST['rd_id15'][$i]."','".$fileName15."','".date("Y-m-d",strtotime($_POST['target_date15']))."')";
mysqli_query($strquery15);
}
}
move_uploaded_file($_FILES['file15']['tmp_name'],$location.$fileName15);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file16']["name"])){
$temp16 = explode(".",$_FILES['file16']["name"]);
$extension16 = end($temp16);
$fileName16=time()."".rand()."17".".".$extension16;
}
else
{
$fileName16="";
}

$Unit_Name16=$_POST['Unit_Name16'] ;
$countUnit_Name16 = count($Unit_Name16); 
 
for($i=0; $i<$countUnit_Name16; $i++)
{
if(!empty($_POST['Unit_Name16'][$i])){

$strquery16="insert into  tbl_activities16(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id16']."','".$_POST['priority16']."','".$_POST['Unit_Name16'][$i]."','".$_POST['rd_id16'][$i]."','".$fileName16."','".date("Y-m-d",strtotime($_POST['target_date16']))."')";
mysqli_query($strquery16);
}
}
move_uploaded_file($_FILES['file16']['tmp_name'],$location.$fileName16);
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/
 
if(!empty($_FILES['file17']["name"])){
$temp17 = explode(".",$_FILES['file17']["name"]);
$extension17 = end($temp17);
$fileName17=time()."".rand()."18".".".$extension17;
}
else
{
$fileName17="";
}

$Unit_Name17=$_POST['Unit_Name17'] ;
$countUnit_Name17 = count($Unit_Name17); 
 
for($i=0; $i<$countUnit_Name17; $i++)
{
if(!empty($_POST['Unit_Name17'][$i])){

$strquery17="insert into  tbl_activities17(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id17']."','".$_POST['priority17']."','".$_POST['Unit_Name17'][$i]."','".$_POST['rd_id17'][$i]."','".$fileName17."','".date("Y-m-d",strtotime($_POST['target_date17']))."')";
mysqli_query($strquery17);
}
}
move_uploaded_file($_FILES['file17']['tmp_name'],$location.$fileName17);
/*------------------------------------------------------------------------------------------------------------------*/

 
header('location:view_monthly.php?id='.$id);
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
       RD Data List
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">RD Data List</li>
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
      <?php if(isset($_GET['searchRegionalDirectors']) && $_GET['searchRegionalDirectors']=="Search") {?>   
      <div class="box box-primary">
      <div class="box-body">
<?php
$getUserData=mysqli_query($mysqli, " SELECT * FROM tbl_user where board='".$_GET['rd_id12']."'");
$user=mysqli_fetch_array($getUserData);  
?> 

       <table   class="table table-bordered table-striped">
  <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>Unit Details</strong></td>
  </tr>
 
<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities0&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong>  </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd0 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd=mysqli_fetch_array($queryByDateRd)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities0&cid=<?=$dateRowRd['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities0&cid=<?=$dateRowRd['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>

 
<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities1&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd1=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd1 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd1=mysqli_fetch_array($queryByDateRd1)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd1['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities1&cid=<?=$dateRowRd1['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities1&cid=<?=$dateRowRd1['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inter state river monitoring</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities2&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd2=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd2 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd2=mysqli_fetch_array($queryByDateRd2)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd2['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities2&cid=<?=$dateRowRd2['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities2&cid=<?=$dateRowRd2['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities3&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd3=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd3 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd3=mysqli_fetch_array($queryByDateRd3)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd3['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities3&cid=<?=$dateRowRd3['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities3&cid=<?=$dateRowRd3['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">CETPs</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities4&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd4=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd4 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd4=mysqli_fetch_array($queryByDateRd4)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd4['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities4&cid=<?=$dateRowRd4['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities4&cid=<?=$dateRowRd4['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">CHWTSDF</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities5&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd5=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd5 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd5=mysqli_fetch_array($queryByDateRd5)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd5['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities5&cid=<?=$dateRowRd5['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities5&cid=<?=$dateRowRd5['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">CBMWTF</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities6&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd6=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd6 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd6=mysqli_fetch_array($queryByDateRd6)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd6['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities6&cid=<?=$dateRowRd6['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities6&cid=<?=$dateRowRd6['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">STPs</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities7&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd7=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd7 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd7=mysqli_fetch_array($queryByDateRd7)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd7['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities7&cid=<?=$dateRowRd7['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities7&cid=<?=$dateRowRd7['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">SLFs(MSW)</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities8&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd8=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd8 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd8=mysqli_fetch_array($queryByDateRd8)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd8['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities8&cid=<?=$dateRowRd8['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities8&cid=<?=$dateRowRd8['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities9&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd9=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd9 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd9=mysqli_fetch_array($queryByDateRd9)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd9['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities9&cid=<?=$dateRowRd9['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities9&cid=<?=$dateRowRd9['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities10&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd10=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd10 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd10=mysqli_fetch_array($queryByDateRd10)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd10['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities10&cid=<?=$dateRowRd10['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities10&cid=<?=$dateRowRd10['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities11&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd11=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd11 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd11=mysqli_fetch_array($queryByDateRd11)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd11['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities11&cid=<?=$dateRowRd11['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities11&cid=<?=$dateRowRd11['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities12&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd12=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd12 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd12=mysqli_fetch_array($queryByDateRd12)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd12['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities12&cid=<?=$dateRowRd12['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities12&cid=<?=$dateRowRd12['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities13&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd13=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd13 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd13=mysqli_fetch_array($queryByDateRd13)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd13['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities13&cid=<?=$dateRowRd13['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities13&cid=<?=$dateRowRd13['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities14&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd14=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd14 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd14=mysqli_fetch_array($queryByDateRd14)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd14['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities14&cid=<?=$dateRowRd14['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities14&cid=<?=$dateRowRd14['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 

<tr>

<td valign="top">Meetings/workshops/Training</td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities15&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd15=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd15 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd15=mysqli_fetch_array($queryByDateRd15)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd15['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities15&cid=<?=$dateRowRd15['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities15&cid=<?=$dateRowRd15['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities16&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd16=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd16 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd16=mysqli_fetch_array($queryByDateRd16)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd16['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities16&cid=<?=$dateRowRd16['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities16&cid=<?=$dateRowRd16['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
<tr>

<td valign="top">Inspections for ganga complaint verification </td>


<td> 
 <table width="100%" border="1">
  <tr>
    <td width="7%"><strong>S. No.</strong></td>
    <td width="80%"><strong>Unit Name</strong></td>
    <td width="13%"><strong>Action  | <span onClick="window.open('add_rd_data.php?eid=activities17&month=<?=$_GET['month']?>&user_id=<?=$user['id']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Add</span></strong> </td>
  </tr>
  
<?php 
$i=1;
$queryByDateRd17=mysqli_query($mysqli, " SELECT * FROM tbl_activities_rd17 where month = '".$_GET['month']."' AND user_id= '".$user['id']."'");  
while($dateRowRd17=mysqli_fetch_array($queryByDateRd17)){
?>
  <tr>
    <td><?=$i?></td>
    <td><?=$dateRowRd17['Unit_Name']?></td>
    <td><span onClick="window.open('edit_rd_data.php?eid=activities17&cid=<?=$dateRowRd17['rdid']?>','','width=900,height=500,scrollbar=0,menubar=0');" style="cursor:pointer;">Edit</span>/<a href="delete_rd_data.php?eid=activities17&cid=<?=$dateRowRd17['rdid']?>&month=<?=$_GET['month']?>&rd_id12=<?=$_GET['rd_id12']?>&searchRegionalDirectors=Search" onClick="return confirm('you want to delete?');">Delete</a></td>
  </tr>
 <?php
 $i++;
  } 
 ?>
</table>

</td>
</tr>
 
   
</table>


 

    
      </div></div>
      
  <?php }?> 

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

<!-- Bootstrap 3.3.6 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script  src="js/index.js"></script>
  <script type="text/javascript" src="js/zebra_datepicker.js"></script>
  <script type="text/javascript" src="js/core.js"></script>
  <link rel="stylesheet" href="js/default.css" type="text/css">
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
