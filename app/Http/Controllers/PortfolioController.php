<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('pages.portfolio');
    }
    public function hike()
    {
        return view('portfolio.hike');
    }
    public function noiseland()
    {
        return view('portfolio.noiseland');
    }
    public function tocha()
    {
        return view('portfolio.tocha');
    }
    public function dolfie()
    {
        return view('portfolio.dolfie');
    }
}
