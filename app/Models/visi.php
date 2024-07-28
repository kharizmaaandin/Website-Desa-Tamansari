<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visi extends Model
{
    use HasFactory;
    protected $tabel = 'visis';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'visi', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
