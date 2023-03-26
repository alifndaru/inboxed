@extends('frontend.layouts.newApp'.config('theme_layout'))
@section('title', trans('labels.frontend.home.title').' | '.app_name())
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/new-home.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/9a09786d9e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/slide-home.css">
</head>

<style>
    /* DOTS BANNER HOME */
    #Banner-Home:hover {
        visibility: visible;
    }

    #Banner-Home .genius-btn {
        border: 2px solid #D9D9D9;
        margin-top: 30px;
    }

    #Banner-Home .owl-dots {
        position: relative;
        bottom: 5px;
        left: 0;
        right: 0;
    }

    #Banner-Home .owl-dots .owl-dot.active {
        background-color: #7D7C7C;
    }

    #Banner-Home .owl-dots .owl-dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        margin-left: 10px;
        background-color: #D9D9D9;
    }

    /* NAV PRODUCT HOME */
    .Product-Home .owl-nav {
        position: relative;
        -webkit-transform: translateY(-150px);
        -ms-transform: translateY(-150px);
        transform: translateY(-150px);
        width: 90%;
        margin: 0 auto;
    }

    .Product-Home .owl-nav .owl-prev {
        float: left;
        width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        margin: 0 5px;
        border-radius: 15px;
        background-color: #2D3260;
        position: relative;
        top: 10%;
        left: -12%;
    }

    .Product-Home .owl-nav .owl-next {
        float: right;
        width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        margin: 0 5px;
        border-radius: 15px;
        background-color: #2D3260;
        position: relative;
        top: 10%;
        right: -12%;
    }



    /* NAV TEACHER HOME */
    .Teacher-Home .owl-nav {
        position: relative;
        -webkit-transform: translateY(-250px);
        -ms-transform: translateY(-250px);
        transform: translateY(-250px);
        width: 90%;
        margin: 0 auto;
    }

    .Teacher-Home .owl-nav .owl-prev {
        float: left;
        width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        margin: 0 5px;
        border-radius: 15px;
        background-color: #2D3260;
        position: relative;
        top: 10%;
        left: -20%;
    }

    .Teacher-Home .owl-nav .owl-next {
        float: right;
        width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        margin: 0 5px;
        border-radius: 15px;
        background-color: #2D3260;
        position: relative;
        top: 10%;
        right: -20%;
    }
    body{
        font-family: 'Lexend';
    }
</style>

