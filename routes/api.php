<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/weather_data', function () {
    //call api here
    if(!empty($_GET['city'])){
        $city = addslashes($_GET['city']);
        switch ($city){
            case "tokyo":
                $city_id = "1850147";
                break;
            case "yokohama":
                $city_id = "2127436";
                break;
            case "kyoto":
                $city_id = "1857910";
                break;
            case "osaka":
                $city_id = "1853908";
                break;
            case "sapporo":
                $city_id = "2128295";
                break;
            case 'nagoya':
                $city_id = "1856057";
                break;
            default:
                return json_encode("invalid city");
        }
        header('Content-Type: application/json');
        //get environment variable
        $key = env('WEATHER_KEY');
        $url = "https://api.openweathermap.org/data/2.5/forecast?id=".$city_id."&appid=".$key;
        //get current date and time 

        $current_date = date("Y-m-d");

        $response = Http::get($url);

        $decoded = json_decode($response->body(), true);

        //compare current date

        $length = count($decoded['list']);
        $today_forecast = [];
        $future_forecast = [];
        for ($i = 0; $i < $length; $i++) {
            //compate date
            array_push($today_forecast,$decoded['list'][$i]);
            $forecast_dt = date("Y-m-d",strtotime($decoded['list'][$i]['dt_txt']));
            
        }

        
        return json_encode([$today_forecast]);



    }else{
        return json_encode("city is empty");
    }
});
