<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Programmu sebagai Fundraiser</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Program</td>
            <td>Daftar Fundraiser</td>
        </tr>
        @foreach($list_program as $program)
        <tr>
            <td><a href="{{ route('relawan.program.detail', ['id' => $program->id_program]) }}">
                {{ DB::table('program')->where('id', $program->id_program)->get()->first()->nama_program }}</a>
            </td>
            <td><a href="{{ route('relawan.program.donatur', ['id' => $program->id_program]) }}">
                Lihat</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>