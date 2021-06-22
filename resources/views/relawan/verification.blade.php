<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Relawan</title>
</head>
<body>
    <h1>Verifikasikan Status Relawan Anda</h1>
    <h2>Masukkan kode verifikasi</h2>
    <form action="{{ route('relawan.verif') }}" method="POST">
    @csrf
        <input type="number" name="token" id="token"> <br />
        <input type="submit" value="Verifikasi!">
    </form>
</body>
</html>