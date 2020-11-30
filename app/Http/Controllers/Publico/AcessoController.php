<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\Hash;

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
        $email = Request::input('email');
        $pessoa = Pessoa::where('email', $email)->get();

        if ( count($pessoa) > 0 && $pessoa[0]->situacao === 'Liberado') {

            return redirect()->action('Publico\AcessoController@formularioCadastraUsuario', $pessoa[0]->id);
        }

        if ( count($pessoa) > 0 && $pessoa[0]->situacao === 'Bloqueado') {

            $alerta = 'O e-mail ainda não foi liberado para criação do usuário';

            return view('publico.acesso.buscarpessoa')->with('alerta', $alerta);
        }

        $alerta = 'O e-mail informado não foi encontrado em nossos registros';

        return view('publico.acesso.buscarpessoa')->with('alerta', $alerta);
    }

    public function formularioCadastraUsuario(Request $request, $id_pessoa)
    {
        $email = Pessoa::find($id_pessoa)->email;

        return view('publico.acesso.cadastrausuario')
            ->with('email', $email)
            ->with('id_pessoa', $id_pessoa);
    }


    public function storeUsuario(Request $request) {

        $id_pessoa = Request::input('id_pessoa');
        $email = Request::input('email');
        $password = Request::input('password');
        $password_confirmation = Request::input('password_confirmation');

        $validator = Validator::make(
            [
                'email'                 => $email,
                'password'              => $password,
                'password_confirmation' => $password_confirmation
            ],
            [
                'email'                 => 'required|email',
                'password'              => 'required|min:6|confirmed',
                'password_confirmation' => 'min:6'
            ],
            [
                'required'  => 'O campo :attribute é obrigatório.',
                'min'       => 'O campo :attribute deve ter no mínimo 6 dígitos!',
                'confirmed' => 'O senhas digitadas não são iguais!',
                'email'     => 'O email informado não é válido'
            ]
        );

        if ($validator->fails()) {

            return redirect()->action('Publico\AcessoController@formularioCadastraUsuario', $id_pessoa)
                ->withErrors($validator)
                ->withInput();

        }
        
        $password = Hash::make($password);      

        User::create([
            'id_pessoa'    => $id_pessoa,
            'email'        => $email,
            'password'     => $password,
            'active'       => '1'
        ]);

        return 'Tudo certo com as senhas, usuário gravado!';

    }
}
