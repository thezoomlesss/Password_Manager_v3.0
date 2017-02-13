<html>
<link rel="stylesheet" type="text/css" href="Login.css">
	<head>
		<title> PM3 </title>
	</head>
	
	<body>
	<div class="centerdiv">
		<p> Log in</p>
		<form action="Login.php" method="post">
			<input type="email" name="email" placeholder="Email" size="35" required autofocus> </input>  <!-- Still thinking about required -->
			<br><br> 
			<input type="password" name="pass" placeholder="Password" maxlength="12" size="35" required></input>
			<input type="Submit" name="submit" value="Sign In"></input>
			<input onclick="window.location.href='http://localhost/Reserve_book/register.php'" type="button" name="signup" value="Sign Up">
		</form>
	</div>
	</body>
</html>