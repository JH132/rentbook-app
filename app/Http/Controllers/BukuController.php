<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
{
    return view('buku.index')->with('bukus', Buku::all());
}
  public function create()
{
    return view('Buku.create');
}


public function detail($id)
{
    $buku = Buku::findOrFail($id);
    return view('buku.detail', compact('buku'));}

public function store(Request $request)
{
    $this->validate($request, [
        'id_buku' => 'required',
        'judul' => 'required',
        'pengarang' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'kategori' => 'required',
        'deskripsi' => 'required',
        'jumlah_salinan' => 'required',
        'isbn' => 'required',
    ]);

    Buku::create($request->all());
    return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
}
public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}
