<div id="bodyleft">
	<h3> Categories Management</h3>
	<ul>
		<li><a href ="index.php">Dashboard</a></li>
		<li><a href ="index.php?cata">View Categories</a></li>
		<li><a href ="index.php?sub_cata">View sub Categories</a></li>
	</ul>
	
	<h3> Course Management</h3>
	<ul>
		<li><a href ="#">Active Course</a></li>
		<li><a href ="#">Pending Course</a></li>
		<li><a href ="#">Unpublish Course</a></li>
		<li><a href ="#">Advance Course Searching</a></li>
	</ul>
	
	<h3> User Management</h3>
	<ul>
		<li><a href ="#">View All Students</a></li>
		<li><a href ="#">View All Teacher  </a></li>
		<li><a href ="#">Advance User Search</a></li>		
	</ul>
	
	<h3> Payment Management</h3>
	<ul>
		<li><a href ="#">Pay to Teacher</a></li>
		<li><a href ="#">Complete Payment  </a></li>
		<li><a href ="#">Payment Searching</a></li>		
		<li><a href ="#">Advance Payment Searching</a></li>		
	</ul>
	<h3> Pages Management</h3>
	<ul>
		<li><a href ="index.php?terms">Terms & Condition Pages</a></li>
		<li><a href ="index.php?contact">Contact Us Page</a></li>
		<li><a href ="index.php?about">About Us Page</a></li>		
		<li><a href ="index.php?faqs">FAQs Page</a></li>
		<li><a href ="#">Edit Slider</a></li>		
	</ul>	
</div>

<?php
		if(isset($_GET['cata'])){
			include("cata.php");
		}
		if(isset($_GET['sub_cata'])){
			include("sub_cata.php");
		}
		
		if(isset($_GET['terms'])){
			include("terms.php");
		}
		if(isset($_GET['contact'])){
			include("contact.php");
		}
		if(isset($_GET['faqs'])){
			include("faqs.php");
		}
		if(isset($_GET['about'])){
			include("about.php");
		}
	?>