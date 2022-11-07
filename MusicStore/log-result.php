<?php
$username = $_POST ['user_name'];
$password = $_POST ['password'];

if(empty($username)){
$username_error = 'Please enter username';
}elseif(strlen($username)<6){
    $username_error = 'Username is less than 6 letters';
}

if(empty($password)){
    $password_error = 'Please enter password';
}elseif(strlen($password)<5){
    $password_error = 'Password is less than 5 letters';
}
include('login.php');
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>username: <?php echo $username ?></h1>
    <h1>password: <?php echo $password ?></h1>
</body>
</html> -->