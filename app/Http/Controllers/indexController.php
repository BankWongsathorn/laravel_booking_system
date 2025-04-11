<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index()
    {
        $blogs = [
            [
                'title' => 'Blog 1',
                'content' => 'This is the content of blog 1.',
                'author' => 'Author 1',
                'date' => '2023-10-01'
            ],
            [
                'title' => 'Blog 2',
                'content' => 'This is the content of blog 2.',
                'author' => 'Author 2',
                'date' => '2023-10-02'
            ],
            [
                'title' => 'Blog 3',
                'content' => 'This is the content of blog 3.',
                'author' => 'Author 3',
                'date' => '2023-10-03'
            ]
        ];
        return view('booking_system/index', ['blogs' => $blogs]);
    }
    function about()
    {

    }
}
