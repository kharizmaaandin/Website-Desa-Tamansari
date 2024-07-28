<?php

namespace App\Http\Controllers;

use App\Models\dusun;
use App\Models\jabatan;
use App\Models\struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class strukturController extends Controller
{
    public function halamanStruktur(){

        $struktur = struktur::join('jabatans', 'strukturs.jabatan', '=', 'jabatans.id')
        ->select('strukturs.*', 'jabatans.namaJabatan')
        ->get();

        $getJabatan = jabatan::select("*")->get();
        $authPrimitif = session('role');
        if($authPrimitif != 'admin'){
            return redirect('/');
        }
        return view("administrator.admin.struktur")->with(['struktur' => $struktur,'jabatan' => $getJabatan]);
    }

    public function add_struktur(Request $request){
        $nama = $request->nama;
        $jabatan = $request->jabatan;

        $jabatanTrim = trim($jabatan);
        $file_gambar = $request->file('foto');
        $nama_file_gambar = 'gambar_struktur_'.$jabatanTrim;
        $file_gambar->move('file_foto/struktur',$nama_file_gambar);
        $nama_file_gambar_desa = 'file_foto/struktur/'.$nama_file_gambar;
        
        // cek struktur kosong atau tidak
        $eckStruktur = struktur::count();

        // cek jabatan sudah ada atau belom
        $cekJabatan = struktur::select("*")->from("strukturs")->where("jabatan",'=',$jabatan)->first();
        if($cekJabatan){
            return back()->with("error_toast","jabatan sudah tersedia");
        }


        if($eckStruktur !== 0){
            $maxId = struktur::selectRaw('CAST(SUBSTRING(id, 9, LENGTH(id)) AS UNSIGNED) AS numeric_id')
            ->orderBy('numeric_id', 'desc')
            ->first();
            $newIdNumber = $maxId->numeric_id + 1;

            $insertStruktur = DB::table("strukturs")->insert([
                'id' => "Struktur" . $newIdNumber,
                'nama' => $nama,
                'foto' => $nama_file_gambar_desa,
                'jabatan' => $jabatan,
            ]);

            if($insertStruktur){
                return back()->with("success_toast","berhasil menambah struktur");
            }else{
                return back()->with("error_toast","gagal menambah struktur");
            }
        }else{
            $insertStruktur = DB::table("strukturs")->insert([
                'id' => "Struktur1",
                'nama' => $nama,
                'foto' => $nama_file_gambar_desa,
                'jabatan' => $jabatan,
            ]);

            if($insertStruktur){
                return back()->with("success_toast","berhasil menambah struktur");
            }else{
                return back()->with("error_toast","gagal menambah struktur");
            }
        }
    }

    public function edit_struktur(Request $request){
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        // fixed bug jabatan jika tidak dirubah
        $cekJabatan = struktur::select("*")->from("strukturs")->where("id",'=',$request->Strukturs)->first();
        // dd($request->Strukturs);
        // dd($cekJabatan);
        if($cekJabatan->jabatan !== $jabatan){
            // cek jabatan sudah ada atau belom
            $cekJabatan2 = struktur::select("*")->from("strukturs")->where("jabatan",'=',$jabatan)->where("id",'!=',$request->Strukturs)->first();
            if($cekJabatan2){
                return back()->with("error_toast","jabatan sudah tersedia");
            }
        }
        // menyimpan path gambar sblmnya
        $pathFoto = $cekJabatan->foto;
        if($request->foto !== null){
            File::delete($pathFoto);
            $file_gambar = $request->file('foto');
            $nama_file_gambar = 'gambar_struktur_'.$jabatan;
            $file_gambar->move('file_foto/struktur',$nama_file_gambar);
            $nama_file_gambar_struktur = 'file_foto/struktur/'.$nama_file_gambar;


            // dd($nama_file_gambar_struktur);
            $editStruktur = DB::table("strukturs")->where("id",'=',$request->Strukturs)->update([
                'nama' => $nama,
                'jabatan' => $jabatan,
                'foto' => $nama_file_gambar_struktur,
            ]);

            if ($editStruktur !== false) {
                return back()->with("success_toast", "struktur berhasil diedit");
            } else {
                return back()->with("error_toast", "struktur gagal diedit");
            }
        }else{
           dd(1);
            $editStruktur = DB::table("strukturs")->where("id",'=',$request->Strukturs)->update([
                'nama' => $nama,
                'jabatan' => $jabatan,
            ]);

            if($editStruktur){
                return back()->with("success_toast","struktur berhasil diedit");
            }else{
                return back()->with("error_toast","struktur gagal diedit");
            }
        }
    }

    public function hapus_struktur($id){
        // mengecek layanan cuman satu atau lebih
        $cekSatu = struktur::count();
        if($cekSatu == 1){
            return back()->with("error_toast","tidak bisa menghapus struktur");
        }

        // get nama
        $getNama = struktur::where("id",'=',$id)->first();
        // cek apakah struktur merupakan kepala dusun atau bukan
        $cekKadus = dusun::where("kepala_dusun",'=',$id)->first();
        if(!$cekKadus){
            $hapus_struktur = struktur::where("id",'=',$id)->delete();

            if($hapus_struktur){
                return back()->with("success_toast","berhasil menghapus struktur");
            }else{
                return back()->with("error_toast","gagal menghapus struktur");
            }
        }else{
            return back()->with("error_toast",$getNama->nama." Merupakan Kepala Dusun");
        }

    }
}
