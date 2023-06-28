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

$strquery0="insert into  tbl_activities0(main_id,user_id, activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id0']."','".$_POST['priority0']."','".$_POST['Unit_Name0'][$i]."','".$_POST['rd_id0'][$i]."','".$fileName0."','".date("Y-m-d",strtotime($_POST['target_date0']))."','".date("Y-m-d H:i:s")."')";
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

$strquery1="insert into  tbl_activities1(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id1']."','".$_POST['priority1']."','".$_POST['Unit_Name1'][$i]."','".$_POST['rd_id1'][$i]."','".$fileName1."','".date("Y-m-d",strtotime($_POST['target_date1']))."','".date("Y-m-d H:i:s")."')";
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

$strquery2="insert into  tbl_activities2(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id2']."','".$_POST['priority2']."','".$_POST['Unit_Name2'][$i]."','".$_POST['rd_id2'][$i]."','".$fileName2."','".date("Y-m-d",strtotime($_POST['target_date2']))."','".date("Y-m-d H:i:s")."')";
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

$strquery3="insert into  tbl_activities3(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id3']."','".$_POST['priority3']."','".$_POST['Unit_Name3'][$i]."','".$_POST['rd_id3'][$i]."','".$fileName3."','".date("Y-m-d",strtotime($_POST['target_date3']))."','".date("Y-m-d H:i:s")."')";
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

$strquery4="insert into  tbl_activities4(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id4']."','".$_POST['priority4']."','".$_POST['Unit_Name4'][$i]."','".$_POST['rd_id4'][$i]."','".$fileName4."','".date("Y-m-d",strtotime($_POST['target_date4']))."','".date("Y-m-d H:i:s")."')";
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

$strquery5="insert into  tbl_activities5(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id5']."','".$_POST['priority5']."','".$_POST['Unit_Name5'][$i]."','".$_POST['rd_id5'][$i]."','".$fileName5."','".date("Y-m-d",strtotime($_POST['target_date5']))."','".date("Y-m-d H:i:s")."')";
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

$strquery6="insert into  tbl_activities6(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id6']."','".$_POST['priority6']."','".$_POST['Unit_Name6'][$i]."','".$_POST['rd_id6'][$i]."','".$fileName6."','".date("Y-m-d",strtotime($_POST['target_date6']))."','".date("Y-m-d H:i:s")."')";
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

$strquery7="insert into  tbl_activities7(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id7']."','".$_POST['priority7']."','".$_POST['Unit_Name7'][$i]."','".$_POST['rd_id7'][$i]."','".$fileName7."','".date("Y-m-d",strtotime($_POST['target_date7']))."','".date("Y-m-d H:i:s")."')";
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

$strquery8="insert into  tbl_activities8(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id8']."','".$_POST['priority8']."','".$_POST['Unit_Name8'][$i]."','".$_POST['rd_id8'][$i]."','".$fileName8."','".date("Y-m-d",strtotime($_POST['target_date8']))."','".date("Y-m-d H:i:s")."')";
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

$strquery9="insert into  tbl_activities9(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['activities_id9']."','".$_POST['priority9']."','".$_POST['Unit_Name9'][$i]."','".$_POST['rd_id9'][$i]."','".$fileName9."','".date("Y-m-d",strtotime($_POST['target_date9']))."','".date("Y-m-d H:i:s")."')";
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

$strquery10="insert into  tbl_activities10(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id10']."','".$_POST['priority10']."','".$_POST['Unit_Name10'][$i]."','".$_POST['rd_id10'][$i]."','".$fileName10."','".date("Y-m-d",strtotime($_POST['target_date10']))."','".date("Y-m-d H:i:s")."')";
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

$strquery11="insert into  tbl_activities11(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id11']."','".$_POST['priority11']."','".$_POST['Unit_Name11'][$i]."','".$_POST['rd_id11'][$i]."','".$fileName11."','".date("Y-m-d",strtotime($_POST['target_date11']))."','".date("Y-m-d H:i:s")."')";
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

$strquery12="insert into  tbl_activities12(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id12']."','".$_POST['priority12']."','".$_POST['Unit_Name12'][$i]."','".$_POST['rd_id12'][$i]."','".$fileName12."','".date("Y-m-d",strtotime($_POST['target_date12']))."','".date("Y-m-d H:i:s")."')";
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

$strquery13="insert into  tbl_activities13(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id13']."','".$_POST['priority13']."','".$_POST['Unit_Name13'][$i]."','".$_POST['rd_id13'][$i]."','".$fileName13."','".date("Y-m-d",strtotime($_POST['target_date13']))."','".date("Y-m-d H:i:s")."')";
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

