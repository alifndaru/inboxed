@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>

.kembalasi {
    background-image: url(../img/back.png);
    width: 15px;
    height: 15px;
    background-repeat: no-repeat;
    background-color: red;

}

.f-black {
    color: #000000;
}

/* .gambar-80x80 {
    width: 80px;
    height: 80px;
} */

.line-h-80 {
    line-height: 80px;
}

.m-kiri-85 {
    margin-left: 85px;
}

.langkah-verifikasi {
    width: 100%;
    height: 290px;
    margin-top: 25px;
}

.langkah-verifikasi .langkah {
    width: 246px;
    height: 290px;
    border: 1px solid #E7F6F2;
    border-radius: 16px;
    display: inline-block;
    box-sizing: border-box;
    margin-left: 15px;
    ;
}

.langkah-verifikasi .langkah .judul-langkah {
    background-color: #D9D9D9;
    width: 99px;
    height: 26px;
    border-radius: 16px;
    font-size: 14px;
    line-height: 26px;
    margin: auto;
    padding-left: 15px;
    box-sizing: border-box;
    color: #FFFFFF;
    margin-top: 10px;
    color: black;
}

.langkah-verifikasi .langkah .judul {
    /* background-color: red; */
    font-size: 18px;
    text-align: center;
    margin-top: 20px;
}

.langkah-verifikasi .langkah img {
    margin-top: 20px;
    margin: auto;
    /* align-items: center; */
    width: 100px;

}

.langkah-verifikasi
.langkah
.gambar-langkah{
    text-align: center;
    width: 100%;
    margin-top: 25px;
}

.langkah-verifikasi
.langkah 
.penjelasan{
    font-size: 14px;
    margin: auto;
    text-align: center;
    width: 200px;
}

.justify{
    text-align: justify;
}

.main-menu-container{
    background-color: black;
}
    </style>
</head>

<body>
@section('content')
<div class="" style="width: 100%; height: 50px; margin-bottom: 100px;"></div>
    
    <!-- ========== BACK ========== -->
    <div class="main-container width-870 head padding-30 box-sizing auto m-atas-23 m-bawah-10">
        <div class="kembali m-bawah-10" style="font-family: 'Lexend', sans-serif,serif;">
            <a class="m-bawah-10" href="/regisikadin">
                <img class="inline " src="assets/img/back.png" alt="">
                <div class="font-16 abs inline-block m-kiri-10" style="color: #fff; margin-top:2px;">kembali</div>
            </a>
        </div>

        <div class="box-sizing auto width-700">
            <img class="block abs m-kiri-20 m-atas-10 " src="assets/img/fiat.png" alt="">

        </div>

        <div class="font-30 bold m-atas-50" style="margin-top: 120px;">Verifikasi Akun</div>
        <div class="font-20 width-700 m-atas-15 ">Masukan data data yang dibutuhkan sesuai dengan intruksi
            yang diberikan. Berikut adalah langkah-langkah pengisian data:</div>


        <div class="langkah-verifikasi">
            <div class="langkah">
                <div class="judul-langkah">Langkah 1</div>
                <div class="judul">ISI DATA DIRI ANDA</div>
                <div class="gambar-langkah">
                    <img src="assets/img/Sign Up form.png" alt="">
                </div>
                <div class="penjelasan">
                    Langkah pertama adalah
                    memverikasidata Anda.
                    Pastikan Anda menggunakan
                    identitas sendiri.
                    <br><br>
                </div>
            </div>
            <div class="langkah">
                <div class="judul-langkah">Langkah 2</div>
                <div class="judul">UPLOAD BERKAS</div>
                <div class="gambar-langkah">
                    <img src="assets/img/slow loading.png" alt="">
                </div>
                <div class="penjelasan">
                    Setelah memasukan data
                    Anda. Upload berkas-
                    berkas yang diperlukan
                    untuk memvalidasi data
                    Anda.
                    <br>
                    <br>
                </div>
            </div>
            <div class="langkah">
                <div class="judul-langkah">Langkah 3</div>
                <div class="judul ">DATA DIVALIDASI</div>
                <div class="gambar-langkah">
                    <img src="assets/img/woman checking received email on phone.png" alt="">
                </div>
                <div class="penjelasan">
                    Data anda sedang
                    divalidasi oleh admin.
                    Silahkan cek email Anda
                    secara berkala.
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="center">
            <a href="/regisikadin2">
                <input type="submit" class="center width-400" value="MULAI PENDAFTARAN" style="margin-top:30px; margin-left:30px;">
            </a>
        </div>
    </div><!-- MAIN CONTAINER -->
    @endsection
</body>

</html>