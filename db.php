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
/*  $query="INSERT INTO customer (`id`, `name`, `email`, `phone_no`, `password`, `created_at`, `updated_at`, `created_by`, `updated_by`, `active`) VALUES ('1', 'roh', 'roh@gmail.com', '98251', 'qwe123', current_timestamp(), current_timestamp(), 'rohit', 'rohit', '1')";  */



?>
