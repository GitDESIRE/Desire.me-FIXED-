<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
