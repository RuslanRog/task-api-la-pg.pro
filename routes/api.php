<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiV1Controller;
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

Route::prefix('v1')->group(function() {

    // Роут работает с Post.
    // Принимает Raw Json пример
//    {
//        "form_long_url":"https://www.google.com/search?q=json&client=firefox-b-d&ei=PwS1YLCmNoeEwPAPypKN-A0&oq=json&gs_lcp=Cgdnd3Mtd2l6EAMyBwgAELEDEEMyAggAMggIABCxAxCDATICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BwgAEEcQsAM6BwgAELEDEA06BAgAEA1Q1wtYkzdg7DloAnADeACAAZ8EiAGSCJIBBzAuNC41LTGYAQCgAQGqAQdnd3Mtd2l6yAEIwAEB&sclient=gws-wiz&ved=0ahUKEwjwwd_AofTwAhUHAhAIHUpJA98Q4dUDCA0&uact=5"
//     }
// И возвращает короткий Url в Json.
    Route::post('save-url', [ApiV1Controller::class, 'saveUrl']);

});

