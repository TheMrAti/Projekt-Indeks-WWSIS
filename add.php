<?php
session_start();
include('base.php');
$indeks=$_POST['indeks'];
$id_przedmiot=$_POST['przedmiot'];
$ocena=$_POST['ocena'];
if(isset($_POST['button'])){
	$sql="SELECT * from student where nr_indeksu='$indeks'";
if (($result=mysqli_query($conn,$sql))==1){
$id=mysqli_fetch_assoc($result);
$id=$id['id_student'];
$sql2="UPDATE relationship_3 SET ocena='$ocena' where id_przedmiot='$id_przedmiot' and id_student='$id' ";
mysqli_query($conn,$sql2);
header("Location: add_grade.php");
	die();
}
else{
	header("Location: add_grade.php");
	die();}}
else{
	header("Location: add_grade.php");
	die();
}
?>