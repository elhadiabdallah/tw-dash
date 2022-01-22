<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return view('pages.system.country.index');
    }

    public function create()
    {
        return view('pages.system.country.create');
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('pages.system.country.edit', ['country' => $country]);
    }
}
