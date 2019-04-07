<?php
require_once('../model/database.php');
?>
<html>
<head>
    <title> Jquery Tutorial - Login Form </title>
</head>
<body>
<form method="post" action="login.php">
    <input type="text" id="email" name="email" placeholder="Your Email"><br>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <input type="button" id="login"  value="Log In" />
</form>

<p id="response"></p>

<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../controller/jquery.js">

</script>
</body>
</html>