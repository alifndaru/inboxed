<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvokatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advokats', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->string('nama_lengkap');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('negara_phone');
            $table->string('phone');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('no_rumah');
            $table->string('alamat_sesuaiktp')->nullable();
            $table->string('nama_kantor');
            $table->string('alamat_kantor');
            $table->string('provinsi_kantor');
            $table->string('kota_kantor');
            $table->string('kode_pos_kantor');
            $table->string('kecamatan_kantor');
            $table->string('kelurahan_kantor');
            $table->string('no_kantor');
            $table->string('universitas');
            $table->string('program_studi');
            $table->string('tahun_kelulusan');
            $table->string('ipk');
            $table->string('no_ijazah');
            $table->string('universitas1');
            $table->string('program_studi1');
            $table->string('tahun_kelulusan1');
            $table->string('ipk1');
            $table->string('no_ijazah1');
            $table->string('universitas2');
            $table->string('program_studi2');
            $table->string('tahun_kelulusan2');
            $table->string('ipk2');
            $table->string('no_ijazah2');
            $table->string('file_ijazah');
            $table->string('file_ktp');
            $table->string('file_pasfoto');
            $table->string('file_bukti_pembayaran');
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advokats');
    }
}
