<?php
require_once 'samrob_connection.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM rooms WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));
    
    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $type = $row['type'];
        $price = $row['price'];
        $status = $row['status'];
    }
}

if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['status'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $type = mysqli_real_escape_string($link, $_POST['type']);
    $price = mysqli_real_escape_string($link, $_POST['price']);
    $status = mysqli_real_escape_string($link, $_POST['status']);

    $query = "UPDATE rooms SET name='$name', type='$type', price='$price', status='$status' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

    mysqli_close($link);
    header('Location: samrob_connection1.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Редагувати номер</h2>
<form method="POST">
    <p>Назва номера: <input type="text" name="name" value="<?= $name ?>"></p>
    <p>Тип номера: <input type="text" name="type" value="<?= $type ?>"></p>
    <p>Ціна за добу: <input type="text" name="price" value="<?= $price ?>"></p>
    <p>Статус: <input type="text" name="status" value="<?= $status ?>"></p>
    <input type="submit" value="Оновити">
</form>
</body>
</html>
