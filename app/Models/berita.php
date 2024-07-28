<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $tabel = 'beritas';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'namaBerita', 
        'deskripsiBerita', 
        'tglMulai', 
        'tglSelesai', 
        'foto', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
