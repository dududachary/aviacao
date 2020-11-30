<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;

use Request;

use Illuminate\Support\Facades\DB;

use App\Link;

class LinksUteisController extends Controller
{
    public function index()
    {
        $listar_links = Link::all()->sortByDesc("id");
        
        return view('publico.links.linksuteis')
            ->with('listar_links', $listar_links);
    }
}
