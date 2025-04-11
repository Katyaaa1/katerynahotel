<?php
$host = 'localhost';
$database = 'samrob_dikh';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Помилка: " . mysqli_error($link));
?>
