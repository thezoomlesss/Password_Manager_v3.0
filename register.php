<html>
<link rel="stylesheet" type="text/css" href="register.css">
	<head>
		<title>PM3 Register</title>
	</head>
	<body>
		<div id="one" class="centerdiv">
		<p> Register</p>
		<form action="register.php" method="post">
		<input type="email" name="email" placeholder="Email" size="35" required autofocus> </input> 
		<br>
		<input type="password" name="pass" placeholder="Password" maxlength="12" size="35" required></input>
		<input type="password" name="cpass" placeholder="Confirm Password" maxlength="12" size="35" required></input>
		
		<input type="Submit" name="submit" value="Submit"></input>
		<input onclick="window.location.href='http://localhost/Password_Manager_v3.0/Login.php'" type="button" name="back" value="Back">

		</form>
		</div>
	</body>
</html>


<?php
	$db = @mysqli_connect('localhost', 'root', '') or die('Fail message');
	
	
?>