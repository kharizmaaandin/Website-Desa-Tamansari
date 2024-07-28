<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\desaController;
use App\Http\Controllers\dusunController;
use App\Http\Controllers\infoAkunController;
use App\Http\Controllers\strukturController;

use Illuminate\Support\Facades\Route;


Route::get('/', [AkunController::class, 'halamanUtama']);




// ==============================  Daftar Akun ============================== 
Route::get('/Daftar', function () {
    return view('signup.daftar');
});
Route::post('/confirmDaftar',[AkunController::class, "confirmDaftar"])->middleware("guest");
Route::get('/confirmDaftar',function(){
    return redirect("/");
});

Route::middleware(['auth'])->group(function(){
// ============================== logout ==============================
    Route::get('/keluar', [AkunController::class,'logout']);
});
// ==============================  Masuk Akun ============================== 
Route::get('/Masuk', function () {
    return view('login.login');
});


Route::post('/confirmLogin',[AkunController::class, "confirmLogin"])->middleware("guest");
Route::get('/confirmLogin',function(){
    return redirect("/");
});


// ============================== halaman admin ============================== 
Route::get('/halamanAdmin', [dashboardController::class,'halamanDashboard'])->middleware('isAdmin');
Route::get('/halamanWarga', [dashboardController::class,'halamanWarga'])->middleware('auth');





// ==============================  DASHBOARD ==============================
Route::post("/tambah_jabatan",[dashboardController::class,'tambah_jabatan'])->middleware('isAdmin');
Route::get("/tambah_jabatan",function(){
    return redirect("/");
});
Route::post("/edit_jabatan",[dashboardController::class,'edit_jabatan'])->middleware('isAdmin');
Route::get("/edit_jabatan",function(){
    return redirect("/");
});
Route::post("/edit_navigasi",[dashboardController::class,'edit_navigasi'])->middleware('isAdmin');
Route::get("/edit_navigasi",function(){
    return redirect("/");
});

Route::get("/hapus_jabatan/{id}",[dashboardController::class,'hapus_jabatan'])->middleware('isAdmin');


// ==============================  INFORMASI DESA  ==============================
Route::get('/info_desa', [desaController::class,"halamanDesa"])->middleware('isAdmin');
Route::post('/edit_visi', [desaController::class,"edit_visi"])->middleware('isAdmin');
Route::get("/edit_visi",function(){
    return redirect("/");
});
Route::post('/edit_misi', [desaController::class,"edit_misi"])->middleware('isAdmin');
Route::get("/edit_misi",function(){
    return redirect("/");
});

Route::post('/add_visi', [desaController::class,"add_visi"])->middleware('isAdmin');
Route::get("/add_visi",function(){
    return redirect("/");
});

Route::post('/add_misi', [desaController::class,"add_misi"])->middleware('isAdmin');
Route::get("/add_misi",function(){
    return redirect("/");
});

Route::get('/hapus_visi/{id}', [desaController::class,"hapus_visi"])->middleware('isAdmin');
Route::get('/hapus_misi/{id}', [desaController::class,"hapus_misi"])->middleware('isAdmin');


Route::post('/edit_Desa',[desaController::class, "edit_Desa"])->middleware('isAdmin');
Route::get("/edit_Desa",function(){
    return redirect("/");
});


Route::post('/add_layanan',[desaController::class, "add_layanan"])->middleware('isAdmin');
Route::get("/add_layanan",function(){
    return redirect("/");
});
Route::post('/edit_layanan',[desaController::class, "edit_layanan"])->middleware('isAdmin');
Route::get("/edit_layanan",function(){
    return redirect("/");
});
Route::get('/hapus_layanan/{id}', [desaController::class,"hapus_layanan"])->middleware('isAdmin');

Route::post('/edit_lokasi', [desaController::class,"edit_lokasi"])->middleware('isAdmin');
Route::get("/edit_lokasi",function(){
    return redirect("/");
});


// ==============================  STRUKTUR DESA ==============================
Route::get('/struktur_desa', [strukturController::class, 'halamanStruktur'])->middleware('isAdmin');

Route::post('/add_struktur',[strukturController::class, "add_struktur"])->middleware('isAdmin');
Route::get("/add_struktur",function(){
    return redirect("/");
});
Route::post('/edit_Struktur',[strukturController::class, "edit_Struktur"])->middleware('isAdmin');
Route::get("/edit_Struktur",function(){
    return redirect("/");
});

Route::get('/hapus_struktur/{id}', [strukturController::class,"hapus_struktur"])->middleware('isAdmin');

// ==============================  INFORMASI DUSUN ==============================
Route::get('/info_dusun', [dusunController::class,'halamanDusun'])->middleware('isAdmin');

Route::post('/add_dusun',[dusunController::class, "add_dusun"])->middleware('isAdmin');
Route::get("/add_dusun",function(){
    return redirect("/");
});
Route::post('/edit_dusun',[dusunController::class, "edit_dusun"])->middleware('isAdmin');
Route::get("/edit_dusun",function(){
    return redirect("/");
});

Route::get('/hapus_dusun/{id}', [dusunController::class,"hapus_dusun"])->middleware('isAdmin');


// ==============================  BERITA ==============================
Route::get('/berita_desa', [beritaController::class,'halamanBerita'])->middleware('isAdmin');


Route::post('/add_berita',[beritaController::class, "add_berita"])->middleware('isAdmin');
Route::get("/add_berita",function(){
    return redirect("/");
});
Route::post('/edit_berita',[beritaController::class, "edit_berita"])->middleware('isAdmin');
Route::get("/edit_berita",function(){
    return redirect("/");
});

Route::get('/hapus_berita/{id}', [beritaController::class,"hapus_berita"])->middleware('isAdmin');

// ==============================  INFORMASI AKUN ==============================
Route::get('/info_akun', [infoAkunController::class,'halamanAkun'])->middleware('isAdmin');
Route::post('/add_token',[infoAkunController::class,'add_token'])->middleware('isAdmin');
Route::get("/add_token",function(){
    return redirect("/");
});

Route::post('/edit_akun',[infoAkunController::class, "edit_akun"])->middleware('isAdmin');
Route::get("/edit_akun",function(){
    return redirect("/");
});
Route::get('/hapus_akun/{id}', [infoAkunController::class,"hapus_akun"])->middleware('isAdmin');


