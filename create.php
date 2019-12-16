<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 * Validation done by:Rohit Z
 * Date : 12-12-2019 15:36 
 */


if (isset($_POST['submit'])) {
    require "../config.php";
    require "../common.php";


		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['pwd'])) 
		{
			$first=$_POST['username'];
		
        $x=0;               //flag
        if(preg_match("/^[a-zA-Z -]+$/", $first) === 0)     //First Name
		     {
			   echo " <br>Name is not valid";
			   $x++;
		     }
		if(is_numeric($first))
			{
				echo "Name can't be numeric";
				$x++;
			}
		
		
			 
		
		$email = $_POST["email"];        //Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
		     {
               // echo("$email is a valid email address");
             }
		else 
		     {
               echo("<br> $email is not a valid email address");
			    $x++;
			 }
			 $phone_no= $_POST['phone_no'];              //age
        if (!is_numeric($phone_no)) 
		     {
               echo "<br> phnumber should be in digits";
			   $x++;
             } 
		else (strlen($age)>10))
		     {
				 echo "Not a valid num";
				 $x++;
			 }	
			 
		try  
		{
			$connection = new PDO($dsn, $username, $password, $options);
			$new_user = array(
            "username" => $_POST['name'],
            "email"  => $_POST['email'],
            "phone_no"     => $_POST['phone_no'],
            "password"       => $_POST['pwd'],
           
					);
		
		$email = $_POST["email"]; 
		
		
		$sth = $connection->prepare("SELECT * from users where email='$email'");
        $sth->execute();
        $result = $sth->fetchAll();
           if ($result && $sth->rowCount() < 0) 
		     { 
		        
				
				
				$username = $_POST["username"]; 
		
		
				$sth = $connection->prepare("SELECT * from users where username='$username'");
				$sth->execute();
				$result = $sth->fetchAll();
				   if ($result && $sth->rowCount() < 0) 
					 { 
				 
									$sql = sprintf(
							"INSERT INTO %s (%s) values (%s)",
							"users",
							implode(", ", array_keys($new_user)),
							":" . implode(", :", array_keys($new_user))
							);
					
						  $statement = $connection->prepare($sql);
						  $statement->execute($new_user);
							echo "user registered succesfully";
					 }
				
				
		     }
			 else
			 {
				 echo "Email already exist";
			 } 
		
		
		} else echo "please enter all details"; 
		
		
		
    } 
	catch(PDOException $error)
	{
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php } ?>
<style>
    .form
	{
		background:rgba(14, 102, 85 , 0.4  );
		margin:auto;
		width:400px;
		height:500px;
		text-align:center;
	}
	h2{color:#A93226;}
</style>

<center>
	<form action="submit.php" method="post" name="register" onsubmit="return validate()">
	<h1>REGISTRATION </h1>
		<input type="text" name="name" placeholder="name"></input><br><br>
		<input type="text"  name="email"placeholder="email"></input><br><br>
		<input type="text"name="phone_no" placeholder="phone_no"></input><br><br>
		<input type="password" name="pwd"  placeholder="password"></input><br><br>
		<input type="password" name="cpwd" placeholder="Con_password"></input><br><br>
		<input type="submit" value="submit"></input>
		<input type="submit" value="Reset"></input>
		</center>
	</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
</div>