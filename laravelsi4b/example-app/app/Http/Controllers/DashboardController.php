<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswaprodi = DB::select("SELECT prodi.nama, COUNT(*) as jumlah FROM mahasiswas
        JOIN prodi ON mahasiswas.prodi_id = prodi.id
        GROUP BY prodi.nama;");
        return view('dashboard')->with('mahasiswaprodi',$mahasiswaprodi);
    }
}
