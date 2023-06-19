<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['id_buku', 'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'kategori', 'deskripsi', 'jumlah_salinan', 'isbn'];
    use HasFactory;
    private $id_buku;
    private $judul;
    private $pengarang;
    private $penerbit;
    private $tahun_terbit;
    private $kategori;
    private $deskripsi;
    private $jumlah_salinan;
    private $isbn;

}
