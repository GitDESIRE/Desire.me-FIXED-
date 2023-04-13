<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        return view('pages/file-manager');
    }
}
