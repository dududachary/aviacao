<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

class PessoasController extends Controller
{
    public function index()
    {
        return view('admin.pessoas.index');
    }

    public function type()
    {
        return view('admin.pessoas.type');
    }


    public function create($type)
    {

        if ($type === "F") {

            return view('admin.pessoas.fisica.create');

        }

        if ($type === "J") {

            return view('admin.pessoas.juridica.create');

        }

        
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
