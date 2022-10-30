<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController
{
    public function polity()
    {
        $file = public_path(). '\assets\Privacy politic.pdf';
        $headers = ['Content-Type' => 'application/pdf'];
        return response()->file($file, $headers);
    }
}
