<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('dashboard')
            ->with('full_name', "Yuliyana Rahmawati_26");
    }
}
