<div id = "bodyright">
	<?php if(isset($_GET['edit_sub_cata'])){echo edit_sub_cata();}else{?>
	<h3>View All sub Categories</h3>	
	<div id = "add">
		<details>
			<summary> Add sub Categories </summary>
			<form method = "post" enctype="multipart/form-data">
				<select name = "cata_id" required>
					<option value=""> Select Category</option>
					<?php echo select_cata(); ?>
				</select> 
				<input type="text" name="sub_cata_name" placeholder="Enter Category Name "/>
				<center><button name = "add_sub_cata">Add Category</button></center>
			</form>
		</details>
		<table cellspacing="0">
			<tr>
				<th>Sr No.</th>
				<th>Sub Category Name</th>
				<th>Main Category Name </th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php echo view_sub_cata(); ?>
		</table>
	</div>
	<?php } ?>
	
</div>

<?php
	echo add_sub_cata();
 ?>