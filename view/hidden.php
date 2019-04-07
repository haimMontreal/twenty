<?php
session_start();
if(!isset($_SESSION['loggedIN']))
{
    header('location:login.php');
    exit();
}

?>
<a href="logout.php">Logout </a><br>
You are logged In.