<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('booking_system/index');
// });

Route::get('/main', function () {
    return view('booking_system/main');
});


Route::get('/', [indexController::class, 'index']);
