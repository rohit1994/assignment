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
$sql="delete from customer where name='Abel'";
if ($conn->query($sql)=== TRUE)
{
echo "<h1><br><br>Deleted Sucessfully</h1>";
}
else
{
	echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>
