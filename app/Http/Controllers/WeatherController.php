<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function weather(Request $request)
    {
        $city = $request->input('city','London');;
        $apiKey = "e6816244e23ca00aeb158edc9e49dd05";
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";

        $response = Http::get($url);

        $weatherData = $response->json();

        return view('Weather', ['weatherData' => $weatherData]);
    }
}
