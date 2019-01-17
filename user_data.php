<div class="text">
<?php
include('base.php');
if($_SESSION['ranga']==NULL){
$id_login=$_SESSION['login_id'];
$sql ="SELECT * FROM student_slownik where id_student_slownik='$id_login';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
					$query_student="SELECT * FROM student WHERE id_student='$id_login';";
					$result_student=mysqli_query($conn,$query_student);
					$row_student=mysqli_fetch_assoc($result_student);
					?>
					<div class="menu">
					Imie: <span style="font-weight:bold;color:orange;"><?php echo $row['imie'];?></span></br>
					Nazwisko: <span style="font-weight:bold;color:orange;"><?php echo $row['nazwisko'];?></span></br>
					Data Urodzenia: <span style="font-weight:bold;color:orange;"><?php echo $row['data_urodzenia'];?></span></br>
					Miejsce Urodzenia: <span style="font-weight:bold;color:orange;"><?php echo $row['miejsce_urodzenia'];?></span></br>
					Adres: <span style="font-weight:bold;color:orange;"><?php echo $row['adres'];?></span></br>
					PESEL: <span style="font-weight:bold;color:orange;"><?php echo $row['pesel'];?></span></br>
					Szkola Srednia: <span style="font-weight:bold;color:orange;"><?php echo $row['szkola_srednia'];?></span></br>
					Plec: <span style="font-weight:bold;color:orange;"><?php echo $row['plec'];?></span></br>
					Kierunek: <span style="font-weight:bold;color:orange;"><?php echo $row_student['kierunek'];?></span></br>
					Semestr: <span style="font-weight:bold;color:orange;"><?php echo $row_student['semestr'];?></span></br>
					Nr Indeksu: <span style="font-weight:bold;color:orange;"><?php echo $row_student['nr_indeksu'];?></span></br>
					Rok Rozpoczecia: <span style="font-weight:bold;color:orange;"><?php echo $row_student['rok_rozpoczecia'];?></span>
</div>

<?php }
elseif ($_SESSION['ranga']==1) {
$id_login=$_SESSION['login_id'];
$sql ="SELECT * FROM prowadzacy_slownik where id_prowadzacy_slownik='$id_login';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
					$query_student="SELECT * FROM prowadzacy WHERE id_prowadzacy='$id_login';";
					$result_student=mysqli_query($conn,$query_student);
					$row_student=mysqli_fetch_assoc($result_student);
					?>
					<div class="menu">
					Imie: <span style="font-weight:bold;color:orange;"><?php echo $row['imie'];?></span></br>
					Nazwisko: <span style="font-weight:bold;color:orange;"><?php echo $row['nazwisko'];?></span></br>
					Data Urodzenia: <span style="font-weight:bold;color:orange;"><?php echo $row['data_urodzenia'];?></span></br>
					Miejsce Urodzenia: <span style="font-weight:bold;color:orange;"><?php echo $row['miejsce_urodzenia'];?></span></br>
					Adres: <span style="font-weight:bold;color:orange;"><?php echo $row['adres'];?></span></br>
					PESEL: <span style="font-weight:bold;color:orange;"><?php echo $row['pesel'];?></span></br>
					Plec: <span style="font-weight:bold;color:orange;"><?php echo $row['plec'];?></span></br>
					Tytul Naukowy: <span style="font-weight:bold;color:orange;"><?php echo $row_student['tytul_naukowy'];?></span></br>
					Stanowisko: <span style="font-weight:bold;color:orange;"><?php echo $row_student['stanowisko'];?></span></br>
				
				</div>
					<?php
} 
?>
</div>