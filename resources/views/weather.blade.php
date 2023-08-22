<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    <!-- Форма для ввода названия города -->
    <form method="POST" action="/" class="form-city form-check-inline">
        @csrf
        <div class="mb-3">
            <label for="cityInput" class="form-label">Enter City Name:</label>
            <input type="text" class="form-control" name="city" id="cityInput" placeholder="City Name">
        </div>
        <button type="submit" class="btn btn-primary">Get Weather</button>
    </form>
    <div class="text-center mb-4">
        <h1 class="display-4">Weather in {{ $weatherData['name'] }}</h1>
    </div>
    <!-- Иконка погоды -->
    <div class="text-center">
        <img src="https://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="Weather Icon">
    </div>

    <div class="text-center mt-4">
        <h2 class="display-2">{{ $weatherData['main']['temp'] }}°C</h2>
    </div>

    <!-- Переключение между градусами Цельсия и Фаренгейта -->
    <div class="unit-switch custom-control custom-radio custom-control-inline">
        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
        <label class="btn btn-outline-primary btn-1" for="option1">℉</label>

        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-outline-primary btn-2" for="option2">°C</label>
    </div>


    <!-- Информация о погоде -->
    <div class="row mt-5">
        <div class="col-md-3 text-center">
            <p class="lead">Wind</p>
            <p>{{ $weatherData['wind']['speed'] }} м/c</p>
        </div>
        <div class="col-md-3 text-center">
            <p class="lead">Pressure</p>
            <p>{{ $weatherData['main']['pressure'] }} мм. рт. ст.</p>
        </div>
        <div class="col-md-3 text-center">
            <p class="lead">Humidity</p>
            <p>{{ $weatherData['main']['humidity'] }}%</p>
        </div>
        <div class="col-md-3 text-center">
            <p class="lead">Feels like</p>
            <p>{{ $weatherData['main']['feels_like'] }}°C</p>
        </div>
    </div>
</div>
<script>
    const temperatureInCelsius = {{ $weatherData['main']['temp'] }};
</script>
</body>
</html>
