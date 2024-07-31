<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="LandingPage/images/logo/logoSroyo.png">
    <link rel="icon" type="image/png" href="LandingPage/images/logo/logoSroyo.png">
    <title>
        Dashboard Admin Tamansari
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="administrator/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="administrator/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="administrator/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"></link>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const sessionName = "{{ session('nama')}}";
    const options = {
        strings: [`Selamat Datang ${sessionName}`],
        typeSpeed: 100,
        backSpeed: 25,
        showCursor: true,
        cursorChar: '|',
        loop: true
    };
    new Typed('#typedText', options);
});
</script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="pagestyle" href="administrator/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
                <img src="LandingPage/images/logo/logoSroyo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Tamansari Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/halamanAdmin">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/info_desa">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ session("username" )}}</span>
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
        <div class="text-center" style="color: white; font-weight: bold;font-size: 30px;">
            <span style="text-transform: capitalize;" id="typedText"></span>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Warga</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $jmlWarga }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Dusun</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $jmlDusun }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="fa fa-home text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah RT</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $jumlahRt }}

                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="fa fa-address-book diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah RW</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $jumlahRt }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="fa fa-address-book text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header pb-0 p-3 d-flex" style="justify-content: space-between; align-items: center;">
                            <h6 class="mb-0">Jabatan</h6>
                            <button style="" type="button" class="btn btn-primary" data-bs-toggle="modal" style="" data-bs-target="#formJabatan">
                                +
                              </button>
                        </div>
                        <div class="card-body p-3" style="height: 400px; overflow-y: auto;">
                            <ul class="list-group">
                                @foreach ($jabatan as $jabatans )
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-tag text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 style="text-transform: capitalize" class="mb-1 text-dark text-sm">{{ $jabatans->namaJabatan}}</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="/hapus_jabatan/{{$jabatans->id}}" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" onclick="openModal('{{ $jabatans->namaJabatan }}','{{ $jabatans->id }}')"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header pb-0 p-3 d-flex justify-between" style="justify-content: space-between; align-items: center;">
                            <h6 class="mb-0">Navigasi</h6>
                        </div>
                        <div class="card-body p-3" style="height: 400px; overflow-y: auto;">
                            <ul class="list-group">
                                @foreach ($navigasi as $navigasis )
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-location-arrow text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{ $navigasis->namaNavigasi }}</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" onclick="openModalNavigasi('{{ $navigasis->namaNavigasi }}','{{ $navigasis->id }}')"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Form Modal --}}
    {{-- add jabatan --}}
    <div class="modal fade " id="formJabatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formJabatanLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formJabatanLabel">Tambah Jabatan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/tambah_jabatan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input required type="text" class="form-control" name="jabatan" placeholder="Jabatan" aria-label="Jabatan" aria-describedby="addon-wrapping">
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

    {{-- edit jabatan --}}
    <div class="modal fade " id="formEditJabatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formJabatanLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formJabatanLabel">Edit Jabatan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_jabatan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="hidden" name="jabatans" id="jabatans" >
                        <input required type="text" id="jabatanInput" class="form-control" name="jabatan" placeholder="Jabatan" aria-label="Jabatan" aria-describedby="addon-wrapping">
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

    {{-- edit navigasi --}}
    <div class="modal fade " id="formEditnavigasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formnavigasiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formnavigasiLabel">Edit navigasi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edit_navigasi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="hidden" name="navigasis" id="navigasis" >
                        <input required type="text" id="navigasiInput" class="form-control" name="navigasi" placeholder="navigasi" aria-label="navigasi" aria-describedby="addon-wrapping">
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
            function openModal(namaJabatan, namaJabatan2) {
                // Mengatur nilai input jabatan pada modal
                document.getElementById('jabatanInput').value = namaJabatan;
                document.getElementById('jabatans').value = namaJabatan2;
                // Membuka modal
                var myModal = new bootstrap.Modal(document.getElementById('formEditJabatan'), {
                    keyboard: false
                });
                myModal.show();
            }
            function openModalNavigasi(namaNavigasi, namaNavigasi2) {
                // Mengatur nilai input navigasi pada modal
                document.getElementById('navigasiInput').value = namaNavigasi;
                document.getElementById('navigasis').value = namaNavigasi2;
                // Membuka modal
                var myModal = new bootstrap.Modal(document.getElementById('formEditnavigasi'), {
                    keyboard: false
                });
                myModal.show();
            }
      </script>
    <script src="administrator/assets/js/core/popper.min.js"></script>
    <script src="administrator/assets/js/core/bootstrap.min.js"></script>
    <script src="administrator/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="administrator/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="administrator/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
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