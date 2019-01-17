<?php
	$id=$_SESSION['login_id'];
	$login=$_SESSION['login'];
	$query="SELECT * FROM logowanie WHERE login='$login' AND id_logowanie='$id'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);$_SESSION['ranga']=$row['ranga'];}
	else{
		echo"nie ma uzytkownika";}
	
?>