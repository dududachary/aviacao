<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParceirosController extends Controller
{
    public function index()
    {
        return view('publico.parceiros');
    }
}
