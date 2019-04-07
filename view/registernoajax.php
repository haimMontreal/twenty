<?php
require_once('../model/databaseregisternoajax.php');
?>
<html>
<head>
    <title> Jquery Tutorial - Login Form </title>
</head>
<body>
<form method="post" action="registernoajax.php">
    <input type="text" id="age" name="age" placeholder="Your age"><br>
    <input type="text" id="name" name="name" placeholder="Your name"><br>
    <input type="text" id="email" name="email" placeholder="Your Email"><br>
    <input type="text" id="username" name="username" placeholder="Your username"><br>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <input type="submit" name="register" id="register"  value="register" />
</form>

<p id="response"></p>



</script>
</body>
</html>