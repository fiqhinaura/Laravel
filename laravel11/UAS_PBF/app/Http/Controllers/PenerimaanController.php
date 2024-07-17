<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = Penerimaan::paginate(7); // Ambil semua data siswa
        return view('penerimaan.index', compact('penerimaan'));
    }

    public function pindex()
    {
        $penerimaan = Penerimaan::paginate(7); // Ambil semua data siswa
        return view('penerimaan.kode', compact('penerimaan'));
    }


    public function tindex()
    {
        $penerimaan = Penerimaan::wherein('kd_unit', [1, 21])->paginate(7);
        return view('penerimaan.tindex', compact('penerimaan'));
    }
}
