<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengguna;
use Storage;

class PenggunaController extends Controller
{
    public function index(){
        return view('pengguna.view_pengguna');
    }

    public function create(){
        return view('pengguna.create_pengguna');
    }

    public function store(Request $request){
        $waktu = \Carbon\Carbon::now();
        $sekarang = $waktu->format('dmYHis');

        $input = $request->all();
        $inputnew = $input['inname'].','.$input['inemail'].','.$input['intgl_lahir'].','.$input['intelepon'].','.$input['ingender'].','.$input['inalamat'];
        
        $name = $request->input('inname');
    
        Storage::put('/app/'.$name.'-'.$sekarang.'.txt',$inputnew);

        // Pengguna::create($request->all());
        return "tersimpan";
    }
}
