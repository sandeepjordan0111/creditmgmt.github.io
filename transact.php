<html>
<head>
<style>
p{
	color:black;
	font-size:27px ;
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
  width:10%;
}
input{
	width:20%;
	height:5%;
}
body{
background:BlanchedAlmond;
}
</style>
</head>
<center>
<body>
<h3>Fill the below details to transfer credits</h3>
<form action="AfterTransact.php" method="post">
<p>Enter sender's ID:</p><input type="text" name="sid" required><br>
<p>Enter Receiver's ID:</p><input type="text" name="rid" required></br>
<p>Enter the Amount:</p><input type="text" name="amt" required><br></br>
<input type="submit" value="Transfer" class="button">
</form>
<a href="conn.php"><h5>Go Back</h5.</a>
</body>
</center>
</html>