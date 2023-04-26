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
            <a href="main.html">Главная</a>
            <a href="product.php">Товары</a>
            <a href="video.html">Галерея</a>
            <a href="contacts.html">Контакты</a>
        </div>
        <input class="search"  type="search" placeholder="Искать">
    </div>
    <hr>
    <h2>Перечень товаров</h2>
    <table cellspacing="0">
        <tr>
            <th>Название</th>
            <th>Цена в руб.</th>
            
        </tr>
        <tr>
            <td>Преступление и наказание</td>
            <td class="sum">150</td>
        <tr>
            <td>Анна Каренина</td>
            <td class="sum">300</td> 
        </tr>
        <tr>
            <td>Отцы и дети</td>
            <td class="sum">150</td> 
        </tr>
        <tr>
            <td>Мастер и маргарита</td>
            <td class="sum">300</td> 
        </tr>
        <tr>
            <td>Евгений Онегин</td>
            <td class="sum">200</td> 
        </tr>
        <tr>
            <td>Илиада</td>
            <td class="sum">350</td> 
        </tr>
        <tr>
            <td>Божественная комедия</td>
            <td class="sum">350</td> 
        </tr>
        <tr>
            <td>Одисея</td>
            <td class="sum">250</td> 
        </tr>
        <tr>
            <td>Портрет Дориана Грея</td>
            <td class="sum">150</td>
        </tr>
        <tr>
            <td>Над пропасть во ржи</td>
            <td class="sum">200</td> 
        </tr>
        <tr>
            <td>1984</td>
            <td class="sum">250</td> 
        </tr>
        <tr>
            <td>Гамлет</td>
            <td class="sum">350</td> 
        </tr>
        <tr>
            <td>Алхимик</td>
            <td class="sum">250</td> 
        </tr>
    </table>

    <div class="calc">
        <h2>Калькулятор стоимости товаров</h2>
        <form action="product.php" method="post">
            <input type="number" min="1" name="book1" placeholder="Кол-во книг 'Анна Каренина'"><br>
            <input type="number" min="1" name="book2" placeholder="Кол-во книг 'Преступление и наказание'"><br>
            <input type="number" min="1" name="book3" placeholder="Кол-во книг 'Отцы и дети'"><br>
            <input type="number" min="1" name="book4" placeholder="Кол-во книг 'Мастер и Маргарита'"><br>
            <input type="number" min="1" name="book5" placeholder="Кол-во книг 'Евгений Онегин'"><br>
            <input type="number" min="1" name="book6" placeholder="Кол-во книг 'Илиада'"><br>
            <input type="number" min="1" name="book7" placeholder="Кол-во книг 'Божественная комедия'"><br>
            <input type="number" min="1" name="book8" placeholder="Кол-во книг 'Одисея'"><br>
            <input type="number" min="1" name="book9" placeholder="Кол-во книг 'Портрет Дориана Грея'"><br>
            <input type="number" min="1" name="book10" placeholder="Кол-во книг 'Над пропастью во ржи'"><br>
            <input type="number" min="1" name="book11" placeholder="Кол-во книг '1984'"><br>
            <input type="number" min="1" name="book12" placeholder="Кол-во книг 'Гамлет'"><br>
            <input type="number" min="1" name="book13" placeholder="Кол-во книг 'Алхимик'"><br>
            <input type="submit" value="Расчитать" id="submit">
        </form>
        <?php 
        $book1 = $_POST['book1'];
        $book2 = $_POST['book2'];
        $book3 = $_POST['book3'];
        $book4 = $_POST['book4'];
        $book5 = $_POST['book5'];
        $book6 = $_POST['book6'];
        $book7 = $_POST['book7'];
        $book8 = $_POST['book8'];
        $book9 = $_POST['book9'];
        $book10 = $_POST['book10'];
        $book11 = $_POST['book11'];
        $book12 = $_POST['book12'];
        $book13 = $_POST['book13']; 

        if(empty($book1)) {$book1=0;}
        if(empty($book2)) {$book2=0;}
        if(empty($book3)) {$book3=0;}
        if(empty($book4)) {$book4=0;}
        if(empty($book5)) {$book5=0;}
        if(empty($book6)) {$book6=0;}
        if(empty($book7)) {$book7=0;}
        if(empty($book8)) {$book8=0;}
        if(empty($book9)) {$book9=0;}
        if(empty($book10)) {$book10=0;}
        if(empty($book11)) {$book11=0;}
        if(empty($book12)) {$book12=0;}
        if(empty($book13)) {$book13=0;}

        $res = 150*$book1 + 300*$book2 + 150*$book3 + 300*$book4 + 200*$book5 + 350*$book6 + 350*$book7 + 250*$book8 + 
        150*$book9 + 200*$book10 + 250*$book11 + 350*$book12 + 250*$book13;

        echo "Общая стоимость: " . $res;
        ?>
    </div>
</body>
</html>