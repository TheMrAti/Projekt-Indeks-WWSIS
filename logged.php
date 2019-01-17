<?php
session_start();
include('base.php');
if (isset($_SESSION['login_id']) and isset($_SESSION['login'])){
include('session.php');
?>
<html>
<head>
<?php include('title.php');?><!--tytul-->
<?php include('favicon.php');?><!--ikonka-->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<link rel="stylesheet" type="text/css" href="logged.css" media="screen" />
<link rel="stylesheet" type="text/css" href="fonts.css" media="screen" />
<link rel="stylesheet" type="text/css" href="forum.css" media="screen" />
</head>
<body class="bg1">
<div class="wrapper">
	<div class="content">
		<div class="nav">
			<div class="logo">
				<?php include('logo.php');?><!--logo-->
			</div>
		</div>
		<div class="articles left">
			
			<?php if($_SESSION['ranga']==NULL){
			 include('grades.php');
			}
elseif ($_SESSION['ranga']==1) {
	header("Location: profile.php");
	die();
}
			 ?><!--tabela z ocena z danego sewmetru-->

		</div>
		
		<div class="rightcont">
			<div class="profile">
				
				<?php include('panel.php');?><!--avatar-->
			</div>
		</div>
		


		<?php include('footer.php');?><!--stopa-->
	</div>
	


</div>
</body>
</html>
<?php  
} 
else{
	header("Location: index.php");
	die();}
?>