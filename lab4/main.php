<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
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
        <input class="search" type="search" placeholder="Искать">
        <button class="openModal">Вход</button>
    </div>


    <div class="modal">
        <div class="modalContent">
            <span class="closeModal">&times;</span>
            <form method="post" action="login.php">
                <p>Добро пожаловать!</p>
                <input type="text" placeholder="Логин" name="login">
                <input type="password" placeholder="Пароль" name="password">
                <br>
                <div class="btnsModal">
                    <button class="logIn" type="submit">Войти</button>
                    <button class="signIn">Регистрация</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modalSign">
        <div class="modalContent">
            <span class="closeModalSign">&times;</span>
            <form method="post" action="sign.php">
                <p>Добро пожаловать!</p>
                <input type="text" placeholder="Фамилия" name="fam">
                <input type="text" placeholder="Имя" name="im">
                <input type="text" placeholder="Отчество" name="ot">
                <input type="text" placeholder="Логин" name="login">
                <input type="password" placeholder="Пароль" name="password">
                <br>
                <div class="btnsModal">
                    <input type="submit" value="Войти" class="logIn">
                    <input type="submit" value="Регистрация" class="signIn">
                </div>
            </form>
        </div>
    </div>

    <hr>
    <img src="image/photo.jpg"> <br>

    <button class="accordion">Кто мы?</button>
    <div class="panel"><p>Привет! Мы - book24.ru, интернет-магазин издательской группы Эксмо-АСТ. Наш магазин появился в 2016 году и с тех пор продал столько же книг, сколько занимает территория Гибралтара. ;)
        На наших полках книги всех значимых издательств: кроме «Эксмо» и «АСТ» это «Манн, Иванов и Фербер», «Азбука», «Альпина», «Синдбад» и другие.
        А среди издательских брендов, которые представлены в book24.ru есть: «БОМБОРА», «Corpus», «Mainstream», «Редакция Елены Шубиной», «Вилли-Винки», «Fanzon», «Комильфо» и «Канц-Эксмо». И мы постоянно пополняем эти списки.
        Если вы представляете издательство и хотите попасть на book24.ru - напишите нам.</p></div>
    
    <button class="accordion">Что мы делаем?</button>
    <div class="panel"><p>Мы не просто продаем книги и канцтовары. Book24.ru - часть издательства, а это значит, что мы гораздо ближе к процессу появления книг в ваших руках, чем обычный интернет-магазин.
        Эта близость позволяет нам быть экспертами. Мы заранее знаем, когда выходят новинки и получаем их первыми.
        Мы рассказываем о книгах в нашем блоге, нам дают рекомендации знаменитости, а наши подборки составляют профессиональные редакторы..</p></div>

    <button class="accordion">Что отличает нас от других?</button>
    <div class="panel"><p>Новинки. Book24.ru - первый интернет-магазин, где появляются свежие книжные хиты.Автографы. У нас более 350 книг с автографами.Доставка. Мы доставляем по всей России с помощью восьми сервисов.
        Доставка. Мы доставляем по всей России с помощью восьми сервисов.Упаковка. Наши книги всегда доходят в отличном состоянии, спасибо надежной упаковке.Кэшбэк. Для постоянных покупателей book24.ru - самое выгодное место в мире*.
    </p></div>

    <button class="accordion">Кто делает book24.ru?</button>
    <div class="panel"><p>Всего book24.ru делают около 50 человек - закупщики, разработчики, сотрудники колл-центра, склада и доставки, контент-менеджеры и маркетологи.
        Часто эти люди пришли из другого подразделения Эксмо-АСТ и принесли часть своей любви к книгам - в том числе и нашим покупателям</p></div>

    <script src="main.js"></script>
</body>
</html>