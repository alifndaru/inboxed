<?php 

$userid = Auth::user()->id;

?>
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
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/detailing.css">
    <!-- <link rel="stylesheet" href="assets/css/upload-format.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <title>Upload-Berkas</title>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }


        .form-cont-pop-450x500{
            border: 1px solid #2D3260;
            width: 450px;;
            border-radius: 25px;
            background-color: #2D3260;
            box-sizing: border-box;
        }

        .merah {
                    color: red;
        }

        .warnaplaceholder::-webkit-input-placeholder {
                    color: red;
                    margin-bottom: 40px;
        }

        .sukses{
            color: #26D3A4;
        }

        .gagal{
            color: #FF0000;
        }


        /* ================================== */
        /* ========= INPUT - GENDER ========= */
        /* ================================== */
        input[type=radio]:not(old) {
            width: 50px;
            margin: 0;
            padding: 0;
            font-size: 18px;
            opacity: 0;
        }

        input[type=radio]:not(old)+label {
            display: inline-block;
            margin-left: -1em;
            line-height: 1.5em;
        }

        input[type=radio]:not(old)+label>span {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            /* border           : 0.0625em solid rgb(192,192,192); */
            border-radius: 50%;
            background: #E7F6F2;
            background-image: -moz-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -ms-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -o-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -webkit-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: linear-gradient(#E7F6F2, #E7F6F2);
            vertical-align: bottom;
        }

        input[type=radio]:not(old):checked+label>span {
            background-image: -moz-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -ms-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -o-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: -webkit-linear-gradient(#E7F6F2, #E7F6F2);
            background-image: linear-gradient(#E7F6F2, #E7F6F2);
        }

        input[type=radio]:not(old):checked+label>span>span {
            display: block;
            width: 15px;
            height: 15px;
            margin: 2.2px;
            border: 0.0625em solid rgb(115, 153, 77);
            border-radius: 50%;
            background: #2D3260;
            background-image: -moz-linear-gradient(#2D3260, #2D3260);
            background-image: -ms-linear-gradient(#2D3260, #2D3260);
            background-image: -o-linear-gradient(#2D3260, #2D3260);
            background-image: -webkit-linear-gradient(#2D3260, #2D3260);
            background-image: linear-gradient(#2D3260, #2D3260);
        }

        .cover {
            background-size: cover
        }

        .box-sizing {
            box-sizing: border-box;
        }


        /* ================================== */
        /* ======= INPUT - FILE(DIV) ======== */
        /* ================================== */

        .uploader{
            width: 641px;
            height: 96px;
            border: 3px dashed white;
            box-sizing: border-box;
            border-radius: 12px;

        }

        .main-container input[type=file]{
            display: none;
        }

        .gambar-upload{
            background-image: url(../img/upload.png);

        }

        .d-none{
            display: none;
        }

        .posisi-hasil-upload{
            /* padding-top: 40px;
            margin-top: 40px; */
            line-height: 96px;
        }

        .main-menu-container{
            background-color: black;
        }
    </style>
</head>

<body>
@section('content')
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="/">
            <img src="assets/img/color.png" style="width:200px;" class="m-kiri-50">
        </a>


        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bundles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newlogin">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Languange (EN)</a>
                </li>
            </ul>
        </div>
    </nav> -->

<div class="" style="width: 100%; height: 50px; margin-bottom: 120px;"></div>
    <div class="main-container width-736 auto head padding-30 box-sizing m-atas-50">
        <p class="langkah f-kanan p-kanan-20 m-atas-15">Langkah 2</p>

        <div class="font-36 bold m-bawah-10">Upload File</div>
        <div class="font-20 m-bawah-20">Unggah data data yang tertera dibawah untuk melakukan <br> validasi data anda
        </div>

        <!-- ========== UPLOAD ========== -->

        <form id="file-upload-form" action="regisikadin4" method="post" enctype="multipart/form-data">
            @csrf
            <!-- ========== UPLOAD Ijazah S1 ========== -->
            <input type="hidden" name="user_id" value="{{ $userid }}">
            <input type="hidden" name="nama_lengkap" value="{{ Session::get('nama_lengkap') }}">
            <input type="hidden" name="nama_depan" value="{{ Session::get('nama_depan') }}">
            <input type="hidden" name="nama_belakang" value="{{ Session::get('nama_belakang') }}">
            <input type="hidden" name="email" value="{{ Session::get('email') }}">
            <input type="hidden" name="negara_phone" value="{{ Session::get('negara_phone') }}">
            <input type="hidden" name="phone" value="{{ Session::get('phone') }}">
            <input type="hidden" name="jenis_kelamin" value="{{ Session::get('jenis_kelamin') }}">
            <input type="hidden" name="agama" value="{{ Session::get('agama') }}">
            <input type="hidden" name="tempat_lahir" value="{{ Session::get('tempat_lahir') }}">
            <input type="hidden" name="tanggal_lahir" value="{{ Session::get('tanggal_lahir') }}">
            <input type="hidden" name="alamat" value="{{ Session::get('alamat') }}">
            <input type="hidden" name="provinsi" value="{{ Session::get('provinsi') }}">
            <input type="hidden" name="kota" value="{{ Session::get('kota') }}">
            <input type="hidden" name="kode_pos" value="{{ Session::get('kode_pos') }}">
            <input type="hidden" name="kecamatan" value="{{ Session::get('kecamatan') }}">
            <input type="hidden" name="kelurahan" value="{{ Session::get('kelurahan') }}">
            <input type="hidden" name="no_rumah" value="{{ Session::get('no_rumah') }}">
            <input type="hidden" name="alamat_sesuaiktp" value="{{ Session::get('alamat_sesuaiktp') }}">
            <input type="hidden" name="nama_kantor" value="{{ Session::get('nama_kantor') }}">
            <input type="hidden" name="alamat_kantor" value="{{ Session::get('alamat_kantor') }}">
            <input type="hidden" name="provinsi_kantor" value="{{ Session::get('provinsi_kantor') }}">
            <input type="hidden" name="kota_kantor" value="{{ Session::get('kota_kantor') }}">
            <input type="hidden" name="kode_pos_kantor" value="{{ Session::get('kode_pos_kantor') }}">
            <input type="hidden" name="kecamatan_kantor" value="{{ Session::get('kecamatan_kantor') }}">
            <input type="hidden" name="kelurahan_kantor" value="{{ Session::get('kelurahan_kantor') }}">
            <input type="hidden" name="no_kantor" value="{{ Session::get('no_kantor') }}">
            <input type="hidden" name="universitas" value="{{ Session::get('universitas') }}">
            <input type="hidden" name="program_studi" value="{{ Session::get('program_studi') }}">
            <input type="hidden" name="tahun_kelulusan" value="{{ Session::get('tahun_kelulusan') }}">
            <input type="hidden" name="ipk" value="{{ Session::get('ipk') }}">
            <input type="hidden" name="no_ijazah" value="{{ Session::get('no_ijazah') }}">
            <input type="hidden" name="universitas1" value="{{ Session::get('universitas1') }}">
            <input type="hidden" name="program_studi1" value="{{ Session::get('program_studi1') }}">
            <input type="hidden" name="tahun_kelulusan1" value="{{ Session::get('tahun_kelulusan1') }}">
            <input type="hidden" name="ipk1" value="{{ Session::get('ipk1') }}">
            <input type="hidden" name="no_ijazah1" value="{{ Session::get('no_ijazah1') }}">
            <input type="hidden" name="universitas2" value="{{ Session::get('universitas2') }}">
            <input type="hidden" name="program_studi2" value="{{ Session::get('program_studi2') }}">
            <input type="hidden" name="tahun_kelulusan2" value="{{ Session::get('tahun_kelulusan2') }}">
            <input type="hidden" name="ipk2" value="{{ Session::get('ipk2') }}">
            <input type="hidden" name="no_ijazah2" value="{{ Session::get('no_ijazah2') }}">

            <input class="m-bawah-10 {{ ($errors->has('file_ijazah'))?'warnaplaceholder':'' }}" id="file-upload1" onchange="getFileName1(this)" type="file" name="file_ijazah" />
            <div class="font-18 m-bawah-5">Ijazah S1</div>
            <label class="m-bawah-5" for="file-upload1" id="file-drag">
                <div class="uploader">
                    <div class="center m-atas-20" id="logo-upload-1">
                        <img class="center" src="assets/img/upload.png" alt="">
                    </div>
                    <div class="font-20 center" id="text-upload-1">Browser to upload</div>
                    <div class="posisi-hasil-upload center">
                        <div id="hasil1"></div>
                    </div>
                </div>
                <div class="merah">{{ ($errors->has('file_ijazah'))?$errors->first('file_ijazah'):'' }}</div>
            </label>
                <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>



                <!-- ========== UPLOAD KTP ========== -->
                <input class="m-bawah-10 {{ ($errors->has('file_ktp'))?'warnaplaceholder':'' }}" id="file-upload2" onchange="getFileName2(this)" type="file" name="file_ktp" />

                <div class="font-18 m-bawah-5">KTP</div>
                <label class="m-bawah-5" for="file-upload2" id="file-drag">
                    <div class="uploader">
                        <div class="center m-atas-20" id="logo-upload-2">
                            <img class="center" src="assets/img/upload.png" alt="">
                        </div>
                        <div class="font-20 center" id="text-upload-2">Browser to upload</div>
                        <div class="posisi-hasil-upload center">
                            <div id="hasil2"></div>
                        </div>
                    </div>
                    <div class="merah">{{ ($errors->has('file_ktp'))?$errors->first('file_ktp'):'' }}</div>
                </label>
                    <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>


                    <!-- ========== UPLOAD PAS Foto 2x3 ========== -->
                    <input class="m-bawah-10 {{ ($errors->has('file_pasfoto'))?'warnaplaceholder':'' }}" id="file-upload3" onchange="getFileName3(this)" type="file"  name="file_pasfoto" />

                    <div class="font-18 m-bawah-5">PAS Foto 2x3</div>
                    <label class="m-bawah-5" for="file-upload3" id="file-drag">
                        <div class="uploader">
                            <div class="center m-atas-20" id="logo-upload-3">
                                <img class="center" src="assets/img/upload.png" alt="">
                            </div>
                            <div class="font-20 center" id="text-upload-3">Browser to upload</div>
                            <div class="posisi-hasil-upload center">
                                <div id="hasil3"></div>
                            </div>
                        </div>
                        <div class="merah">{{ ($errors->has('file_pasfoto'))?$errors->first('file_pasfoto'):'' }}</div>
                    </label>
                        <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>


                        <!-- ========== UPLOAD Bukti Pembayaran ========== -->
                        <input class="m-bawah-10 {{ ($errors->has('file_bukti_pembayaran'))?'warnaplaceholder':'' }}" id="file-upload4" onchange="getFileName4(this)" type="file" name="file_bukti_pembayaran" />

                        <div class="font-18 m-bawah-5">Bukti Pembayaran</div>
                        <label class="m-bawah-5" for="file-upload4" id="file-drag">
                            <div class="uploader">
                                <div class="center m-atas-20" id="logo-upload-4">
                                    <img class="center" src="assets/img/upload.png" alt="">
                                </div>
                                <div class="font-20 center" id="text-upload-4">Browser to upload</div>
                                <div class="posisi-hasil-upload center">
                                    <div id="hasil4"></div>
                                </div>
                            </div>
                            <div class="merah">{{ ($errors->has('file_bukti_pembayaran'))?$errors->first('file_bukti_pembayaran'):'' }}</div>
                        </label>
                            <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>

                            <!-- ========== UPLOAD Ijazah S2 ========== -->
                            @if(!is_null(Session::get('universitas1')))

                            <div class="d-none" id="u-S2">

                                <input class="m-bawah-10 {{ ($errors->has('file_ijazah'))?'warnaplaceholder':'' }}" id="file-uploadS2" onchange="getFileNameS2(this)" type="file" name="file_ijazahs2" />
                                
                                <div class="font-18 m-bawah-5">Ijazah S2</div>
                                <label class="m-bawah-5" for="file-uploadS2" id="file-drag">
                                    <div class="uploader">
                                        <div class="center m-atas-20" id="logo-upload-S2">
                                            <img class="center" src="assets/img/upload.png" alt="">
                                        </div>
                                        <div class="font-20 center" id="text-upload-S2">Browser to upload</div>
                                        <div class="posisi-hasil-upload center">
                                            <div id="hasilS2"></div>
                                        </div>
                                    </div>
                                    <div class="merah">{{ ($errors->has('file_ijazah'))?$errors->first('file_ijazah'):'' }}</div>
                                </label>
                                <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>
                            </div>
                        @endif

                        <!-- ========== UPLOAD Ijazah S3 ========== -->
                        @if(!is_null(Session::get('universitas2')))
                        {{-- <div class="d-none" id="u-S3"> --}}

                            <input class="m-bawah-10 {{ ($errors->has('file_ijazah'))?'warnaplaceholder':'' }}" id="file-uploadS3" onchange="getFileNameS3(this)" type="file" name="file_ijazahs3" />
                            
                            <div class="font-18 m-bawah-5">Ijazah S3</div>
                            <label class="m-bawah-5" for="file-uploadS3" id="file-drag">
                                <div class="uploader">
                                    <div class="center m-atas-20" id="logo-upload-S3">
                                        <img class="center" src="assets/img/upload.png" alt="">
                                    </div>
                                    <div class="font-20 center" id="text-upload-S3">Browser to upload</div>
                                    <div class="posisi-hasil-upload center">
                                        <div id="hasilS3"></div>
                                    </div>
                                </div>
                                <div class="merah">{{ ($errors->has('file_ijazah'))?$errors->first('file_ijazah'):'' }}</div>
                            </label>
                            <div class="font-12 m-bawah-30">*File Berbentuk PDF/JPEG </div>
                        {{-- </div> --}}
                        @endif

                            <div class="center">
                                @if(Session::has('hasil'))
                                <a href="/">
                                <input type="button" class="width-335 m-bawah-3 btn-login" style="border-radius: 14px; border: none;" value="REGISTER">
                                </a>
                                @else
                                <button  style="border-radius: 14px; border: none;line-height: 12px; height:30px;"
                                    type="submit" class="center wid-inp-6 font-18 hvr">Register</button>
                                @endif
                            </div>
        </form>

        @if (Session::has('hasil')) 
            
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true"> --}}
        <div class="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <!-- <div class="modal-dialog" role="document"> -->
            <div class="main-container container-tengah p-20 p-bawah-20 head" style="height: 240px;">

                    <div class="form-cont-pop-450x500 width-450 container-tengah p-20 p-bawah-20">
                        <div class="head-container padding-30">
                            <div class="width-48 auto m-bawah-20">
                                <img class="widht-48 height-48 m-atas-20" src="assets/img/sukses.png" alt="">
                            </div>
                            <div class="font-24 m-bawah-20 sukses center">Registration Check</div>
                            <div class="center width-250 auto m-bawah-20">
                                Registrasi akun profesi <br>
                                anda sedang diproses silahkan <br>
                                tunggu dan check email
                            </div>
                            {{-- <div class="width-335 auto">
                                <a href="/newlogin">
                                    <button class="width-335 btn-login height-30" style="border-radius: 12px;">SUBMIT
                                    </button>
                                </a>
                            </div> --}}
                            <div class="width-335 auto">
                                <a href="/">
                                    <input type="submit" class="center width-335 hvr" value="SUBMIT">
                                </a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        @endif

    </div> <!-- MAIN CONTAINER -->
    <script src="assets/js/upload.js"></script>
    @endsection
</body>

</html>