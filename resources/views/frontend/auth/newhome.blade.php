@extends('frontend.layouts.app'.config('theme_layout'))
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/new-home.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</style>

<body>
    @include('frontend.layouts.partials.slider')

    
    <!-- =================PARTNERSHIP=============== -->
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
                <button class="logo-search-produk" style="font-size: 0.5rem;" type="submit">
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
                @if(count($trending_courses) > 0)
                @foreach($trending_courses as $item)
                <div class="auto">
                    @if($item->course_image != null)
                    <div class="produk putih left">
                        <div class="gambar-produk">
                            <img class="foto-produk m-bawah-10" src="{{asset("storage/uploads/".$item->course_image)}}" alt="">
                            <a href="#">
                                <div class="detail">Webinar Detail
                                    <img src="assets/img/next2.png" alt="">
                                </div>
                            </a>
                        </div>
                        @endif
                        <!-- =================  JUDUL-PRODUK  =============== -->
                        <div class="judul-produk">

                            <div class="font-18 width-232 m-kiri-10 m-bawah-20 rlt" style="z-index: 10;">{{$item->title}}</div>
                            <div class="font-9 m-kiri-10"> instructur : </div>
                            <div class="font-9 width-232 m-kiri-10"> NAMA INSTRUKTUR </div>

                            <!-- =================  TANGGAL-PRODUK  =============== -->
                            <div class="kalender">
                                <img class="kalender" src="assets/img/kalender.png" alt="">
                                <div class="font-18">{{$item->created_at->format('d M Y')}}</div>
                            </div>
                            <div class="alarm">
                                <img class="alarm" src="assets/img/alarm.png" alt="">
                                <div class="font-18">13.00 - 16.00 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
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
                <button class="logo-search-produk" style="font-size: 0.5rem;" type="submit">
                    <i class="fa fa-search fa-3x"></i>
                </button>
                <input class="font-18 search-produk" type="search" placeholder="Search" name="" id="">
            </div>
        </div> <!-- JUDUL -->
        <div class="center">

            <!-- =================  PRODUK-1  =============== -->
            <!-- Slider container -->
            <div id="Product-Home" class="Product-Home">
                <!-- slider -->
                @if(count($popular_courses) > 0)
                @foreach($popular_courses->take(2) as $item)
                <div class="m-bawah-10">
                    <div class="produk putih left">
                        @if($item->image != null)
                        <div class="gambar-produk">
                            <div class="keterangan-produk">
                                <div class="value-keterangan-produk courses">COURSES</div>
                                <div class="value-keterangan-produk free">FREE</div>
                            </div>
                            <img class="foto-produk m-bawah-10" src="{{asset("storage/uploads/".$item->course_image)}}" alt="">
                            <a href="#">
                                <div class="detail">
                                    Course Detail
                                    <img src="assets/img/next2.png" alt="">
                                </div>
                            </a>
                        </div>
                        @endif

                        <!-- =================  JUDUL-PRODUK  =============== -->
                        <div class="judul-produk">
                            <div class="font-18 width-232 m-kiri-10 m-bawah-20">{{$item->title}}</div>
                            <div class="font-9 m-kiri-10"> instructur : </div>
                            <div class="font-9 width-232 m-kiri-10"> NAMA INSTRUKTUR </div>

                            <!-- =================  HARGA-PRODUK  =============== -->
                            <div class="container-harga-home auto">
                                <div class="diskon inline-block">HARGA SEBELUM DISC</div>
                                <div class="harga inline-block">HARGA SESUDAH DISC</div>
                                <!-- <div class="rating"> -->
                                <br> rating :
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- Slide -->
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
                <button class="logo-search-produk" style="font-size: 0.5rem;" type="submit">
                    <i class="fa fa-search fa-3x"></i>
                </button>
                <input class="font-18 search-produk" type="search" placeholder="Search" name="" id="">
            </div>
        </div> <!-- JUDUL -->
        <div class="center">

            <!-- =================  PRODUK-1  =============== -->
            <!-- Slider container -->
            <div class="Product-Home">
                <!-- slider -->
                @if(count($popular_courses) > 0)
                @foreach($popular_courses->take(2) as $item)
                <div class="m-bawah-10">
                    <div class="produk putih left">
                        @if($item->image != null)
                        <div class="gambar-produk">
                            <div class="keterangan-produk">
                                <div class="value-keterangan-produk sertification">SERTIFICATION</div>
                                <div class="value-keterangan-produk profesion">PROFESION</div>

                            </div>
                            <img class="foto-produk m-bawah-10" src="{{asset("storage/uploads/".$item->course_image)}}" alt="">
                            <a href="#">
                                <div class="detail">
                                    Bundle Detail
                                    <img src="assets/img/next2.png" alt="">
                                </div>
                            </a>
                        </div>
                        @endif

                        <!-- =================  JUDUL-PRODUK  =============== -->
                        <div class="judul-produk">
                            <div class="font-18 width-232 m-kiri-10 m-bawah-20">{{$item->title}}</div>
                            <div class="font-9 m-kiri-10"> instructur : </div>
                            <div class="font-9 width-232 m-kiri-10"> NAMA INSTRUKTUR </div>

                            <!-- =================  HARGA-PRODUK  =============== -->
                            <div class="container-harga-home auto">
                                <div class="harga">HARGA PRODUK</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- Slide -->
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
                    <!-- SLIDER -->
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
                    </div>
                    <!-- SLIDER -->
                    <!-- SLIDER -->
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
                                    Instucture Advokat

                                </div>
                            </div>
                        </div>
                    </div>
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
            <div>Payment Method</div>
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

</html>