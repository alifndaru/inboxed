<?php

namespace App\Http\Controllers;

use App\Models\advokat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreadvokatRequest;
use App\Http\Requests\UpdateadvokatRequest;



class AdvokatController extends Controller
{

        //regis ikadin
        public function regisikadin(){
            return view('frontend.auth.regisikadin');
        }
        //regis ikadin2
        public function regisikadin2(){
            return view ('frontend.auth.regisikadin2');
        }
         //regis ikadin3
         public function regisikadin3(){
            return view ('frontend.auth.regisikadin3');
        }
    
        //regis ikadin4
        public function regisikadin4(){
            return view ('frontend.auth.regisikadin4');
        }

    public static function datapindahikadin(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|max:255|string',
            'nama_depan' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'nama_belakang' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'negara_phone' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'phone' => 'required|max:255|string',
            'jenis_kelamin' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'agama' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'tempat_lahir' => 'required|max:255|string',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|max:255|string',
            'provinsi' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'kota' => 'required|max:255|string',
            'kode_pos' => 'required|max:255|string',
            'kecamatan' => 'required|max:255|string',
            'kelurahan' => 'required|max:255|string',
            'no_rumah' => 'required|max:255|string',
            'nama_kantor' => 'required|max:255|string',
            'alamat_kantor' => 'required|max:255|string',
            'provinsi_kantor' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'kota_kantor' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'kode_pos_kantor' => 'required|max:255|string',
            'kecamatan_kantor' => 'required|max:255|string',
            'kelurahan_kantor' => 'required|max:255|string',
            'no_kantor' => 'required|max:255|string',
            'universitas' => 'required|max:255|string',
            'program_studi' => 'required|max:255|string',
            'tahun_kelulusan' => 'required|max:255|string',
            'no_ijazah' => 'required|max:255|string',
            'universitas1' => 'max:255|string',
            'program_studi1' => 'max:255|string',
            'tahun_kelulusan1' => 'max:255|string',
            'no_ijazah1' => 'max:255|string',
            'universitas2' => 'max:255|string',
            'program_studi2' => 'max:255|string',
            'tahun_kelulusan2' => 'max:255|string',
            'no_ijazah2' => 'max:255|string',

        ]);
        if ($validator->passes()) {     
            return redirect('/regisikadin4')->with([
                'nama_lengkap' => $request->nama_lengkap,
                'nama_depan' => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang,
                'email' => $request->email,
                'negara_phone' => $request->negara_phone,
                'phone' => $request->phone,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'kode_pos' => $request->kode_pos,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'no_rumah' => $request->no_rumah,
                'nama_kantor' => $request->nama_kantor,
                'alamat_kantor' => $request->alamat_kantor,
                'provinsi_kantor' => $request->provinsi_kantor,
                'kota_kantor' => $request->kota_kantor,
                'kode_pos_kantor' => $request->kode_pos_kantor,
                'kecamatan_kantor' => $request->kecamatan_kantor,
                'kelurahan_kantor' => $request->kelurahan_kantor,
                'no_kantor' => $request->no_kantor,
                'universitas' => $request->universitas,
                'program_studi' => $request->program_studi,
                'tahun_kelulusan' => $request->tahun_kelulusan,
                'ipk' => $request->ipk,
                'no_ijazah' => $request->no_ijazah,
                'universitas1' => $request->universitas1,
                'program_studi1' => $request->program_studi1,
                'tahun_kelulusan1' => $request->tahun_kelulusan1,
                'ipk1' => $request->ipk1,
                'no_ijazah1' => $request->no_ijazah1,
                'universitas2' => $request->universitas2,
                'program_studi2' => $request->program_studi2,
                'tahun_kelulusan2' => $request->tahun_kelulusan2,
                'ipk2' => $request->ipk2,
                'no_ijazah2' => $request->no_ijazah2,
            ]);
            
        }
        return Redirect::back()->withInput()->withErrors($validator->errors());

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

        'file_ijazah' => 'required|mimes:jpeg,png,jpg,pdf|max:5120',
        'file_ktp' => 'required|mimes:jpeg,png,jpg,pdf|max:5120',
        'file_pasfoto' => 'required|mimes:jpeg,png,jpg,pdf|max:5120',
        'file_bukti_pembayaran' => 'required|mimes:jpeg,png,jpg,pdf|max:5120',
        ]);

        

        $advokat = new Advokat;
        $advokat->user_id = $request->user_id;
        $advokat->nama_lengkap = $request->nama_lengkap;
        $advokat->nama_depan = $request->nama_depan;
        $advokat->nama_belakang = $request->nama_belakang;
        $advokat->email = $request->email;
        $advokat->negara_phone = $request->negara_phone;
        $advokat->jenis_kelamin = $request->jenis_kelamin;
        $advokat->agama = $request->agama;
        $advokat->tempat_lahir = $request->tempat_lahir;
        $advokat->tanggal_lahir = $request->tanggal_lahir;
        $advokat->alamat = $request->alamat;
        $advokat->provinsi = $request->provinsi;
        $advokat->kota = $request->kota;
        $advokat->kode_pos = $request->kode_pos;
        $advokat->kecamatan = $request->kecamatan;
        $advokat->kelurahan = $request->kelurahan;
        $advokat->no_rumah = $request->no_rumah;
        $advokat->alamat_sesuaiktp = $request->alamat_sesuaiktp;
        $advokat->nama_kantor = $request->nama_kantor;
        $advokat->alamat_kantor = $request->alamat_kantor;
        $advokat->provinsi_kantor = $request->provinsi_kantor;
        $advokat->kota_kantor = $request->kota_kantor;
        $advokat->kode_pos_kantor = $request->kode_pos_kantor;
        $advokat->kecamatan_kantor = $request->kecamatan_kantor;
        $advokat->kelurahan_kantor = $request->kelurahan_kantor;
        $advokat->no_kantor = $request->no_kantor;
        $advokat->universitas = $request->universitas;
        $advokat->program_studi = $request->program_studi;
        $advokat->tahun_kelulusan = $request->tahun_kelulusan;
        $advokat->ipk = $request->ipk;
        $advokat->no_ijazah = $request->no_ijazah;
        $advokat->universitas1 = $request->universitas1;
        $advokat->program_studi1 = $request->program_studi1;
        $advokat->tahun_kelulusan1 = $request->tahun_kelulusan1;
        $advokat->ipk1 = $request->ipk1;
        $advokat->no_ijazah1 = $request->no_ijazah1;
        $advokat->universitas2 = $request->universitas2;
        $advokat->program_studi2 = $request->program_studi2;
        $advokat->tahun_kelulusan2 = $request->tahun_kelulusan2;
        $advokat->ipk2 = $request->ipk2;
        $advokat->no_ijazah2 = $request->no_ijazah2;

        
        // $file_ijazah = $request->file('file_ijazah');
        // $file_ktp = $request->file('file_ktp');
        // $file_pasfoto = $request->file('file_pasfoto');
        // $file_bukti_pembayaran = $request->file('file_bukti_pembayaran');

        // $fileijazahname = $file_ijazah ->getClientOriginalName();
        // $filektpname = $file_ktp ->getClientOriginalName();
        // $filepasfotoname = $file_pasfoto ->getClientOriginalName();
        // $filebuktipembayaranname = $file_bukti_pembayaran ->getClientOriginalName();

        // $request-> file('file_ijazah')->storeAs('ijazah_daftar_ikadin', $fileijazahname);
        // $request-> file('file_ktp')->storeAs('ktp_daftar_ikadin', $filektpname);
        // $request-> file('file_pasfoto')->storeAs('pasfoto_daftar_ikadin', $filepasfotoname);
        // $request-> file('file_bukti_pembayaran')->storeAs('bukti_pembayaran_daftar_ikadin', $filebuktipembayaranname);

        // $advokat-> file_ijazah = 'storage/ijazah_daftar_ikadin/' . $fileijazahname;
        // $advokat-> file_ktp = 'storage/ktp_daftar_ikadin/' . $filektpname;
        // $advokat-> file_pasfoto = 'storage/pasfoto_daftar_ikadin/' . $filepasfotoname;
        // $advokat-> file_bukti_pembayaran = 'storage/bukti_pembayaran_daftar_ikadin/' . $filebuktipembayaranname;

        if ($file_ijazah = $request->file('file_ijazah')){
            $fileijazahname = $file_ijazah ->getClientOriginalName();
            
        };
        if ($file_ktp = $request->file('file_ktp')){
            $filektpname = $file_ktp ->getClientOriginalName();
            
        };
        if ($file_pasfoto = $request->file('file_pasfoto')){
            $filepasfotoname = $file_pasfoto ->getClientOriginalName();
           
        };
        if ($file_bukti_pembayaran = $request->file('file_bukti_pembayaran')){
            $filebuktipembayaranname = $file_bukti_pembayaran ->getClientOriginalName();
            
        };
        if ($file_ijazah2 = $request->file('file_ijazahs2')){
            $fileijazah2name = $file_ijazah2 ->getClientOriginalName();
        };
        if ($file_ijazah3 = $request->file('file_ijazahs3')){
            $fileijazah3name = $file_ijazah3 ->getClientOriginalName();
        };

        if ($validator->passes()) {
            $request-> file('file_ijazah')->storeAs('ijazah_daftar_ikadin', $fileijazahname);
            $request-> file('file_ktp')->storeAs('ktp_daftar_ikadin', $filektpname);
            $request-> file('file_pasfoto')->storeAs('pasfoto_daftar_ikadin', $filepasfotoname);
            $request-> file('file_bukti_pembayaran')->storeAs('bukti_pembayaran_daftar_ikadin', $filebuktipembayaranname);
            if ($file_ijazah2 = $request->file('file_ijazahs2')){
                $request-> file('file_ijazahs2')->storeAs('ijazah_daftar_ikadin_s2', $fileijazah2name);
                $advokat-> file_ijazahs2 = 'storage/ijazah_daftar_ikadin_s2/' . $fileijazah2name;
            } else {
                $advokat-> file_ijazahs2 = null;
            };
            if ($file_ijazah3 = $request->file('file_ijazahs3')){
                $request-> file('file_ijazahs3')->storeAs('ijazah_daftar_ikadin_s3', $fileijazah3name);
                $advokat-> file_ijazahs3 = 'storage/ijazah_daftar_ikadin_s3/' . $fileijazah3name;
            } else {
                $advokat-> file_ijazahs3 = null;
            };
            $advokat-> file_ijazah = 'storage/ijazah_daftar_ikadin/' . $fileijazahname;
            $advokat-> file_ktp = 'storage/ktp_daftar_ikadin/' . $filektpname;
            $advokat-> file_pasfoto = 'storage/pasfoto_daftar_ikadin/' . $filepasfotoname;
            $advokat-> file_bukti_pembayaran = 'storage/bukti_pembayaran_daftar_ikadin/' . $filebuktipembayaranname;
            // $advokat-> file_ijazahs2 = 'storage/ijazah_daftar_ikadin_s2/' . $fileijazah2name;
            // $advokat-> file_ijazahs3 = 'storage/ijazah_daftar_ikadin_s3/' . $fileijazah3name;
            $advokat->save();
            
            Session::flash('hasil','berhasil');
            
            return Redirect::back();
        }
        
        return Redirect::back()->withInput()->with([
            'errors' => $validator->errors(),
            'nama_lengkap' => $request->nama_lengkap,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'email' => $request->email,
            'negara_phone' => $request->negara_phone,
            'phone' => $request->phone,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kode_pos' => $request->kode_pos,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'no_rumah' => $request->no_rumah,
            'nama_kantor' => $request->nama_kantor,
            'alamat_kantor' => $request->alamat_kantor,
            'provinsi_kantor' => $request->provinsi_kantor,
            'kota_kantor' => $request->kota_kantor,
            'kode_pos_kantor' => $request->kode_pos_kantor,
            'kecamatan_kantor' => $request->kecamatan_kantor,
            'kelurahan_kantor' => $request->kelurahan_kantor,
            'no_kantor' => $request->no_kantor,
            'universitas' => $request->universitas,
            'program_studi' => $request->program_studi,
            'tahun_kelulusan' => $request->tahun_kelulusan,
            'ipk' => $request->ipk,
            'no_ijazah' => $request->no_ijazah,
            'universitas1' => $request->universitas1,
            'program_studi1' => $request->program_studi1,
            'tahun_kelulusan1' => $request->tahun_kelulusan1,
            'ipk1' => $request->ipk1,
            'no_ijazah1' => $request->no_ijazah1,
            'universitas2' => $request->universitas2,
            'program_studi2' => $request->program_studi2,
            'tahun_kelulusan2' => $request->tahun_kelulusan2,
            'ipk2' => $request->ipk2,
            'no_ijazah2' => $request->no_ijazah2,
        ]);

    }

}
