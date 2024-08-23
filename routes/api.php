<?php

use App\App\Orders\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
App::bind('App\Domain\Order\Interfaces\Repositories\OrderProviderInterface', 'App\Infra\Orders\Repositories\OrderRepository');
Route::get('/orders', [OrderController::class, 'getAllOrders']);