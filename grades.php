<div class="text">
	

<table class="forum" cellspacing="0" cellpadding="0">
	<tr class="forum_header">
    <th>Przedmiot</th>
    <th>Typ Zajec</th>
    <th>ECTS</th>
    <th>Ocena</th>
    <th>Semestr</th>
  </tr>

<?php
include('base.php');





$sql ="SELECT *FROM przedmiot;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
					$id_przedmiot=$row['id_przedmiot'];
					$id_login=$_SESSION['login_id'];
					$query_grade="SELECT * FROM relationship_3 WHERE id_przedmiot='$id_przedmiot' and id_student='$id_login';";
					$result_grade=mysqli_query($conn,$query_grade);
					$row_grade=mysqli_fetch_assoc($result_grade);
					?>
		<tr>
			<td class="subject w65p"><?php echo $row['nazwa']?></td>
			<td class="subject w65p"><?php echo $row['typ_zajec']?></td>
			<td class="subject w65p"><?php echo $row['ECTS']?></td>
			<td class="subject w65p"><?php echo $row_grade['ocena']?></td>
			<td class="subject w65p"><?php echo $row_grade['Semestr']?></td>
			</tr>
			<?php
	}


?>
</table>
  </div>