<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
     public function hello()
    {
        return view('hello');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
