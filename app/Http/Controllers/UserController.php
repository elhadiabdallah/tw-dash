<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users.all');
    }

    public function buyers()
    {
        return view('pages.users.buyers');
    }

    public function sellers()
    {
        return view('pages.users.sellers');
    }
}
