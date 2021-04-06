<?php
include("config.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>| Online MarkList IN PHP |</title>
	<!-- CSS -->
	<link rel="stylesheet" href="main.css" />
</head>
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
<body>
	<!-- Header -->
	<header>
	<div id="header"><p id="IT">| Online MarkList IN PHP |</p></div>
	</header>

<div id="main_wrapper">

<!-- Box-Left -->
<div id="Tab-Left"> 
	<br /><h2>Record Insertion Form</h2><br />
<form action="function.php" method="POST">
	
	<table border="1" cellspacing="0" class="Tbl-1">
		<tr>
			<th colspan=2>Student Info</th>
		</tr>
		<tr>
			<td>Registration No:</td>
			<td><input type="number" name="Reg_No" required class="box"/></td>
		</tr>
		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="S_Name" required class="box" /></td>
		</tr>
		<tr>
			<th colspan=2>Marks Entry</th>
		</tr>
		<tr>
			<td>English:</td>
			<td><input type="number" name="English" step="any" max="100" required class="box"/></td>
		</tr>
		<tr>
			<td>Physics:</td>
			<td><input type="number" name="Physics" step="any" max="100" required class="box"/></td>
		</tr>
		<tr>
			<td>Chemistry:</td>
			<td><input type="number" name="Chemistry" step="any" max="100" required class="box"/></td>
		</tr>
		<tr>
			<td>Maths:</td>
			<td><input type="number" name="Math" step="any" max="100" required class="box"/></td>
		</tr><tr>
			<td colspan=2>
			<input type="submit" name="submit" class="Submit" value="Save" />
			<input type="reset" name="reset" class="Reset" value="Reset"/>
			</td>
		</tr>
	</table> 
</form>
</div>
<!-- Box-Middle --> 
<div id="Tab-Middle"> 
<br /> <h3>Total Recorded Student</h3>
<table border="2" cellspacing="0" width="80%">
<?php
	echo "<tr>";
	echo "<th> SI No:</th>";
	echo "<th> Register No:</th>";
	echo "<th> Name </th>";
	echo "<th>English </th>";
	echo "<th> Physics </th>";
	echo "<th> Chemistry </th>";
	echo "<th> Maths </th>";
	echo "<th> Total</th>";
	echo "</tr>";


	
//SELECT All Students	 
	$sql = "SELECT * FROM TableMark ORDER BY Reg_No";
	$result = $conn->query($sql);
	$i=0;$i++;
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$i. "</td>";
			echo "<td align='left';>". $row['Reg_No']."</td>";
			echo "<td align='left';>". $row['S_Name']."</td>";
			echo "<td>". $row['English']."</td>";
			echo "<td>". $row['Physics']."</td>";
			echo "<td>". $row['Chemistry']."</td>";
			echo "<td>". $row['Math']."</td>";
			echo "<td>". $row['Total']."</td>";
			echo "</tr>";$i++;
		}
	}else{
		echo "0 results";
	}	
?>
</table>	
</div>	
	
<!-- Box-Right -->
<div id="Tab-Right"> 
  	<br /> <h3>SELECT Students WHERE Total Marks > 300</h3> 

<table border="2" cellspacing="0" width="80%">
<?php 

	echo "<tr>";
	echo "<th> SI No:</th>";
	echo "<th> Register No:</th>";
	echo "<th> Name </th>";
	echo "<th>English </th>";
	echo "<th> Physics </th>";
	echo "<th> Chemistry </th>";
	echo "<th> Maths </th>";
	echo "<th> Total</th>";
	echo "</tr>";
	
//SELECT All Students	
$sql = "SELECT * FROM TableMark where Total >300 ORDER BY Total DESC";
	$result = $conn->query($sql);
	$j=1;
	if($result->num_rows>0){ 
		while($row = $result->fetch_assoc()) {
			
			echo "<tr>";
			echo "<td>".$j. "</td>";
			echo "<td align='left';>". $row['Reg_No']."</td>";
			echo "<td align='left';>". $row['S_Name']."</td>";
			echo "<td>". $row['English']."</td>";
			echo "<td>". $row['Physics']."</td>";
			echo "<td>". $row['Chemistry']."</td>";
			echo "<td>". $row['Math']."</td>";
			echo "<td>". $row['Total']."</td>";
			echo "</tr>";$j++;
	}
	}else{
		echo "0 results";
	}
	
?>
</table>
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
</div>		
	<!-- Footer -->
	<footer>
		<div id="footer">
			<p>&copy All Right Reserved By <a href="#">  Next_Digit </a></p>
		</div>
	</footer>
	
</div>	

</body>
</html>

