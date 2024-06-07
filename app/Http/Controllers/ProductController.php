<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create(){
        return view('product.create');
    }

    function show(){
        return view('product.show');
    }
}