$strquery14="insert into  tbl_activities14(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id14']."','".$_POST['priority14']."','".$_POST['Unit_Name14'][$i]."','".$_POST['rd_id14'][$i]."','".$fileName14."','".date("Y-m-d",strtotime($_POST['target_date14']))."','".date("Y-m-d H:i:s")."')";
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

$strquery15="insert into  tbl_activities15(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id15']."','".$_POST['priority15']."','".$_POST['Unit_Name15'][$i]."','".$_POST['rd_id15'][$i]."','".$fileName15."','".date("Y-m-d",strtotime($_POST['target_date15']))."','".date("Y-m-d H:i:s")."')";
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

$strquery16="insert into  tbl_activities16(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id16']."','".$_POST['priority16']."','".$_POST['Unit_Name16'][$i]."','".$_POST['rd_id16'][$i]."','".$fileName16."','".date("Y-m-d",strtotime($_POST['target_date16']))."','".date("Y-m-d H:i:s")."')";
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

$strquery17="insert into  tbl_activities17(main_id,user_id,activities_name, priority,Unit_Name, rd_id,file,target_date,Proposed_on) values (".$id.",'".$_SESSION['userId']['id']."',
'".$_POST['activities_id17']."','".$_POST['priority17']."','".$_POST['Unit_Name17'][$i]."','".$_POST['rd_id17'][$i]."','".$fileName17."','".date("Y-m-d",strtotime($_POST['target_date17']))."','".date("Y-m-d H:i:s")."')";
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
 
  <!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
// To make field readonly
$(".readonly0").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date0" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly1").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date1" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly2").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date2" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly3").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date3" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly4").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date4" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>


<script>
// To make field readonly
$(".readonly5").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date5" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>


<script>
// To make field readonly
$(".readonly6").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date6" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>


<script>
// To make field readonly
$(".readonly7").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date7" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>


<script>
// To make field readonly
$(".readonly8").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date8" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly9").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date9" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly10").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date10" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly11").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date11" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>

<script>
// To make field readonly
$(".readonly12").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date12" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly13").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date13" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly14").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date14" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly15").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date15" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly16").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date16" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
<script>
// To make field readonly
$(".readonly17").keydown(function(e){
e.preventDefault();
});
 
