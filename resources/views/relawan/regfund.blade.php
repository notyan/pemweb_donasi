<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama Program</td>
            <td>Pemilik Program</td>
            <td>Daftar Sebagai Fundraiser</td>
        </tr>
        @foreach($list_program as $program)
        <tr>
            <td><a href="{{ route('relawan.program.detail', ['id' => $program->id]) }}">{{ $program->nama_program }}</a></td>
            <td>{{ DB::table('users')->where('id', $program->id_user)->get()->first()->name }}</td>
            <td>
            @if(DB::table('program_funriser')->where('id_program', $program->id)->where('id_user', Auth::id())->get()->first())
                Anda sudah terdaftar
            @else
            <form action="{{ route('daftar-fundraiser', ['id' => $program->id]) }}" method="post">
                @csrf
                    <input type="submit" value="Daftar">
                </form>
            @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>