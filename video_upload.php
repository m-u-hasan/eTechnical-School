<?php
	include('inc/db.php');
	if(isset($_POST['submit']))
	{
		$course_id = $_POST['course_id'];
		$video_title = $_POST['video_title'];
		$image = $_FILES['thumbnail']['name'];
		$ext = end(explode(".",$image));
		$image = md5(rand()).'.'.$ext;
		$path = "courses/images/".$image;
		$video = $_FILES['video']['name'];
		$ext1 = end(explode(".",$video));
		$video = md5(rand()).'.'.$ext1;
		$path1 = "courses/videos/".$video;
		
		$add_user = $con->prepare("insert into courses(course_id,video_title,thumbnail,video)values('$course_id','$video_title','$image','$video')");
			if($add_user->execute()){
				move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path);
				move_uploaded_file($_FILES['video']['tmp_name'],$path1);
				echo"<script>alert('Upload successful')</script>";
				echo"<script>window.open('index.php','_self')</script>";
				}
				else
				{
					echo"<script>alert('Upload failed')</script>";
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
				echo Video_upload_function();
				include('inc/footer.php');
			?>
		</body>
		</head>
	</html>