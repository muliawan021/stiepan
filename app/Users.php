<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable=[
        'kode_user','nama','tempat_lahir',
        'tanggal_lahir','agama','nama_ibu',
        'ktp','alamat','kota','kode_pos',
        'jenis_tinggal','nomor_telepon','hp',
        'email','kps','asal_sekolah',
        'pekerjaan','nama_perusahaan',
        'telpon_perusahaan','kelas',
        'program_studi','gelombang','ktp_ayah',
        'nama_ayah','tanggal_lahir_ayah',
        'pendidikan_ayah','pekerjaan_ayah',
        'penghasilan_ayah','telepon_ayah',
        'ktp_ibu','tanggal_lahir_ibu',
        'pendidikan_ibu','pekerjaan_ibu',
        'penghasilan_ibu','telepon_ibu',
        'info_stiepan'
    ];
}
