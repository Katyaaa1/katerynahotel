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

// Отримання всіх номерів
$query = "SELECT * FROM rooms";
$result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

echo "<h2>Список номерів</h2>";
echo "<table><tr><th>ID</th><th>Назва</th><th>Тип</th><th>Ціна</th><th>Статус</th><th>Дії</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['type']}</td>
            <td>{$row['price']} грн</td>
            <td>{$row['status']}</td>
            <td>
                <a href='samrob_edit.php?id={$row['id']}'>Редагувати</a> | 
                <a href='samrob_delete.php?id={$row['id']}'>Видалити</a>
            </td>
          </tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>

<h2>Додати новий номер</h2>
<form method="POST" action="samrob_add.php">
    <p>Назва номера: <input type="text" name="name"></p>
    <p>Тип номера: <input type="text" name="type"></p>
    <p>Ціна за добу: <input type="text" name="price"></p>
    <p>Статус: <input type="text" name="status"></p>
    <input type="submit" value="Додати">
</form>

</body>
</html>