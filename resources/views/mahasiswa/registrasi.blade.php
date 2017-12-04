<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
</head>
<body>
    <h2>Form Registrasi Mahasiswa Baru</h2>
        <h3>Data Calon Mahasiswa</h3>
        <form action="{{url('mahasiswa/'.$kode->id.'/update')}}" method="post">
        {{csrf_field()}}
            <label>Kode User=</label> 
            <input type="text" name="kode_user" id=""value="{{$kode->kode_user}}" ><br>
            <label for="nama" >Nama Lengkap</label>
            <input type="text" name="nama"  value="{{$kode->nama}}"><br>
            <label for="tempat_lahir"> Tempat Lahir</label>
            <input type="text"name="tempat_lahir" value="{{$kode->tempat_lahir}}" ><br>
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir" value="{{$kode->tempat_lahir}}" ><br>
            <label for="agama">Agama</label>
            <select name="agama" id="">
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>{{$kode->agama}}<br>
            <label for="nama_ibu">Nama Ibu Kandung</label>
            <input type="text" name="nama_ibu" value="{{$kode->nama_ibu}}"><br>
            <label for="ktp">Nomor Induk KTP/NIK</label>
            <input type="text" name="ktp" value="{{$kode->ktp}}"><br>
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" cols="30" rows="10">{{$kode->alamat}}</textarea><br>
            <label for="kota">Kota</label>
            <input type="text" name="kota" value="{{$kode->kota}}" ><br>
            <label for="kode_pos">Kode Pos</label>
            <input name="kode_pos" type="number" value="{{$kode->kode_pos}}"><br>
            <label for="jenis_tinggal">Jenis Tinggal</label>
            <select name="jenis_tinggal" id="">
                <option value="Orang Tua">Orang Tua</option>
                <option value="Wali">Wali</option>
                <option value="Kost">Kost</option>
                <option value="Asrama">Asrama</option>
            </select>{{$kode->jenis_tinggal}}<br>
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" value="{{$kode->nomor_telepon}}"><br>
            <label for="hp">Nomer HP</label>
            <input type="text" name="hp" value="{{$kode->hp}}"><br>
            <label for="email">E-mail</label>
            <input type="email" name="email" value="{{$kode->email}}"><br>
            <label for="kps">Penerima KPS </label>
            <select name="kps" id="">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>{{$kode->kps}}<br>
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" value="{{$kode->asal_sekolah}}"><br>
            <label for="pekerjaan">Pekerjaan</label>
            <select name="pekerjaan">
                <option value="Bekerja">Bekerja</option>
                <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>{{$kode->pekerjaan}}<br>
            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input type="text" placeholder="Di isi jika bekerja" name="nama_perusahaan" value="{{$kode->nama_perusahaan}}"><br>
            <label for="telepon_perusahaan">Telepon Perusahaan</label>
            <input type="text" placeholder="Di isi jika bekerja" name="telepon_perusahaan" value="{{$kode->telepon_perusahaan}}" id=""><br>
            <label for="kelas">Pilihan Kelas Perkuliahan</label>
            <select name="kelas" id="">
                <option value="Pagi">Pagi</option>
                <option value="Malam">Malam</option>
            </select>{{$kode->kelas}}<br>
            <label for="program_studi">Program Studi</label>
            <select name="program_studi" id="">
                <option value="Manajemen">Manajemen</option>
                <option value="Akutansi">Akutansi</option>
            </select>{{$kode->program_studi}}<br>
            <label for="gelombang">Gelombang</label>
            <select name="gelombang" id=""> 
                <option value="Gel I">Gel I</option>
                <option value="Gel II">Gel II</option>
                <option value="Gel III">Gel III</option>
            </select>{{$kode->gelombang}}<br>
        
        <h3>Data Orang Tua</h3>
            <h2>Data Ayah</h2>
            <label for="nama_ayah">Nama</label>
            <input type="text" name="nama_ayah" value="{{$kode->nama_ayah}}"><br>
            <label for="ktp_ayah">NIK</label>
            <input type="text" name="ktp_ayah" id="" value="{{$kode->ktp_ayah}}"><br>
            <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir_ayah" id="" value="{{$kode->tanggal_lahir_ayah}}"><br>
            <label for="pendidikan_ayah">Pendidikan</label>
            <input type="text" name="pendidikan_ayah" id="" value="{{$kode->pendidikan_ayah}}"><br>
            <label for="penghasilan_ayah" >Penghasilan Ayah perbulan</label>
            <input type="text" name="penghasilan_ayah" id="" value="{{$kode->penghasilan_ayah}}" ><br>
            <label for="pekerjaan_ayah">Pekerjaan</label>
            <input type="text" name="perkerjaan_ayah" id="" value="{{$kode->pekerjaan_ayah}}"><br>
            <label for="telepon_ayah">Telepon</label>
            <input type="text" name="telepon_ayah" id="" value="{{$kode->telepon_ayah}}">

            <h2>Data Ibu</h2>
            <label for="nama_ibu">Nama</label>
            <input type="text" name="nama_ibu" value="{{$kode->nama_ibu}}"><br>
            <label for="ktp_ibu">NIK</label>
            <input type="text" name="ktp_ibu" id="" value="{{$kode->ktp_ibu}}"><br>
            <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir_ibu" id="" value="{{$kode->tanggal_lahir_ibu}}"><br>
            <label for="pendidikan_ibu">Pendidikan</label>
            <input type="text" name="pendidikan_ibu" id="" value="{{$kode->pendidikan_ibu}}"><br>
            <label for="penghasilan_ayah" >Penghasilan Ibu perbulan</label>
            <input type="text" name="penghasilan_ibu" id="" value="{{$kode->penghasilan_ibu}}" ><br>
            <label for="pekerjaan_ibu">Pekerjaan</label>
            <input type="text" name="perkerjaan_ibu" id="" value="{{$kode->pekerjaan_ibu}}"><br>
            <label for="telepon_ibu">Telepon</label>
            <input type="text" name="telepon_ibu" id="" value="{{$kode->telepon_ibu}}"><br>
            <button type="submit">Submit</button>
        </form>

<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
</body>
</html>