<?php
session_start();
include("inc/function.php");
if(isset($_POST['Logout']))
{
	session_unset();
	session_destroy();
	echo"<script>alert('Logout Ok')</script>";
}
?>

<div id = "header">
	<div id = "logo">
		<h2><a href='index.php'>eTechnicalSchool</a></h2>
		
	</div>
	
	<div id = "title">
		<h2> Admin Panel of eTechnicalSchool</h2>
	</div>
		
	<div id = "link">
		<h3>
			<!--<a href="">Logout</a>-->
			<input type='submit' name='Logout' value='Logout'>
		</h3>	
	</div>
	

</div>