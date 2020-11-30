<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

use App\Link;

class LinksUteisController extends Controller
{
    public function index()
    {

        $listar_links = Link::all()->sortByDesc("id");

        return view('admin.linksuteis.index')
            ->with('listar_links', $listar_links);
    }


    public function create()
    {
        return view('admin.linksuteis.create');
    }


    public function store(Request $request)
    {
        $titulo = Request::input('titulo');
        $url = Request::input('url');
        $descricao = Request::input('descricao');
        $status = Request::input('status');

        $validator = Validator::make(
            [
                'titulo'    => $titulo,
                'url'       => $url,
                'descricao' => $descricao,
                'status'    => $status
            ],
            [
                'titulo'    => 'required|min:3',
                'url'       => 'required|min:3',
                'descricao' => 'nullable',
                'status'    => 'required'
            ],
            [
                'required' => 'O campo ":attribute" é obrigatório.',
                'min'      => 'O campo ":attribute" deve ter pelo menos 3 dígitos.'
            ]
        );

        if ($validator->fails()) {

            return redirect()->action('Admin\LinksUteisController@create')
                ->withErrors($validator)->withInput();

        }

        $link = new Link();
        $link->titulo = $titulo;
        $link->url = $url;
        $link->descricao = $descricao;
        $link->status = $status;
        $link->save();

        return redirect()->action('Admin\LinksUteisController@index')
            ->withInput();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $lista_link = Link::find($id);

        if (empty($lista_link)) {
            
            return redirect()->action('Admin\LinksUteisController@index');

        } else {

            return view('admin.linksuteis.edit')
                ->with('lista_link', $lista_link);

        }    
    }


    public function update(Request $request, $id)
    {
        $titulo = Request::input('titulo');
        $url = Request::input('url');
        $descricao = Request::input('descricao');
        $status = Request::input('status');

        $validator = Validator::make(
            [
                'titulo'    => $titulo,
                'url'       => $url,
                'descricao' => $descricao,
                'status'    => $status
            ],
            [
                'titulo'    => 'required|min:3',
                'url'       => 'required|min:3',
                'descricao' => 'nullable',
                'status'    => 'required'
            ],
            [
                'required' => 'O campo ":attribute" é obrigatório.',
                'min'      => 'O campo ":attribute" deve ter pelo menos 3 dígitos.'
            ]
        );   

        if ($validator->fails()) {
            
            return redirect()->action('Admin\LinksUteisController@edit', $id)
                ->withErrors($validator)->withInput();

        }

        $link = Link::find($id);
        
        print_r($link);
        
        $link->titulo = $titulo;
        $link->url = $url;
        $link->descricao = $descricao;
        $link->status = $status;
        $link->save();

        return redirect()->action('Admin\LinksUteisController@index')
            ->withInput();
    }


    public function destroy($id)
    {
        Link::find($id)->delete();

        return redirect()->action('Admin\LinksUteisController@index');
    }
}
