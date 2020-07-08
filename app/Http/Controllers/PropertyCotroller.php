<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Imovel;

class PropertyCotroller extends Controller
{
    public function index() {
        $properties = DB::select('select * from imovels');

        return view('property.index', compact('properties'));
    }

    public function create() {
        return view('property.create');
    }

    public function store(Request $request) {
        $imovel = new Imovel;

        $imovel->name = $request->input('name');
        $imovel->price = $request->input('price');

        $imovel->save();

        return redirect()->action('PropertyCotroller@index');
    }
}
