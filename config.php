<?php
$Server_Name = "localhost";
$User_Name = "root";
$DB_Password= "";
$DB_Name = "Students";

$conn = new mysqli($Server_Name,$User_Name,$DB_Password,$DB_Name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*---------------------
Authorized::Forhad Reza
-----------*/
?>
