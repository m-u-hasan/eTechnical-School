<?php
	include('inc/db.php');
	if(isset($_POST['submit']))
	{
		$c_title = $_POST['c_title'];
		$price = $_POST['price'];
		$t_name = $_POST['t_name'];
		$image = $_POST['thumbnail'];
		$video = $_POST['video'];
		
		$add_user = $con->prepare("insert into upload(c_title,price,t_name,image,video)values('$c_title','$price','$t_name','$image','$video')");
			if($add_user->execute()){
				echo"<script>alert('Upload successful')</script>";
				//echo"<script>window.open('../userlogin.php','_self')</script>";
				}

	}
?>

<!doctype html>
	<html>
		<head>
			<meta charset='utf-8'>
			<title>eTechnical School | cart </title>
			<link rel='stylesheet' href='css/style.css'/>
			<link rel='stylesheet' type='text/css' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'/>
		<head>
	
		<body>
			<?php
				include('inc/header.php');
				echo upload_function();
				include('inc/footer.php');
			?>
		</body>
		</head>
	</html>

