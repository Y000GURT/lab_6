<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="header">
        <h1>Книжный магазин</h1>
        <div id="menu">
            <a href="main.php">Главная</a>
            <a href="product2.php">Товары</a>
            <a href="video.html">Галерея</a>
            <a href="contacts.html">Контакты</a>
        </div>
        <input class="search"  type="search" placeholder="Искать">
        <p><?php print($_COOKIE['login'])?></p>
    </div>

    <div>
        <form action="profil.php" method="post">
            <input type="text" name="bookName" placeholder="Название книги" class="bookName"><br>
            <input type="number" name="idUser" value="<?php print($_COOKIE['id']) ?>" class="idUser"><br>
            <input type="submit" value="Отправить" class="button">
        </form>
    </div>

<?php 
$bookName = $_POST['bookName'];
$idUser = $_POST['idUser'];


$connection = mysqli_connect('127.0.0.1','root','','lab_13');

$insert1 = mysqli_query($connection, "INSERT INTO Aplications (BookName, id_user) VALUES ('$bookName', '$idUser')");

mysqli_close($connection);

?>
</body>
</html>