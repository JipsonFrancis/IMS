<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\WarehouseController;
use App\Models\warehouse;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $warehouse = warehouse::all();
    return view('Warehouse.management', ['warehouses' => $warehouse]);
});

Route::get('/{name}/commodities/{id}', function ($name, $id){

    $warehouse = warehouse::findOrFail($id);
    $commodities = $warehouse->commodities;
    return view('Commodity.Commodities', ['commodities' => $commodities]);
});


Route::resources([
    'warehouses' => WarehouseController::class,
    'commodities' => CommodityController::class,
    'categories' => CategoryController::class
]);
