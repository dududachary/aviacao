<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AgendaEventosController extends Controller
{
    public function index()
    {
        return view('publico.eventos');
    }
}
