<?php include("inc/function.php"); ?>
<div id="header">
	<div id="up_head">
		<div id="link">

			<?php 	echo head_link(); ?>

		</div>

		<div id="date">
			<p><?php echo date('l,d F Y'); ?></p>
		</div>

		<div id="slog">
			<p>Bangladesh's No.1 E Learning Website </p>
		</div>

	</div>

	<div id = "title">
		<h2><a href="index.php">eTechnical  School</a></h2>
	</div>

	<div id = "menu">
		<h2><i class="fas fa-bars"></i></h2>
		<?php
		 include("inc/cat_menu.php");
		?>
	</div>

	<div id = "head_search">
		<form method = "post" enctype="multipart/form-data">
			<input type="search" name="query" placeholder="Search Course From Here"/>
			<button name="search"><i class="fas fa-search"></i></button>

		</form>
	</div>

	<div id = "head_cart">
		<a href="cart.php"><i class="fas fa-shopping-cart"></i><span>0</span></a>
	</div>
<!--head Login-->
	<div id = "head_login">
		<h4><i class="far fa-user"></i> Login</h4>
		<form method="post">
			<center>
			<h3><i class="fas fa-user"></i></h3>
			<h4>Log In</h4>
		</center>
			<div id="input_f">
				<i class="fas fa-envelope"></i>
				<input type="text" name="u_email" placeholder="Enter User Email" title="Please enter your email" required />
			</div>

			<div id="input_f">
				<i class="fas fa-lock"></i>
				<input type="password" name="u_pass" placeholder="Enter User Password" title="Please enter your password" required  />
			</div>
 <h5>Forgot Password</h5><br clear="all"/>

 <center><button type="submit" name="login">Login</button>
</center>
	</form>

	</div>
<!--Head SignUp-->
	<div id = "head_signup">
		<h4><i class="fas fa-user-plus"></i> SignUp</h4>
		<form method="post" enctype="multipart/form-data">
			<center>
			<h3><i class="fas fa-user-plus"></i></h3>
			<h4>Signup</h4>
		</center>
			<div id="input_f">
				<i class="fas fa-user"></i>
				<input type="text" name="name" placeholder="Enter Your Nmae"/>
			</div>

			<div id="input_f">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" placeholder="Enter Your Email" title="Please enter your email" required />
			</div>
			<div id="input_f">
				<i class="fas fa-phone"></i>
				<input type="text" name="phone" placeholder="Enter Your Phone No."/>
			</div>
			<div id="input_f">
				<i class="fas fa-lock"></i>
				<input type="password" name="pass1" id="pass1" placeholder="Enter Your Password" required />
			</div>
			<div id="input_f">
				<i class="fas fa-lock"></i>
				<input type="password" name="pass2" id="pass2" placeholder="Re-Enter Your Password" title="Please re-enter your password" required />
			</div>
		<center>
			<button type="submit" name="signup">SignUp</button>
		</center>
	</form>
	</div>
</div>

<?php
		include("db.php");
		if(isset($_POST['signup'])){
			$name = $_POST['name'];
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
						$add_user = $con->prepare("insert into user(email,pass,name,phone)values('$email','$pass1','$name','$phone')");
						
						if($add_user->execute()){
							echo"<script>alert('Registration successful')</script>";
							echo"<script>window.open('index.php','_self')</script>";
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
		if(isset($_POST['login'])){			
			$email =$_POST['u_email'];
			$pass = $_POST['u_pass'];
			
			$get_cata = $con->prepare("select * from user where email='$email' AND pass='$pass'");
			$get_cata->setFetchMode(PDO::FETCH_ASSOC);
			$get_cata->execute();
			$row=$get_cata->fetch();
			if($row['role']=='Admin')
			{
				echo "<script> alert('Admin Log in successful')</script>";
				echo"<script>window.open('index.php','_self')</script>";
				
			}
			else
			{
				if($row['role']=='user')
				{
					echo "<script> alert('User Log in successful')</script>";
					echo"<script>window.open('index.php','_self')</script>";
				}
				else{
					echo "<script> alert('Password or Email is wrong')</script>";
					echo"<script>window.open('index.php','_self')</script>";
				}
				
			}
			
		}
?>

 
 
	
