<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="LandingPage/images/logo/logoSroyo.png">
    <link rel="icon" type="image/png" href="LandingPage/images/logo/logoSroyo.png">
    <title>
        Administrasi Tamansari
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        .btn-tambah:hover{
            scale: 1.1;
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="  " target="_blank">
                <img src="LandingPage/assets/images/logo-tamansari.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Tamansari Dashboard</span>
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
                    <a class="nav-link active" href="/info_desa">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Informasi Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="struktur_desa">
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
                {{-- <li class="nav-item">
                    <a class="nav-link " href="/berita_desa">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Berita</span>
                    </a>
                </li> --}}
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Informasi Desa</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Informasi Desa</h6>
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
                            <h6>Informasi Desa Tamansari</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi Desa</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Visi 
                                                <button data-bs-toggle="modal" data-bs-target="#formAddVisi" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto btn-tambah" title="tambah visi" style="width: 30px;margin-left: 20px;" ><i class="fa fa-plus"></i></button>

                                            </th>
                                            <th class="text-center text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Misi
                                                <button data-bs-toggle="modal" data-bs-target="#formAddMisi" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto btn-tambah" title="tambah misi" style="width: 30px;margin-left: 20px;" ><i class="fa fa-plus"></i></button>
                                            </th>
                                            <th class="text-center text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1" >
                                                    <div class="d-flex flex-column justify-content-center">
                                                       <img src="{{ $foto }}" width="150px" height="100px" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td >
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p >{{ $deskripsi }}</p>  
                                                </div>
                                            </td>
                                            <td  >
                                                <div class="d-flex flex-column justify-content-center">
                                                    <ul type="none" >
                                                        @foreach ($visi as $visis )
                                                        <li style="display: flex;">
                                                            <p style="margin-right: 20px;">{{ $visis->visi}}</p>  
                                                            <a href="/hapus_visi/{{$visis->id}}" class="btn btn-link btn-icon-only btDDDn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <button onclick="openModal('{{ $visis->visi }}','{{ $visis->id }}')" class="btn btn-link btn-icon-only btDDDn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-pen" aria-hidden="true"></i></button>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </td>
                                            <td >
                                                <ul style="" type="none">
                                                    @foreach ($misi as $misis )
                                                    <li style="display: flex;">
                                                        <p style="margin-right: 20px">{{ $misis->misi}}</p>
                                                        <a href="/hapus_misi/{{$misis->id}}" class="btn btn-link btn-icon-only btDDDn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <button onclick="openModalMisi('{{ $misis->misi }}','{{ $misis->id }}')" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-pen" aria-hidden="true"></i></button>
                                                    </li>
                                                    
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td  style="text-align: center;">
                                                <button onclick="openModalDesa('{{ $deskripsi }}','{{ $foto }}','{{$id}}')" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" ><i class="fa fa-pen" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Pelayanan Desa Tamansari</h6>
                            <button data-bs-toggle="modal" data-bs-target="#formAddLayanan"  id="tambahLayanan" style="border: none;">Tambah</button>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Layanan</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi Layanan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($layanan as $layanans)
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center font-weight-bold mb-0">{{ $layanans->namaLayanan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-center font-weight-bold mb-0">{{ $layanans->deskripsiLayanan }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/hapus_layanan/{{$layanans->id}}"><i class="fa fa-trash" style="font-size: 12px;"></i></a>
                                                <button onclick="openModalLayanan('{{ $layanans->namaLayanan }}', '{{ $layanans->deskripsiLayanan }}', '{{ $layanans->id }}')" class="btn btn-link text-secondary mb-0">
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
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="text-transform: capitalize;">LOKASI DESA TAMANSARI</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Lokasi  </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="my-auto">
                                                        <iframe src="{{ $lokasi->linkLokasi }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <button onclick="openModalLokasi('{{$lokasi->id}}', '{{$lokasi->linkLokasi}}')" class="btn btn-link text-secondary mb-0">
                                                    <i class="fa fa-pen text-xs"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   {{-- Form Modal --}}
    {{-- edit visi --}}
    <div class="modal fade " id="formEditVisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formVisiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formVisiLabel">Edit Visi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_visi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Visi : </span>
                        <input type="hidden" name="Visis" id="Visis" >
                        <input required type="text" id="VisiInput" class="form-control" name="Visi" placeholder="Visi" aria-label="Visi" aria-describedby="addon-wrapping">
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

    {{-- edit misi --}}
    <div class="modal fade " id="formEditMisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formMisiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formMisiLabel">Edit Misi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_misi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Misi : </span>
                        <input type="hidden" name="Misis" id="Misis" >
                        <input required type="text" id="MisiInput" class="form-control" name="Misi" placeholder="Misi" aria-label="Misi" aria-describedby="addon-wrapping">
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


        {{-- add visi --}}
    <div class="modal fade " id="formAddVisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formAddVisiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formAddVisiLabel">Tambah Visi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/add_visi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Visi : </span>
                        <input required type="text" class="form-control" name="visi" placeholder="visi" aria-label="visi" aria-describedby="addon-wrapping">
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
        {{-- add misi --}}
    <div class="modal fade " id="formAddMisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formAddMisiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formAddmisiLabel">Tambah Misi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/add_misi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Misi : </span>
                        <input required type="text" class="form-control" name="misi" placeholder="misi" aria-label="misi" aria-describedby="addon-wrapping">
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

        {{-- add layanan --}}
    <div class="modal fade " id="formAddLayanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formAddLayananLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formAddLayananLabel">Tambah Layanan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/add_layanan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">Layanan : </span>
                        <input required type="text" class="form-control" name="layanan" placeholder="layanan" aria-label="layanan" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Deskripsi Layanan : </span>
                        <input required type="text" class="form-control" name="deskripsi" placeholder="deskripsi" aria-label="deskripsi" aria-describedby="addon-wrapping">
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

          {{-- edit layanan --}}
    <div class="modal fade " id="formEditLayanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLayananLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formLayananLabel">Edit Layanan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_layanan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap mb-2">
                        <span class="input-group-text" id="addon-wrapping">Layanan : </span>
                        <input required type="text" id="LayananInput" class="form-control" name="Layanan" placeholder="Layanan" aria-label="Layanan" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Deskripsi :</span>
                        <input type="hidden" name="Layanans" id="Layanans" >
                        <input required type="text" id="DeskripsiLayananInput" class="form-control" name="DeskripsiLayanan" placeholder="Deskripsi Layanan" aria-label="DeskripsiLayanan" aria-describedby="addon-wrapping">
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

    {{-- edit foto dan deskripsi desa --}}
    <div class="modal fade " id="formEditDesa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formDesaLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formDesaLabel">Edit Desa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_Desa" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p style="font-size: 15px;font-weight: bold; text-transform: capitalize;">Foto Saat Ini</p>
                    <img src="" id="FotoDesaModal" width="100%" height="250px" alt="">
                    <div class="input-group flex-nowrap" style="margin-bottom: 20px; margin-top: 20px;">
                        <span class="input-group-text" id="addon-wrapping"></span>
                        <input type="file" accept=".jpg, .jpeg, .png" id="FotoInput" class="form-control" name="fotoDesa" placeholder="FotoModal" aria-label="FotoModal" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping1">Deskripsi : </span>
                        <input type="hidden" name="idTentang" id="idTentang" >
                        <input required type="text" id="DeskripsiInput" class="form-control" name="Deskripsi" placeholder="deskripsiDesa" aria-label="Deskripsi" aria-describedby="addon-wrapping">
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
            {{-- edit lokasi --}}
            <div class="modal fade " id="formEditLokasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLokasiLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="formLokasiLabel">Edit Lokasi</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/edit_lokasi" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div>
                                <h5>Lokasi saat ini</h5>
                                <iframe width="100%" height="250px;" id="lokasinow" src="" frameborder="0"></iframe>
                            </div>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Lokasi : </span>
                                <input type="hidden" name="Lokasis" id="Lokasis" >
                                <input required type="text" id="LokasiInput" class="form-control" name="Lokasi" placeholder="Masukkan Link Lokasi" aria-label="Lokasi" aria-describedby="addon-wrapping">
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
      <script>
        function openModal(visi, visi2) {
            // Mengatur nilai input Visi pada modal
            document.getElementById('VisiInput').value = visi;
            document.getElementById('Visis').value = visi2;
            // Membuka modal
            var myModal = new bootstrap.Modal(document.getElementById('formEditVisi'), {
                keyboard: false
            });
            myModal.show();
        }
        function openModalMisi(misi, misi2) {
            // Mengatur nilai input Misi pada modal
            document.getElementById('MisiInput').value = misi;
            document.getElementById('Misis').value = misi2;
            // Membuka modal
            var myModal = new bootstrap.Modal(document.getElementById('formEditMisi'), {
                keyboard: false
            });
            myModal.show();
        }
        function openModalDesa(Deskripsi, Foto, id) {
            // Mengatur nilai input Deskripsi pada modal
            document.getElementById('DeskripsiInput').value = Deskripsi;
            document.getElementById('FotoDesaModal').src = Foto;
            document.getElementById('idTentang').value = id;
            // Membuka modal
            var myModal = new bootstrap.Modal(document.getElementById('formEditDesa'), {
                keyboard: false
            });
            myModal.show();
        }
        function openModalLayanan(nama, deskripsi, id) {
            // Mengatur nilai input Deskripsi pada modal
            document.getElementById('LayananInput').value = nama;
            document.getElementById('DeskripsiLayananInput').value = deskripsi;
            document.getElementById('Layanans').value = id;
            // Membuka modal
            var myModal = new bootstrap.Modal(document.getElementById('formEditLayanan'), {
                keyboard: false
            });
            myModal.show();
        }
        function openModalLokasi(id,lokasi){
            document.getElementById('lokasinow').src = lokasi;
            document.getElementById('Lokasis').value = id;
            document.getElementById('LokasiInput').value = lokasi;
            var myModal = new bootstrap.Modal(document.getElementById('formEditLokasi'), {
                    keyboard: false
                });
            myModal.show();
        }
  </script>
    <!--   Core JS Files   -->
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