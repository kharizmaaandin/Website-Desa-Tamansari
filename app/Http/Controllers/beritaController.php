<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class beritaController extends Controller
{
    //
    public function halamanBerita(){

        $getBerita = berita::get();
        return view('administrator.admin.berita')->with(['berita' => $getBerita]);
    }

    public function add_berita(Request $request){
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $lokasi = $request->lokasi;

        $namaTrim = trim($nama);
        $file_gambar = $request->file('foto');
        $nama_file_gambar = 'gambar_berita_'.$namaTrim;
        $file_gambar->move('file_foto/berita',$nama_file_gambar);
        $nama_file_gambar_berita = 'file_foto/berita/'.$nama_file_gambar;

        // cek berita
        $cekberita = berita::where('namaBerita','=',$nama)->first();
        if(!$cekberita){
            $insertBerita = DB::table('beritas')->insert([
                'namaBerita' => $nama,
                'deskripsiBerita' => $deskripsi,
                'tglMulai' => $mulai,
                'tglSelesai' => $selesai,
                'foto' => $nama_file_gambar_berita,
                'lokasi' => $lokasi,
            ]);

            if($insertBerita){
                return back()->with('success_toast' , "Berhasil menambah berita");
            }else{
                return back()->with('error_toast' , "gagal menambah berita");
            }
        }else{
            return back()->with('error_toast' , "berita sudah tersedia");
        }
    }

    public function edit_berita(Request $request){
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $lokasi = $request->lokasi;

        // cek nama berita
        $cekberita = berita::where('namaBerita','=',$nama)->where('id','!=', $request->Beritas)->first();
        
        // get path
        $getPath = berita::where('id','=',$request->Beritas)->first();
        if(!$cekberita){
            if($request->foto !== null){
                File::delete($getPath->foto);
                $namaTrim = trim($nama);
                $file_gambar = $request->file('foto');
                $nama_file_gambar = 'gambar_berita_'.$namaTrim;
                $file_gambar->move('file_foto/berita',$nama_file_gambar);
                $nama_file_gambar_berita = 'file_foto/berita/'.$nama_file_gambar;

                $update_berita = DB::table('beritas')->where('id','=',$request->Beritas)->update([
                    'namaBerita' => $nama,
                    'deskripsiBerita' => $deskripsi,
                    'tglMulai' => $mulai,
                    'tglSelesai' => $selesai,
                    'foto' => $nama_file_gambar_berita,
                    'lokasi' => $lokasi,
                ]);
                if($update_berita !== false){
                    return back()->with('success_toast' , "Berhasil mengubah berita");
                }else{
                    return back()->with('error_toast' , "gagal mengubah berita");
                }
            }else{
                $update_berita = DB::table('beritas')->where('id','=',$request->Beritas)->update([
                    'namaBerita' => $nama,
                    'deskripsiBerita' => $deskripsi,
                    'tglMulai' => $mulai,
                    'tglSelesai' => $selesai,
                    'lokasi' => $lokasi,
                ]);
    
                if($update_berita){
                    return back()->with('success_toast' , "Berhasil mengubah berita");
                }else{
                    return back()->with('error_toast' , "gagal mengubah berita");
                }
            }
        }else{
            return back()->with('error_toast' , "berita sudah tersedia");
        }
    }

    public function hapus_berita($id){
        $hapus_berita = berita::where("id",'=',$id)->delete();
        if($hapus_berita){
            return back()->with("success_toast","berhasil menghapus berita");
        }else{
            return back()->with("error_toast","tidak bisa menghapus berita");
        }
    }
}
