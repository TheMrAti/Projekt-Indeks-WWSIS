<?php
session_start();
parse_str($_SERVER['QUERY_STRING'], $output);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Funfel">
		<title>Maciek Gejming - Gaming Community</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="loginstyle.css" media="screen" />
		 <script src="login.js"></script> 
	</head>
<body class="bg1">
<div class="wrapper">
	<div class="login_cont">
		<div class="login_form">
			<img class="login_img" src="images/login.png" />
			<form method="post" action="register.php">
                   <?php 
                   if(isset($_SESSION['status']))
                    if($_SESSION['status']=="pass"){
                        echo("Passwords must be the same.<br>");}
                    elseif($_SESSION['status']=="failed"){
                        echo("Registration failed. Check your input and try again.");}
					elseif($_SESSION['status']=="loginexist"){
                        echo("Login already in use.");}
                    ?><br>
				<input type="text" name="login" placeholder="Login"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="password" name="confirm_password" placeholder="Repeat Password"><br>
				<input type="submit" value="Register"><br>
				Already have an account?  <a class="link" href="index.php">Log in</a><br><br>
			</form>
		</div>
	</div>
</div>
</body>
</html>