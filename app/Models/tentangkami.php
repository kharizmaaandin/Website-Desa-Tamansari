<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangkami extends Model
{
    use HasFactory;
    protected $tabel = 'tentangkami';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'isiTentang', 
        'foto', 
    ] ;

    public $incrementing = true;
    public $timestamps = false;  
}
