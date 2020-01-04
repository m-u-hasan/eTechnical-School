<?php
	function add_cata(){
		include("inc/db.php");
		if(isset($_POST['add_cata'])){
			$cata_name = $_POST['cata_name'];
				$cat_icon = $_POST['cat_icon'];

			$check = $con->prepare("select * from cata where cata_name='$cata_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count = $check->rowCount();
			if($count==1)
			{
				echo"<script>alert('Category Already Added')</script>";
				echo "<script>window.open('index.php?cata','_self')</script>";
			}else{
					$add_cata = $con->prepare("insert into cata(cata_name,cat_icon)values('$cata_name','$cat_icon')");
					if($add_cata->execute()){
					echo "<script>alert('Category Added Successfully')</script>";
					echo "<script>window.open('index.php?cata','_self')</script>";
				}
				else
				{
					echo "<script> alert('Category Not Added Successfully')</script>";
					echo "<script>window.open('index.php?cata','_self')</script>";
				}

			}


		}
	}

		function edit_cata(){
		include("inc/db.php");

		if(isset($_GET['edit_cata'])){
			$id =$_GET['edit_cata'];
			$get_cata = $con->prepare("select * from cata where cata_id = '$id'");
			$get_cata->setFetchMode(PDO::FETCH_ASSOC);
			$get_cata->execute();
			$row=$get_cata->fetch();


			echo"<h3>Edit Categories</h3>
			<form  id ='edit_form' method = 'post' enctype='multipart/form-data'>
				<input type='text' name='cata_name' value='".$row['cata_name']."' placeholder='Enter Category Name '/>

	<input type='text' name='cat_icon' value='".$row['cat_icon']."' placeholder='Enter Category icon '/>



				<center><button name = 'edit_cata'>Edit Category</button></center>
			</form>
			";

			//Edit Category Button procedure
			if(isset($_POST['edit_cata']))
			{
			$cata_name = $_POST['cata_name'];
			$cat_icon = $_POST['cat_icon'];


				$up = $con->prepare("update cata set cata_name='$cata_name', cat_icon='$cat_icon' where cata_id='$id'");
				if($up->execute()){
				echo "<script>alert('Category Updated Successfully')</script>";
				echo "<script>window.open('index.php?cata','_self')</script>";
				}
				else
				{
					echo "<script> alert('Category Not Updated Successfully')</script>";
					echo "<script>window.open('index.php?cata','_self')</script>";
				}


		}
	}
}


	function edit_sub_cata(){
		include("inc/db.php");

		if(isset($_GET['edit_sub_cata'])){
			$id =$_GET['edit_sub_cata'];
			$get_cata = $con->prepare("select * from sub_cata where sub_cata_id = '$id'");
			$get_cata->setFetchMode(PDO::FETCH_ASSOC);
			$get_cata->execute();
			$row=$get_cata->fetch();

			 $cata_id = $row['cata_id'];
			 $get_c = $con->prepare("select * from cata where cata_id='$cata_id'");
			 $get_c->setFetchMode(PDO::FETCH_ASSOC);
			 $get_c->execute();
			 $row_cata=$get_c->fetch();

			echo"<h3>Edit Sub Categories</h3>
			<form  id ='edit_form' method = 'post' enctype='multipart/form-data'>

				<select name = 'cata_id'>
				<option value='".$row_cata['cata_id']."'>".$row_cata['cata_name']."</option>
				";
					echo select_cata();
				echo "</select>

				<input type='text' name='sub_cata_name' value='".$row['sub_cata_name']."' placeholder='Enter Category Name '/>
				<center><button name = 'edit_sub_cata'>Edit Sub Category</button></center>
			</form>
			";

			//Edit Category Button procedure
			if(isset($_POST['edit_sub_cata']))
			{
			$cata_name = $_POST['sub_cata_name'];
				$cata_id = $_POST['cata_id'];
				$check = $con->prepare("select * from sub_cata where sub_cata_name='$cata_name'");
				$check->setFetchMode(PDO::FETCH_ASSOC);
				$check->execute();
				$count = $check->rowCount();

				$check = $con->prepare("select * from sub_cata where sub_cata_name='$cata_name'");
				$check->setFetchMode(PDO::FETCH_ASSOC);
				$check->execute();
				$count = $check->rowCount();
				if($count==1)
				{
					echo"<script>alert('Category Already Added')</script>";
					echo "<script>window.open('index.php?sub_cata','_self')</script>";
				}else{

				$up = $con->prepare("update sub_cata set sub_cata_name='$cata_name',sub_cata_id='$cata_id' where sub_cata_id='$id'");
				if($up->execute()){
				echo "<script>alert('Category Updated Successfully')</script>";
				echo "<script>window.open('index.php?sub_cata','_self')</script>";
				}
				else
				{
					echo "<script> alert('Category Not Updated Successfully')</script>";
					echo "<script>window.open('index.php?sub_cata','_self')</script>";
				}

			}

		}
	}
}

	function view_cata(){
		 include("inc/db.php");
		$get_cata = $con->prepare("select * from cata");
		$get_cata->setFetchMode(PDO::FETCH_ASSOC);
		$get_cata->execute();
		$i=1;
		while($row=$get_cata->fetch()):
			echo"<tr>
			<td>".$i++."</td>
			<td> ".$row['cata_name']." ".$row['cat_icon']."</td>
			<td><a href='index.php?cata&edit_cata=".$row['cata_id']."'>Edit</a></td>
			<td><a href='index.php?cata&del_cata=".$row['cata_id']."'>Delete</a></td>

			</tr>";
		endwhile;

		if(isset($_GET['del_cata']))
		{
			$id = $_GET['del_cata'];
			$del=$con->prepare("delete from cata where cata_id = '$id'");
			if($del->execute()){
				echo"<script>alert('Category Deleted Successfully')</script>";
				echo"<script>window.open('index.php?cata','_self')</script>";
			}
			else{
				echo"<script>alert('Category Not Deleted Successfully')</script>";
				echo"<script>window.open('index.php?cata','_self')</script>";

			}
		}


	}

	function add_sub_cata(){
		include("inc/db.php");
		if(isset($_POST['add_sub_cata'])){
			$cata_name = $_POST['sub_cata_name'];
			$cata_id = $_POST['cata_id'];

			$check = $con->prepare("select * from sub_cata where sub_cata_name='$cata_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count = $check->rowCount();
			if($count==1)
			{
				echo"<script>alert('Sub Category Already Added')</script>";
				echo "<script>window.open('index.php?sub_cata','_self')</script>";
			}else{
				$add_cata = $con->prepare("insert into sub_cata(sub_cata_name,cata_id)values('$cata_name','$cata_id')");
				if($add_cata->execute()){
				echo "<script>alert('Sub Category Added Successfully')</script>";
				echo "<script>window.open('index.php?sub_cata','_self')</script>";
			}
			else
			{
				echo "<script> alert('Sub Category Not Added Successfully')</script>";
				echo "<script>window.open('index.php?sub_cata','_self')</script>";
			}
			}


		}
	}

	function view_sub_cata(){
		 include("inc/db.php");
		$get_cata = $con->prepare("select * from sub_cata");
		$get_cata->setFetchMode(PDO::FETCH_ASSOC);
		$get_cata->execute();
		$i=1;
		while($row=$get_cata->fetch()):
			$id=$row['cata_id'];
			$get_c = $con->prepare("select * from cata where cata_id='$id'");
			$get_c->setFetchMode(PDO::FETCH_ASSOC);
			$get_c->execute();
			$row_cata=$get_c->fetch();

			echo"<tr>
			<td>".$i++."</td>
			<td>".$row['sub_cata_name']."</td>
			<td>".$row_cata['cata_name']."</td>
			<td><a href='index.php?sub_cata&edit_sub_cata=".$row['sub_cata_id']."'>Edit</a></td>
			<td><a href='index.php?sub_cata&del_sub_cata=".$row['sub_cata_id']."'>Delete</a></td>

			</tr>";
		endwhile;

			if(isset($_GET['del_sub_cata']))
		{
			$id = $_GET['del_sub_cata'];
			$del=$con->prepare("delete from sub_cata where sub_cata_id = '$id'");
			if($del->execute()){
				echo"<script>alert('Sub Category Deleted Successfully')</script>";
				echo"<script>window.open('index.php?sub_cata','_self')</script>";
			}
			else{
				echo"<script>alert('Sub Category Not Deleted Successfully')</script>";
				echo"<script>window.open('index.php?sub_cata','_self')</script>";

			}
		}
	}

	function select_cata(){
		include("inc/db.php");
		$get_cata = $con->prepare("select * from cata");
		$get_cata->setFetchMode(PDO::FETCH_ASSOC);
		$get_cata->execute();
		while($row=$get_cata->fetch()):
			echo "<option value='".$row['cata_id']."'>".$row['cata_name']."</option>";

		endwhile;
	}


		function add_term(){
		include("inc/db.php");
		if(isset($_POST['add_term'])){
			$cata_name = $_POST['term'];
			$cata_id = $_POST['for_whom'];

			$check = $con->prepare("select * from term where term='$cata_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count = $check->rowCount();
			if($count==1)
			{
				echo"<script>alert('Term Is  Already Added')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
			}else{
				$add_cata = $con->prepare("insert into term(term,for_whom)values('$cata_name','$cata_id')");
				if($add_cata->execute()){
				echo "<script>alert('Term Added Successfully')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
			}
			else
			{
				echo "<script> alert('Term Not Added Successfully')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
			}
			}


		}
	}

		function edit_term(){
		include("inc/db.php");

		if(isset($_GET['edit_term'])){
			$id =$_GET['edit_term'];
			$get_cata = $con->prepare("select * from term where t_id = '$id'");
			$get_cata->setFetchMode(PDO::FETCH_ASSOC);
			$get_cata->execute();
			$row=$get_cata->fetch();

			echo"<h3>Edit T&C </h3>
			<form  id ='edit_form' method = 'post' enctype='multipart/form-data'>

				<select name = 'for_whom'>
				<option value='".$row['for_whom']."'>".$row['for_whom']."</option>

				<option value='Student'>Student</option>
				<option value='Teacher'>Teacher</option>
				";
				echo "</select>

				<input type='text' name='term' value='".$row['term']."' placeholder='Enter Category Name '/>
				<center><button name = 'edit_t'>Edit T&C </button></center>
			</form>
			";

			//Edit Category Button procedure
			if(isset($_POST['edit_t']))
			{
				$cata_name = $_POST['term'];
				$cata_id = $_POST['for_whom'];
				$up = $con->prepare("update term set term ='$cata_name',for_whom ='$cata_id' where t_id='$id'");
				if($up->execute()){
				echo "<script>alert('Term Updated Successfully')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
				}
				else
				{
					echo "<script> alert('Term Not Updated Successfully')</script>";
					echo "<script>window.open('index.php?terms','_self')</script>";
				}



		}
	}
}

	function view_term(){
		 include("inc/db.php");
			$get_c = $con->prepare("select * from term");
			$get_c->setFetchMode(PDO::FETCH_ASSOC);
			$get_c->execute();
	 		$i=1;
			while($row=$get_c->fetch()):

			echo"<tr>
			<td>".$i++."</td>
			<td>".$row['term']."</td>
			<td>".$row['for_whom']."</td>
			<td>
			<a href='index.php?terms&edit_term=".$row['t_id']."'>Edit</a>
			<a href='index.php?terms&del_term=".$row['t_id']."'>Delete</a>
			</td>

			</tr>";
				endwhile;

			if(isset($_GET['del_term']))
		{
			$id = $_GET['del_term'];
			$del=$con->prepare("delete from term where t_id = '$id'");
			if($del->execute()){
				echo"<script>alert('Term Deleted Successfully')</script>";
				echo"<script>window.open('index.php?terms','_self')</script>";
			}
			else{
				echo"<script>alert('Term Not Deleted Successfully')</script>";
				echo"<script>window.open('index.php?terms','_self')</script>";

			}
		}
	}

	function contact(){
		include("inc/db.php");
		$get_con = $con->prepare("select * from contact");
		$get_con->setFetchMode(PDO::FETCH_ASSOC);
		$get_con->execute();
		$row=$get_con->fetch();

		echo "
<form method = 'post' enctype='multipart/form-data'>
	<table>
		<tr>
			<td>Update Contact No.</td>
			<td><input type='tel' value='".$row['phn']."' name='phn' /></td>
		</tr>
		<tr>
			<td>Update Email</td>
			<td><input type='email' value='".$row['email']."' name='email' /></td>
		</tr>

		<tr>
			<td>Update office Address Line 1</td>
			<td><input type='text' value='".$row['add1']."' name='add1' /></td>
		</tr>

		<tr>
			<td>Update Office Address Line 2</td>
			<td><input type='text' value='".$row['add2']."' name='add2' /></td>
		</tr>

		<tr>
			<td>http://youtube.com</td>
			<td><input type='text' value='".$row['yt']."' name='yt' /></td>
		</tr>
		<tr>
			<td>http://plus.google.com</td>
			<td><input type='text' value='".$row['gp']."' name='gp' /></td>
		</tr>
		<tr>
			<td>http://facebook.com</td>
			<td><input type='text' value='".$row['fb']."' name='fb' /></td>
		</tr>
		<tr>
			<td>http://twitter.com</td>
			<td><input type='text' value='".$row['tw']."' name='tw' /></td>
		</tr>
		<tr>
			<td>http://linkedin.com</td>
			<td><input type='text' value='".$row['link']."' name='link' /></td>
		</tr>
	</table>
	<center><button name = 'up_con'>Save</button></center>
</form>
		";

		if(isset($_POST['up_con'])){

			$phn = $_POST['phn'];
			$email = $_POST['email'];
			$add1 = $_POST['add1'];
			$add2 = $_POST['add2'];
			$yt = $_POST['yt'];
			$gp = $_POST['gp'];
			$fb = $_POST['fb'];
			$tw = $_POST['tw'];
			$link = $_POST['link'];

			$up =$con->prepare("update contact set phn ='$phn',email='$email',add1='$add1',add2='$add2',yt='$yt',gp='$gp',fb='$fb',tw='$tw',link='$link'");
			if($up->execute()){
				echo "<script> window.open('index.php?contact','_self')</script>";
			}

		}

	}

		function add_faqs(){
		include("inc/db.php");
		if(isset($_POST['add_faqs'])){
			$qsn = $_POST['qsn'];
			$ans = $_POST['ans'];
			$check = $con->prepare("select * from faqs where qsn='$qsn'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count = $check->rowCount();
			if($count==1)
			{
				echo"<script>alert('Faqs Already Added')</script>";
				echo "<script>window.open('index.php?faqs','_self')</script>";
			}else{
					$add_cata = $con->prepare("insert into faqs(qsn,ans)values('$qsn','$ans')");
					if($add_cata->execute()){
					echo "<script>alert('Faqs Added Successfully')</script>";
					echo "<script>window.open('index.php?faqs','_self')</script>";
				}
				else
				{
					echo "<script> alert('Faqs Not Added Successfully')</script>";
					echo "<script>window.open('index.php?faqs','_self')</script>";
				}

			}


		}
	}

	function view_faqs(){
		include("inc/db.php");
		$get_faqs = $con->prepare("select * from faqs");
		$get_faqs->setFetchMode(PDO::FETCH_ASSOC);
		$get_faqs->execute();
		while($row=$get_faqs->fetch()):
			echo"
			<details>
			<summary> ".$row['qsn']." </summary>
			<form method = 'post' enctype='multipart/form-data'>
				<input type='text' name='up_qsn' value='".$row['qsn']."' placeholder='Edit Qsn Here '/>
				<input type='hidden' name='id' value='".$row['q_id']."'/>
				<textarea name='up_ans'>".$row['ans']."</textarea>
				<center><button name = 'up_faqs'>Update Faqs</button></center>
			</form>
			</details>
			<br/>
			";
		endwhile;

			if(isset($_POST['up_faqs'])){
			$qsn = $_POST['up_qsn'];
			$ans = $_POST['up_ans'];
			$id = $_POST['id'];
				$up_faqs= $con->prepare("update faqs set qsn='$qsn',ans='$ans' where q_id='$id'");
					if($up_faqs->execute()){
					echo "<script>alert('Faqs Updated Successfully')</script>";
					echo "<script>window.open('index.php?faqs','_self')</script>";
				}
				else
				{
					echo "<script> alert('Faqs Not Updated Successfully')</script>";
					echo "<script>window.open('index.php?faqs','_self')</script>";
				}

			}


		}

		function about(){
			include("inc/db.php");

			$about = $con->prepare("select * from about");
			$about->setFetchMode(PDO::FETCH_ASSOC);
			$about->execute();
			$row = $about->fetch();

			echo "
				<form method='post'>
					<textarea name='about'>'".$row['about']."'</textarea>
					<center><button name='up_about'>Save</button></center>
				</form>
			";
			if(isset($_POST['up_about']))
			{
					$info =$_POST['about'];
					$up_about=$con->prepare("update about set about='$info'");
					if($up_about->execute()){
						echo "<script>alert('About Updated Successfully')</script>";
						echo "<script>window.open('index.php?about','_self')</script>";
					}
					else
					{
						echo "<script> alert('About Not Updated Successfully')</script>";
						echo "<script>window.open('index.php?about','_self')</script>";
					}
			}

		}

?>
