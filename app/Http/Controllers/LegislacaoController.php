<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegislacaoController extends Controller
{
    public function index()
    {
        return view('publico.legislacao');
    }
}
