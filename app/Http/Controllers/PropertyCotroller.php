<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class PropertyCotroller extends Controller
{
    public function index() {
       return view('property.index');
    }

    public function create() {
        return view('property.create');
    }
}
