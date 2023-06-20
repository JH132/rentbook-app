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

public function detail($id_buku)
{
    $buku = Buku::where('id_buku', $id_buku)->first();

    if (!$buku) {
        abort(404); // Tampilkan halaman 404 jika buku tidak ditemukan
    }

    return view('buku.detail', compact('buku'));
}
  public function create()
{
    return view('Buku.create');
}
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

}
