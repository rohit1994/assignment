<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "gallery";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="update customer set  name='binil',email='binil@gmail.com' where id=19";
if ($conn->query($sql)=== TRUE)
{
echo "<h1><br><br>Updated Sucessfully</h1>";
}
else
{
	echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>
