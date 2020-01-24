<?php
session_start();
if($_POST['logout'])
{
    if(session_destroy())
    {
        header("Location:../index.php?logoutSuccessfullydone");
    }
}


?>