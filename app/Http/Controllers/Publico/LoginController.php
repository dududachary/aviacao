<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('publico.login');
    }

    public function login(Request $request)
    {
        
        $dados_login = [
            'id_pessoa' => '1',
            'username' => $request->usuario,
            'password' => $request->senha
        ];

        if (Auth::attempt($dados_login)) {
            
            return redirect()->route('admin.meusdados');

        } else {

            return 'Desconectado';

        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('inicial');
    }
}
