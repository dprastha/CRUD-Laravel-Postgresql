<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_pegawai', 'nama', 'jumlah_surat_masuk', 'jumlah_surat_keluar'
    ];

    public function SuratMasuk()
    {
        return $this->hasMany(Surat_masuk::class, 'id_pegawai');
    }

    public function SuratKeluar()
    {
        return $this->hasMany(Surat_keluar::class, 'id_pegawai');
    }
}
