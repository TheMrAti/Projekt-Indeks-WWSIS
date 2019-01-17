<?php
session_start();
if (isset($_POST['login']) and isset($_POST['password']) ){
   require('base.php');
   $login=mysqli_real_escape_string($conn,trim($_POST['login']));
   $password=mysqli_real_escape_string($conn,trim($_POST['password']));
   if ($login!="" and $password!=""){
      $password1 = sha1($password);
      $sqlrequest="SELECT id_logowanie,ranga FROM logowanie WHERE login='$login' and haslo='$password1'";
      $temp=mysqli_query($conn,$sqlrequest);
      $count=mysqli_num_rows($temp);
      $temp1=mysqli_fetch_array($temp);
      $id=$temp1['id_logowanie'];
      $_SESSION['ranga']=$temp1['ranga'];;
        if ($count==1){
            $_SESSION['login_id']=$id; 
            $_SESSION['login']=$login;
            $_SESSION['ranga']=$rank;
            header("Location: logged.php");
			     die();}
          else { 
            $_SESSION['status']="failed";
            header("Location: index.php");
			die();}}
      else {
        $_SESSION['status']="empty";
        header("Location: index.php");
      die();}}
else {
    header("Location: index.php");
	die();}
?>