<?php
		include("inc/db.php");
		if(isset($_POST['signup'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pass1 = $_POST['pass1'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];

			if($email && $pass1 && $pass2){
				if($pass1 == $pass2)
				{
					$check = $con->prepare("select * from user where eamil='$eamil'");
					$check->setFetchMode(PDO::FETCH_ASSOC);
					$check->execute();
					$count = $check->rowcount();
					if($count == 1){
						echo"<script>alert('Email Already Added try with another email')</script>";
						echo"<script>window.open('index.php','_self')</script>";
					}
					else
					{
						$add_user = $con->prepare("insert into user(email,pass,name,phone)values('$email','$pass','$name','$phone')");

						if($add_user->execute()){
							echo"<script>alert('Registration successful')</script>";
							echo"<script>window.open('../userlogin.php','_self')</script>";
						}
						else{
							echo"<script>alert('Registration Failed')</script>";
							echo"<script>window.open('index.php','_self')</script>";
						}
					}

				}
				else
				{
					echo"<script>alert('Password does not match')</script>";
				}
			}else{
				echo"<script>alert('Please enter all input')</script>";
			}
		}

?>
