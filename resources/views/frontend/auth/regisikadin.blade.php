@extends('frontend.layouts.app'.config('theme_layout'))
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/detailing.css">
    {{-- <link rel="stylesheet" href="assets/css/regisikadin.css"> --}}
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Lexend', sans-serif, serif;
        }
        
        .d-none {
            display: none;
        }

        .search-wrapper {
            position: relative;
        }

        .search-wrapper img {
            position: absolute;
            top: 0px;
            left: 0px;
        }

.main-menu-container{
    background-color: black;
}
    </style>

    
</head>

<body>
    @section('content')

    {{-- START CONTAINER --}}
    <div class="" style="width: 100%; height: 50px; margin-bottom: 100px;"></div>
    <div class="main-container p-bawah-20 auto m-atas-50" style="width:940px; height:700px; margin-top:70px">
        <div class="head-container p-bawah-20 m-atas-4">
            <h1 class="center p-bawah-10 p-atas-20" style="font-weight: bold; font-size:36px;">Proffesion Registration
            </h1>
            <div class="m-bawah-4 m-atas-3"> 
                <p class="center p-bawah-20">Masukan data data yang dibutuhkan sesuai dengan intruksi yang diberikan.
                </p>
            </div>


            <!-- =================INPUT=============== -->
            <hr align="center" color="white" width="100%"> 


            <div class="input">
                <p class="wid-inp-2 bold p-atas-20 " style="font-family: 'Lexend',sans-serif,serif; font-size:20px;">
                    Pilih Profesi Anda</p>
                <p class="p-bawah-10" style="width:650px font-size:18px;">Pilih profesi yang paling sesuai. Pilihan
                    profesi akan berpengaruh ke opsi
                    yang tersedia</p>

                    <form method="GET">
                        <div id="mysiteSearch" class="f-kanan m-kanan-40 search-wrapper">
                            <input type="text" size="20" name="keyword" id="keyword" class="p-kiri-40 search-input" placeholder="search" style="color: #D9D9D9;" onfocus="if (this.value=='e.g. los angeles') {this.value=''; this.style.color='#696969';}" >
                            <img src="assets/img/search.png" class="f-kanan width-20" style="position:absolute; margin-left:10px; margin-top:12px; ">
                        </div>

                    </form>

                <form>
                    <div class="input-group p-atas-5 mb-3 inline-block" style="width: 870px; background:none;">
                        <select class="select" onchange="enableBrand(this)" style="width: 870px;" id="inputGroupSelect02">
                            <option selected value="0">Choose Profession</option>
                            <option value="Advokat" class="p" >Advokat</option>
                        </select>
                    </div>
                </form>

                <div class="wid-inp-6 d-none" id="ikadin">
                    <form class="" style="border: 1px solid; border-radius:12px; width:870px; height:200px;">
                        <input class="m-kiri-10" type="checkbox">
                        <img src="assets/img/ikadin.png" style="width: 100px;" alt="ikadin"
                            class="p-kiri-10 p-atas-10 p-bawah-10">


                        <div class="comment">
                            <h3 class="head"
                                style="position: absolute; margin-left:140px; top:410px; font-size:20px; font-weight:bold;">
                                IKADIN</h3>
                            <p class="head" style="position: relative; margin-left:140px; top: -75px; font-size:18px; ">
                                Pendidikan Khusus Profesi Advokat atau PKPA adalah pendidikan yang
                                diselenggarakan oleh IKADIN yang merupakan salah satu tahapan wajib
                                agar seseorang yang berlatar belakang pendidikan
                                hukum dapat menjadi advokat. <a
                                    href="https://dppikadin.or.id">https://dppikadin.or.id</a> </p>
                        </div>
                        <a href="/regisikadin3">
                        <input type="button" class="center wid-inp-6 m-atas-20 font-18 hvr"
                            style="position: absolute; margin-left:260px; height:30px;" value="Next">
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>

        <script>
            function enableBrand(answer) {
            console.log(answer.value);
            if (answer.value == 'Advokat') {
                document.getElementById('ikadin').classList.remove('d-none');
            }
            else {
                document.getElementById('ikadin').classList.add('d-none');
            }
        }
        </script>
        @endsection
</body>

</html>