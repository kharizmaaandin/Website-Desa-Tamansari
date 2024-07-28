<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navigasi extends Model
{
    use HasFactory;
    protected $tabel = 'navigasis';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'namaNavigasi', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
