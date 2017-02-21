<html>
<link rel="stylesheet" type="text/css" href="Login.css">
	<head>
		<title> PM3 </title>
	</head>
	
	<body>
	<div id="one" class="centerdiv">
		<p> Log in</p>
		<form action="Login.php" method="post">
			<input type="email" name="email" placeholder="Email" size="35" required autofocus> </input>  <!-- Still thinking about required -->
			<br><br> 
			<input type="password" name="pass" placeholder="Password" maxlength="12" size="35" required></input>
			<input type="Submit" name="submit" value="Sign In"></input>
			<input onclick="window.location.href='http://localhost/Password_Manager_v3.0/register.php'" type="button" name="signup" value="Sign Up">
		</form>
		<div id="two"> 
			<h4 id="forgotpass"> Forgot your password? <a href="window.location.href='http://localhost/Password_Manager_v3.0/Recover.php'" id="clickhere"> Click Here!</a></h5>
			
		</div>
	</div>
	
	</body>
</html>

<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["pass"]);
	
	$db = @mysqli_connect('localhost', 'root', '') or die('Fail message');
	//  mysqli_select_db("book") or die("Fail message");    Choose table
	
	
	if( isset($_POST["email"]) && isset($_POST["pass"]) )
	{
		

		$email =mysqli_real_escape_string($db, $_POST['email']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);
	
		if( $result = $db->query("SHOW TABLES LIKE '".$email."'") )
		{
			if($result->num_rows == 1)    // I wonder if I need this if statement 
			{
				echo "Table exists";
			}
		}
		else
		{
			echo"No table";
		}
	}
?> 