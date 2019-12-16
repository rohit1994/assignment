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
$sql = "SELECT * FROM customer";
$result=$conn->query($sql);
print_r($result);
echo "<table border='1px'>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Email</th>";
echo "<th> Phone_no </th>";
echo "<th> Pwd</th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["phone_no"]."</td>";
echo "<td>".$row["password"]."</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>

 
