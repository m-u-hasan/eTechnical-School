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
			?>

			<div id='allcourses'>
				<ul>
					<?php echo all_courses(); ?>
				</ul>
			</div>  
			<?php
				include('inc/footer.php');
			?>
		</body>
		</head>
	</html>