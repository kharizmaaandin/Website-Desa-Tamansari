<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Models\lokasi;
use App\Models\misi;
use App\Models\tentangkami;
use App\Models\visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class desaController extends Controller
{
    public function halamanDesa(){
        // get info desa
        $getInfo = tentangkami::select("*")->from("tentangkami")->first();
        // get visi misi
        $getIVisi = visi::select("*")->from("visis")->get();
        $getMisi= misi::select("*")->from("misis")->get();
        $getlayanan= layanan::select("*")->get();
        // dd($getlayanan);
        $authPrimitif = session('role');
        if($authPrimitif != 'admin'){
            return redirect('/');
        }

        $lokasi = lokasi::first();
        return view("administrator.admin.infoDesa")->with(["id" => $getInfo->id,"foto" => $getInfo->foto, "deskripsi" => $getInfo->isiTentang, "visi" => $getIVisi, "misi" => $getMisi,"layanan" => $getlayanan,'lokasi' => $lokasi]);
    }

    public function edit_visi(Request $request){
        $visi = $request->Visi;
        $id = $request->Visis;
        // cek visi udah ada atau belom
        $cekvisi = visi::select("*")->from("visis")->where("visi",'=',$visi)->first();

        if(!$cekvisi){
            $edit_visi = DB::table("visis")->where("id",'=',$id)->update([
                "visi" => $visi
            ]);
            if($edit_visi){
                return back()->with("success_toast","berhasil mengedit visi");
            }else{
                return back()->with("error_toast","gagal mengedit visi");
    
            }
        }else{
            return back()->with("error_toast","visi sudah tersedia");
        }
    }
    public function edit_misi(Request $request){
        $misi = $request->Misi;
        $id = $request->Misis;

        // cek misi udah ada atau belom
        $cekmisi = misi::select("*")->from("misis")->where("misi",'=',$misi)->first();
        if(!$cekmisi){
            $edit_misi = DB::table("misis")->where("id",'=',$id)->update([
                "misi" => $misi
            ]);
            if($edit_misi){
                return back()->with("success_toast","berhasil mengedit misi");
            }else{
                return back()->with("error_toast","gagal mengedit misi");
    
            }
        }else{
            return back()->with("error_toast","misi sudah tersedia");
        }
    }

    public function hapus_visi($id){
        // mengecek visi cuman satu atau lebih
        $cekSatu = visi::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus visi");
        }

        $hapus_visi = visi::where("id",'=',$id)->delete();
        if($hapus_visi  === true){
            return back()->with("success_toast","berhasil menghapus visi");
        }else{
            return back()->with("error_toast","tidak bisa menghapus visi");
        }
    }
    public function hapus_misi($id){
        // mengecek misi cuman satu atau lebih
        $cekSatu = misi::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus misi");
        }

        $hapus_misi = misi::where("id",'=',$id)->delete();
        if($hapus_misi){
            return back()->with("success_toast","berhasil menghapus misi");
        }else{
            return back()->with("error_toast","tidak bisa menghapus misi");
        }
    }

    public function add_visi(Request $request){

        $visi = $request->visi;

        // cek visi sudah ada atau belom
        $cekvisi = visi::select("*")->from("visis")->where("visi",'=',$visi)->first();
        

        // visi tidak ada
        if(!$cekvisi){
            $insertvisi = visi::insert([
                'visi' => $visi
            ]);
            if ($insertvisi) {
                return back()->with('success_toast', 'visi berhasil ditambahkan!');
            }
            
        }else{
            return back()->with(["error_toast" => "visi sudah tersedia"]);
        }
    }

    public function add_misi(Request $request){

        $misi = $request->misi;

        // cek misi sudah ada atau belom
        $cekmisi = misi::select("*")->from("misis")->where("misi",'=',$misi)->first();
        

        // misi tidak ada
        if(!$cekmisi){
            $insertmisi = misi::insert([
                'misi' => $misi
            ]);
            if ($insertmisi) {
                return back()->with('success_toast', 'misi berhasil ditambahkan!');
            }
            
        }else{
            return back()->with(["error_toast" => "misi sudah tersedia"]);
        }
    }

    public function edit_Desa(Request $request){
        if($request->fotoDesa !== null){
            // ini ambil gambar yang sudah ada sebelumnya
            $getGambar = tentangkami::select('foto')
            ->from("tentangkami")
            ->where('id','=',$request->idTentang)
            ->first();
            if($getGambar){
                File::delete($getGambar->foto);
            }
            $file_gambar = $request->file('fotoDesa');
            $nama_file_gambar = 'gambar_desa';
            $file_gambar->move('file_foto/desa',$nama_file_gambar);
            $nama_file_gambar_desa = 'file_foto/desa/'.$nama_file_gambar;
            DB::table('tentangkami')->where('id','=',$request->idTentang)
            ->update([
                'foto' => $nama_file_gambar_desa,
            ]);
        }
        $getDeskripsi = tentangkami::select("isiTentang")->from("tentangkami")->first();
        if($request->Deskripsi !== $getDeskripsi->isiTentang){
            $updateDeskripsi = DB::table('tentangkami')->where('id','=',$request->idTentang)
            ->update([
                'isiTentang' => $request->Deskripsi,
            ]);
            if($updateDeskripsi !== false){
                return back()->with('success_toast', 'data berhasil diubah!');
            }else{
                return back()->with(["error_toast" => "data gagal diubah!"]);
            }
        }
        return back()->with('success_toast', 'data berhasil diubah!');
    }

    public function add_layanan(Request $request){

        $layanan = $request->layanan;
        $deskripsi = $request->deskripsi;

        // cek layanan sudah ada atau belom
        $ceklayanan = layanan::select("*")->from("layanans")->where("namaLayanan",'=',$layanan)->first();
        

        // layanan tidak ada
        if(!$ceklayanan){
            $insertlayanan = layanan::insert([
                'namaLayanan' => $layanan,
                'deskripsiLayanan' => $deskripsi,
            ]);
            if ($insertlayanan) {
                return back()->with('success_toast', 'layanan berhasil ditambahkan!');
            }
            
        }else{
            return back()->with(["error_toast" => "layanan sudah tersedia"]);
        }
    }
    
    public function edit_layanan(Request $request){
        $layanan = $request->Layanan;
        $deskripsi = $request->DeskripsiLayanan;
        $id = $request->Layanans;

        // dd($id);
        
        // cek layanan udah ada atau belom
        $ceklayanan = layanan::select("*")->from("layanans")->where("namaLayanan",'=',$layanan)->first();

        if(!$ceklayanan){
            $edit_layanan = DB::table("layanans")->where("id",'=',$id)->update([
                "namaLayanan" => $layanan,
                "deskripsiLayanan" => $deskripsi,
            ]);
            if($edit_layanan){
                return back()->with("success_toast","berhasil mengedit layanan");
            }else{
                return back()->with("error_toast","gagal mengedit layanan");
    
            }
        }else{
            return back()->with("error_toast","layanan sudah tersedia");
        }
    }
    public function hapus_layanan($id){
        // mengecek layanan cuman satu atau lebih
        $cekSatu = layanan::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus layanan");
        }

        $hapus_layanan = layanan::where("id",'=',$id)->delete();
        if($hapus_layanan){
            return back()->with("success_toast","berhasil menghapus layanan");
        }else{
            return back()->with("error_toast","gagal menghapus layanan");
        }
    }

    public function edit_lokasi(Request $request){
        $lokasi = $request->Lokasi;
        $id = $request->Lokasis;

        $edit_lokasi = DB::table("lokasis")->where("id",'=',$id)->update([
            "linkLokasi" => $lokasi
        ]);
        if($edit_lokasi){
            return back()->with("success_toast","berhasil mengedit Lokasi");
        }else{
            return back()->with("error_toast","gagal mengedit Lokasi");

        }
    }
}
