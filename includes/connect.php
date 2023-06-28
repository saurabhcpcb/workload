<?php
/*$mysqli_hostname = "10.24.84.254";
$mysqli_user ="root";
$mysqli_password = "Cpcb@321";
$mysqli_database = "workload";
@mysqli_connect($conn,$mysqli_hostname, $mysqli_user, $mysqli_password)or die("Opps some thing went wrong");
mysqli_select_db($conn, $mysqli_database) or die("Opps some thing went wrong");
*/
/*$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password = "";
$mysql_database = "workload";
@mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some thing went wrong");
mysqli_select_db($mysql_database) or die("Opps some thing went wrong");
*/

$mysqli = new mysqli("localhost","root","","workload");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 ?>
