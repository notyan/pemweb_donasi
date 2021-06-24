<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Donatur</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Pengirim</td>
            <td>Konfirmasi</td>
        </tr>
        @foreach($list_donatur as $donatur)
        <tr>
            <td>{{ $donatur->nama_pengirim }}</td>
            <td><a href="{{ route('relawan.donatur', ['id' => $donatur->id]) }}">detail</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>