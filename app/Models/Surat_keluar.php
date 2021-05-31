<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat_keluar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_pegawai', 'perihal', 'penerima', 'tanggal'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
