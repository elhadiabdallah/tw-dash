<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products.all');
    }

    public function active()
    {
        return view('pages.products.active');
    }

    public function not_active()
    {
        return view('pages.products.not_active');
    }
}
