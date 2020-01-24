<?php
include("inc/db.php");
session_start();

if(isset($_POST['login'])){			
    $email =$_POST['u_email'];
    $pass = $_POST['u_pass'];		
    $get_cata = $con->prepare("select * from user where email='$email' AND pass='$pass'");
    $get_cata->setFetchMode(PDO::FETCH_ASSOC);
    $get_cata->execute();
    $row=$get_cata->fetch();
  
    if($row["role"] == 'user')
    {
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['role'] = $row["role"];
        header("Location:index.php");
    }
    else if($row["role"]== 'Admin')
    {
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['role'] = $row["role"];
        header("Location:admin/index.php");
    }
    }
    else
    {
      
    }


?>