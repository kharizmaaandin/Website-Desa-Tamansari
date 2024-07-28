<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dusun;
use App\Models\layanan;
use App\Models\misi;
use App\Models\navigasi;
use App\Models\role;
use App\Models\struktur;
use App\Models\tentangkami;
use App\Models\token;
use App\Models\users;
use App\Models\visi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{

    public function halamanUtama(){
        // get navigasi

        $getnavigasi = navigasi::select("*")->from("navigasis")->get();
        $getlokasi = navigasi::select("*")->from("lokasis")->first();
        $getVisi = visi::select("*")->from("visis")->get();
        $getMisi = misi::select("*")->from("misis")->get();
        $getDesa = tentangkami::select("*")->from("tentangkami")->first();
        $getLayanan = layanan::select("*")->from("layanans")->get();

        $getberita = berita::get();
        $countberita = berita::count();
        // get struktur
        $struktur = struktur::join('jabatans', 'strukturs.jabatan', '=', 'jabatans.id')
        ->select('strukturs.nama','strukturs.foto', 'jabatans.namaJabatan')
        ->get();

        // get foto kades
        $kades = struktur::join('jabatans', 'jabatans.id', '=', 'strukturs.jabatan')
        ->select('strukturs.foto')
        ->where("strukturs.jabatan" ,'=', 1)
        ->first();
        
        // dd($kades);

        // get dusun
        $dusun = dusun::join('strukturs', 'strukturs.id', '=', 'dusuns.kepala_dusun')
        ->join("jabatans","jabatans.id",'=','strukturs.jabatan')
        ->select('strukturs.nama','strukturs.foto as fotoKadus', 'dusuns.*','jabatans.namaJabatan')
        ->get();

        $jmlLaki = dusun::sum('jmlLaki');
        // dd($jmlLaki);
        $jmlPerempuan = dusun::sum('jmlPerempuan');

        // menghitung jumlah Dusun
        $dusunCount = dusun::count();
        return view("LandingPage.main")->with((["lokasi" => $getlokasi,"navigasi" => $getnavigasi,"visi" => $getVisi,"misi" => $getMisi, "fotoDesa" => $getDesa->foto, "deskripsiDesa" => $getDesa->isiTentang,"layanan" => $getLayanan,'struktur' => $struktur,'dusun' => $dusun,'dusunCount' => $dusunCount,'berita' => $getberita,'jmlberita' => $countberita,'jmlLaki' => $jmlLaki, 'jmlPerempuan' => $jmlPerempuan,'kades' => $kades]));
    }
    public function confirmDaftar(Request $request){
        $username = $request->username;
        $email = $request->email;
        $token = $request->token;
        $password = bcrypt($request->password);
        

        // cek username udah ada atau belom
        $cekusername = users::select("username")
        ->from("users")
        ->where("username",'=',$username)
        ->first();
        // action jika username sudah ada, akan kembali ke halaman daftar dengan pesan error
        if($cekusername){
            return back()->with(["signup_error" => "username sudah digunakan"]);
        }

        $cekemail = Users::select("email")
        ->from("users")
        ->where("email",'=',$email)
        ->first();
        // action jika email sudah ada, akan kembali ke halaman daftar dengan pesan error
        if($cekemail){
            return back()->with(["signup_error" => "email sudah digunakan"]);
        }

        // cek token
        $cektoken = token::select("token")
        ->from("tokens")
        ->where("token","=", $token)
        ->first();


        // token benar
        if($cektoken){
            $role =  token::select("role")
            ->from("tokens")
            ->where("token","=", $token)
            ->first();


            // get nama role
            
            $getRole = role::select("namaRole")->from("roles")->where("id",'=',$role->role)->first();
            // dd($getRole->namaRole);
            // cek apakah ada data atau tidak
            $cekData = users::select("*")->from("users")->get();
            $nomorId = 1;
            if($cekData->count() == 0){
                $insertData = users::insert([
                    "id" => "User" . $nomorId,
                    "username" => $username,
                    "email" => $email,
                    "password" => $password,
                    "role" => $getRole->namaRole,
                ]);
            // jika proses daftar berhasil maka hapus token

                if($insertData){
                    token::select("token")
                        ->from("tokens")
                        ->where("token","=", $token)
                        ->delete();
                        return redirect('/Masuk')->with(["email" => $email,"password" => $request->password,"sukses_daftar" => "Pendaftaran Berhasil, Silahkan login"]);
                }
            }else{
                // cek id terbesar
                $maxId = users::selectRaw('CAST(SUBSTRING(id, 5, LENGTH(id)) AS UNSIGNED) AS numeric_id')
                ->orderBy('numeric_id', 'desc')
                ->first();
                $newIdNumber = $maxId->numeric_id + 1;
                $insertData = users::insert([
                    "id" => "User" . $newIdNumber,
                    "username" => $username,
                    "email" => $email,
                    "password" => $password,
                    "role" => $getRole->namaRole,
                ]);
            // jika proses daftar berhasil maka hapus token

                if($insertData){
                    token::select("token")
                        ->from("tokens")
                        ->where("token","=", $token)
                        ->delete();
                        return redirect('/Masuk')->with(["email" => $email,"password" => $request->password,"sukses_daftar" => "Pendaftaran Berhasil, Silahkan login"]);
                }
            }
        }else{
            // kondisi ketika token tidak sesuai
            return back()->with(["signup_error" => "Token tidak terdaftar"]);
        }
    }

    public function confirmLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        // dd(2);
        if (Auth::attempt($credentials)) {
            $test = $request->session()->regenerate();
            $getname = users::select("*")
            ->from("users")
            ->where("email",'=',$request->email)
            ->first();
            session(['email' => $request->email]);
            session(['nama' => $getname->username]);
            session(['role' => $getname->role]);
            // dd(session('role'));
            // dd(Auth::user()->role);
            if($getname->role == 'admin'){
                return redirect()->intended('/halamanAdmin');
            }elseif($getname->role == 'warga'){
                return redirect()->intended('/halamanWarga');
            }
        }else{
            $cek_email = users::select("*")
            ->from("users")
            ->where("email",'=',$request->email)
            ->first();
            if(!$cek_email){
                return back()->with([
                    'login_error' => 'Email Tidak Tersedia',
                ])->onlyInput('email'); 
            }else{
                return back()->with([
                    'login_error' => 'Password Salah',
                ])->onlyInput('email');
            }

        }
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        session()->forget('email');
        session()->forget('nama');
        return redirect('/')->with(['logout' => "logout berhasil"]);
    }
}
