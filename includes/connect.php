<?php
/*$mysqlii_hostname = "10.24.84.254";
$mysqlii_user ="root";
$mysqlii_password = "Cpcb@321";
$mysqlii_database = "workload";
@mysqlii_connect($conn,$mysqlii_hostname, $mysqlii_user, $mysqlii_password)or die("Opps some thing went wrong");
mysqlii_select_db($conn, $mysqlii_database) or die("Opps some thing went wrong");
*/
/*$mysqli_hostname = "localhost";
$mysqli_user ="root";
$mysqli_password = "";
$mysqli_database = "workload";
@mysqlii_connect($mysqli_hostname, $mysqli_user, $mysqli_password)or die("Opps some thing went wrong");
mysqlii_select_db($mysqli_database) or die("Opps some thing went wrong");
*/

$mysqli = new mysqli("10.24.84.254","root","Cpcb@321","workload");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to mysqli: " . $mysqli -> connect_error;
  exit();
}
 ?>
