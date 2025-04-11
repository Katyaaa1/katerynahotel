<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table {border:2px solid #38ccff; width: 100%; text-align: left;}
        th {background-color: #90cebc; padding: 8px;}
        td {padding: 8px;}
    </style>
</head>
<body>

<?php
require_once 'samrob_connection.php';

// Отримання всіх бронювань
$query = "SELECT * FROM bookings";
$result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

echo "<h2>Список бронювань</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>ID кімнати</th>
            <th>Ім'я клієнта</th>
            <th>Дата заїзду</th>
            <th>Дата виїзду</th>
            <th>Статус</th>
            <th>Дії</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['room_id']}</td>
            <td>{$row['customer_name']}</td>
            <td>{$row['check_in']}</td>
            <td>{$row['check_out']}</td>
            <td>{$row['status']}</td>
            <td>
                <a href='samrob_edit_booking.php?id={$row['id']}'>Редагувати</a> | 
                <a href='samrob_delete_booking.php?id={$row['id']}'>Видалити</a>
            </td>
          </tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>

<h2>Додати нове бронювання</h2>
<form method="POST" action="samrob_add_booking.php">
    <p>ID кімнати: <input type="number" name="room_id" required></p>
    <p>Ім'я клієнта: <input type="text" name="customer_name" required></p>
    <p>Дата заїзду: <input type="date" name="check_in" required></p>
    <p>Дата виїзду: <input type="date" name="check_out" required></p>
    <p>Статус: 
        <select name="status">
            <option value="активне">Активне</option>
            <option value="неактивне">Неактивне</option>
        </select>
    </p>
    <input type="submit" value="Додати бронювання">
</form>

</body>
</html>
