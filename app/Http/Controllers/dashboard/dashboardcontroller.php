<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Pabrik;

class dashboardcontroller extends Controller
{
    // obat
    public function index()
    {
        return view('dashboard.obatdashboard.all', [
            "data_obat" => Obat::all()
        ]);
    }
    public function show(Obat $obat)
    {
        return view('dashboard.obatdashboard.detail', [
            "obat" => $obat
        ]);
    }
    public function create()
    {
        return view('dashboard.obatdashboard.create', [
            "pabrik" => Pabrik::all()
        ]);
    }
    // pabrik
    public function indexpabrik()
    {
        $data_obat = Obat::with('pabrik')->get();
        $data_pabrik = Pabrik::with('obat')->get();
        return view('dashboard.pabrikdashboard.all', compact('data_pabrik', 'data_obat'));
    }
    public function showpabrik(Pabrik $pabrik)
    {
        return view('dashboard.pabrikdashboard.detail', [
            "pabrik" => $pabrik
        ]);
    }
    public function createpabrik()
    {
        return view('dashboard.pabrikdashboard.create', [
            "obat" => Obat::all()
        ]);
    }
}
