<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Program {{ $data->nama_program }}</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <a href="{{ route('relawan.program.index') }}">Daftar Programmu</a>
    <table>
        <tr>
            <td>Nama Program</td>
            <td>{{ $data->nama_program }}</td>
        </tr>
        <tr>
            <td>Info</td>
            <td>{{ $data->info }}</td>
        </tr>
        <tr>
            <td>Target</td>
            <td>{{ $data->target }}</td>
        </tr>
        <tr>
            <td>Batas Akhir</td>
            <td>{{ $data->batas_akhir }}</td>
        </tr>
    </table>
</body>
</html>