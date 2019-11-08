<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    //
    protected $table = "gedungs";
    protected $casts = [
        "Verifikasi" => "boolean",
    ];
    protected $fillable = ['id_owner', 'KodeGedung', 'NamaGedung','AlamatGedung','Biaya','Kapasitas','File', 'Keterangan', 'Kriteria','Verifikasi'];
}
