<?php
session_start();
if(!isset($_SESSION['loggedIN']))
{
    header('location:login.php');
    exit();
}

?>
<a href="logout.php">Logout </a><br>
 Welcome You are logged In.