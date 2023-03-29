<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UomController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ChargeToController;

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

Route::get('/api/uom', [UomController::class, 'index']);
Route::get('api/currency', [CurrencyController::class, 'index']);
Route::get('api/charge-to', [ChargeToController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
