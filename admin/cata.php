<div id = "bodyright">

	<?php if(isset($_GET['edit_cata'])){

		echo edit_cata();
		}else { ?>
	<h3>View All Categories</h3>

	<div id = "add">
		<details>
			<summary> Add Categories </summary>
			<form method = "post" enctype="multipart/form-data">
				<input type="text" name="cata_name" placeholder="Enter Category Name "/>
				<input type="text" name="cat_icon" placeholder="Enter Category Icon Code Here  "/>	
				<center><button name = "add_cata">Add Category</button></center>
			</form>
		</details>

		<table cellspacing="0">
			<tr>
				<th>Sr No.</th>
				<th>Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php echo view_cata(); ?>
		</table>

	</div>

	<?php } ?>

</div>

<?php
	echo add_cata();
 ?>
