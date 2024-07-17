<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        //$kelas = Kelas::find(1);
        $unitkerja = UnitKerja::paginate(10);
        return view('unitkerja.index', compact('unitkerja'));
    }
}
