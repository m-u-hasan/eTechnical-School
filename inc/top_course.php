<?php
include("inc/db.php");
$get_upload = $con->prepare("select * from upload");
$get_upload->setFetchMode(PDO::FETCH_ASSOC);
$get_upload->execute();
$row=$get_upload->fetch();

echo " 
<div id='top_course'>
<h2>Top Courses</h2>
<ul>
  <li>
    <a href='#'>
      <img style='width: 100%; height: 150px;' src='".$row['image']."' alt='img not found'/>
      <h3>Title: ".$row['c_title']."</h3>
      <h4>Price: ".$row['price']."</h4>
      <h5>Teacher Name: ".$row['t_name']."</h5>
    </a>
  </li>

  <li>
    <a href='#'>
      <img style='width: 100%; height: 150px;' src='imgs/courses/top_course3.jpg' alt='img not found'/>
      <h3>Social Networking Website Development in PHP</h3>
      <h4>Price: $120</h4>
      <h5>Teacher Name: Hasan</h5>
    </a>
  </li>

  <li>
    <a href='#'>
      <img style='width: 100%; height: 150px;' src='imgs/courses/top_course3.jpg' alt='img not found'/>
      <h3>Social Networking Website Development in PHP</h3>
      <h4>Price: $120</h4>
      <h5>Teacher Name: Hasan</h5>
    </a>
  </li>

  <li>
    <a href='#'>
      <img style='width: 100%; height: 150px;' src='imgs/courses/top_course4.jpg' alt='img not found'/>
      <h3>Social Networking Website Development in PHP</h3>
      <h4>Price: $120</h4>
      <h5>Teacher Name: Hasan</h5>
    </a>
  </li>

  <li>
    <a href='#'>
      <img style='width: 100%; height: 150px;' src='imgs/courses/top_course1.jpg' alt='img not found'/>
      <h3>Social Networking Website Development in PHP</h3>
      <h4>Price: $120</h4>
      <h5>Teacher Name: Hasan</h5>
    </a>
  </li><br clear='all'/>


</ul>



</div>

";
?>

