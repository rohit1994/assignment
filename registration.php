
	<script>
	function validate()
	{ 
	/*alert("we are validating ur data");
		return true; */
		var name=document.forms["register"]["name"].value;
		var email=document.forms["register"]["email"].value;
		var phone_no=document.forms["register"]["phone_no"].value;
		var pwd=document.forms["register"]["pwd"].value;
		var cpwd=document.forms["register"]["cpwd"].value;
		alert("dear "+name);
		
		if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(email=="")
		{
			alert("plse entr the mail id");
			document.forms["register"]["email"].focus();
			return false;
		}	
	    
		else if(pwd=="")
		{
			alert("plse entr the password");
			document.forms["register"]["pwd"].focus();
			return false;
		}	
		else if(cpwd=="")
		{
			alert("plse confirm the password");
			document.forms["register"]["cpwd"].focus();
			return false;
		}	
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["pwd"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("incorrect password");
			return false;
		    }
		
	}
	</script>
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
	
	