<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Imovel;

class PropertyCotroller extends Controller
{
    public function index() {
        $imoveis= Imovel::all();

        return view('property.index', compact('imoveis'));
    }

    public function create() {
        return view('property.create');
    }

    public function show(Request $request, $id){
        $imovel = Imovel::find($id);
    }

    public function edit(Request $request, $id){
        $imovel = Imovel::find($id);

        return view('property.create', compact('imovel'));
    }

    public function store(Request $request) {
        $imovel = new Imovel;

        $imovel->name = $request->input('name');
        $imovel->price = $request->input('price');

        $imovel->save();

        return redirect()->action('PropertyCotroller@index');
    }

    public function update(Request $request, $id) {

        $imovel = Imovel::find($id);

        $imovel->name = $request->input('name');
        $imovel->price = $request->input('price');

        $imovel->save();
        return redirect()->action('PropertyCotroller@index');

    }

    public function destroy($id) {
        Imovel::find($id)->delete();
        return redirect()->action('PropertyCotroller@index');
    }
}
