<div class="text">
<?php
include('base.php');



?>
<form action="add.php" method="post">
					<div class="email">
						<input class="orange left titilium" style="width:700px;" name="indeks" type="text" placeholder="Nr Indeksu"/>
						<input class="orange left titilium" style="width:700px;" name="ocena" type="text" placeholder="Ocena"/>
						<select name="przedmiot" class="left titilium">
							<?php  
								$sql ="SELECT *FROM przedmiot;";
								$result=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_assoc($result))
								{
									echo '<option value="'.$row['id_przedmiot'].'">'.$row['nazwa'].' - '.$row['typ_zajec'].'</option>';
								}
							?>
						</select>
						

						<br>
						<input class="orange titilium right"  type="submit" name="button" value="Dodaj" />
						<br><br>
					</div>
						
				</form>

  </div>