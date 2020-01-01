<div id = "bodyright">

	<?php if(isset($_GET['edit_cata'])){
		
		echo edit_cata();
		}else { ?>
	<h3>View All Faqs</h3>

	<div id = "add">
		<details style="width:20%">
			<summary> Add FAQs </summary>
			<form method = "post" enctype="multipart/form-data">
				<input type="text" name="qsn" placeholder="Enter Qsn Here "/>
				<textarea name="ans" placeholder="Enter Answer Here"></textarea>
				<center><button name = "add_faqs">Add Faqs</button></center>
			</form>
		</details>
		<br/>
		
		<?php echo view_faqs(); ?>
		
	</div>

	<?php } ?>

</div>

<?php
	echo add_faqs();
 ?>