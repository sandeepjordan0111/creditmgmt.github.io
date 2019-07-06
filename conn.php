<html>
<head>
<style>
body{
background:BlanchedAlmond;
}
table{
	border:5px solid black;
	background:MediumTurquoise ;
	color:black;
	text-align:center;
}
td{
color:black;
background:LightYellow ;
}
h5{
color:Crimson ;
font-size:30px;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "sandeep";
$password = "sandeep";
$database="cms";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from maintable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<center>";
	echo "<table border cellpadding=5>";
	echo "<tr>";
		echo "<th>ID</th>";
        echo "<th>Name</th>";
		echo "<th>Credit</th>";
		echo "</tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
        echo "<td> " . $row["Name"]. "</td>";
		echo "<td>" . $row["Credit"]. " </td>";
		
		
		
    }
	echo "</table>";
	echo "</center>";
} else {
    echo "0 results";
}
$conn->close();
echo "<center><a href=transact.php><h5>Transact now</h5></a></center>";
echo "<center><a href=Index.html><h5>HomePage</h5></a></center>";
?>
</body>
</html>
