<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiV1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Второй вариант добавить URL в базу через форму (не Api:)). http://task-api-la-pg.pro/add-url
Route::get('add-url', function () {
    return view('api');
});

// Роут принимает короткий Url пример: http://task-api-la-pg.pro/53615
Route::get('/{url}', [ApiV1Controller::class, 'searchLongUrl']);
