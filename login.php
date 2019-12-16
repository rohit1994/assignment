<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gallery";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection error".$conn->connect_error);
}
else
{
	//echo "connected";
}
?>
	<form method="POST">
		<input type="text" name="username" placeholder="Enter user name"></input><br><br>
		<input type="text" name="pwd" placeholder="Enter password"></input><br><br>
		<input type="submit"  name= "submit"></input>
		<input type="submit"  name="reset"></input>
	</form>

<?php

session_start();


if(isset($_POST['submit']))
{
	$username="";
	$pwd="";
$username = trim($_POST['username']);
$pwd = trim($_POST['pwd']);

$query = "SELECT * FROM customer WHERE name='$username' 
AND password='$pwd'";

//echo $query = "SELECT * FROM customer WHERE name='$username' 
//AND password='$pwd'";
$result=$conn->query($query );
foreach($result as $row)
{
	if($row["password"]==$pwd)
	{
		$_SESSION["sectionname"]=$row["name"];
		if(isset($_SESSION["sectionname"]))
		{
			header('location:home.php');
			echo 'login succesful';
			exit;
        }
		else
		{
			echo 'failed';
		}
	}
}


}
?>
