<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        return view('home');
        // return 'Hello from api';
    }
}
