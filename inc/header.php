<div id="header">
	<div id="up_head">
		<div id="link">
			<ul>
				<li><a href='https://www.facebook.com'><i class="fab fa-facebook"></i></a></li>
				<li><a href='https://www.youtube.com'><i class='fab fa-youtube'></i></a></li>
				<li><a href='https://www.twitter.com'><i class='fab fa-twitter'></i></a></li>
				<li><a href='https://www.linkedin.com'><i class='fab fa-linkedin'></i></a></li>
				<li><a href='https://www.googleplus.com'><i class='fab fa-google-plus'></i></a></li>

			</ul>
		</div>

		<div id="date">
			<p><?php echo date('l , d F Y'); ?></p>
		</div>

		<div id="slog">
			<p>Bangladesh's No.1 E Learning Website </p>
		</div>

	</div>

	<div id = "title">
		<h2><a href="index.php">eTechnicalSchool</a></h2>
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

	<div id = "head_login">
		<h4><i class="far fa-user"></i> Login</h4>
		<form method="post">
			<center>
			<h3><i class="fas fa-user"></i></h3>
			<h4>Log In</h4>
		</center>
			<div id="input_f">
				<i class="fas fa-lock"></i>
				<input type="text" name="u_email" placeholder="Enter User Email"/>
			</div>

			<div id="input_f">
				<i class="fas fa-lock"></i>
				<input type="password" name="u_pass" placeholder="Enter User Password"/>
			</div>
 <h5>Forgot Password</h5><br clear="all"/>

 <center><button type="button" name="button">Login</button>
</center>
	</form>

	</div>

	<div id = "head_signup">
		<h4><i class="fas fa-user-plus"></i> SignUp</h4>
	</div>
</div>
