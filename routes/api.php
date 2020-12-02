<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;

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
//MenuTypes
Route::model('menu_types', 'MenuType');
Route::resource('menu_types', MenuTypeController::class)->except(['update', 'edit', 'create']);
//Restaurant
Route::model('restaurants', 'Restaurant');
Route::resource('restaurants', RestaurantController::class)->except(['edit', 'create']);
Route::get('restaurants/{restaurant}/menus', [RestaurantController::class,  'menus'] );
//Menu
Route::model('menus', 'Menu');
Route::resource('menus', MenuController::class)->except(['edit', 'create', 'update']);
Route::get('menus/{menu}/products', [MenuController::class, 'products']);
//Product
Route::model('products', 'Product');
Route::resource('products', ProductController::class)->except([ 'edit', 'create']);