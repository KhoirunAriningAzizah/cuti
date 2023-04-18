<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_cuti extends Model
{
    use HasFactory;
    protected $dates =['tanggal_pengajuan','tanggal_lahir'];
    protected $primaryKey = 'id_pengajuan_cuti';
    protected $table = "pengajuan_cuti";
    protected $fillable = [
        'id_karyawan',
        'tanggal_pengajuan',
        'lama_cuti',
        'keterangan',
        'alamat',
        'status',
        'verifikasi_oleh'
    ];
}
