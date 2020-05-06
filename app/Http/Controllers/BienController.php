<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienController extends Controller
{
    public function create()
    {
        return view('bien.create');
    }
}
