<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dusun;
use App\Models\jabatan;
use App\Models\navigasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //
    public function halamanDashboard(){
        // $authPrimitif = session('role');
        // if($authPrimitif != 'admin'){
        //     return redirect('/');
        // }
        // dd(session('role'));

        // get info 
        $navigasi = navigasi::select("*")->from("navigasis")->get();
        $jabatan = jabatan::select("*")->from("jabatans")->get();
        $jumlahLaki = dusun::sum('jmlLaki');
        $jmlPerempuan = dusun::sum('jmlPerempuan');
        $jmlWarga = $jumlahLaki + $jmlPerempuan;
        $jumlahRt = dusun::sum('jmlRt');
        $jummlahRw = dusun::sum('jmlRw');
        $jmlDusun = dusun::count();

        $userAuth = Auth::user();
        // dd($userAuth->role);
        // dd($jumlahLaki);

        return view("administrator.admin.dashboard")->with(["navigasi" => $navigasi, "jabatan" => $jabatan,"jmlWarga" => $jmlWarga,"jmlDusun" => $jmlDusun,"jumlahRt" => $jumlahRt, "jummlahRw" => $jummlahRw]);
    }

    public function halamanWarga(){
        $getBerita = berita::get();
        return view('administrator.warga.beritaWarga')->with(['berita' => $getBerita]);
    }

    public function tambah_jabatan(Request $request){

        $jabatan = $request->jabatan;

        // cek jabatan sudah ada atau belom
        $cekjabatan = jabatan::select("*")->from("jabatans")->where("namaJabatan",'=',$jabatan)->first();
        

        // jabatan tidak ada
        if(!$cekjabatan){
            $insertJabatan = jabatan::insert([
                'namaJabatan' => $jabatan
            ]);
            if ($insertJabatan) {
                return back()->with('success_toast', 'Jabatan berhasil ditambahkan!');
            }
            
        }else{
            return back()->with(["error_toast" => "jabatan sudah tersedia"]);
        }
    }

    public function edit_jabatan(Request $request){
        $jabatan = $request->jabatan;
        $id = $request->jabatans;


        // cek jabatan sudah ada atau belom
        $cekjabatan = jabatan::select("*")->from("jabatans")->where("namaJabatan",'=',$jabatan)->first();
        

        // jabatan tidak ada
        if(!$cekjabatan){
            $insertJabatan = DB::table('jabatans')->where('id','=',$id)
            ->update([
                'namaJabatan' => $request->jabatan,
            ]);
            if ($insertJabatan) {
                return back()->with('success_toast', 'Jabatan berhasil dirubah!');
            }
            
        }else{
            return back()->with(["error_toast" => "jabatan gagal dirubah"]);
        }
    }

    public function hapus_jabatan($id){

        $hapus = jabatan::where("id",'=',$id)->delete();

        if($hapus  === true){
            return back()->with('success_toast', 'Jabatan berhasil dihapus!');
        }else{
            return back()->with(["error_toast" => "jabatan gagal dihapus"]);
        }
    }

    public function edit_navigasi(Request $request){
        $navigasi = $request->navigasi;
        $id = $request->navigasis;


        // cek navigasi sudah ada atau belom
        $ceknavigasi = navigasi::select("*")->from("navigasis")->where("namaNavigasi",'=',$navigasi)->first();
        

        // navigasi tidak ada
        if(!$ceknavigasi){
            $updateNavigasi = DB::table('navigasis')->where('id','=',$id)
            ->update([
                'namaNavigasi' => $request->navigasi,
            ]);
            if ($updateNavigasi) {
                return back()->with('success_toast', 'navigasi berhasil dirubah!');
            }
            
        }else{
            return back()->with(["error_toast" => "navigasi gagal dirubah"]);
        }
    }
}
