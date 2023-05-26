<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $data = Task22::all();
        // $no = 0;
        return view('product.index');
    }
}
