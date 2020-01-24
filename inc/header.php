<!--Php code Section-->
<?php 
	include("function.php");
	include("db.php");
	session_start();
?>	

<div id="header">
	<!--This div is for date slogan and link-->
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

	<!--This dive is for eTechnicalschool link-->
	<div id = "title">
		<h2><a href="index.php">eTechnical  School</a></h2>
	</div>
	
	<!--This is for Menubar-->
	<div id = "menu">
		<h2><i class="fas fa-bars"></i></h2>
		<?php
		 include("cat_menu.php");
		?>
	</div>

	<!--This div is for Search Box-->
	<div id = "head_search">
		<form method = "post" enctype="multipart/form-data">
			<input type="search" name="query" placeholder="Search Course From Here"/>
			<button name="search"><i class="fas fa-search"></i></button>

		</form>
	</div>

	<!--This is Cart Section-->
	<div id = "head_cart">
		<a href="cart.php"><i class="fas fa-shopping-cart"></i><span>0</span></a>
	</div>
	<?php if(!isset($_SESSION['email'])){echo "
					<!--head Login-->
					<div id = 'head_login'>
						<h4><i class='far fa-user'></i> Login</h4>
						<form method='post' action='loginProcess.php'>
							<center>
							<h3><i class='fas fa-user'></i></h3>
							<h4>Log In</h4>
							</center>
				
							<div id='input_f'>
								<i class='fas fa-envelope'></i>
								<input type='text' name='u_email' placeholder='Enter User Email' title='Please enter your email' required />
							</div>
				
							<div id='input_f'>
								<i class='fas fa-lock'></i>
								<input type='password' name='u_pass' placeholder='Enter User Password' title='Please enter your password' required  />
							</div>
				
							 <h5>Forgot Password</h5><br clear='all'/>
							 <center><button type='submit' name='login'>Login</button>
							</center>
						</form>
					</div>


					<!--Head SignUp-->
	<div id = 'head_signup'>
		<h4><i class='fas fa-user-plus'></i> SignUp</h4>
		<form method='post' action='signupProcess.php' enctype='multipart/form-data'>
			<center>
			<h3><i class='fas fa-user-plus'></i></h3>
			<h4>Signup</h4>
		</center>
			<div id='input_f'>
				<i class='fas fa-user'></i>
				<input type='text' name='firstname' placeholder='First Name'/>
			</div>

			<div id='input_f'>
				<i class='fas fa-user'></i>
				<input type='text' name='lastname' placeholder='Last Nmae'/>
			</div>
			<div id='input_f'>
				<i class='fas fa-envelope'></i>
				<input type='text' name='email' placeholder='Enter Your Email' title='Please enter your email' required />
			</div>
			<div id='input_f'>
				<i class='fas fa-phone'></i>
				<input type='text' name='phone' placeholder='Enter Your Phone No.'/>
			</div>
			<div id='input_f'>
				<i class='fas fa-lock'></i>
				<input type='password' name='pass1' id='pass1' placeholder='Enter Your Password' required />
			</div>
			<div id='input_f'>
				<i class='fas fa-lock'></i>
				<input type='password' name='pass2' id='pass2' placeholder='Re-Enter Your Password' title='Please re-enter your password' required />
			</div>
		<center>
			<button type='submit' name='signup'>SignUp</button>
		</center>
	</form>
	</div>
		
		";}else{
			
			?>
		<!--Head upload-->
		<div id = "head_signup">			
					<h4><a href='upload.php'><i class="fas fa-upload"></i>Upload</a></h4>
		</div>

		<!--User Profile-->
		<div id = "head_login">
				<h4><i class="far fa-user"></i><?php echo $_SESSION['firstname'];?> </h4>
				<form method="post" action="logout.php" >
							<div id="input_f">
								<h4>My Profile</h4>
							</div>

							<div id="input_f">
								<h4>Setting</h4>
							</div>
				 			<center><input type="submit" name="logout" value="Logout" /></center>
				</form>"
		</div>

		<?php } ?>
</div>
