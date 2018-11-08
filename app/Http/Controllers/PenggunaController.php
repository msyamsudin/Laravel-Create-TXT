<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengguna;

class PenggunaController extends Controller
{
    public function index(){
        return view('pengguna.view_pengguna');
    }

    public function create(){
        return view('pengguna.create_pengguna');
    }

    public function store(Request $request){
        Pengguna::create($request->all());
        return "tersimpan";
    }
}
