<?php
session_start();
if(!isset($_SESSION['loggedIN']))
{
    header('location:login.php');
    exit();
}

?>
<a href="logout.php">Logout </a><br>
 Welcome <?php $_SESSION['email'] ?> You are logged In.