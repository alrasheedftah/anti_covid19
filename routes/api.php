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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('state','Api\state\StateController');
Route::resource('state.cities','Api\state\StateCityController');

Route::resource('cities','Api\city\CityController');
Route::resource('cities.locals','Api\city\CityLocalController',['only'=>['index']]);
Route::resource('cities.state','Api\city\CityStateController',['only'=>['index']]);


Route::resource('locals','Api\local\LocalController');
Route::resource('locals.person','Api\local\LocalPersonController',['only'=>['index']]);



Route::resource('person','Api\person\PersonController');
Route::resource('person.saw','Api\person\PersonPersonController',['only'=>['index','store']]);
Route::resource('person.group','Api\person\PersonGroupController',['only'=>['index','store']]);
Route::resource('person.volunteer','Api\person\PersonVolunteerController',['only'=>['index','store']]);
Route::resource('person.notifications','Api\person\PersonNotificationController',['only'=>['index','store']]);


Route::resource('volunteers','Api\volunteer\VolunteerController',['only'=>['index']]);
Route::resource('notifications','Api\notification\NotificationController',['only'=>['index']]);


