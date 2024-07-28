<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="LandingPage/images/logo/logoSroyo.png">
    <link rel="icon" type="image/png" href="LandingPage/images/logo/logoSroyo.png">
    <title>
        Administrasi Sroyo
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="administrator/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="administrator/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="administrator/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"></link>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link id="pagestyle" href="administrator/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <style>
        #tambahLayanan{
            background-color: rgb(0, 159, 66);
            padding: 5px 20px;
            border-radius: 20px;     
            color: white;       
        }
        #tambahLayanan:hover{
            background-color: rgb(107, 255, 107); 
            transition: .3s; 
            color: black;      
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
                <img src="LandingPage/images/logo/logoSroyo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Sroyo Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav aside-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/halamanAdmin">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info_desa">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Informasi Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="struktur_desa">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Struktur Perangkat Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="info_dusun">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Informasi Dusun</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/berita_desa">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Berita</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/info_akun">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Informasi Akun</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keluar">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sign-out text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sign-out text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Halaman Utama</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Administrasi</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Struktur Perangkat Desa</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Struktur Perangkat Desa</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Struktur Perangkat Desa Sroyo</h6>
                            <button data-bs-toggle="modal" data-bs-target="#formAddStruktur" style="border: none;" id="tambahLayanan" style="">Tambah</button>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2" style="height: 500px;overflow-y: auto;">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($struktur as $strukturs )
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="my-auto">
                                                        <img src="{{$strukturs->foto}}" width="130px" height="130px" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center font-weight-bold mb-0">{{$strukturs->nama}}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center font-weight-bold mb-0">{{$strukturs->namaJabatan}}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/hapus_struktur/{{$strukturs->id}}" class="btn btn-link btn-icon-only btDDDn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <button onclick="openModal('{{$strukturs->nama}}', '{{$strukturs->jabatan}}', '{{$strukturs->namaJabatan}}','{{$strukturs->foto}}', '{{$strukturs->id}}')" class="btn btn-link text-secondary mb-0">
                                                    <i class="fa fa-pen text-xs"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
   
    {{-- Add Struktur --}}
    <div class="modal fade " id="formAddStruktur" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formAddStrukturLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formAddStrukturLabel">Tambah Struktur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/add_struktur" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <input required type="file" class="form-control" accept=".jpg , .jpeg , .png" name="foto" placeholder="Foto" aria-label="Foto" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap mb-3 mt-3">
                        <span class="input-group-text" id="addon-wrapping">Nama : </span>
                        <input required type="text" class="form-control" name="nama" placeholder="Nama" aria-label="nama" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Jabatan : </span>
                        <select name="jabatan" class="form-select" aria-label="Default select example">
                            @foreach ($jabatan as $jabatans )
                                <option style="text-transform: capitalize;" value="{{$jabatans->id}}">{{ $jabatans->namaJabatan}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    
    {{-- edit struktur --}}
    <div class="modal fade " id="formEditStruktur" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formStrukturLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formStrukturLabel">Edit Struktur</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_Struktur" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <img src="" width="100%" height="250px" id="fotoStruktur" alt="">
                    <div class="input-group flex-nowrap mt-3">
                        <input type="file" class="form-control" accept=".jpg , .jpeg , .png" name="foto" placeholder="Nama" aria-label="nama" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap mt-3 mb-3">
                        <span class="input-group-text" id="addon-wrapping">Nama : </span>
                        <input required type="text" id="namaInput" class="form-control" name="nama" placeholder="nama" aria-label="nama" aria-describedby="addon-wrapping">
                    </div>
                    <div style="font-size: 15px;">Jabatan saat ini : <span class="font-bold" style="color: black;text-transform: capitalize" id="jabatanNow"></span></div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">jabatan : </span>
                        <input type="hidden" name="Strukturs" id="Strukturs" >
                        <select name="jabatan" class="form-select" aria-label="Default select example">
                            @foreach ($jabatan as $jabatans )
                                <option style="text-transform: capitalize;" value="{{$jabatans->id}}">{{ $jabatans->namaJabatan}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script>
        function openModal(nama, jabatanId, namaJabatan,foto, id) {
            // Mengatur nilai input Visi pada modal
            document.getElementById('namaInput').value = nama;
            document.getElementById('jabatanNow').innerHTML = namaJabatan;
            document.getElementById('Strukturs').value = id;
            
            document.getElementById('fotoStruktur').src = foto;
            // Membuka modal
            var myModal = new bootstrap.Modal(document.getElementById('formEditStruktur'), {
                keyboard: false
            });
            myModal.show();
        }
    </script>

    {{-- modal toast --}}
    @if (session("success_toast"))
    <script>
        Swal.fire({
            title: "Sukses",
            text: "{{ session('success_toast') }}", // Mengambil pesan dari session
            icon: "success"
        });
    </script>
    @endif
        
    @if (session("error_toast"))
    <script>
      Swal.fire({
          title: "Gagal",
          text: "{{ session('error_toast') }}", // Mengambil pesan dari session
          icon: "error"
      });
    </script>
            @endif
    <script src="administrator/assets/js/core/popper.min.js"></script>
    <script src="administrator/assets/js/core/bootstrap.min.js"></script>
    <script src="administrator/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="administrator/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="administrator/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>