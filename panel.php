			
				<div class="menu">
				<ul>
					<li>&nbsp;</li>
					<li class="none"><a href="profile.php">Profil</a></li>
					<?php if($_SESSION['ranga']==2) {echo '<li class="none"><a href="add_account.php">Dodaj Konto</a></li>';}?>
					<?php if($_SESSION['ranga']==2) {echo '<li class="none"><a href="delete_account.php">Usuń Konto</a></li>';}?>
					<?php if($_SESSION['ranga']==1){ echo '<li class="none"><a href="add_grade.php">Wstaw Ocene</a></li>';}?>
					<?php if($_SESSION['ranga']==NULL){ echo '<li class="none"><a href="logged.php">Oceny</a></li>';}?>
					<li class="none"><a href="logout.php">Wyloguj</a></li>
					<li>&nbsp;</li>
				</ul>
				</div>