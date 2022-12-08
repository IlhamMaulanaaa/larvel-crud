<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Pabrik;

class ObatController extends Controller
{
    public function index(){
        $data_obat = Obat::with('pabrik')->get();
        $data_pabrik = Pabrik::with('obat')->get();
        return view('obat.all',compact('data_obat','data_pabrik'));
    }
    public function show (Obat $obat){
        return view('obat.detail',[
            "obat" => $obat
        ]);
    }
    public function create (){
        return view('obat.create',[
            "pabrik" => Pabrik::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
            'nama_obat' => 'required',
            'merek_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
            ]);

            Obat::create($validateData);
            return redirect('/obat/all')->with('Successfully','obat Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Obat $obat){
        Obat::destroy($obat->id);
        return redirect('/obat/all' )-> with('Successfully','Data berhasil dihapus !');
    }

    public function edit (Obat $obat) {
        return view('obat.edit', [
            'pabrik' => Pabrik::all(),
            'obat'=>$obat
        ]);
    }

    public function update (Request $request, Obat $obat) {
        $rules =[
            'nama_obat' => 'required',
            'merek_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
        ];

            $validateData = $request->validate($rules);
            Obat::where('id', $obat->id)->update($validateData);
            return redirect('/obat/all')->with('Successfully','Data Berhasil DiUbah !');
    }
}
