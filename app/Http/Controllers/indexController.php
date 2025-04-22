<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index()
    {
        $test = DB::connection('laravel_info')->table('rooms')->get();

        return view('booking_system.index')->with([
            'test' => $test,
        ]);
    }
    function about()
    {

    }
}
