<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SejaMembroController extends Controller
{
    public function index()
    {
        return view('publico.sejamembro');
    }
}
