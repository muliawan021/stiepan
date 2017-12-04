<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button id="code" >New Code</button><br>
    <form action="{{url('admin/create')}}" method="post">
    {{ csrf_field() }} 
        <label for="nama">Nama</label>
        <input type="text" name="nama" ><br>
        <label for="kode_user" > Kode </label> 
        <input type="text" name="kode_user" id="kode_user" >
        <button type="submit">Submit</button>
    </form>

    <script>
        var a = Math.floor((Math.random() * 9999999) + 100000);
        document.getElementById("code").addEventListener("click",function(){
            document.getElementById("kode_user").value="stiepan"+a;
        });
        console.log(a);
    </script>
</body>
</html>