<body>
    @section('content')
        @include('frontend.layouts.partials.slider')
        <div class="full-container-b p-atas-20 p-bawah-20">
            <div class="center m-bawah-15">Partnership with :</div>
            <div class="auto center">
    
                <img class="triples" src="assets/img/Logo Kecil-triples.png" alt="Triple-s">
                <img class="ikadin" src="assets/img/Logo Kecil-ikadin.png" alt="Logo Ikadin">
                <img class="M" src="assets/img/Logo Kecil-0.png" alt="">
                <img class="bnsp" src="assets/img/Logo Kecil-bnsp.png" alt="BNSP">
            </div>
        </div> <!-- CONTAINER PARTNERSHIP -->
    
    
        <!-- =================BANNER=============== -->
        <div class="full-container-g padding-20 m-atas-50">
            <div class="">
    
                <div id="Banner-Home" class="Banner-Home">
                    <div class="">
                        <a href="#">
                            <img class="auto slide-banner-home" src="assets/img/banner.png" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="#">
                            <img class="auto slide-banner-home" src="assets/img/banner.png" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="#">
                            <img class="auto slide-banner-home" src="assets/img/banner.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
    
        <!-- =================  OUR NEAREST WEBINAR  =============== -->
        <div class="auto container-w m-atas-50 m-bawah-50">
            <div class="font-40 judul-produk">
                <div class="center">
                    OUR NEAREST <span class="bold">WEBINAR</span>
                </div>
                <!-- =================  SEARCH  =============== -->
                <div class="f-kanan">
                    <button class="logo-search-produk index-1" style="font-size: 0.5rem;" type="submit">
                        <i class="fa fa-search fa-3x"></i>
                    </button>
                    <input class="font-18 search-produk" type="search" placeholder="Search" name="" id="">
                </div>
            </div> <!-- JUDUL -->
            <div class="center">
    
                <!-- <div class="next"> -->
                <!-- <img class="next1" src="assets/img/next1.png" alt=""> -->
                <!-- </div> -->
    
                <!-- =================  PRODUK-1  =============== -->
                <!-- Slider container -->
                <div id="Product-Home" class="Product-Home">
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                    <!-- slider  -->
                    <div class="auto">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk.png" alt="">
                                <a href="#">
                                    <div class="detail">Webinar Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
    
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10; color:#E7F6F2;"> Cara Mengelola Keuangan Untuk Millenial  </div>
                                <div class="font-12 m-kiri-10"> Instructure : </div>
                                <div class="font-12 width-232 m-kiri-10"> Dr. Ir. Alif Ndaru Kusuma Phd.M.komMMSI </div>
    
                                <!-- =================  TANGGAL-PRODUK  =============== -->
                                <div class="kalender">
                                    <img class="kalender" src="assets/img/kalender.png" alt="">
                                    <div class="font-18">24 April 2022</div>
                                </div>
                                <div class="alarm m-negativ">
                                    <img class="alarm m-negativ" src="assets/img/alarm.png" alt="">
                                    <div class="font-18">13.00 - 16.00 WIB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider  -->
                </div>
                <!-- =================  PRODUK  =============== -->
    
                <!-- <div class="next">
                    <img class="next2" src="assets/img/next2.png" alt="">
                </div> -->
            </div>
        </div>
    
    
        <!-- =================  OUR POPULAR COURSE  =============== -->
        <div class="auto container-w m-atas-50 m-bawah-50">
            <div class="font-40 judul-produk">
                <div class="center">
                    OUR POPULAR <span class="bold">COURSE</span>
                </div>
                <!-- =================  SEARCH  =============== -->
                <div class="f-kanan">
                    <button class="logo-search-produk index-1" style="font-size: 0.5rem;" type="submit">
                        <i class="fa fa-search fa-3x"></i>
                    </button>
                    <input class="font-18 search-produk" type="search" placeholder="Search" name="" id="search-course">
                </div>
            </div> <!-- JUDUL -->
            <div class="center">
    
                <!-- =================  PRODUK-1  =============== -->
                <!-- Slider container -->
                <div id="course-search" class="Product-Home">
                    <!-- slider -->
                    @foreach ($course as $c)
                    <div class="produk-det">
                    <div class="m-bawah-10">
                        <div class="produk putih-abu left">
                            <div class="gambar-produk">
                                <div class="keterangan-produk">
                                    <div class="value-keterangan-produk courses">COURSES</div>
                                    @if($c->free == 1)
                                    <div class="value-keterangan-produk free">FREE</div>
                                    @endif
                                </div>
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk-2.png" alt="">
                                <a href="course/{{ $c->slug }}">
                                    <div class="detail">
                                        Course Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
    
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 height-60">{{ $c->title }}</div>
                                    <div class="font-9 m-kiri-10"> instructur : </div>
                                    <div class="font-12 width-232 m-kiri-10">{{ $c->teachers[0]->first_name }} {{ $c->teachers[0]->last_name }}</div>                                    
                                    <!-- =================  HARGA-PRODUK  =============== -->
                                    <div class="container-harga-home auto">
                                        {{-- <div class="diskon inline-block">{{$appCurrency['symbol']}} {{ $c->price }}</div> --}}
                                        {{-- <div class="harga inline-block">{{$appCurrency['symbol']}} {{ $c->strike }}</div> --}}
                                         <div class="diskon inline-block">@rupiah($c->price)</div>
                                            <div class="harga inline-block">@rupiah($c->strike)</div>
                                            <br> rating :
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    <!-- slider -->
                </div>
    
                <!-- =================  PRODUK  =============== -->
            </div>
        </div>
    
        <!-- =================  OUR POPULAR BUNDLE  =============== -->
        <div class="auto container-w m-atas-50 m-bawah-50">
            <div class="font-40 judul-produk">
                <div class="center">
                    OUR POPULAR <span class="bold">BUNDLE'S</span>
                </div>
                <!-- =================  SEARCH  =============== -->
                <div class="f-kanan">
                    <button class="logo-search-produk index-1" style="font-size: 0.5rem;" type="submit">
                        <i class="fa fa-search fa-3x"></i>
                    </button>
                    <input class="font-18 search-produk" type="search" placeholder="Search" name="" id="search">
                </div>
            </div> <!-- JUDUL -->
            <div class="center">
    
                <!-- =================  PRODUK-1  =============== -->
                <!-- Slider container -->
                <div class="Product-Home">
                    <!-- slider -->
                    @foreach ($bundle as $b)
                    <div class="produk-det">
                    <div class="m-bawah-10">
                        <div class="produk putih left">
                            <div class="gambar-produk">
                                <div class="keterangan-produk">
                                    <div class="value-keterangan-produk sertification">SERTIFICATION</div>
                                    <div class="value-keterangan-produk profesion">PROFESION</div>
    
                                </div>
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk-2.png" alt="">
                                <a href="bundle/{{ $b->slug }}">
                                    <div class="detail">
                                        Bundle Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
    
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20">{{ $b->title }}</div>
                                <div class="font-9 m-kiri-10"> instructur : </div>
                                <div class="font-9 width-232 m-kiri-10">{{ $b->courses[0]->teachers[0]->first_name}} {{ $b->courses[0]->teachers[0]->last_name}}</div>
    
                                <!-- =================  HARGA-PRODUK  =============== -->
                                <div class="container-harga-home auto">
                                    <div class="harga">Rp. {{ $b->price }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    <!-- slider -->
                    <!-- slider -->
                    @foreach ($course as $c)
                    <div class="produk-det">
                    <div class="m-bawah-10">
                        <div class="produk putih-abu left">
                            <div class="gambar-produk">
                                <div class="keterangan-produk">
                                    <div class="value-keterangan-produk courses">COURSES</div>
                                    @if($c->free == 1)
                                    <div class="value-keterangan-produk free">FREE</div>
                                    @endif
                                </div>
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk-2.png" alt="">
                                <a href="course/{{ $c->slug }}">
                                    <div class="detail">
                                        Course Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
    
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 height-60">{{ $c->title }}</div>
                                    <div class="font-9 m-kiri-10"> instructur : </div>
                                    <div class="font-12 width-232 m-kiri-10">{{ $c->teachers[0]->first_name }} {{ $c->teachers[0]->last_name }}</div>                                    
                                    <!-- =================  HARGA-PRODUK  =============== -->
                                    <div class="container-harga-home  auto">
                                        <div class="harga inline-block">{{$appCurrency['symbol']}} {{ $c->strike }}</div>
                                    </div>
                                    <div class="ket-bundle auto">
                                        <!-- <div class="ket-bundle-popular">Bussiness, tax & accounting</div> -->
                                        <!-- <div class="ket-bundle-popular">Information Technologies</div> -->
                                        <div class="ket-bundle-popular">Law</div>
                                        <div class="">|</div>
                                        <div class="bundle-student-courses">0 Student</div>
                                        <div class="">|</div>
                                        <div class="bundle-student-courses">8 Courses</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    <!-- slider -->

                </div>
    
                <!-- =================  PRODUK  =============== -->
            </div>
        </div>
    
    
    
        <!-- =================  CATEGORY  =============== -->
        <div class="full-container-g center m-bawah-50 padding-10 hitam">
            <div class="font-36 m-bawah-25">Browse Courses</div>
            <div class="m-bawah-25">
                <input class="search" type="search" placeholder="Type what do you want to learn today?" name="" id="">
                <button class="search-button right-622">Search</button>
            </div>
            <div class="font-36 m-bawah-25">Or Choose Category</div>

            <div class="kategori">
                @foreach($category as $c)
                <a href="#">
                    <div class="container-category p-atas-25">
                        <div class="{{$c->icon}} fa-2x" style="margin-bottom: 20px;"></div>
                        <div class="font-18 ">{{$c->name}}</div>
                    </div>
                </a>
                @endforeach
            </div>
    
            <div class="kategori">
                <a href="">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/IT.png" alt="">
                        <div class="font-18 ">Technology Informasi</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/law.png" alt="">
                        <div class="font-18 ">Law</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/management.png" alt="">
                        <div class="font-18 ">Management</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/human.png" alt="">
                        <div class="font-18 ">Humanities</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/engineer.png" alt="">
                        <div class="font-18 ">Science & Engineering</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/art.png" alt="">
                        <div class="font-18 ">Art & Desaign</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/accounting.png" alt="">
                        <div class="font-18 ">Business, Tax & Accounting</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/hospital.png" alt="">
                        <div class="font-18 ">Hospitaly & Tourism</div>
                    </div>
                </a>
    
                <a href="#">
                    <div class="container-category p-atas-25">
                        <img src="assets/img/icon-kategori/communication.png" alt="">
                        <div class="font-18 ">Communication</div>
                    </div>
                </a>
            </div>
        </div>
    
    
        <!-- =================  TEACHER  =============== -->
        <div class="full-container-b-opacity rlt " style="height: 500px;"></div>
        <div class="teacher red" style="margin-top: -500px;">
            <div class="rlt width-500 auto">
                <div class="font-36 center p-atas-20 putih m-bawah-20">Inboxed <span class="bold">Teacher</span></div>
                <div class="center our-teacher-home">
                    <!-- next -->
                    <!-- <div class="next">
                        <img class="next1" src="assets/img/next1.png" alt="">
                    </div> -->
                    <div class="Teacher-Home">
                        {{-- <!-- SLIDER -->
                        <div class="">
                            <div class="inline-block m-kanan-20 m-kiri-20 teach">
                                <div class="profile-teacher auto slide-teacher">
                                    <!-- PROFILE PENGAJAR - GAMBAR -->
                                    <img src="assets/img/profile-none.png" class="index-2 rlt" alt="">
                                </div>
                                <div class="container-nama-teacher">
                                    <div class="nama-teacher"></div>
                                    <div class="nama">
                                        <!-- PROFILE PENGAJAR - NAMA -->
                                        Dr. Ir. Muhammad Fadhil Darussalam M.phD
                                        <br> <br>
                                        Instructure
    
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- SLIDER -->
                        <!-- SLIDER -->
                        @foreach($teacher as $t)
                        <div class="">
                            <div class="inline-block m-kanan-20 m-kiri-20 teach">
                                <div class="profile-teacher auto slide-teacher">
                                    <!-- PROFILE PENGAJAR - GAMBAR -->
                                    <img src="assets/img/profile-none.png" class="index-2 rlt" alt="">
                                </div>
                                <div class="container-nama-teacher">
                                    <div class="nama-teacher"></div>
                                    <div class="nama">
                                        <!-- PROFILE PENGAJAR - NAMA -->
                                        {{ $t->first_name .' '. $t->last_name }}
                                        <br><br><br><br>
                                        
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- SLIDER -->
                    </div>
    
                    <div class="teach-button">
                        <button>ALL TEACHER</button>
                    </div>
                    <!-- next -->
                    <!-- <div class="next">
                        <img class="next2" src="assets/img/next2.png" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    
        <!-- =================  PAYMENT  =============== -->
        <div class="payment-home">
            <div class="judul-payment">
                <div class=""> PAYMENT METHOD</div>
            </div>
            <div class="gambar">
                <img src="assets/img/bca.jpg" alt="">
                <img src="assets/img/BNI.png" alt="">
                <img src="assets/img/bri.png" alt="">
                <img src="assets/img/gopay.png" alt="">
                <img src="assets/img/shopee.png" alt="">
                <img src="assets/img/ovo.png" alt="">
            </div>
        </div>
    @endsection

</body>    

</html>