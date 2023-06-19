<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index() {
        return view('anggota.index')->with('anggotas', Anggota::all());
    }

    public function create() {
        return view('anggota.create');
    }

    public function store(Request $request) {
    $this->validate($request, [
        'id_anggota' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'nomor_telepon' => 'required',
        'tanggal_bergabung' => 'required',
    ]);

    Anggota::create($request->all());
    return redirect()->route('anggota.create')->with('success', 'Anggota berhasil ditambahkan.');
    }

}
