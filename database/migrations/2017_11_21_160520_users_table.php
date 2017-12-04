<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->increments('id');
            $table->string('kode_user',14)->unique();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('ktp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('jenis_tinggal')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('kps')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('telpon_perusahaan')->nullable();
            $table->string('kelas')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('gelombang')->nullable();
            $table->string('ktp_ayah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('telepon_ayah')->nullable();
            $table->string('ktp_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('telepon_ibu')->nullable();
            $table->string('info_stiepan')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
