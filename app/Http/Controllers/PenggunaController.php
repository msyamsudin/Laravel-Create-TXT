<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengguna;
use Storage;

class PenggunaController extends Controller
{
    public function index(){
        $data = Pengguna::all();
        return view('pengguna.view_pengguna')->with('data', $data);
    }

    public function create(){
        return view('pengguna.create_pengguna');
    }

    public function store(Request $request){
        $waktu = \Carbon\Carbon::now();
        $sekarang = $waktu->format('dmYHis');

        $input = $request->all();
        $name = $request->input('inname');

        $inputnew = $name.','.$input['inemail'].','.$input['intgl_lahir'].','.$input['intelepon'].','.$input['ingender'].','.$input['inalamat'];
    
        Storage::put($name.'-'.$sekarang.'.txt',$inputnew); // buat txt file

        $inputarr = explode(',',$inputnew);

        $inarr['innameid'] = $inputarr[0].'-'.$sekarang; // nama-dmYHis
        $inarr['innameonly'] = $inputarr[0];             // nama (saja)
        $inarr['inemail'] = $inputarr[1];
        $inarr['intgl_lahir'] = $inputarr[2];
        $inarr['intelepon'] = $inputarr[3];
        $inarr['ingender'] = $inputarr[4];
        $inarr['inalamat'] = $inputarr[5];

    
        Pengguna::create($inarr); // simpan ke database
        return view('pengguna.thanks');
        // var_dump($inarr);
    }

    public function show($innameid){
        $data = Pengguna::where('innameid','=',$innameid)->get();
        return view('pengguna.detail_pengguna')->with('data', $data);
        // print_r($data[0]['innameonly']);
    }

    public function edit($innameid){
        $data = Pengguna::where('innameid','=',$innameid)->get();
        return view('pengguna.edit_pengguna')->with('data', $data);
    }

    public function update(Request $request, $innameid){
        $uparr['innameonly'] = $request->input('inname');
        $uparr['inemail'] = $request->input('inemail');
        $uparr['intgl_lahir'] = $request->input('intgl_lahir');
        $uparr['intelepon'] = $request->input('intelepon');
        $uparr['ingender'] = $request->input('ingender');
        $uparr['inalamat'] = $request->input('inalamat');
        
        Pengguna::where('innameid','=',$innameid)->update($uparr);
        // var_dump($namearr);
        return redirect('pengguna');
    }

    public function destroy($id){
        $data = Pengguna::where('id','=',$id)->get(); // ambil data berdasarkan $id
        Storage::delete($data[0]['innameid'].'.txt'); // hapus file txt berdasarkan $id

        Pengguna::find($id)->delete();// hapus data pada database
        return redirect('pengguna');
    }
}
