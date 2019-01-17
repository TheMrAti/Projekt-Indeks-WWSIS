<?php 
session_start();
include 'base.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Maciek Gejming - Gaming Community</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="loginstyle.css" media="screen" />
	</head>
<body class="bg1">
<div class="wrapper">
	<div class="login_cont">
		<div class="login_form">
			<img class="login_img" src="images/login.png" />
			<form method="post" action="login.php">
                    <?php 
                       if(isset($_SESSION['status'])){
                       	if($_SESSION['status']=="succed"){
                          echo("Account created. Log in to proceed.<br>");}
                       elseif($_SESSION['status']=="failed"){
                          echo("Wrong login or password.");}
					   elseif($_SESSION['status']=="not"){
					   echo("Plese log in to continue.");}
					    elseif($_SESSION['status']=="empty"){
					   echo("Fields cannot be empty.");}}
                    ?><br>
				<input type="text" name="login" placeholder="Login"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" value="Login"><br>
				Don't have an account?  <a class="link" href="registerform.php">Sign up</a><br><br>
			</form>
</body>
</html>
