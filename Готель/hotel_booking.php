<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Готель "Велика гора" | Львів</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0056b3;
            padding: 10px 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        nav .buttons {
            display: flex;
            gap: 10px;
        }

        nav .buttons a {
            background: white;
            color: #0056b3;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .intro {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        .intro img {
            max-width: 300px;
            border-radius: 10px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            width: 60%;
        }

        .gallery img {
            width: 100%;
            border-radius: 10px;
        }

        .map-container {
            width: 35%;
        }

        .map-description {
            margin-bottom: 20px;
        }

        .map {
            width: 100%;
            height: 200px;
            border: 1px solid #ddd;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }

        .service-item {
            width: calc(50% - 10px);
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .service-item img {
            width: 40px;
            margin-right: 10px;
        }

        .booking-form {
            margin: 20px 0;
            padding: 15px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .booking-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .booking-form input,
        .booking-form select,
        .booking-form button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .reviews {
            margin-top: 30px;
        }

        .reviews div {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            background: #f9f9f9;
        }

        .leave-review {
            margin-top: 20px;
        }

        footer {
            background: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .intro {
                flex-direction: column;
            }

            .gallery {
                width: 100%;
            }

            .map-container {
                width: 100%;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Готелі України</h1>
</header>
<nav>
    <div>
        <a href="index.html">Повернутися на головну</a>
        <a href="about.html">Про нас</a>
        <a href="hotels.html">Готелі</a>
        <a href="services.html">Послуги</a>
    </div>
    <div class="buttons">
        <a href="open.html">Увійти</a>
        <a href="regist.html">Зареєструватися</a>
    </div>
</nav>

<div class="container">
    <h2>Готель "Велика гора" — Львів</h2>
    <div class="intro">
        <div class="gallery">
            <img src="фото/hotel2.jpg" alt="Фото 1">
            <img src="фото/hotel1.jpg" alt="Фото 2">
            <img src="фото/hotel3.jpg" alt="Фото 3">
            <img src="фото/hotel4.jpg" alt="Фото 4">
        </div>
        <div class="map-container">
            <div class="map-description">
                <h3>Опис готелю:</h3>
                <p>Готель "Велика гора" пропонує комфортне проживання в самому серці Львова. Тут ви знайдете зручні номери, смачну кухню та широкий спектр послуг, включаючи СПА, безкоштовний Wi-Fi та трансфер.</p>
            </div>
            <div class="map">
                <iframe src="https://maps.google.com/maps?q=lviv&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="200" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="service-item">
            <img src="%D1%84%D0%BE%D1%82%D0%BE/transfer_icon.jpg" alt="Трансфер">
            <p>Трансфер</p>
        </div>
        <div class="service-item">
            <img src="фото/wifi_icon.png" alt="Wi-Fi">
            <p>Безкоштовний Wi-Fi</p>
        </div>
        <div class="service-item">
            <img src="фото/spa_icon.png" alt="СПА">
            <p>СПА-послуги</p>
        </div>
        <div class="service-item">
            <img src="фото/restaurant_icon.png" alt="Ресторан">
            <p>Ресторан</p>
        </div>
    </div>
    
    <?php
require_once 'samrob_connection.php';

echo "<h2>Список номерів</h2>";
$query = "SELECT * FROM rooms";
$result = mysqli_query($link, $query) or die("Помилка: " . mysqli_error($link));

echo "<table style='border:2px solid #38ccff; width: 100%; text-align: left; margin-top: 20px;'>";
echo "<tr><th style='background-color: #90cebc; padding: 8px;'>ID</th>
<th style='background-color: #90cebc; padding: 8px;'>Назва</th>
<th style='background-color: #90cebc; padding: 8px;'>Тип</th>
<th style='background-color: #90cebc; padding: 8px;'>Ціна</th>
<th style='background-color: #90cebc; padding: 8px;'>Статус</th>
<th style='background-color: #90cebc; padding: 8px;'>Дії</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td style='padding: 8px;'>{$row['id']}</td>
            <td style='padding: 8px;'>{$row['name']}</td>
            <td style='padding: 8px;'>{$row['type']}</td>
            <td style='padding: 8px;'>{$row['price']} грн</td>
            <td style='padding: 8px;'>{$row['status']}</td>
            <td style='padding: 8px;'>
                <a href='samrob_edit.php?id={$row['id']}'>Редагувати</a> | 
                <a href='samrob_delete.php?id={$row['id']}'>Видалити</a>
            </td>
          </tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>

<h2 style="margin-top: 30px;">Додати новий номер</h2>
<form method="POST" action="samrob_add.php" style="margin-bottom: 30px;">
    <p>Назва номера: <input type="text" name="name"></p>
    <p>Тип номера: <input type="text" name="type"></p>
    <p>Ціна за добу: <input type="text" name="price"></p>
    <p>Статус: <input type="text" name="status"></p>
    <input type="submit" value="Додати">
</form>


    <div class="booking-form">
        <form>
            <label for="checkin">Дата заїзду</label>
            <input type="date" id="checkin" required>

            <label for="checkout">Дата виїзду</label>
            <input type="date" id="checkout" required>

            <label for="guests">Кількість гостей</label>
            <select id="guests">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4+</option>
            </select>

            <!-- Додаємо вибір типу апартаментів -->
            <label for="room_type">Тип апартаментів</label>
            <select id="room_type" required>
                <option value="econom">Економ</option>
                <option value="lux">Люкс</option>
                <option value="cottage">Котедж</option>
                <option value="vip">VIP</option>
            </select>

            <button type="button" onclick="window.location.href='booking.html'">Забронювати</button>
        </form>
    </div>

    <div class="reviews">
        <h3>Відгуки:</h3>
        <div>
            <strong>Sylvia Taylor</strong>
            <p>Чудове обслуговування!</p>
        </div>
        <div>
            <strong>Anna Gutierrez</strong>
            <p>Дуже задоволені сервісом!</p>
        </div>
    </div>
    <div class="leave-review">
        <button onclick="openReviewForm()">Залишити відгук</button>
    </div>
</div>

<div id="review-form" style="display:none; padding: 20px; background: white; border: 1px solid #ddd; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -50%); z-index: 10;">
    <h3>Залишити відгук</h3>
    <form>
        <label for="rating">Оберіть кількість зірок:</label>
        <select id="rating">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>

        <label for="comment">Ваш відгук:</label>
        <textarea id="comment" rows="5" style="width: 100%;"></textarea>
        <button type="submit">Залишити відгук</button>
    </form>
</div>

<script>
    function openReviewForm() {
        document.getElementById('review-form').style.display = 'block';
    }
</script>

<footer>
    <p>Follow us:</p>
    <a href="#">Facebook</a>
    <a href="#">Instagram</a>
    <a href="#">Twitter</a>
</footer>
</body>
</html>
