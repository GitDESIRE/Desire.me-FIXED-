<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function new()
    {
        return view('pages.newProject');
    }
}
