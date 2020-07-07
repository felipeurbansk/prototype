<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::insert('insert into imovels (name, price) values (?, ?, ?)', [$request->input('name'), $request->input('price')]);

        return redirect()->action('PropertyCotroller@index');
    }
}
