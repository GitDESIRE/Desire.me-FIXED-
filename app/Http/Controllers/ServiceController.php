<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view('service.index');
    }
    public function star()
    {
        return view('service.star');
    }
    public function arrow()
    {
        return view('service.arrow');
    }
    public function web()
    {
        return view('service.web');
    }
    public function seo()
    {
        return view('service.seo');
    }
    public function rate()
    {
        return view('service.rate');
    }
}
