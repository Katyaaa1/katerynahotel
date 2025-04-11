<?php
require_once 'samrob_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримуємо дані з форми
    $room_id = intval($_POST['room_id']);
    $customer_name = mysqli_real_escape_string($link, $_POST['customer_name']);
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $status = $_POST['status'];

    // SQL-запит для додавання бронювання
    $query = "INSERT INTO bookings (room_id, customer_name, check_in, check_out, status) 
              VALUES ('$room_id', '$customer_name', '$check_in', '$check_out', '$status')";

    if (mysqli_query($link, $query)) {
        echo "<span style='color:green;'>Бронювання додано успішно!</span>";
    } else {
        echo "<span style='color:red;'>Помилка: " . mysqli_error($link) . "</span>";
    }

    // Закриваємо з'єднання
    mysqli_close($link);

    // Перенаправлення назад до списку бронювань
    header("Location: booking.php");
    exit();
}
?>
