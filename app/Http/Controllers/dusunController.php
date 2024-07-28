<?php

namespace App\Http\Controllers;

use App\Models\dusun;
use App\Models\struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class dusunController extends Controller
{
    //
    public function halamanDusun(){

        $dusun = dusun::join('strukturs', 'strukturs.id', '=', 'dusuns.kepala_dusun')
        ->select('strukturs.nama', 'dusuns.*')
        ->get();

        $struktur = struktur::get();

        $authPrimitif = session('role');
        if($authPrimitif != 'admin'){
            return redirect('/');
        }
        return view("administrator.admin.dusun")->with(['dusun' => $dusun,'struktur' => $struktur]);
    }

    public function add_dusun(Request $request){
        $namaDusun = $request->nama;
        $kadus = $request->kadus;
        $laki = $request->laki;
        $perempuan = $request->perempuan;
        $Rt = $request->Rt;
        $Rw = $request->Rw;

        $file_gambar = $request->file('foto');
        $nama_file_gambar = 'gambar_dusun_'.$namaDusun;
        $file_gambar->move('file_foto/dusun',$nama_file_gambar);
        $nama_file_gambar_dusun = 'file_foto/dusun/'.$nama_file_gambar;

        // cek nama dusun
        $cekDusun = dusun::where("namaDusun",'=',$namaDusun)->first();
        if(!$cekDusun){
            // cek kepala dusun
            $cekkadus = dusun::where("kepala_dusun",'=',$kadus)->first();
            if(!$cekkadus){
                $insertDusun = DB::table('dusuns')->insert([
                    'foto' => $nama_file_gambar_dusun,
                    'namaDusun' => $namaDusun,
                    'kepala_dusun' => $kadus,
                    'jmlLaki' => $laki,
                    'jmlPerempuan' => $perempuan,
                    'jmlRw' => $Rw,
                    'jmlRt' => $Rt,
                ]);

                if($insertDusun){
                    return back()->with(["success_toast" => "Dusun berhasil ditambah"]);
                }else{
                    return back()->with(["error_toast" => "Dusun gagal ditambah"]);
                }
            }else{
                return back()->with(["error_toast" => "Kepala Dusun sudah tersedia"]);
            }
        }else{
            return back()->with(["error_toast" => "Dusun sudah tersedia"]);

        }
    }

    public function edit_dusun(Request $request){
        $namaDusun = $request->nama;
        $kadus = $request->kadus;
        $laki = $request->laki;
        $perempuan = $request->perempuan;
        $Rt = $request->Rt;
        $Rw = $request->Rw;
        $id = $request->Dusuns;

        // cek nama dusun
        $cekDusun = dusun::where("namaDusun",'=',$namaDusun)->where('id','!=',$id)->first();
        // menyimpan path gambar sebelumnya
        $pathGambar = dusun::select("foto")->where("id",'=',$id)->first();
        $path = $pathGambar->foto;
        if(!$cekDusun){
            // cek nama dusun
            $cekkadus = dusun::where("kepala_dusun",'=',$kadus)->where('id','!=',$id)->first();
            if(!$cekkadus){
                if($request->foto !== null){
                    File::delete($path);
                    $file_gambar = $request->file('foto');
                    $nama_file_gambar = 'gambar_dusun_'.$namaDusun;
                    $file_gambar->move('file_foto/dusun',$nama_file_gambar);
                    $nama_file_gambar_dusun = 'file_foto/dusun/'.$nama_file_gambar;

                    $updateDusun = DB::table("dusuns")->where('id','=',$id)->update([
                        "namaDusun" => $namaDusun,
                        "foto" => $nama_file_gambar_dusun,
                        "kepala_dusun" => $kadus,
                        "jmlLaki" => $laki,
                        "jmlPerempuan" => $perempuan,
                        "jmlRt" => $Rt,
                        "jmlRw" => $Rw,
                    ]);
                    if($updateDusun !== false){
                        return back()->with(["success_toast" => "Dusun berhasil diubah"]);

                    }else{
                        return back()->with(["error_toast" => "Dusun gagal diubah"]);
                    }
                }else{
                    $updateDusun = DB::table("dusuns")->where('id','=',$id)->update([
                        "namaDusun" => $namaDusun,
                        "kepala_dusun" => $kadus,
                        "jmlLaki" => $laki,
                        "jmlPerempuan" => $perempuan,
                        "jmlRt" => $Rt,
                        "jmlRw" => $Rw,
                    ]);
                    if($updateDusun !== false){
                        return back()->with(["success_toast" => "Dusun berhasil diubah"]);

                    }else{
                        return back()->with(["error_toast" => "Dusun gagal diubah"]);
                    }
                }
            }else{
                return back()->with(["error_toast" => "Kepala Dusun sudah tersedia"]);
            }
        }else{
            return back()->with(["error_toast" => "Dusun sudah tersedia"]);
        }
    }
    public function hapus_dusun($id){
        // mengecek layanan cuman satu atau lebih
        $cekSatu = dusun::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus dusun");
        }

        $hapus_dusun = dusun::where("id",'=',$id)->delete();
        if($hapus_dusun !== false){
            return back()->with("success_toast","berhasil menghapus dusun");
        }else{
            return back()->with("error_toast","gagal menghapus dusun");
        }
    }
}
