8<?php
require_once 'samrob_connection.php';

if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['status'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $type = mysqli_real_escape_string($link, $_POST['type']);
    $price = mysqli_real_escape_string($link, $_POST['price']);
    $status = mysqli_real_escape_string($link, $_POST['status']);

    $query = "INSERT INTO rooms (name, type, price, status) VALUES ('$name', '$type', '$price', '$status')";
    $result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

    mysqli_close($link);
    header('Location: samrob_connection1.php');
}
?>
