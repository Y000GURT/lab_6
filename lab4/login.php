<?php 
$login = $_POST['login'];
$password = $_POST['password'];

$connection = mysqli_connect('127.0.0.1','root','','lab_13');

$result = mysqli_query($connection, "SELECT * FROM Users WHERE login = '$login' AND password = '$password'");
$user = mysqli_fetch_assoc($result);

if(empty($user) == false){
    header("Location: profil.php");
}

setcookie('login', $user['login'], time() + 3600, "/");
setcookie('id', $user['Id'], time() + 3600, "/" )

?>