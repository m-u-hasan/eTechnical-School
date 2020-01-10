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

<!--Head upload-->
	<div id = "head_signup">

				<h4><i class="fas fa-upload"></i>Upload</h4>


	</div>


	<!--User Profile-->
		<div id = "head_login">
			<h4><i class="far fa-user"></i> User</h4>
			<form method="post">

				<div id="input_f">

					<h4>My Profile</h4>
				</div>

				<div id="input_f">
					<h4>Setting</h4>
				</div>


	 <center><button type="button" name="logout">logout</button>
	</center>
		</form>

		</div>

</div>
