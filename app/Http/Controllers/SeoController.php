<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        return view('pages.seo');
    }
}
