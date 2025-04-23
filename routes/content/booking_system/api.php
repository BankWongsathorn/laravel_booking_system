<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/index', 'Api\booking_system\bookingApiController');

Route::apiResource('/main', 'Api\booking_system\mainApiController');
