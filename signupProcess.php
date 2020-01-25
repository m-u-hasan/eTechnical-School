
<?php 
include("inc/db.php");
if(isset($_POST['signup'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];

			if($email && $pass1 && $pass2){
				if($pass1 == $pass2)
				{
				$check = $con->prepare("select * from user where email='$email'");
				$check->setFetchMode(PDO::FETCH_ASSOC);
				$check->execute();
				$count = $check->rowCount();
				if($count==1){
						echo"<script>alert('Email Already Added try with another email')</script>";
						echo"<script>window.open('index.php','_self')</script>";
					}
					else
					{
						$add_user = $con->prepare("insert into user(email,pass,firstname,lastname,phone)values('$email','$pass1','$firstname','$lastname','$phone')");

						if($add_user->execute()){							
								echo"<script>alert('Registration successful')</script>";
                                echo "<script>location.href='index.php'</script>";
                                session_start();
                                $_SESSION['firstname'] = $_POST['firstname'];
                                $_SESSION['email'] = $_POST['email'];
                                header("Location:index.php?SignupSuccessfully");
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
			}
			else{
				echo"<script>alert('Please enter all input')</script>";
			}
        }        
        ?>