<?php
require_once 'samrob_connection.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "DELETE FROM rooms WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

    mysqli_close($link);
    header('Location: samrob_connection1.php');
}
?>