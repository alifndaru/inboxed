@php( $countries = App\Models\Country::all())
@php( $user = Auth::user() )

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
    <link rel="stylesheet" href="assets/css/detailing.css">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body{
        font-family: 'Lexend', sans-serif,serif;
    }

    .merah {
            color: red;
        }

    .warnaplaceholder::-webkit-input-placeholder {
            color: red;
            margin-bottom: 40px;
        }
    .main-menu-container {
        background-color: black;
    }
</style>
<script>
    function country_code(){
        var val = document.getElementById("country").value;

        if (val === "select country"){
            document.getElementById("output").value = "";
        }
        else if (val === "id"){
            document.getElementById("output").value = "+62";
        }
        else if (val === "us"){
            document.getElementById("output").value = "+1";
        }
    }
</script>
</head>
<body>
    @section('content')
    <div class="" style="width: 100%; height: 50px; margin-bottom: 100px;"></div>
    <!-- =================REGISTRASI=============== -->
    <div class="main-container auto p-bawah-30 width-800 " style="margin-top: 50px;">
        <div class="head width-800 m-atas-4">
            <div class="kembali m-bawah-20 ">
    
            <p class="langkah f-kanan p-kanan-20 m-atas-15">Langkah 1</p>

            <div class="font-36 left m-atas-25 bold m-kiri-35">Formulir Pendaftaran</div>
            <div class="font-18 left m-atas-3 m-kiri-35 width-600">Masukan data data yang dibutuhkan sesuai dengan intruksi 
