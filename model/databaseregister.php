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

    $email = $_POST['emailPHP'];
    $password = $_POST['passwordPHP'];
    $age = $_POST['agePHP'];
    $name = $_POST['namePHP'];
    $username = $_POST['usernamePHP'];


    $data = $connection->query("select id from users where  password='$password' OR username='$username'");
    if($data->rowCount() == 0)
    {
        $sql = 'INSERT INTO users(firstname, email, password, age, username) VALUES(:firstname, :email, :password, :age, :username)';
        $stmt = $connection->prepare($sql);
        $stmt->execute(['firstname'=> $name, 'email' =>$email,'password'=>$password, 'age'=>$age, 'username'=>$username]);
        $_SESSION['loggedIN']= '1';
        $_SESSION['email'] = $email;
        exit('<font color="green">Accoutn created!</font>');


    }
    else
    {
        exit('<font color="red">Password or username already taken</font>');
    }
    //exit($email . " = " . $password);
}

?>