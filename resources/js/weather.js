document.addEventListener('DOMContentLoaded', function () {
    const celsiusRadio = document.querySelector('#option2');
    const fahrenheitRadio = document.querySelector('#option1');
    const temperatureDisplay = document.querySelector('.display-2');

    // Функция для конвертации температуры
    function convertTemperature(temperatureInCelsius, isCelsius) {
        if (isCelsius) {
            return `${temperatureInCelsius}°C`;
        } else {
            const temperatureInFahrenheit = (temperatureInCelsius * 9/5) + 32;
            return `${temperatureInFahrenheit}°F`;
        }
    }

    // Установка начальных значений
    let isCelsius = true;
    temperatureDisplay.textContent = convertTemperature(temperatureInCelsius, isCelsius);

    // Обработчики событий для радио-кнопок
    celsiusRadio.addEventListener('change', () => {
        isCelsius = true;
        temperatureDisplay.textContent = convertTemperature(temperatureInCelsius, isCelsius);
    });

    fahrenheitRadio.addEventListener('change', () => {
        isCelsius = false;
        temperatureDisplay.textContent = convertTemperature(temperatureInCelsius, isCelsius);
    });
});