yang diberikan. </div>
    
            <!-- =================INPUT=============== -->
            <div class="width-335 m-kiri-35">
                <form action="/regisikadin2" method="POST">
                    @csrf
                    <label class="bold font-36 p-atas-20" for="biodata">BIODATA</label> <br>
                    <label for="tgl-lahir">Nama Lengkap*</label>
                    <input class="width-745  p-kiri-20 {{ ($errors->has('nama_lengkap'))?'warnaplaceholder':'' }} " type="text" name="nama_lengkap" id="" required value="{{ $user->first_name }} {{ $user->last_name }}" readonly>
                    <div class="merah">{{ ($errors->has('nama_lengkap'))?$errors->first('nama_lengkap'):'' }}</div>

                   
                    
                    <div class="f-kiri width-160">
                        <label for="namadpn inline-block">Nama Depan*</label>
                        <input class="p-kiri-20 width-350 {{ ($errors->has('nama_depan'))?'warnaplaceholder':'' }}" type="text" name="nama_depan" id="" placeholder="" required value="{{ $user->first_name }}" readonly>
                        <div class="merah">{{ ($errors->has('nama_depan'))?$errors->first('nama_depan'):'' }}</div>
                    </div>
                    <div class="f-kiri width-160" style="position: relative; left:220px;">
                        <label for="namablk inline-block width-160" >Nama Belakang*</label>
                        <input class="p-kiri-20 width-365 {{ ($errors->has('nama_belakang'))?'warnaplaceholder':'' }} " type="text" name="nama_belakang" id="" placeholder="" required value="{{ $user->last_name }}" readonly>
                        <div class="merah">{{ ($errors->has('nama_belakang'))?$errors->first('nama_belakang'):'' }}</div>
                    </div>

                    <label for="email">Email*</label>
                    <input class="width-745  p-kiri-20 {{ ($errors->has('email'))?'warnaplaceholder':'' }}" type="email" name="email" placeholder="mail@gmail.com" required value="{{ $user->email }}" readonly>
                    <div class="merah">{{ ($errors->has('email'))?$errors->first('email'):'' }}</div>
                    <div class="phone p-atas-10 width-900">
                        <label for="handphone">No Handphone*</label> <br>
                        <select class="width-90 center {{ ($errors->has('negara_phone'))?'warnaplaceholder':'' }}" name="negara_phone" id="country" onchange="country_code()">
                            @foreach ($countries as $country)
                            <option value="{{ $country->value }}">{{ $country->value }}</option>
                            @endforeach
                            <div class="merah">{{ ($errors->has('negara_phone'))?$errors->first('negara_phone'):'' }}</div>
                        </select>
                        <input type="number" name="phone" class="width-650 p-kiri-20 {{ ($errors->has('phone'))?'warnaplaceholder':'' }}" id="output" placeholder="Phone Number" value="{{ $user->phone }}">
                        <div class="merah">{{ ($errors->has('phone'))?$errors->first('phone'):'' }}</div>
                    </div>  
                    <label for="">Jenis Kelamin : </label>
                    <div class="inline-block ">
                        <input id="Male" type="radio" name="jenis_kelamin" value="Male" checked="{{ ($user->gender == 'Male')?'"checked"':'' }}">
                        <label  for="Male"><span ><span></span></span>Laki</label>
                    </div>
                    <div class="inline-block " style="position: absolute;"> 
                        <input id="Female" type="radio" name="jenis_kelamin" value="Female" checked="{{ ($user->gender == 'Female')?'"checked"':'' }}">
                        <label for="Female"><span><span></span></span>Perempuan</label>
                    </div>
                    <br>
                    <label for="agama">Agama*</label>
                    <input class="width-745  p-kiri-20 {{ ($errors->has('agama'))?'warnaplaceholder':'' }}" type="text" name="agama" required value=" {{ old('agama') }} " placeholder="Agama">
                    <div class="merah">{{ ($errors->has('agama'))?$errors->first('agama'):'' }}</div>

                    <label for="tmp-lahir">Tempat Lahir*</label>
                    <input class="width-745  p-kiri-20 {{ ($errors->has('tempat_lahir'))?'warnaplaceholder':'' }}" type="text" name="tempat_lahir" placeholder="Jakarta" required value="{{ $user->tmp_lahir }}" readonly>
                    <div class="merah">{{ ($errors->has('tempat_lahir'))?$errors->first('tempat_lahir'):'' }}</div>

                    <label for="tgl-lahir">Tanggal Lahir*</label>
                    <input class="width-745  p-kiri-20 {{ ($errors->has('tanggal_lahir'))?'warnaplaceholder':'' }}" type="date" name="tanggal_lahir" placeholder="" required value="{{ $user->tgl_lahir }}" readonly>
                    <div class="merah">{{ ($errors->has('tanggal_lahir'))?$errors->first('tanggal_lahir'):'' }}</div>

                    <hr align="left" color="white" width="740"> 
                    <label class="bold font-36 p-atas-0 " for="alamat">Alamat</label> <br>

                    <label for="alamat">Alamat sesuai KTP*</label>
                    <input class="width-745 p-kiri-20 {{ ($errors->has('alamat'))?'warnaplaceholder':'' }}" type="text" name="alamat" required value="{{ old('alamat') }}">
                    <div class="merah">{{ ($errors->has('alamat'))?$errors->first('alamat'):'' }}</div>

                    <div class="f-kiri width-10">
                        <label for="provinsi inline-block">Provinsi*</label>
                        <input class="width-260 p-kiri-20 {{ ($errors->has('provinsi'))?'warnaplaceholder':'' }}" type="text" name="provinsi" id="" placeholder="" required value="{{ old('provinsi') }}">
                        <div class="merah">{{ ($errors->has('provinsi'))?$errors->first('provinsi'):'' }}</div>
                    </div>
                    <div class="f-kiri width-10" style="position: relative; left:260px;">
                        <label for="kota inline-block width-160" >Kota*</label>
                        <input class="p-kiri-20 width-260 {{ ($errors->has('kota'))?'warnaplaceholder':'' }}" type="text" name="kota" id="" placeholder="" required value="{{ old('kota') }}">
                        <div class="merah">{{ ($errors->has('kota'))?$errors->first('kota'):'' }}</div>
                    </div>
                    <div class="f-kiri width-100" style="position:absolute; margin-left:550px">
                        <label for="kode inline-block">Kode Pos*</label>
                        <input class="p-kiri-20 width-190 {{ ($errors->has('kode_pos'))?'warnaplaceholder':'' }} " type="text" name="kode_pos" id="" placeholder="" required value="{{ old('kode_pos') }}">
                        <div class="merah">{{ ($errors->has('kode_pos'))?$errors->first('kode_pos'):'' }}</div>
                    </div>
                   
                    <div class="alamatbawah" style="padding-top: 100px">
                        <div class="f-kiri width-10">
                            <label for="provinsi inline-block">Kecamatan*</label>
                            <input class="p-kiri-20 width-260 {{ ($errors->has('kecamatan'))?'warnaplaceholder':'' }}" type="text" name="kecamatan" id="" placeholder="" required value="{{ old('kecamatan') }}">
                            <div class="merah">{{ ($errors->has('kecamatan'))?$errors->first('kecamatan'):'' }}</div>
                        </div>
                        <div class="f-kiri width-10" style="position: relative; left:260px;">
                            <label for="kota inline-block width-160" >Kelurahan*</label>
                            <input class="p-kiri-20 width-260 {{ ($errors->has('kelurahan'))?'warnaplaceholder':'' }}" type="text" name="kelurahan" id="" placeholder="" required value="{{ old('kelurahan') }}">
                            <div class="merah">{{ ($errors->has('kelurahan'))?$errors->first('kelurahan'):'' }}</div>
                        </div>
                        <div class="f-kiri width-150" style="position:absolute; margin-left:550px">
                            <label for="kode inline-block">No. Rumah/Apt*</label>
                            <input class="p-kiri-20 width-190 {{ ($errors->has('no_rumah'))?'warnaplaceholder':'' }}" type="text" name="no_rumah" id="" placeholder="" required value="{{ old('no_rumah') }}">
                            <div class="merah">{{ ($errors->has('no_rumah'))?$errors->first('no_rumah'):'' }}</div>
                        </div>
                    </div>

                    <input class="f-kiri" style="margin-top: 90px" type="checkbox" value="true" name="alamat_sesuaiktp">
                    <p class="centang p-kiri-45 width-600" style="margin-top: 83px; ">Centang Jika Informasi Sesuai Dengan Alamat Utama</p>
                    <hr align="left" color="white" width="740"> 
               


                    <label class="bold font-36" for="kantor">Kantor</label> <br>

                    <label for="namakantor">Nama Kantor</label>
                    <input class="width-745 p-kiri-20 {{ ($errors->has('namakantor'))?'warnaplaceholder':'' }}" type="text" name="nama_kantor" required value="{{ old('nama_kantor') }}">
                    <div class="merah">{{ ($errors->has('namakantor'))?$errors->first('namakantor'):'' }}</div>

                    <label for="alamatkantor">Alamat Kantor</label>
                    <input class="width-745 p-kiri-20 {{ ($errors->has('alamat_kantor'))?'warnaplaceholder':'' }}" type="text" name="alamat_kantor" required value="{{ old('alamat_kantor') }}">
                    <div class="merah">{{ ($errors->has('alamat_kantor'))?$errors->first('alamat_kantor'):'' }}</div>

                    <div class="f-kiri width-10">
                        <label for="provinsi inline-block">Provinsi</label>
                        <input class="p-kiri-20 width-260 {{ ($errors->has('provinsi_kantor'))?'warnaplaceholder':'' }}" type="text" name="provinsi_kantor" id="" placeholder="" required value="{{ old('provinsi_kantor') }}">
                        <div class="merah">{{ ($errors->has('provinsi_kantor'))?$errors->first('provinsi_kantor'):'' }}</div>
                    </div>
                    <div class="f-kiri width-10" style="position: relative; left:260px;">
                        <label for="kota inline-block width-160" >Kota</label>
                        <input class="p-kiri-20 width-260 {{ ($errors->has('kota_kantor'))?'warnaplaceholder':'' }}" type="text" name="kota_kantor" id="" placeholder="" required value="{{ old('kota_kantor') }}">
                        <div class="merah">{{ ($errors->has('kota_kantor'))?$errors->first('kota_kantor'):'' }}</div>
                    </div>
                    <div class="f-kiri width-100" style="position:absolute; margin-left:550px">
                        <label for="kode inline-block">Kode Pos</label>
                        <input class="p-kiri-20 width-190 {{ ($errors->has('kode_pos_kantor'))?'warnaplaceholder':'' }}" type="text" name="kode_pos_kantor" id="" placeholder="" required value="{{ old('kode_pos_kantor') }}">
                        <div class="merah">{{ ($errors->has('kode_pos_kantor'))?$errors->first('kode_pos_kantor'):'' }}</div>
                    </div>
                   
                    <div class="alamatbawah" style="padding-top: 100px">
                        <div class="f-kiri width-10">
                            <label for="provinsi inline-block">Kecamatan</label>
                            <input class="p-kiri-20 width-260 {{ ($errors->has('kecamatan_kantor'))?'warnaplaceholder':'' }}" type="text" name="kecamatan_kantor" id="" placeholder="" required value="{{ old('kecamatan_kantor') }}">
                            <div class="merah">{{ ($errors->has('kecamatan_kantor'))?$errors->first('kecamatan_kantor'):'' }}</div>
                        </div>
                        <div class="f-kiri width-10" style="position: relative; left:260px;">
                            <label for="kota inline-block width-160" >Kelurahan</label>
                            <input class="p-kiri-20 width-260 {{ ($errors->has('kelurahan_kantor'))?'warnaplaceholder':'' }}" type="text" name="kelurahan_kantor" id="" placeholder="" required value="{{ old('kelurahan_kantor') }}">
                            <div class="merah">{{ ($errors->has('kelurahan_kantor'))?$errors->first('kelurahan_kantor'):'' }}</div>
                        </div>
                        <div class="f-kiri width-150" style="position:absolute; margin-left:550px">
                            <label for="kode inline-block">No. Kantor</label>
                            <input class="p-kiri-20 width-190 {{ ($errors->has('no_kantor'))?'warnaplaceholder':'' }}" type="text" name="no_kantor" id="" placeholder="" required value="{{ old('no_kantor') }}">
                            <div class="merah">{{ ($errors->has('no_kantor'))?$errors->first('no_kantor'):'' }}</div>
                        </div>
                    </div>
                    
                    <div class="pendidikan m-atas-50" >

                        <label class="bold font-36 p-atas-40" style="margin-left: -20px;" for="pendidikan">Pendidikan</label> <br>
                        <hr align="left" color="white" width="740"> 

                    <label for="universitas">Universitas*</label>
                    <input class="width-745 p-kiri-20 {{ ($errors->has('universitas'))?'warnaplaceholder':'' }}" type="text" name="universitas" required value="{{ old('universitas') }}">
                    <div class="merah">{{ ($errors->has('universitas'))?$errors->first('universitas'):'' }}</div>

                    <label for="program_studi">Program Studi*</label>
                    <input class="width-745 p-kiri-20 {{ ($errors->has('program_studi'))?'warnaplaceholder':'' }}" type="text" name="program_studi" required value="{{ old('program_studi') }}">
                    <div class="merah">{{ ($errors->has('program_studi'))?$errors->first('program_studi'):'' }}</div>

                    <div class="f-kiri width-140">
                        <label for="universitas inline-block">Tahun Kelulusan*</label>
                        <input class="center width-200 {{ ($errors->has('tahun_kelulusan'))?'warnaplaceholder':'' }}" name="tahun_kelulusan" id="" type="number" min="1900" max="2023" step="1" placeholder="yyyy - yyyy" required value="{{ old('tahun_kelulusan') }}">
                        <div class="merah">{{ ($errors->has('tahun_kelulusan'))?$errors->first('tahun_kelulusan'):'' }}</div>
                    </div>
                    <div class="f-kiri width-10" style="position: relative; left:70px;">
                        <label for="universitas inline-block width-10" >IPK*</label>
                        <input class="center width-150 {{ ($errors->has('ipk'))?'warnaplaceholder':'' }}" type="text" name="ipk" id="" placeholder="0.00/4.00" required value="{{ old('ipk') }}">
                        <div class="merah">{{ ($errors->has('ipk'))?$errors->first('ipk'):'' }}</div>
                    </div>
                    <div class="f-kiri width-200" style="position:absolute; margin-left:370px">
                        <label for="universitas inline-block">Nomor Ijazah*</label>
                        <input class="center width-375 {{ ($errors->has('no_ijazah'))?'warnaplaceholder':'' }}" type="text" name="no_ijazah" id="" placeholder="118933-H4-D/13419-411-2009" required value="{{ old('no_ijazah') }}">
                        <div class="merah">{{ ($errors->has('no_ijazah'))?$errors->first('no_ijazah'):'' }}</div>
                    </div>
                    <div id="input-cont"></div>
                    </div>
                    <input onclick='addInput()' type="button" style=" border: groove; background: none; font-weight:normal; color: #fff;" class="width-230" value="+ Tambah Pendidikan">

                    <button  type="submit" class="center wid-inp-6 font-18 hvr" style="margin-top:100px; margin-left:190px; border-radius: 12px; line-height: 12px; height:30px; ">Next</button>
                </form>
            </div>

            <script>
                const container = document.getElementById('input-cont');
                var maxInputAllowed = 5;
                var inputCount = 0;
                
                // Call addInput() function on button click
                function addInput(){
                    inputCount++; // Increment input count by one
                    // localStorage.setItem('Upload-S2', 'Ijazah-S2');
                    
                    if(inputCount>2){
                        alert('You can add maximum 3 input fields.');
                        return;
                    }
                    
                    localStorage.setItem('Upload-S2', inputCount);
                    var dummy = '<br><br><br><div class="pendidikan m-atas-50" id="input-cont"> <label for="universitas'+inputCount+'">Universitas'+inputCount+'</label><input class="width-745 p-kiri-20 {{ ($errors->has("universitas'+inputCount+'"))?'warnaplaceholder':'' }}" type="text" name="universitas'+inputCount+'"> <div class="merah">{{ ($errors->has("universitas'+inputCount+'"))?$errors->first("universitas'+inputCount+'"):'' }}</div> <label for="program_studi'+inputCount+'">Program Studi</label><input class="width-745 p-kiri-20 {{ ($errors->has("program_studi'+inputCount+'"))?'warnaplaceholder':'' }}" type="text" name="program_studi'+inputCount+'"><div class="merah">{{ ($errors->has("program_studi'+inputCount+'"))?$errors->first("program_studi'+inputCount+'"):'' }}</div><div class="f-kiri width-140"><label for="universitas'+inputCount+' inline-block">Tahun Kelulusan*</label><input class="center width-200 {{ ($errors->has("tahun_kelulusan'+inputCount+'"))?'warnaplaceholder':'' }}" name="tahun_kelulusan'+inputCount+'" id="" type="number" min="1900" max="2023" step="1" placeholder="yyyy - yyyy"></div> <div class="merah">{{ ($errors->has("tahun_kelulusan'+inputCount+'"))?$errors->first("tahun_kelulusan'+inputCount+'"):'' }}</div> <div class="f-kiri width-10" style="position: relative; left:70px;"><label for="universitas'+inputCount+' inline-block width-10" >IPK*</label><input class="center width-150" type="text" name="ipk'+inputCount+'" id="" placeholder="0.00/4.00"></div><div class="f-kiri width-200" style="position:absolute; margin-left:370px"><label for="universitas'+inputCount+' inline-block">Nomor Ijazah*</label><input class="center width-375 {{ ($errors->has("no_ijazah'+inputCount+'"))?'warnaplaceholder':'' }}" type="text" name="no_ijazah'+inputCount+'" id="" placeholder="118933-H4-D/13419-411-2009"></div> <div class="merah">{{ ($errors->has("no_ijazah'+inputCount+'"))?$errors->first("no_ijazah'+inputCount+'"):'' }}</div></div>';
                    document.getElementById('input-cont').innerHTML += dummy;

                    
                }
            </script>

            <a href="/regisikadin4">
    </a>
            </div> <!-- container -->
        </div>
    </div>
<script src="assets/js/upload.js"></script>
@endsection
</body>

</html>