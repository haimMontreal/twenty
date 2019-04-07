<?php
session_start();
if(isset($_SESSION['loggedIN']))
{
    header('location:hidden.php');
    exit();
}
if (isset($_POST['login']))
{
    $host ="localhost";
    $user = "root";
    $password = "123456";
    $dbname = "login";

    $dsn = 'mysql:host='.$host.';dbname='.$dbname;
    $connection = new PDO($dsn, $user, $password);
    //$connection = new mysqli(host: 'localhost', username: 'root', passwd: '', dbname:'logintutorial');
    $email = $_POST['emailPHP'];
    $password = $_POST['passwordPHP'];

    $data = $connection->query("select id from users where email='$email' AND password='$password'");
    if($data->rowCount() == 1)
    {
        $_SESSION['loggedIN']= '1';
        $_SESSION['email'] = $email;
        exit('<font color="green">Login Success..</font>');
    }
    else
    {
        exit('<font color="red">Please check your inputs</font>');
    }
    //exit($email . " = " . $password);
}

?>