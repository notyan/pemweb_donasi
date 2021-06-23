<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Relawan</title>
</head>
<body>
    Halo, {{ Auth::user()->name }}
    <table>
        <caption>Menu Relawan</caption>
        <tr><td><a href="{{ route('relawan.program.list') }}">Daftar Program</a></td></tr>
        <tr><td><a href="{{ route('relawan.program.index') }}">Daftar Programmu</a></td></tr>
        <tr><td><a href="{{ route('relawan.fundraiser') }}">Daftar Programmu sebagai Fundraiser</a></td></tr>
    </table>
</body>
</html>