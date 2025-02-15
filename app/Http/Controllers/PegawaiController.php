<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function show($id)
    {
     // Ambil data pegawai berdasarkan ID
        $pegawai = Pegawai::findOrFail($id);

    // Tampilkan view detail pegawai
        return view('pegawai.show', compact('pegawai'));
    }


    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file("foto")) {
            $file = $request->file("foto");
            $filename = time() . "."  . $file->getClientOriginalExtension();
            $file->move("assets", $filename);
            $data["foto"] = $filename;
        }

        Pegawai::create($data);
        
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $data = $request->all();

        if ($request->file("foto")) {
            $file = $request->file("foto");
            $filename = time() . "."  . $file->getClientOriginalExtension();
            $file->move("assets", $filename);
            $data["foto"] = $filename;
        }

        $pegawai->update($data);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}

