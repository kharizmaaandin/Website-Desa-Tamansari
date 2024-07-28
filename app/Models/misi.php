<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class misi extends Model
{
    use HasFactory;
    protected $tabel = 'misis';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'misi', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
