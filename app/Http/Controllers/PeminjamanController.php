<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    public function index(){
        return view('peminjaman.index')->with('peminjamans', Peminjaman::all());
    }

    public function create()
    {
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('peminjaman.create', compact('anggotas', 'bukus'));
    }

    public function detail($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    $anggota = Anggota::findOrFail($peminjaman->id_anggota);
    $buku = Buku::findOrFail($peminjaman->id_buku);
    return view('peminjaman.detail', compact('peminjaman', 'anggota', 'buku'));
}

public function delete($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus');
    }

public function store(Request $request)
{
    $this->validate($request, [
        'id_anggota' => 'required',
        'id_buku' => 'required',
        'tanggal_peminjaman' => 'required',
        'tanggal_pengembalian' => 'required',
    ]);

    Peminjaman::create($request->all());

    return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil disimpan.');
}

public function updateStatus(Request $request)
    {
        $peminjaman = Peminjaman::findOrFail($request->id);
        $peminjaman->update(['status' => $request->status]);

        return response()->json(['message' => 'Status updated successfully.']);
    }

}