// To user jQuery DatePicker
$(function() {
$( ".date17" ).datepicker({
dateFormat : 'dd-mm-yy',
showOn: "both",
buttonImage: "b_calendar.png",
buttonImageOnly: true,
buttonText: "Select date",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0"
});
});
</script>
 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton0=$('.add_button0');var wrapper0=$('.field_wrapper0');var fieldHTML0='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name0[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id0[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery0=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd0=mysqli_fetch_array($getQuery0)){?><option value="<?=$rd0['board']?>"><?=$rd0['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button0" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton0).click(function(){if(x<maxField){x++;$(wrapper0).append(fieldHTML0)}});$(wrapper0).on('click','.remove_button0',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton1=$('.add_button1');var wrapper1=$('.field_wrapper1');var fieldHTML1='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name1[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id1[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery1=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd1=mysqli_fetch_array($getQuery1)){?><option value="<?=$rd1['board']?>"><?=$rd1['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button1" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton1).click(function(){if(x<maxField){x++;$(wrapper1).append(fieldHTML1)}});$(wrapper1).on('click','.remove_button1',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton2=$('.add_button2');var wrapper2=$('.field_wrapper2');var fieldHTML2='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name2[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id2[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery2=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd2=mysqli_fetch_array($getQuery2)){?><option value="<?=$rd2['board']?>"><?=$rd2['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button2" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton2).click(function(){if(x<maxField){x++;$(wrapper2).append(fieldHTML2)}});$(wrapper2).on('click','.remove_button2',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton3=$('.add_button3');var wrapper3=$('.field_wrapper3');var fieldHTML3='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name3[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id3[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery3=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd3=mysqli_fetch_array($getQuery3)){?><option value="<?=$rd3['board']?>"><?=$rd3['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button3" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton3).click(function(){if(x<maxField){x++;$(wrapper3).append(fieldHTML3)}});$(wrapper3).on('click','.remove_button3',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton4=$('.add_button4');var wrapper4=$('.field_wrapper4');var fieldHTML4='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name4[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id4[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery4=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd4=mysqli_fetch_array($getQuery4)){?><option value="<?=$rd4['board']?>"><?=$rd4['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button4" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton4).click(function(){if(x<maxField){x++;$(wrapper4).append(fieldHTML4)}});$(wrapper4).on('click','.remove_button4',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton5=$('.add_button5');var wrapper5=$('.field_wrapper5');var fieldHTML5='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name5[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id5[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery5=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd5=mysqli_fetch_array($getQuery5)){?><option value="<?=$rd5['board']?>"><?=$rd5['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button5" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton5).click(function(){if(x<maxField){x++;$(wrapper5).append(fieldHTML5)}});$(wrapper5).on('click','.remove_button5',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton6=$('.add_button6');var wrapper6=$('.field_wrapper6');var fieldHTML6='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name6[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id6[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery6=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd6=mysqli_fetch_array($getQuery6)){?><option value="<?=$rd6['board']?>"><?=$rd6['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button6" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton6).click(function(){if(x<maxField){x++;$(wrapper6).append(fieldHTML6)}});$(wrapper6).on('click','.remove_button6',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton7=$('.add_button7');var wrapper7=$('.field_wrapper7');var fieldHTML7='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name7[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id7[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery7=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd7=mysqli_fetch_array($getQuery7)){?><option value="<?=$rd7['board']?>"><?=$rd7['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button7" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton7).click(function(){if(x<maxField){x++;$(wrapper7).append(fieldHTML7)}});$(wrapper7).on('click','.remove_button7',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton8=$('.add_button8');var wrapper8=$('.field_wrapper8');var fieldHTML8='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name8[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id8[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery8=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd8=mysqli_fetch_array($getQuery8)){?><option value="<?=$rd8['board']?>"><?=$rd8['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button8" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton8).click(function(){if(x<maxField){x++;$(wrapper8).append(fieldHTML8)}});$(wrapper8).on('click','.remove_button8',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>



<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton9=$('.add_button9');var wrapper9=$('.field_wrapper9');var fieldHTML9='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name9[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id9[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery9=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd9=mysqli_fetch_array($getQuery9)){?><option value="<?=$rd9['board']?>"><?=$rd9['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button9" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton9).click(function(){if(x<maxField){x++;$(wrapper9).append(fieldHTML9)}});$(wrapper9).on('click','.remove_button9',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton10=$('.add_button10');var wrapper10=$('.field_wrapper10');var fieldHTML10='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name10[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id10[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery10=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd10=mysqli_fetch_array($getQuery10)){?><option value="<?=$rd10['board']?>"><?=$rd10['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button10" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton10).click(function(){if(x<maxField){x++;$(wrapper10).append(fieldHTML10)}});$(wrapper10).on('click','.remove_button10',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton11=$('.add_button11');var wrapper11=$('.field_wrapper11');var fieldHTML11='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name11[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id11[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery11=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd11=mysqli_fetch_array($getQuery11)){?><option value="<?=$rd11['board']?>"><?=$rd11['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button11" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton11).click(function(){if(x<maxField){x++;$(wrapper11).append(fieldHTML11)}});$(wrapper11).on('click','.remove_button11',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton12=$('.add_button12');var wrapper12=$('.field_wrapper12');var fieldHTML12='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name12[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id12[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery12=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd12=mysqli_fetch_array($getQuery12)){?><option value="<?=$rd12['board']?>"><?=$rd12['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button12" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton12).click(function(){if(x<maxField){x++;$(wrapper12).append(fieldHTML12)}});$(wrapper12).on('click','.remove_button12',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton13=$('.add_button13');var wrapper13=$('.field_wrapper13');var fieldHTML13='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name13[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id13[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery13=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd13=mysqli_fetch_array($getQuery13)){?><option value="<?=$rd13['board']?>"><?=$rd13['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button13" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton13).click(function(){if(x<maxField){x++;$(wrapper13).append(fieldHTML13)}});$(wrapper13).on('click','.remove_button13',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton14=$('.add_button14');var wrapper14=$('.field_wrapper14');var fieldHTML14='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name14[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id14[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery14=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd14=mysqli_fetch_array($getQuery14)){?><option value="<?=$rd14['board']?>"><?=$rd14['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button14" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton14).click(function(){if(x<maxField){x++;$(wrapper14).append(fieldHTML14)}});$(wrapper14).on('click','.remove_button14',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton15=$('.add_button15');var wrapper15=$('.field_wrapper15');var fieldHTML15='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name15[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id15[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery15=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd15=mysqli_fetch_array($getQuery15)){?><option value="<?=$rd15['board']?>"><?=$rd15['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button15" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton15).click(function(){if(x<maxField){x++;$(wrapper15).append(fieldHTML15)}});$(wrapper15).on('click','.remove_button15',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton16=$('.add_button16');var wrapper16=$('.field_wrapper16');var fieldHTML16='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name16[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id16[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery16=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd16=mysqli_fetch_array($getQuery16)){?><option value="<?=$rd16['board']?>"><?=$rd16['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button16" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton16).click(function(){if(x<maxField){x++;$(wrapper16).append(fieldHTML16)}});$(wrapper16).on('click','.remove_button16',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton17=$('.add_button17');var wrapper17=$('.field_wrapper17');var fieldHTML17='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name17[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id17[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery17=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd17=mysqli_fetch_array($getQuery17)){?><option value="<?=$rd17['board']?>"><?=$rd17['board']?></option><?php }?></select><a href="javascript:void(0);" class="remove_button17" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton17).click(function(){if(x<maxField){x++;$(wrapper17).append(fieldHTML17)}});$(wrapper17).on('click','.remove_button17',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<style type="text/css">

<?php
for($i=0;$i<=18;$i++){
?>
.field_wrapper<?=$i?> div{ margin-bottom:10px;}
.add_button<?=$i?>{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
.remove_button<?=$i?>{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
<?php
}
?>
</style>

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
       Report From
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Report Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <h3 style="color:#FF0000;">Note:</h3>
        
        
 <div class="alert alert-danger">
   &  "  '  <  > Special Characters not accept for Unit Details

 </div> 
  </p>      
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
 
         
      <div class="box box-primary">
      <div class="box-body">
      <form  action="" method="post" enctype="multipart/form-data">

       <table   class="table table-bordered table-striped">
  <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>Unit Details</strong></td>
  </tr>
<?php 

$getActivitis=mysqli_query("select * from tbl_user_activities_list where user_id=".$_SESSION['userId']['id']."");
while($row=mysqli_fetch_array($getActivitis))
{
$dataList[]=$row['activities_id'];
}
?> 
<?php if (in_array(18, $dataList)) {?>

<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<div class="field_wrapper0">
<div style="height:45px;">
<input name="activities_id0" value="Water quality monitoring stations & no. of inspection during the month" type="hidden">
<input name="priority0" value="P1" type="hidden">


<input type="text" name="Unit_Name0[]" style="width:49%; float:left;" class="form-control" value=""/>
<select name="rd_id0[]" class="form-control" style="width:49%; margin-left:10px; float:left;">
<option>Select RD</option>
<?php $getQuery=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); 
while($rd=mysqli_fetch_array($getQuery)){?>
<option value="<?=$rd['board']?>"><?=$rd['board']?></option><?php }?>
</select>


</div>
</div>
<a href="javascript:void(0);" class="add_button0" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file0" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date0']?>" name="target_date0" class="form-control date0 readonly0"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>

<?php } ?>
<?php if (in_array(17, $dataList)) {?>
<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> <div class="field_wrapper1">
<div style="height:45px;">
<input name="activities_id1" value="Ambient air quality monitoring stations & no. of inspection during the month" type="hidden">
<input name="priority1" value="P4" type="hidden">


<input type="text" name="Unit_Name1[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id1[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery1=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd1=mysqli_fetch_array($getQuery1)){?><option value="<?=$rd1['board']?>"><?=$rd1['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button1" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>

<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file1" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date1']?>" name="target_date1" class="form-control date1 readonly1"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(16, $dataList)) {?>
<tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5"> <div class="field_wrapper2">
<div style="height:45px;">
<input name="activities_id2" value="Inter state river monitoring" type="hidden">
<input name="priority2" value="P4" type="hidden">


<input type="text" name="Unit_Name2[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id2[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery2=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd2=mysqli_fetch_array($getQuery2)){?><option value="<?=$rd2['board']?>"><?=$rd2['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button2" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file2" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date2']?>" name="target_date2" class="form-control date2 readonly2"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>

</td>
</tr>
<?php } ?>
<?php if (in_array(15, $dataList)) {?>
<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"><div class="field_wrapper3">
<div style="height:45px;">
<input name="activities_id3" value="Monitoring of river/rivulets/drains" type="hidden">
<input name="priority3" value="P4" type="hidden">

<input type="text" name="Unit_Name3[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id3[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery3=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd3=mysqli_fetch_array($getQuery3)){?><option value="<?=$rd3['board']?>"><?=$rd3['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button3" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file3" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date3']?>" name="target_date3" class="form-control date3 readonly3"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(8, $dataList)) {?>
<tr>

<td valign="top">CETPs</td>


<td colspan="5"> <div class="field_wrapper4">
<div style="height:45px;">
<input name="activities_id4" value="CETPs" type="hidden">
<input name="priority4" value="P4" type="hidden">

<input type="text" name="Unit_Name4[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id4[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery4=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd4=mysqli_fetch_array($getQuery4)){?><option value="<?=$rd4['board']?>"><?=$rd4['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button4" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file4" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date4']?>" name="target_date4" class="form-control date4 readonly4"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(9, $dataList)) {?>
<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> <div class="field_wrapper5">
<div style="height:45px;">
<input name="activities_id5" value="CHWTSDF" type="hidden">
<input name="priority5" value="P4" type="hidden">

<input type="text" name="Unit_Name5[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id5[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery5=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd5=mysqli_fetch_array($getQuery5)){?><option value="<?=$rd5['board']?>"><?=$rd5['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button5" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file5" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date5']?>" name="target_date5" class="form-control date5 readonly5"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>

</td>
</tr>
<?php } ?>
<?php if (in_array(10, $dataList)) {?>
<tr>

<td valign="top">CBMWTF</td>


<td colspan="5"> <div class="field_wrapper6">
<div style="height:45px;">
<input name="activities_id6" value="CBMWTF" type="hidden">
<input name="priority6" value="P4" type="hidden">

<input type="text" name="Unit_Name6[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id6[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery6=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd6=mysqli_fetch_array($getQuery6)){?><option value="<?=$rd6['board']?>"><?=$rd6['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button6" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file6" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date6']?>" name="target_date6" class="form-control date6 readonly6"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(11, $dataList)) {?>
<tr>

<td valign="top">STPs</td>


<td colspan="5"> <div class="field_wrapper7">
<div style="height:45px;">
<input name="activities_id7" value="STPs" type="hidden">
<input name="priority7" value="P4" type="hidden">

<input type="text" name="Unit_Name7[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id7[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery7=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd7=mysqli_fetch_array($getQuery7)){?><option value="<?=$rd7['board']?>"><?=$rd7['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button7" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file7" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date7']?>" name="target_date7" class="form-control date7 readonly7"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(12, $dataList)) {?>
<tr>

<td valign="top">SLFs(MSW)</td>


<td colspan="5"> <div class="field_wrapper8">
<div style="height:45px;">
<input name="activities_id8" value="SLFs(MSW)" type="hidden">
<input name="priority8" value="P4" type="hidden">

<input type="text" name="Unit_Name8[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id8[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery8=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd8=mysqli_fetch_array($getQuery8)){?><option value="<?=$rd8['board']?>"><?=$rd8['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button8" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file8" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date8']?>" name="target_date8" class="form-control date8 readonly8"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(3, $dataList)) {?>
<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> <div class="field_wrapper9">
<div style="height:45px;">
<input name="activities_id9" value="Inspections based on SMS alerts from OCEMS of units" type="hidden">
<input name="priority9" value="P2" type="hidden">

<input type="text" name="Unit_Name9[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id9[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery9=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd9=mysqli_fetch_array($getQuery9)){?><option value="<?=$rd9['board']?>"><?=$rd9['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button9" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file9" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date9']?>" name="target_date9"  class="form-control date9 readonly9"  placeholder="DD-MM-YYYY" required>
    
    <span class="errorText"><?=$errorData1?></span>
    </td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(6, $dataList)) {?>
<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"><div class="field_wrapper10">
<div style="height:45px;">
<input name="activities_id10" value="Re-inspections/Follow-up visits of units" type="hidden">
<input name="priority10" value="P3" type="hidden">

<input type="text" name="Unit_Name10[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id10[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery10=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd10=mysqli_fetch_array($getQuery10)){?><option value="<?=$rd10['board']?>"><?=$rd10['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button10" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file10" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date10']?>" name="target_date10" class="form-control date10 readonly10"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(1, $dataList)) {?>
<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> <div class="field_wrapper11">
<div style="height:45px;">
<input name="activities_id11" value="Inspections for VIP complaint verification" type="hidden">
<input name="priority11" value="P1" type="hidden">

<input type="text" name="Unit_Name11[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id11[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery11=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd11=mysqli_fetch_array($getQuery11)){?><option value="<?=$rd11['board']?>"><?=$rd11['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button11" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file11" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text" value="<?=$_POST['target_date11']?>" name="target_date11" class="form-control date1 readonly1"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(2, $dataList)) {?>
<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> <div class="field_wrapper12">
<div style="height:45px;">
<input name="activities_id12" value="Inspections related with NGT/court matter" type="hidden">
<input name="priority12" value="P2" type="hidden">

<input type="text" name="Unit_Name12[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id12[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery12=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd12=mysqli_fetch_array($getQuery12)){?><option value="<?=$rd12['board']?>"><?=$rd12['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button12" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file12" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date12']?>" name="target_date12" class="form-control date12 readonly12"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>

</td>
</tr>
<?php } ?>
<?php if (in_array(14, $dataList)) {?>
<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> <div class="field_wrapper13">
<div style="height:45px;">
<input name="activities_id13" value="Monitoring for trail run under HWM Rules" type="hidden">
<input name="priority13" value="P4" type="hidden">

<input type="text" name="Unit_Name13[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id13[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery13=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd13=mysqli_fetch_array($getQuery13)){?><option value="<?=$rd13['board']?>"><?=$rd13['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button13" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file13" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date13']?>" name="target_date13" class="form-control date13 readonly13"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>

</td>
</tr>
<?php } ?>
<?php if (in_array(13, $dataList)) {?>
<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> <div class="field_wrapper14">
<div style="height:45px;">
<input name="activities_id14" value="Inspections related with import of hazardous & other waste" type="hidden">
<input name="priority14" value="P4" type="hidden">

<input type="text" name="Unit_Name14[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id14[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery14=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd14=mysqli_fetch_array($getQuery14)){?><option value="<?=$rd14['board']?>"><?=$rd14['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button14" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file14" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date14']?>" name="target_date14" class="form-control date14 readonly14"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(7, $dataList)) {?>

<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> <div class="field_wrapper15">
<div style="height:45px;">
<input name="activities_id15" value="Meetings/workshops/Training" type="hidden">
<input name="priority15" value="P4" type="hidden">

<input type="text" name="Unit_Name15[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id15[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery15=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd15=mysqli_fetch_array($getQuery15)){?><option value="<?=$rd15['board']?>"><?=$rd15['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button15" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file15" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date15']?>" name="target_date15" class="form-control date15 readonly15"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(5, $dataList)) {?>
<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"><div class="field_wrapper16">
<div style="height:45px;">
<input name="activities_id16" value="Inspections for public complaint verification" type="hidden">
<input name="priority16" value="P3" type="hidden">

<input type="text" name="Unit_Name16[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id16[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery16=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd16=mysqli_fetch_array($getQuery16)){?><option value="<?=$rd16['board']?>"><?=$rd16['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button16" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file16" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date16']?>" name="target_date16" class="form-control date16 readonly16"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>
</td>
</tr>
<?php } ?>
<?php if (in_array(4, $dataList)) {?>
<tr>

<td valign="top">Inspections for Ganga complaince verification </td>


<td colspan="5"><div class="field_wrapper17">
<div style="height:45px;">
<input name="activities_id17" value="Inspections for ganga complaint verification" type="hidden">
<input name="priority17" value="P4" type="hidden">

<input type="text" name="Unit_Name17[]" style="width:49%; float:left;" class="form-control" value=""/><select name="rd_id17[]" class="form-control" style="width:49%; margin-left:10px; float:left;"><option>Select RD</option><?php $getQuery17=mysqli_query("SELECT * FROM tbl_user where user_type='SPCB' ORDER BY board ASC"); while($rd17=mysqli_fetch_array($getQuery17)){?><option value="<?=$rd17['board']?>"><?=$rd17['board']?></option><?php }?></select>


</div>
</div>
<a href="javascript:void(0);" class="add_button17" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
<table width="100%">
  <tr>
    <td width="15%">Upload Document</td>
    <td width="36%">  <input name="file17" type="file"></td>
    <td width="16%">Target Date</td>
    <td width="33%"> <input type="text"  value="<?=$_POST['target_date17']?>" name="target_date17" class="form-control date17 readonly17"  placeholder="DD-MM-YYYY" required></td>
  </tr>
</table>

</td>
</tr>

 <?php } ?>
 
   
</table>


<table width="100%" border="1">
  <tr>
    <td><input name="submit" type="submit"  class="btn bg-navy margin" value="Save"></td>
  </tr>
</table>

      </form>
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
 
</body>
</html>
