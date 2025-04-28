<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class mainController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = $user->name;
        } else {
            return redirect()->route('login');
        }

        $test = DB::connection('laravel_info')->table('rooms')->get();
        return view('booking_system.main')->with([
            'test' => $test,
        ]);
    }

}
