<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['id_buku', 'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'kategori', 'deskripsi', 'jumlah_salinan', 'isbn'];

    public function peminjamans()
{
    return $this->hasMany(Peminjaman::class, 'id_buku');
}

}
