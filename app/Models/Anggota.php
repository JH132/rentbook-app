<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $timestamps = false;

    protected $fillable = ['Nama', 'Alamat', 'Email', 'Nomor_Telepon', 'Tanggal_Bergabung'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

}
