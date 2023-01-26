<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Pabrik;

class ObatController extends Controller
{
    public function index()
    {
        return view('obat.all', [
            "data_obat" => Obat::all()
        ]);
    }
    public function show(Obat $obat)
    {
        return view('obat.detail', [
            "obat" => $obat
        ]);
    }
    public function create()
    {
        return view('obat.create', [
            "pabrik" => Pabrik::all()
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_obat' => 'required',
            'merek_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'pabrik_id' => 'required'
        ]);

        Obat::create($validateData);
        return redirect('/obat/all')->with('Successfully', 'obat Baru Berhasil Ditambahkan 1');
    }
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect('/obat/all')->with('Successfully', 'Data berhasil dihapus !');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', [
            'pabrik' => Pabrik::all(),
            'obat' => $obat
        ]);
    }

    public function update(Request $request, Obat $obat)
    {
        $rules = [
            'nama_obat' => 'required',
            'merek_obat' => 'required',
            'tanggal_kadaluarsa' => 'required',
        ];

        $validateData = $request->validate($rules);
        Obat::where('id', $obat->id)->update($validateData);
        return redirect('/obat/all')->with('Successfully', 'Data Berhasil DiUbah !');
    }
}
