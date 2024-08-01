<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $tabel = 'tokens';

    // Menentukan Primary Key pada tabel
    protected $primaryKey = 'id';

    // Menentukan kolom yang dapat diisi pada tabel
    protected $fillable = [
        'id', 
        'token',
        'role',
        'created_at',
    ] ;

    public $incrementing = true;
    public $timestamps = false;  

    public static function delete_token_otomatis(){
        $tokens = self::all();
        foreach($tokens as $token){
            $waktuHapus = strtotime($token->created_at) + 120; // 120 detik = 2 menit
            if($waktuHapus < time()){
                $token->delete();
            }
        }
    }
}

