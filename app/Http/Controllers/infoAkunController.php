<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\token;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class infoAkunController extends Controller
{
    //
    public function halamanAkun(){
        // getRole
        $getRole = role::get();
        // get info user
        $getUser = users::join('roles','roles.namaRole','=','users.role')
        ->select("users.*",'roles.namaRole')
        ->get();

        // token
        $getToken = token::join('roles','roles.id','=','tokens.role')
        ->select("tokens.*",'roles.namaRole')
        ->get();
        $getTokenCount = token::count();
        $authPrimitif = session('role');
        if($authPrimitif != 'admin'){
            return redirect('/');
        }
        // dd($getUser);
        return view('administrator.admin.infoAkun')->with(['role' => $getRole,'user' => $getUser,'token' => $getToken,'jmlToken' => $getTokenCount]);
    }


    public function add_token(Request $request)
    {
        // Generate random token
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 15; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomToken = $randomString;

        $currentTime = Carbon::now();

        // Hitung waktu penghapusan 2 menit setelah pembuatan
        $deleteTime = $currentTime->addMinutes(2);

        $createToken = DB::table("tokens")->insert([
            'token' => $randomToken,
            'role' => $request->role,
        ]);
        if($createToken){
            return back()->with(['success_toast' => "berhasil membuat token"]);
        }else{
            return back()->with(['error_toast' => "gagal membuat token"]);
        }
    }
    
    public function edit_akun(Request $request){
        $nama = $request->nama;
        $email = $request->email;

        // dd($request->Akuns);

        // cek nama
        $cekNama = users::where("username",'=', $nama)->where("id",'!=',$request->Akuns)->first();
        if(!$cekNama){
            // cek email
            $cekEmail = users::where("email",'=', $email)->where("id",'!=',$request->Akuns)->first();
            if(!$cekEmail){
                $updateUser = DB::table("users")->where("id",'=',$request->Akuns)->update([
                    "username" => $nama,
                    "email" => $email,
                ]);
                if($updateUser){
                    return back()->with(['success_toast' => "berhasil mengubah user"]);

                }else{
                    return back()->with(['error_toast' => "gagal mengubah user"]);
                }
            }else{
                return back()->with(['error_toast' => "Email sudah tersedia"]);
            }
        }else{
            return back()->with(['error_toast' => "Username sudah tersedia"]);

        }
    }

    public function hapus_akun($id){
        // mengecek layanan cuman satu atau lebih
        $cekSatu = users::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus users");
        }

        // cek akun apakah akun dirinya sendiri yang dihapus
        $currentUser = users::where("email", session('email'))->first();
        $isCurrentUser = $currentUser && $currentUser->id == $id;

        $hapus_users = users::where("id",'=',$id)->delete();
        if($hapus_users){
            if($isCurrentUser){
                Auth::logout();
                Session::invalidate();
                Session::regenerateToken();
                return redirect('/');
            }
        }else{
            return back()->with("error_toast","gagal menghapus users");
        }
    }
    
}
