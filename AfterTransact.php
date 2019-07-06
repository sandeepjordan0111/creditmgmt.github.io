
<html>
<head>
<style>
body{
background:BlanchedAlmond;
}
.button {
  background-color: #4CAF50; /* Green */
  border: black	;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  height:8%;
  width:20%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li a {
  display: block;
  width: 60px;
  background-color: #dddddd;
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
$sender_id=$_POST["sid"];
$sql = "SELECT credit from maintable where ID='$sender_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	$sender_amt=$row['credit'];
	}
}

echo "<br>";
$receiver_id=$_POST["rid"];
$sql1 = "SELECT credit from maintable where ID='$receiver_id'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
	while($row1 = $result1->fetch_assoc()) {
	$receiver_amt=$row1['credit'];
	}	
}
echo "<br>";
$transfer_amt=$_POST["amt"];
$p=$sender_amt-$transfer_amt;
$q=$receiver_amt+$transfer_amt;
if($p<0)
{
	echo "<center>Insufficient Credits.Please try Again!!!!!!!!</center>";
}
else
{
	echo "<center>";
	echo "<h3>Are you sure you want to continue with the transaction ?</h3>";
	echo "</center>";
}
$sql2 = "UPDATE maintable SET credit='$p' WHERE id='$sender_id'";
$sql3 = "UPDATE maintable SET credit='$q' WHERE id='$receiver_id'";
if ($conn->query($sql2) === TRUE and $conn->query($sql3) === TRUE ) {
	echo "<center><ul>";
	echo "<li><a href=confirmpage.php ><p>Yes</p></a></li>"."<br>";
	echo "<li><a href=failure.php>No</a></li>";
	echo "</ul></center>";
} else {
    echo "Invalid Transaction!!!" . $conn->error;
	echo "<center><a href=failure.php><h3>Try Again</h3></a></center>";
}
mysqli_close($conn);
?>
</body>
</html>