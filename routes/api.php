<?php

use Illuminate\Http\Request;

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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('v1')->name('api.v1.')->group(function() {
    //测试接口，查找菜名
    Route::get('findname','TestApiController@findname')->name('findname');
    Route::get('homePageContent','HomeController@homePageContent');
});
