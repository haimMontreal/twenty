<?php
require_once('../model/databaseregister.php');
?>
<html>
<head>
    <title> Jquery Tutorial - Login Form </title>
</head>
<body>
<form method="post" action="register.php">
    <input type="text" id="age" name="age" placeholder="Your age"><br>
    <input type="text" id="name" name="name" placeholder="Your name"><br>
    <input type="text" id="email" name="email" placeholder="Your Email"><br>
    <input type="text" id="username" name="username" placeholder="Your username"><br>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <input type="button" id="register"  value="Log In" />
</form>

<p id="response"></p>

<a href="login.php">Login</a>

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../controller/ajaxregister.js">

</script>
</body>
</html>