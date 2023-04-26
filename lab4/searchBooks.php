<?php 
$item = $_POST['searchItem'];

$connection = mysqli_connect('127.0.0.1','root','','lab_13');

if ($connection == false)
{
    echo "Не удалось подключиться к бд";
    echo mysqli_connect_error();
    exit();
}
$result = mysqli_query($connection, "SELECT * FROM Books WHERE name = '$item'");
$n = mysqli_num_rows($result);

for($i=0; $i<$n; $i++){
    $row = mysqli_fetch_array($result);
    echo "<p><b>" . ($i+1) . "$row[title]</b><br>";
    echo "Название: $row[name]<br>";
    echo "Цена: $row[price]<br></p>";
}
if ($n == 0 ){
    echo "Такого нет";
}
mysqli_close($connection);
?>