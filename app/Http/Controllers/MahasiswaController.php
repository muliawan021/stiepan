<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
// use App\Kode;

class MahasiswaController extends Controller
{
    public function code(){
        return view('mahasiswa.kode');
    }

    public function registrasi(Request $request){
        $data['kode']=Users::where('kode_user',$request->kode_user)->first(); 
        return view('mahasiswa.registrasi',$data);
        // return $data;
    }

    public function update(Request $request,$id){
        $update=Users::find($id);
        $update->nama=$request->nama;
        $update->tempat_lahir=$request->tempat_lahir;
        $update->tanggal_lahir=$request->tanggal_lahir;
        $update->agama=$request->agama;
        $update->nama_ibu=$request->nama_ibu;
        $update->ktp=$request->ktp;
        $update->alamat=$request->alamat;
        $update->kota=$request->kota;
        $update->kode_pos=$request->kode_pos;
        $update->jenis_tinggal=$request->jenis_tinggal;
        $update->nomor_telepon=$request->nomor_telepon;
        $update->email=$request->email;
        $update->hp=$request->hp;
        $update->kps=$request->kps;
        $update->asal_sekolah=$request->asal_sekolah;
        $update->pekerjaan=$request->pekerjaan;
        $update->nama_perusahaan=$request->nama_perusahaan;
        $update->telpon_perusahaan=$request->telpon_perusahaan;
        $update->kelas=$request->kelas;
        $update->program_studi=$request->program_studi;
        $update->gelombang=$request->nama;
        $update->ktp_ayah=$request->ktp_ayah;
        $update->nama_ayah=$request->nama_ayah;
        $update->tanggal_lahir_ayah=$request->tanggal_lahir_ayah;
        $update->pendidikan_ayah=$request->pendidikan_ayah;
        $update->pekerjaan_ayah=$request->pekerjaan_ayah;
        $update->penghasilan_ayah=$request->penghasilan_ayah;
        $update->telepon_ayah=$request->telepon_ayah;
        $update->ktp_ibu=$request->ktp_ibu;
        $update->tanggal_lahir_ibu=$request->tanggal_lahir_ibu;
        $update->pendidikan_ibu=$request->pendidikan_ibu;
        $update->pekerjaan_ibu=$request->pekerjaan_ibu;
        $update->penghasilan_ibu=$request->penghasilan_ibu;
        $update->telepon_ibu=$request->telepon_ibu;
        $update->info_stiepan=$request->info_stiepan;
        $update->save();
        return('oke');
        
        
    }

    
}
