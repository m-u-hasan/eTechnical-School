<?php
session_start();
//if($_POST['logout'])
if($_SESSION['email'])
{
    if(session_destroy())
    {
        header("Location:index.php");
    }
}
{
    header("Location:index.php");
}


?>