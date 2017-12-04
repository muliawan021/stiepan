<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kode User</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/iCheck/square/blue.css')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
<div class="login-box">
    <div class="login-box-body">
        <p class="login-box-msg">Input Nama Mahasiswa</p>
        <form action="{{url('admin/create')}}" method="post">
            {{ csrf_field() }} 
           
            <div class="form-group has-feedback">
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" >        
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Kode User" name="kode_user" id="kode_user" >        
            </div>
            <button class="btn btn-success" type="submit">Submit</button><br>
        </form>
        <div class="col-md4">
            <button id="code" type="button" class="btn btn-primary" >Generate Kode User</button>
        </div>
    </div>
</div>
       
         
    

   
    <script>
        var a = Math.floor((Math.random() * 9999999) + 100000);
        document.getElementById("code").addEventListener("click",function(){
            document.getElementById("kode_user").value="stiepan"+a;
        });
        console.log(a);
    </script>
</body>
</html>