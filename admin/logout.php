<?php
session_start();
//if($_POST['logout'])
if($_SESSION['email'])
    {   
        if($_POST['logout'])
        {        
            session_destroy();
            header("Location:../index.php");
        }
    }
    else{
        header("Location:../index.php");
    }

?>