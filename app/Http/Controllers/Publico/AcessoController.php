<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

use App\Pessoa;

class AcessoController extends Controller
{
    public function exibeBuscaPessoa()
    {
        return view('publico.acesso.buscarpessoa');
    }

    public function verificarEmailCadastrado()
    {
        //
    }
}
