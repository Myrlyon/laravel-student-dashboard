<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            'title' => 'Kelas',
            'kelas' => Kelas::all(),
        ]);
    }

    public function show($kelas)
    {
        return view('kelas.detail', [
            'title' => 'detail-kelas',
            'kelas' => Kelas::find($kelas),
        ]);
    }

    public function create()
    {
        return view('kelas.create', [
            "title" => "create-kelas",
            "kelas" => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        Kelas::create($request->all());

        return redirect('/kelas/all')->with('success', 'Data kelas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);

        return view('kelas.edit', [
            'kelas' => $kelas,
            // 'kelas' => Kelas::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_kelas' => 'required',
        ]);
        $kelas = Kelas::find($id);
        $kelas->update($validateData);

        return redirect('/kelas/all')->with('success', 'Data kelas berhasil diperbarui');
    }

    public function remove($id)
    {
        $kelas = Kelas::find($id);
        if (!$kelas) {
            return redirect('/kelas/all')->with('error', 'Data not found');
        }

        $kelas->delete();
        return redirect('/kelas/all')->with('success', 'Data berhasil dihapus');
    }
}
