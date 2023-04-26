<?php 
$fam = $_POST['fam'];
$im = $_POST['im'];
$ot = $_POST['ot'];
$login = $_POST['login'];
$password = $_POST['password'];

$connection = mysqli_connect('127.0.0.1','root','','lab_13');

if ($connection == false)
{
    echo "Не удалось подключиться к бд";
    echo mysqli_connect_error();
    exit();
}
$insert = mysqli_query($connection, "INSERT INTO Users (fam, im, ot, login, password) values ('$fam', '$im', '$ot', '$login', '$password')");
if($insert == true){
    echo "Вы зарегистрировались";
}
mysqli_close($connection);
?>