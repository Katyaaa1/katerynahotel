// Список готелів
const hotelsData = [
  {
    city: "lviv",
    name: "Готель 'Велика гора'",
    location: "Львів",
    description: "Розташований у серці Львова. Безкоштовний Wi-Fi, ресторан, парковка.",
    price: "1200 грн/доба",
    rating: "⭐ ⭐ ⭐ ⭐",
    image: "фото/Львів1.jpg"
  },
  {
    city: "lviv",
    name: "Готель 'Львівська казка'",
    location: "Львів",
    description: "Готель із видом на площу Ринок. Усі зручності.",
    price: "1800 грн/доба",
    rating: "⭐ ⭐ ⭐ ⭐ ⭐",
    image: "фото/Львів2.jpg"
  },
  {
    city: "lviv",
    name: "Готель 'Зелений парк'",
    location: "Львів",
    description: "Затишний готель біля лісопарку. Комфортні номери.",
    price: "1000 грн/доба",
    rating: "⭐ ⭐ ⭐",
    image: "фото/Львів3.jpg"
  },
  {
    city: "kyiv",
    name: "Готель 'Три річки'",
    location: "Київ",
    description: "Готель біля річки Дніпро. Сучасний дизайн і комфорт.",
    price: "2200 грн/доба",
    rating: "⭐ ⭐ ⭐ ⭐ ⭐",
    image: "фото/Київ2.jpg"
  },
  {
    city: "odessa",
    name: "Готель 'Сонячний берег'",
    location: "Одеса",
    description: "Пляжний готель з видом на море та басейн.",
    price: "2500 грн/доба",
    rating: "⭐ ⭐ ⭐ ⭐ ⭐",
    image: "фото/Одеса2.jpg"
  },
  {
    city: "odessa",
    name: "Готель 'Білий лебідь'",
    location: "Одеса",
    description: "Розташований на набережній з рестораном на даху.",
    price: "3000 грн/доба",
    rating: "⭐ ⭐ ⭐ ⭐ ⭐",
    image: "фото/Одеса3.jpg"
  }
];
// Завантаження сторінки
document.addEventListener("DOMContentLoaded", function () {
  const citySelect = document.getElementById("city");
  const hotelsContainer = document.getElementById("hotels");

  if (!citySelect || !hotelsContainer) {
    console.error("Не знайдено елементи DOM: #city або #hotels");
    return;
  }

  // Функція для фільтрації готелів за містом
  function filterHotels() {
    const city = citySelect.value;
    hotelsContainer.innerHTML = ""; // Очищуємо попередні готелі

    // Фільтруємо готелі
    const filteredHotels = city === "all" ? hotelsData : hotelsData.filter(hotel => hotel.city === city);

    // Генеруємо HTML для кожного готелю
    filteredHotels.forEach(hotel => {
      const hotelCard = `
        <div class="hotel-card">
          <img src="${hotel.image}" alt="Фото готелю">
          <div class="hotel-details">
            <h3>${hotel.name}</h3>
            <p class="location">${hotel.location}</p>
            <p>${hotel.description}</p>
            <div class="rating">${hotel.rating}</div>
          </div>
          <div class="hotel-price">
            <span>${hotel.price}</span>
            <form action="hotel_booking.php" method="POST">
              <input type="hidden" name="hotelName" value="${hotel.name}">
              <button type="submit" class="btn-primary">Забронювати</button>
            </form>
          </div>
        </div>
      `;
      hotelsContainer.innerHTML += hotelCard;
    });
  }

  // Слухач для вибору міста
  citySelect.addEventListener("change", filterHotels);

  // Завантаження всіх готелів при старті сторінки
  filterHotels();
});
