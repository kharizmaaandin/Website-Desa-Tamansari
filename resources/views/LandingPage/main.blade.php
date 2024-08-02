<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Desa Tamansari</title>

    <!-- Bootstrap core CSS -->
    <link href="LandingPage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="LandingPage/assets/css/fontawesome.css">
    <link rel="stylesheet" href="LandingPage/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="LandingPage/assets/css/owl.css">
    <link rel="stylesheet" href="LandingPage/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="LandingPage/assets/images/logo-tamansari.PNG" />
    <style>
        .card_layanan {
            display: none;
        }

        .card_layanan.show {
            display: block;
            filter: drop-shadow(0px 20px 20px rgb(199, 199, 199));

        }

        .btn-slide {
            border: none;
            font-size: 40px;
            padding: 5px 10px 5px 10px;
            background: rgba(230, 230, 230, 0.775);
        }

        .btn-slide:hover {
            background: rgba(102, 102, 102, 0.775);
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- Header Navigasi Atas -->
    <!-- <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> tamansari@gmail.com</li>
                        <li><i class="fa fa-map"></i> Tamansari, Kec. Kerjo, Kab. Karanganyar, Jawa Tengah, Indonesia</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/pesonatamansariofficial/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Header Navigasi End -->

    <!-- ***** Header Navigasi Atas bagian 2 ***** -->
    <header class="header-area header-sticky" style="position: fixed;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" style="display: flex; align-items: center; justify-content: space-between; height: 100px;">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo" style="display: flex; align-items: center; text-decoration: none;">
                            <img src="LandingPage/assets/images/logo-tamansari.PNG" alt="Logo" style="height: 40px; width: auto; margin-right: 10px;">
                            <h1 style="margin: 0; color: inherit; font-size: 24px;">Tamansari</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="list-style: none; display: flex; align-items: center; margin: 0; padding: 0;">
                            <li style="display: flex; align-items: center;"><a href="#profil-desa" class="active" style="padding: 0 15px;">Profil Desa</a></li>
                            <li style="display: flex; align-items: center;"><a href="#pemerintahan" style="padding: 0 15px;">Pemerintahan</a></li>
                            <li style="display: flex; align-items: center;"><a href="#informasi-publik" style="padding: 0 15px;">Informasi Publik</a></li>
                            @auth
                            <li style="display: flex; align-items: center;"><a href="/halamanAdmin" style="padding: 0 15px;">{{ session('nama') }}</a></li>
                            @endauth
                            @if (!session('role'))
                            <li style="display: flex; align-items: center;"><a href="/Masuk" style="padding: 0 15px;">Login</a></li>
                            @endif
                            <!-- <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li> -->
                        </ul>
                        <a class="menu-trigger" style="text-decoration: none;">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>




    <!-- ***** Header Navigasi Atas Bagian 2 End ***** -->


    <!-- Bagian foto carousel -->
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Tamansari, <em>Kerjo</em></span>
                    <h2><br>Web Desa Tamansari</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <span class="category">Pesona, <em>Tamansari</em></span>
                    <h2>Kolam Bermain<br>Pesona Taman Sari</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <span class="category">Balai Desa, <em>Tamansari</em></span>
                    <h2>Foto Bersama<br>KKN Tim II Undip 2024</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian foto carousel end -->


    <!-- Tentang Desa  -->
    <div class="featured section" id="profil-desa">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image">
                        <img src="{{ $fotoDesa }}" style="max-width: 100%;" height="100%" alt="">
                        <a href=""><img src="LandingPage/assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading" style="font-size: 15px;">
                        <h6>Tentang Kami</h6>
                        <h3>Desa Tamansari <br> Kecamatan Kerjo</h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Deskripsi Desa
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="text-align: justify;">
                                    {{ $deskripsiDesa }}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Visi Kepala Desa
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        @foreach ($visi as $visis )
                                        <li>
                                            {{ $visis->visi }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Misi Kepala Desa
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        @foreach ($misi as $misis )
                                        <li>
                                            {{ $misis->misi }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="LandingPage/assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                <h4><span style="font-size: 18px;font-weight: bold">Jumlah Laki-Laki</span><br><span>{{ $jmlLaki }}</span></h4>
                            </li>
                            <li>
                                <img src="LandingPage/assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                <h4><span style="font-size: 16px;font-weight: bold">Jumlah Perempuan</span><br><span>{{ $jmlPerempuan }}</span></h4>
                            </li>
                            <li>
                                <img src="LandingPage/assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                                <h4><span style="font-size: 18px;font-weight: bold">Jumlah Dusun</span><br><span>{{ $dusunCount }}</span></h4>
                            </li>
                            {{-- <li>
                                <img src="LandingPage/assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                                <h4>Safety<br><span>24/7 Under Control</span></h4>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video section" id="pemerintahan">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <!-- <h6>| Struktur Organisasi</h6> -->
                        <!-- <h4>| Struktur Organisasi</h4> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-frame">
                        <!-- <img src="LandingPage/assets/images/thumbnail.jpeg" alt="" style="" width="300px" height="250px"> -->
                        <!-- <a href="https://youtu.be/lUsa3uU6qvc" target="_blank"><i class="fa fa-play"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Struktur Organisasi</h3>
                            </div>
                            @foreach ($struktur as $strukturs )
                            <div class="col-lg-2" style="margin-top: 40px">
                                <div class="strukturList">
                                    <div style="margin-bottom: 20px;">
                                        <img src="{{$strukturs->foto}}" style="width: 100%; height: 200px;  border-radius: 20px;" alt="">
                                    </div>
                                    <p class="count-text "><b>{{$strukturs->nama}}</b> <br>{{$strukturs->namaJabatan}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section best-deal" id="informasi-publik">
        <div style="text-align: center; margin-bottom: 10px;">
            <button style="font-size: 30px; border: none; background: none; color: black; font-weight: bold;" type="button" disabled aria-selected="true">Dusun di TamanSari</button>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="tabs-content">
                    <div class="row">

                        <div class="nav-wrapper">
                            <ul class="nav nav-tabs" role="tablist" style="justify-content: center; margin-left: 25px; margin-right: 20px;">
                                @foreach ($dusun as $index => $dusuns)
                                <li class="nav-item" role="presentation" style="margin-top: 10px;">
                                    <button class="nav-link @if($index == 0) show active @endif" id="{{$dusuns->namaDusun}}-tab" data-bs-toggle="tab" data-bs-target="#{{$dusuns->namaDusun}}" type="button" role="tab" aria-controls="{{$dusuns->namaDusun}}" aria-selected="true">{{$dusuns->namaDusun}}</button>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            @foreach ($dusun as $index => $dusuns)
                            <div class="tab-pane fade @if($index == 0) show active @endif" id="{{$dusuns->namaDusun}}" role="tabpanel" aria-labelledby="{{$dusuns->namaDusun}}-tab">
                                <div class="row" style="gap: 1.5rem;">
                                    <div class="col-lg-3" style="margin-left: 68px;">
                                        <div class="info-table">
                                            <ul>
                                                <li>Jumlah Laki-laki <span style="font-size: 15px;">{{ $dusuns->jmlLaki}}</span></li>
                                                <li>Jumlah Perempuan <span style="font-size: 15px;">{{ $dusuns->jmlPerempuan}}</span></li>
                                                <li>Jumlah RT <span style="font-size: 15px;">{{ $dusuns->jmlRt}}</span></li>
                                                <li>Jumlah RW <span style="font-size: 15px;">{{ $dusuns->jmlRw}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="text-align: center;">
                                        <img src="{{ $dusuns->foto}}" width="100%" class="fotoDusun" height="300px" alt="">
                                    </div>
                                    <div class="col-lg-2" style="margin-left: 20px;">
                                        <div style="">
                                            <img class="fotoKadus" src="{{ $dusuns->fotoKadus}}" width="100%" height="300px" alt="">
                                            <p style="text-align: center; margin-top: 20px; color: black; font-weight: bold;">{{$dusuns->nama}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="properties section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Layanan</h6>
                        <h2>Pelayanan Desa Tamansari</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($layanan as $layanans )
                <div class="col-lg-4 col-md-6 card_layanan">
                    <div class="item" style="height: 300px;">
                        <span class="category" style="display: flex; text-align: center; height: 50px;align-items: center;justify-content: center">{{$layanans->namaLayanan}}</span>
                        <div style="display: flex; text-align: center; height: 150px;align-items: center;justify-content: center">
                            <p style="text-align: center;">{{$layanans->deskripsiLayanan}}</p>
                        </div>
                        {{-- <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div> --}}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-carousel" style="display: flex; justify-content: space-between; ">
                <button class="btn-slide" id="btn-slide-left" onclick="plusIndeks(-1)">
                    << /button>
                        <button class="btn-slide" id="btn-slide-right" onclick="plusIndeks(1)">></button>
            </div>
        </div>
    </div>

    <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Contact Us</h6>
                        <h2>Get In Touch With Our Agents</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe src="{{ $lokasi->linkLokasi }}" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="LandingPage/assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>010-020-0340<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="LandingPage/assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>info@villa.co<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-5">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © TIM II KKN Universitas Diponegoro</p>
            </div>
        </div>
    </footer>

    <script>
        var slideIndeks = 1;
        var jumlahSlide = 3;

        showSlides(slideIndeks);

        function plusIndeks(n) {
            showSlides(slideIndeks += n);
        }

        function showSlides(n) {
            var i;
            var slide = document.getElementsByClassName("card_layanan");
            var totalSlides = slide.length;


            if (n > totalSlides - jumlahSlide + 1) {
                slideIndeks = 1;
            } else if (n < 1) {
                slideIndeks = totalSlides - jumlahSlide + 1;
            }


            for (i = 0; i < totalSlides; i++) {
                slide[i].classList.remove('show');
            }


            for (i = 0; i < jumlahSlide; i++) {
                if ((slideIndeks - 1 + i) < totalSlides) {
                    slide[slideIndeks - 1 + i].classList.add('show');
                }
            }
        }
    </script>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="LandingPage/vendor/jquery/jquery.min.js"></script>
    <script src="LandingPage/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="LandingPage/assets/js/isotope.min.js"></script>
    <script src="LandingPage/assets/js/owl-carousel.js"></script>
    <script src="LandingPage/assets/js/counter.js"></script>
    <script src="LandingPage/assets/js/custom.js"></script>

</body>

</html>