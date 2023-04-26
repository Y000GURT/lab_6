<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
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
    </div>

    <form action="searchBooks.php" method="post">
    <input class="search"  type="search" placeholder="Искать" name="searchItem"> <br> <br>
    <input name="submit" value="Найти" type="submit" class="inputBut">
    <input name="reset" value="Очистить" type="reset" class="inputBut">
    </form>
    
</body>
</html>