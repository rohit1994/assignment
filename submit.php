<?php
/*echo "<h1>Welcome  ".$name=$_POST['name']."</h1><br>"; */

$name=$_POST['name'];
/*echo "<h1> welcome  $name </h1>";*/
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
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
	echo "connected";
}
echo "WELCOME $name";
$sql="insert into customer(name,email,phone_no,password)values('$name','$email','$phone_no','$pwd')";


$s=$conn->query($sql);


?>
<br><br><a href="index.php">Back to home</a>
<?php

if(isset($_POST['name']))
{
$name=	$_POST['name'];
if($name==null)
{
	echo("enter the value");

}

}
?>