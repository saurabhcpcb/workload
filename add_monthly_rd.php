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

$main="INSERT INTO tbl_activities_main_rd(user_id,month) VALUES (".$_SESSION['userId']['id']." ,'".date("M-Y")."')";
$mainQuery=mysql_query($main);


if($main){

$id = mysql_insert_id();
 
/*--------------------------------------------------------------*/


$Unit_Name0=$_POST['Unit_Name0'] ;
$countUnit_Name0 = count($Unit_Name0); 
 
for($i=0; $i<$countUnit_Name0; $i++)
{
if(!empty($_POST['Unit_Name0'][$i])){

$strquery0="insert into  tbl_activities_rd0(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','18','".$_POST['Unit_Name0'][$i]."','".date("M-Y")."')";
mysql_query($strquery0);
}
}
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/

$Unit_Name1=$_POST['Unit_Name1'] ;
$countUnit_Name1 = count($Unit_Name1); 
 
for($i=0; $i<$countUnit_Name1; $i++)
{
if(!empty($_POST['Unit_Name1'][$i])){

$strquery1="insert into  tbl_activities_rd1(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','17','".$_POST['Unit_Name1'][$i]."','".date("M-Y")."')";
mysql_query($strquery1);
}
}
/*------------------------------------------------------------------------------------------------------------------*/



/*--------------------------------------------------------------*/
 

$Unit_Name2=$_POST['Unit_Name2'] ;
$countUnit_Name2 = count($Unit_Name2); 
 
for($i=0; $i<$countUnit_Name2; $i++)
{
if(!empty($_POST['Unit_Name2'][$i])){

$strquery2="insert into  tbl_activities_rd2(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','16','".$_POST['Unit_Name2'][$i]."','".date("M-Y")."')";
mysql_query($strquery2);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name3=$_POST['Unit_Name3'] ;
$countUnit_Name3 = count($Unit_Name3); 
 
for($i=0; $i<$countUnit_Name3; $i++)
{
if(!empty($_POST['Unit_Name3'][$i])){

$strquery3="insert into  tbl_activities_rd3(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','15','".$_POST['Unit_Name3'][$i]."','".date("M-Y")."')";
mysql_query($strquery3);
}
}
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/

$Unit_Name4=$_POST['Unit_Name4'] ;
$countUnit_Name4 = count($Unit_Name4); 
 
for($i=0; $i<$countUnit_Name4; $i++)
{
if(!empty($_POST['Unit_Name4'][$i])){

$strquery4="insert into  tbl_activities_rd4(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','8','".$_POST['Unit_Name4'][$i]."','".date("M-Y")."')";
mysql_query($strquery4);
}
}
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/

$Unit_Name5=$_POST['Unit_Name5'] ;
$countUnit_Name5 = count($Unit_Name5); 
 
for($i=0; $i<$countUnit_Name5; $i++)
{
if(!empty($_POST['Unit_Name5'][$i])){

$strquery5="insert into  tbl_activities_rd5(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','9','".$_POST['Unit_Name5'][$i]."','".date("M-Y")."')";
mysql_query($strquery5);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name6=$_POST['Unit_Name6'] ;
$countUnit_Name6 = count($Unit_Name6); 
 
for($i=0; $i<$countUnit_Name6; $i++)
{
if(!empty($_POST['Unit_Name6'][$i])){

$strquery6="insert into  tbl_activities_rd6(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','10','".$_POST['Unit_Name6'][$i]."','".date("M-Y")."')";
mysql_query($strquery6);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name7=$_POST['Unit_Name7'] ;
$countUnit_Name7 = count($Unit_Name7); 
 
for($i=0; $i<$countUnit_Name7; $i++)
{
if(!empty($_POST['Unit_Name7'][$i])){

$strquery7="insert into  tbl_activities_rd7(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','11','".$_POST['Unit_Name7'][$i]."','".date("M-Y")."')";
mysql_query($strquery7);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name8=$_POST['Unit_Name8'] ;
$countUnit_Name8 = count($Unit_Name8); 
 
for($i=0; $i<$countUnit_Name8; $i++)
{
if(!empty($_POST['Unit_Name8'][$i])){

$strquery8="insert into  tbl_activities_rd8(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','12','".$_POST['Unit_Name8'][$i]."','".date("M-Y")."')";
mysql_query($strquery8);
}
}
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/

$Unit_Name9=$_POST['Unit_Name9'] ;
$countUnit_Name9 = count($Unit_Name9); 
 
for($i=0; $i<$countUnit_Name9; $i++)
{
if(!empty($_POST['Unit_Name9'][$i])){

$strquery9="insert into  tbl_activities_rd9(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','3','".$_POST['Unit_Name9'][$i]."','".date("M-Y")."')";
mysql_query($strquery9);
}
}
/*------------------------------------------------------------------------------------------------------------------*/




/*--------------------------------------------------------------*/

$Unit_Name10=$_POST['Unit_Name10'] ;
$countUnit_Name10 = count($Unit_Name10); 
 
for($i=0; $i<$countUnit_Name10; $i++)
{
if(!empty($_POST['Unit_Name10'][$i])){

$strquery10="insert into  tbl_activities_rd10(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','6','".$_POST['Unit_Name10'][$i]."','".date("M-Y")."')";
mysql_query($strquery10);
}
}
/*------------------------------------------------------------------------------------------------------------------*/


/*--------------------------------------------------------------*/

$Unit_Name11=$_POST['Unit_Name11'] ;
$countUnit_Name11 = count($Unit_Name11); 
 
for($i=0; $i<$countUnit_Name11; $i++)
{
if(!empty($_POST['Unit_Name11'][$i])){

$strquery11="insert into  tbl_activities_rd11(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','1','".$_POST['Unit_Name11'][$i]."','".date("M-Y")."')";
mysql_query($strquery11);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name12=$_POST['Unit_Name12'] ;
$countUnit_Name12 = count($Unit_Name12); 
 
for($i=0; $i<$countUnit_Name12; $i++)
{
if(!empty($_POST['Unit_Name12'][$i])){

$strquery12="insert into  tbl_activities_rd12(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','2','".$_POST['Unit_Name12'][$i]."','".date("M-Y")."')";
mysql_query($strquery12);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name13=$_POST['Unit_Name13'] ;
$countUnit_Name13 = count($Unit_Name13); 
 
for($i=0; $i<$countUnit_Name13; $i++)
{
if(!empty($_POST['Unit_Name13'][$i])){

$strquery13="insert into  tbl_activities_rd13(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','14','".$_POST['Unit_Name13'][$i]."','".date("M-Y")."')";
mysql_query($strquery13);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name14=$_POST['Unit_Name14'] ;
$countUnit_Name14 = count($Unit_Name14); 
 
for($i=0; $i<$countUnit_Name14; $i++)
{
if(!empty($_POST['Unit_Name14'][$i])){

$strquery14="insert into  tbl_activities_rd14(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','13','".$_POST['Unit_Name14'][$i]."','".date("M-Y")."')";
mysql_query($strquery14);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name15=$_POST['Unit_Name15'] ;
$countUnit_Name15 = count($Unit_Name15); 
 
for($i=0; $i<$countUnit_Name15; $i++)
{
if(!empty($_POST['Unit_Name15'][$i])){

$strquery15="insert into  tbl_activities_rd15(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','7','".$_POST['Unit_Name15'][$i]."','".date("M-Y")."')";
mysql_query($strquery15);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name16=$_POST['Unit_Name16'] ;
$countUnit_Name16 = count($Unit_Name16); 
 
for($i=0; $i<$countUnit_Name16; $i++)
{
if(!empty($_POST['Unit_Name16'][$i])){

$strquery16="insert into  tbl_activities_rd16(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','5','".$_POST['Unit_Name16'][$i]."','".date("M-Y")."')";
mysql_query($strquery16);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------*/

$Unit_Name17=$_POST['Unit_Name17'] ;
$countUnit_Name17 = count($Unit_Name17); 
 
for($i=0; $i<$countUnit_Name17; $i++)
{
if(!empty($_POST['Unit_Name17'][$i])){

$strquery17="insert into  tbl_activities_rd17(main_id,user_id,activities_id,Unit_Name,month) values (".$id.",'".$_SESSION['userId']['id']."','5','".$_POST['Unit_Name17'][$i]."','".date("M-Y")."')";
mysql_query($strquery17);
}
}
/*------------------------------------------------------------------------------------------------------------------*/



/*--------------------------------------------------------------*/

$Other_Activities=$_POST['Other_Activities'] ;
$countOtherActivities = count($Other_Activities); 
 
for($i=0; $i<$countOtherActivities; $i++)
{
if(!empty($_POST['Other_Activities'][$i])){

$OtherActivities="insert into  tbl_other_activities(main_id,user_id,activities,month) values (".$id.",'".$_SESSION['userId']['id']."','".$_POST['Other_Activities'][$i]."','".date("M-Y")."')";
mysql_query($OtherActivities);
}
}
/*------------------------------------------------------------------------------------------------------------------*/

header('location:view_monthly_rd.php?id='.$id);
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
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton0=$('.add_button0');var wrapper0=$('.field_wrapper0');var fieldHTML0='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name0[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button0" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton0).click(function(){if(x<maxField){x++;$(wrapper0).append(fieldHTML0)}});$(wrapper0).on('click','.remove_button0',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton1=$('.add_button1');var wrapper1=$('.field_wrapper1');var fieldHTML1='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name1[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button1" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton1).click(function(){if(x<maxField){x++;$(wrapper1).append(fieldHTML1)}});$(wrapper1).on('click','.remove_button1',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton2=$('.add_button2');var wrapper2=$('.field_wrapper2');var fieldHTML2='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name2[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button2" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton2).click(function(){if(x<maxField){x++;$(wrapper2).append(fieldHTML2)}});$(wrapper2).on('click','.remove_button2',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton3=$('.add_button3');var wrapper3=$('.field_wrapper3');var fieldHTML3='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name3[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button3" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton3).click(function(){if(x<maxField){x++;$(wrapper3).append(fieldHTML3)}});$(wrapper3).on('click','.remove_button3',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton4=$('.add_button4');var wrapper4=$('.field_wrapper4');var fieldHTML4='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name4[]" style="width:100%; float:left;" class="form-control" value=""/><a href="javascript:void(0);" class="remove_button4" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton4).click(function(){if(x<maxField){x++;$(wrapper4).append(fieldHTML4)}});$(wrapper4).on('click','.remove_button4',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton5=$('.add_button5');var wrapper5=$('.field_wrapper5');var fieldHTML5='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name5[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button5" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton5).click(function(){if(x<maxField){x++;$(wrapper5).append(fieldHTML5)}});$(wrapper5).on('click','.remove_button5',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton6=$('.add_button6');var wrapper6=$('.field_wrapper6');var fieldHTML6='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name6[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button6" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton6).click(function(){if(x<maxField){x++;$(wrapper6).append(fieldHTML6)}});$(wrapper6).on('click','.remove_button6',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton7=$('.add_button7');var wrapper7=$('.field_wrapper7');var fieldHTML7='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name7[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button7" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton7).click(function(){if(x<maxField){x++;$(wrapper7).append(fieldHTML7)}});$(wrapper7).on('click','.remove_button7',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script> 


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton8=$('.add_button8');var wrapper8=$('.field_wrapper8');var fieldHTML8='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name8[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button8" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton8).click(function(){if(x<maxField){x++;$(wrapper8).append(fieldHTML8)}});$(wrapper8).on('click','.remove_button8',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>



<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton9=$('.add_button9');var wrapper9=$('.field_wrapper9');var fieldHTML9='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name9[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button9" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton9).click(function(){if(x<maxField){x++;$(wrapper9).append(fieldHTML9)}});$(wrapper9).on('click','.remove_button9',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton10=$('.add_button10');var wrapper10=$('.field_wrapper10');var fieldHTML10='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name10[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button10" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton10).click(function(){if(x<maxField){x++;$(wrapper10).append(fieldHTML10)}});$(wrapper10).on('click','.remove_button10',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton11=$('.add_button11');var wrapper11=$('.field_wrapper11');var fieldHTML11='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name11[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button11" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton11).click(function(){if(x<maxField){x++;$(wrapper11).append(fieldHTML11)}});$(wrapper11).on('click','.remove_button11',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton12=$('.add_button12');var wrapper12=$('.field_wrapper12');var fieldHTML12='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name12[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button12" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton12).click(function(){if(x<maxField){x++;$(wrapper12).append(fieldHTML12)}});$(wrapper12).on('click','.remove_button12',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton13=$('.add_button13');var wrapper13=$('.field_wrapper13');var fieldHTML13='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name13[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button13" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton13).click(function(){if(x<maxField){x++;$(wrapper13).append(fieldHTML13)}});$(wrapper13).on('click','.remove_button13',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton14=$('.add_button14');var wrapper14=$('.field_wrapper14');var fieldHTML14='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name14[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button14" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton14).click(function(){if(x<maxField){x++;$(wrapper14).append(fieldHTML14)}});$(wrapper14).on('click','.remove_button14',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>

<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton15=$('.add_button15');var wrapper15=$('.field_wrapper15');var fieldHTML15='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name15[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button15" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton15).click(function(){if(x<maxField){x++;$(wrapper15).append(fieldHTML15)}});$(wrapper15).on('click','.remove_button15',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton16=$('.add_button16');var wrapper16=$('.field_wrapper16');var fieldHTML16='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name16[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button16" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton16).click(function(){if(x<maxField){x++;$(wrapper16).append(fieldHTML16)}});$(wrapper16).on('click','.remove_button16',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


<script type="text/javascript">$(document).ready(function(){var maxField=15;var addButton17=$('.add_button17');var wrapper17=$('.field_wrapper17');var fieldHTML17='<div style="width:100%; float:left; margin:5px 0px;">    <input type="text" name="Unit_Name17[]" style="width:100%; float:left;" class="form-control" value=""/> <a href="javascript:void(0);" class="remove_button17" title="Remove field"><img src="images/remove-icon.png" style="float:left;"/></a></div>';var x=1;$(addButton17).click(function(){if(x<maxField){x++;$(wrapper17).append(fieldHTML17)}});$(wrapper17).on('click','.remove_button17',function(e){e.preventDefault();$(this).parent('div').remove();x--})});</script>


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
 
           <?php
/*
*start of select case statement*
*/
 
switch($_GET['process'])
{
case 'add':

 
?>    
      <div class="box box-primary">
      <div class="box-body">
      <form  action="" method="post" enctype="multipart/form-data">
      <table   class="table table-bordered table-striped">
  <tr>
    <td width="20%">Regional Director</td>
    <td width="31%">  <input type="text"  name="name_of_nodal_officer" class="form-control" value="<?php echo $_SESSION['userId']['Officer'] ?>" readonly></td>
    <td width="26%">Reporting Month</td>
    <td width="23%"> <input type="text" class="form-control" value="<?=date('M-Y');?>" name="repoting_month" readonly></td>
  </tr>
</table>
       <table   class="table table-bordered table-striped">
  <tr>
    
    <td width="30%" valign="top"><strong>Activities</strong></td>
    <td  valign="top"><strong>Unit Details</strong></td>
  </tr>
 

<tr>

<td valign="top">Water quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> 
<div class="field_wrapper0">
<div style="height:40px;">
<input name="activities_id0" value="18" type="hidden">

<input type="text" name="Unit_Name0[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button0" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>



<tr>

<td valign="top">Ambient air quality monitoring stations &amp; no. of inspection during the month</td>


<td colspan="5"> <div class="field_wrapper1">
<div style="height:40px;">
<input name="activities_id1" value="17" type="hidden">


<input type="text" name="Unit_Name1[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button1" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>

 
</td>
</tr>

<tr>

<td valign="top">Inter state river monitoring</td>


<td colspan="5"> <div class="field_wrapper2">
<div style="height:40px;">
<input name="activities_id2" value="16" type="hidden">


<input type="text" name="Unit_Name2[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button2" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 

</td>
</tr>

<tr>

<td valign="top">Monitoring of river/rivulets/drains</td>


<td colspan="5"><div class="field_wrapper3">
<div style="height:40px;">
<input name="activities_id3" value="15" type="hidden">


<input type="text" name="Unit_Name3[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button3" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">CETPs</td>


<td colspan="5"> <div class="field_wrapper4">
<div style="height:40px;">
<input name="activities_id4" value="8" type="hidden">


<input type="text" name="Unit_Name4[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button4" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">CHWTSDF</td>


<td colspan="5"> <div class="field_wrapper5">
<div style="height:40px;">
<input name="activities_id5" value="9" type="hidden">


<input type="text" name="Unit_Name5[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button5" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 

</td>
</tr>

<tr>

<td valign="top">CBMWTF</td>


<td colspan="5"> <div class="field_wrapper6">
<div style="height:40px;">
<input name="activities_id6" value="10" type="hidden">


<input type="text" name="Unit_Name6[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button6" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">STPs</td>


<td colspan="5"> <div class="field_wrapper7">
<div style="height:40px;">
<input name="activities_id7" value="11" type="hidden">


<input type="text" name="Unit_Name7[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button7" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">SLFs(MSW)</td>


<td colspan="5"> <div class="field_wrapper8">
<div style="height:40px;">
<input name="activities_id8" value="12" type="hidden">


<input type="text" name="Unit_Name8[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button8" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">Inspections based on SMS alerts from OCEMS of units</td>


<td colspan="5"> <div class="field_wrapper9">
<div style="height:40px;">
<input name="activities_id9" value="3" type="hidden">


<input type="text" name="Unit_Name9[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button9" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">Re-inspections/Follow-up visits of units</td>


<td colspan="5"><div class="field_wrapper10">
<div style="height:40px;">
<input name="activities_id10" value="6" type="hidden">


<input type="text" name="Unit_Name10[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button10" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">Inspections for VIP complaint verification </td>


<td colspan="5"> <div class="field_wrapper11">
<div style="height:40px;">
<input name="activities_id11" value="1" type="hidden">


<input type="text" name="Unit_Name11[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button11" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">Inspections related with NGT/court matter</td>


<td colspan="5"> <div class="field_wrapper12">
<div style="height:40px;">
<input name="activities_id12" value="2" type="hidden">


<input type="text" name="Unit_Name12[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button12" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 

</td>
</tr>

<tr>

<td valign="top">Monitoring for trail run under HWM Rules</td>


<td colspan="5"> <div class="field_wrapper13">
<div style="height:40px;">
<input name="activities_id13" value="14" type="hidden">


<input type="text" name="Unit_Name13[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button13" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 

</td>
</tr>

<tr>

<td valign="top">Inspections related with import of hazardous & other waste</td>


<td colspan="5"> <div class="field_wrapper14">
<div style="height:40px;">
<input name="activities_id14" value="13" type="hidden">


<input type="text" name="Unit_Name14[]" style="width:100%; float:left;" class="form-control" value=""/> 


</div>
</div>
<a href="javascript:void(0);" class="add_button14" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>


<tr>

<td valign="top">Meetings/workshops/Training</td>


<td colspan="5"> <div class="field_wrapper15">
<div style="height:40px;">
<input name="activities_id15" value="7" type="hidden">


<input type="text" name="Unit_Name15[]" style="width:100%; float:left;" class="form-control" value=""/>


</div>
</div>
<a href="javascript:void(0);" class="add_button15" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>

</td>
</tr>

<tr>

<td valign="top">Inspections for public complaint verification </td>


<td colspan="5"><div class="field_wrapper16">
<div style="height:40px;">
<input name="activities_id16" value="5" type="hidden">


<input type="text" name="Unit_Name16[]" style="width:100%; float:left;" class="form-control" value=""/>


</div>
</div>
<a href="javascript:void(0);" class="add_button16" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 
</td>
</tr>

<tr>

<td valign="top">Inspections for Ganga complaince verification </td>


<td colspan="5"><div class="field_wrapper17">
<div style="height:40px;">
<input name="activities_id17" value="4" type="hidden">


<input type="text" name="Unit_Name17[]" style="width:100%; float:left;" class="form-control" value=""/>


</div>
</div>
<a href="javascript:void(0);" class="add_button17" title="Add field"><img src="images/add-icon.png" style="float:left;"/></a>
 

</td>
</tr>


 
   
</table>
<table   class="table table-bordered table-striped">
  <tr>
    <td width="30%" rowspan="3"> Other Activities </td>
   
    <td width="70%"><textarea name="Other_Activities[]" cols="100" rows="3"></textarea></td>
  </tr>
   <tr>
   
    <td width="70%"><textarea name="Other_Activities[]" cols="100" rows="3"></textarea></td>
  </tr>
   <tr>
    
   
    <td width="70%"><textarea name="Other_Activities[]" cols="100" rows="3"></textarea></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td><input name="submit" type="submit"  class="btn bg-navy margin" value="Save"></td>
  </tr>
</table>

      </form>
      </div></div>
      
   <?php
break;
default:
?>  
          <!-- general form elements -->
          <div class="box box-primary">
                              <?php
  
 
$checkQuery=mysql_num_rows(mysql_query("select * from  tbl_activities_rd0 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery1=mysql_num_rows(mysql_query("select * from  tbl_activities_rd1 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));
$checkQuery2=mysql_num_rows(mysql_query("select * from  tbl_activities_rd2 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery3=mysql_num_rows(mysql_query("select * from  tbl_activities_rd3 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery4=mysql_num_rows(mysql_query("select * from  tbl_activities_rd4 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));


$checkQuery5=mysql_num_rows(mysql_query("select * from  tbl_activities_rd5 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery6=mysql_num_rows(mysql_query("select * from  tbl_activities_rd6 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery7=mysql_num_rows(mysql_query("select * from  tbl_activities_rd7 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery8=mysql_num_rows(mysql_query("select * from  tbl_activities_rd8 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery9=mysql_num_rows(mysql_query("select * from  tbl_activities_rd9 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery10=mysql_num_rows(mysql_query("select * from  tbl_activities_rd10 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery11=mysql_num_rows(mysql_query("select * from  tbl_activities_rd11 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery12=mysql_num_rows(mysql_query("select * from  tbl_activities_rd12 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery13=mysql_num_rows(mysql_query("select * from  tbl_activities_rd13 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery14=mysql_num_rows(mysql_query("select * from  tbl_activities_rd14 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery15=mysql_num_rows(mysql_query("select * from  tbl_activities_rd15 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

$checkQuery16=mysql_num_rows(mysql_query("select * from  tbl_activities_rd16 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));
$checkQuery17=mysql_num_rows(mysql_query("select * from  tbl_activities_rd17 where user_id='".$_SESSION['userId']['id']."' and month='".date("M-Y")."'"));

if($checkQuery > 0 ||  $checkQuery1 > 0 ||  $checkQuery2 > 0 ||  $checkQuery3 > 0 ||  $checkQuery4 > 0 ||  $checkQuery5 > 0||  $checkQuery6 > 0||  $checkQuery7 > 0||  $checkQuery8 > 0||  $checkQuery9 > 0||  $checkQuery10 > 0||  $checkQuery11 > 0||  $checkQuery12 > 0||  $checkQuery13 > 0 ||  $checkQuery14 > 0 ||  $checkQuery15 > 0 ||  $checkQuery16 > 0 ||  $checkQuery17 > 0){

?>
            
<div class="box-body">
<table   class="table table-bordered table-striped">
<thead>
<tr>
<th style="width:70px;">S. No.</th>

<th>Regional Director</th>

<th>Month</th>

<th>Action</th>



</tr>
</thead>
<tbody>


<tr>
<td>1</td>

<td><?=$_SESSION['userId']['board']?></td>


<td><?=date("M-Y")?></td>

<td><a href="view_monthly_rd_list.php">View</a></td>



</tr>


</tbody>
</table>
</div> 
            <?php
}

else
{
?>
<div class="box-header with-border">
<a href="add_monthly_rd.php?process=add" class="btn bg-olive">Add Monthly Report Form</a>
</div>
            
            <?php } ?>           <!-- /.box-header -->
            <!-- form start -->
            
          </div>
          <!-- /.box -->

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

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

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
