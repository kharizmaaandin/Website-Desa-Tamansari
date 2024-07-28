<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dusun extends Model
{
    use HasFactory;
    protected $tabel = 'dusuns';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'namaDusun', 
        'jmlRt', 
        'jmlRw', 
        'jmlLaki', 
        'jmlPerempuan', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
