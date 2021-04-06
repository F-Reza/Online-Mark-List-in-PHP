<?php
include("config.php");
/*---------------------
Authorized::Forhad Reza
-----------*/
// Data Insert using HTML Form
if(isset($_POST["submit"])){
$Reg_No = $_POST["Reg_No"];
$S_Name = $_POST["S_Name"];
$English = $_POST["English"];
$Physics = $_POST["Physics"];
$Chemistry = $_POST["Chemistry"];
$Math = $_POST["Math"];
$Total = $English + $Physics + $Chemistry + $Math;
//$Total = $_POST["English"]+$_POST["Physics"]+$_POST["Chemistry"]+$_POST["Math"];


//INSERTION
//(Reg_No, S_Name, English, Physics, Chemistry, Math, Total)
$sql = "INSERT INTO  TableMark 
VALUES ($Reg_No,'$S_Name',$English,$Physics,$Chemistry,$Math,$Total);";

if ($conn->query($sql) === TRUE) {
	header("location:index.php");
	echo "<span style='color:#fff';> Record INSERTed successfully </span> <br>";
  
}else {
	//header("location:'#Error");
	echo "<div style='background:#f7b0ab;; min-height:50px;font-size:28px; 
	text-align:center;padding-top:20px;   '>
	<span style='color:#00';>Error Inserting Record : </span>
	<span style='color:#b76c50;';>" . $conn->error ."</span></div><br>";
}
}
/*---------------------
Authorized::Forhad Reza
-----------*/
?>	
	
