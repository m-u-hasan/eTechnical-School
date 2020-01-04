<?php
	function head_link(){
		include("inc/db.php");
		$get_link =$con->prepare("select * from contact");
		$get_link->setFetchMode(PDO::FETCH_ASSOC);
		$get_link->execute();
		$row=$get_link->fetch();		
		echo "
			<ul>
				<li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook'></i></a></li>
				<li><a href='".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
				<li><a href='".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
				<li><a href='".$row['link']."' target='_blank'><i class='fab fa-linkedin'></i></a></li>
				<li><a href='".$row['gp']."' target='_blank'><i class='fab fa-google-plus'></i></a></li>

			</ul>
		";
		
	}
	
	function cat_menu(){
		include("inc/db.php");
		$get_cat =$con->prepare("select * from cata");
		$get_cat->setFetchMode(PDO::FETCH_ASSOC);
		$get_cat->execute();
		
		while($row=$get_cat->fetch()):
			echo "
				 <li>
					<a href='#' style='color: #3f5267;'> <i class='fas fa-code'></i> ".$row['cata_name']."</a>
				</li>	
			";
		endwhile;
	}
	
	function function_cat(){
		include("inc/db.php");
		$get_home_cat = $con->prepare("select * from cata");
		$get_home_cat->setFetchMode(PDO::FETCH_ASSOC);
		$get_home_cat->execute();
		while($row = $get_home_cat->fetch()):
			echo "
			<li>
				<a href='#'>
				<center> 
				<i class='fas fa-crop'></i>
				<h4>".$row['cata_name']." </h4>
				<p>2</p>
				</center>
				</a>
			</li>
			";
		endwhile;
		
	}
	
	function cart(){
		include("inc/db.php");
		echo "
		<div id='wrap'>
			
			<div id='crumb'>
				<span><a href='index.php'>Home</a></span> <b>></b>
				<span>My Cart</span>							
			</div>
			
			<div id ='cart'>
				
			
			</div>
		</div>
		";
	}
	
	
	
?>