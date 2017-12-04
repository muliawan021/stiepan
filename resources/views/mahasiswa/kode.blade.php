<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('mahasiswa/registrasi')}}" method="get">
    <!-- {{ csrf_field() }} -->
        <label for="kode_user">Kode User</label>
        <input type="text" name="kode_user" id=""><br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>