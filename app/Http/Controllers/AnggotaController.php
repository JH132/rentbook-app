<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'tanggal_bergabung' => 'required|date',
        ]);

        Anggota::create($validatedData);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }
}

