<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        //$kelas = Kelas::find(1);
        $kelas = Kelas::paginate(5);
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'tahun_ajaran' => 'required'
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas created successfully.');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'tahun_ajaran' => 'required'
        ]);

        $kelas = Kelas::find($id);
        $kelas->update($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas updated successfully');
    }

    public function destroy($id)
    {
        Kelas::find($id)->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas deleted successfully');
    }
}
