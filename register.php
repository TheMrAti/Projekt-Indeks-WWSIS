<?php
session_start();
include('base.php');

$login=$_POST['login'];
$password=sha1($_POST['password']);
$confirm_password=sha1($_POST['confirm_password']);
$logincheck=mysqli_query($conn,"SELECT login FROM logowanie WHERE login='$login'");
$loginchecker=mysqli_fetch_assoc($logincheck);
if($password==$confirm_password){
	if($_POST['login']==$loginchecker['login']){
		$_SESSION['status']="loginexist";
		header("Location: registerform.php");
		die();}
	else{
		$query = "INSERT INTO logowanie (id_logowanie,login,haslo) VALUES (NULL,'$login','$password')";
		
	}}
else{
	$_SESSION['status']="pass";
	header("Location: index.php");
	die();}
$result=mysqli_query($conn,$query);
if($result){
	$id_logowanie=mysqli_query($conn,"SELECT id_logowanie FROM logowanie WHERE login='$login'");
		$id_logowanie1=mysqli_fetch_assoc($id_logowanie);
		$id_logowanie1=$id_logowanie1["id_logowanie"];
		mysqli_query($conn,"INSERT INTO student_slownik (id_student_slownik) VALUES ('$id_logowanie1')");
		mysqli_query($conn,"INSERT INTO student (id_student,id_student_slownik,id_logowanie) VALUES ('$id_logowanie1','$id_logowanie1','$id_logowanie1')");
		mysqli_query($conn,"INSERT INTO prowadzacy_slownik (id_prowadzacy_slownik) VALUES ('$id_logowanie1')");
		mysqli_query($conn,"INSERT INTO prowadzacy (id_prowadzacy,id_prowadzacy_slownik) VALUES ('$id_logowanie1','$id_logowanie1')");

	$_SESSION['status']="succed";
	header("Location: index.php");
	die();} 
else{
	echo(mysqli_error($conn));}
?>

