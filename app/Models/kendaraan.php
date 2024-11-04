<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';

    protected $fillable = [
        'no_urut' ,
        'bagian' ,
        'nama_peminta' ,
        'nama_pengikut_pimpinan' ,
        'nama_pengikut_pelaksana' ,
        'tujuan',
        'keperluan' ,
        'tanggal',
        'jam_berangkat',
        'jam_kembali',
        'disetujui',
    ];
}
}
