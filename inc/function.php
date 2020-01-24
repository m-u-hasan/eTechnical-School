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
					<a href='#' style='color: #3f5267;'>".$row['cat_icon']." ".$row['cata_name']."</a>
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
	      ".$row['cat_icon']."
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

					<table cellspacing='0'>
						<tr>
							<th id='cart_f'>Name</th>
							<th>Instructor</th>
							<th>Language</th>
							<th>Lectures</th>
							<th>Price</th>
						</tr>
						<tr>
							<td>
							<img src='imgs/courses/html.jpg'>
							<span><a href='#'>Html Course</a></span>
							<b><a href='#'>Remove</a></b>
							</td>
						<td>Mahamud</td>
							<td>Bangla</td>
								<td>100</td>
									<td>3000/=</td>


						</tr>



						<tr>
							<td>
							<img src='imgs/courses/cart1.jpg'>
							<span><a href='#'>Programming And Development</a></span>
							<b><a href='#'>Remove</a></b>
							</td>
						<td >Sabbir Hossain</td>
							<td>Bangla</td>
								<td>100</td>
									<td>3000/=</td>


						</tr>



						<tr>
							<td id='cart_f'>
							<img src='imgs/courses/cart2.jpg'>
							<span><a href='#'>SEO and Digital Marketing</a></span>
							<b><a href='#'>Remove</a></b>
							</td>
						<td>Tamjid </td>
							<td>Bangla</td>
								<td>100</td>
									<td>3000/=</td>


						</tr>

						<tr>
							<td>
								<button style='font-size: 20px;'><a href= 'index.php'>Keep Shopping</a></button>
								<button style='font-size: 20px;'><a href ='#'>Checkout</a></button>
							</td>
							<td></td><td></td>
							<td>Ammount Payble: </td>
							<td>9000/=</td>
						</tr>

					</table>

			</div>
		</div>
		";
	}

	function upload_function(){		
		echo "
		<div id='wrap'>
			<div id ='cart'>
				<form method='post' action='' enctype='multipart/form-data'>
					<table cellspacing='0'>				
						<tr>
							<td>Course Title: <input type='text' name='c_title'></td>
						</tr>
						
						<tr>
							<td>Category:
								<select name='cata_id'>
														<option>Select Category</option>";
									include("inc/db.php");
									$get_cat =$con->prepare("select * from cata");
									$get_cat->setFetchMode(PDO::FETCH_ASSOC);
									$get_cat->execute();
									while($row=$get_cat->fetch()):
									echo "
										<option value='".$row['cata_id']."'>".$row['cata_name']."</option>
									";
									endwhile;
									echo "</select>
												</td>
						</tr>
						
						<tr>
							<td>Price: <input type='text' name='price'></td>
						</tr>

						<tr>
							<td>Teacher Name : <input type='text' name='t_name'></td>
						</tr>

						<tr>
							<td>Thumbsnail: <input type='file' name='thumbnail'></td>
						</tr>

						<tr>
							<td>Course Outline Video : <input type='file' name='video'></td>
						</tr>	

						<tr>
							<td> <input type='submit' name='submit' value='Submit'></td>
						</tr>
					</table>
					</form>

			</div>
		</div>
		";
	}
?>

