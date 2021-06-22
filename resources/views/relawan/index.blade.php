<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Relawan</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Halo, {{ Auth::user()->name }}!</h1>
    <h2>Berikut daftar program kamu</h2>
    <table>
        <tr>
            <td>Nama Program</td>
            <td>Edit</td>
            <td>Hapus</td>
            <td>Berita</td>
        </tr>
        @foreach($list_program as $program)
        <tr>
            <td>
                <a href="{{ route('relawan.program.detail', ['id' => $program->id]) }}">
                    {{ $program->nama_program }}
                </a>
            </td>
            <td><a href="{{ route('relawan.program.edit', ['id' => $program->id]) }}">edit</a></td>
            <td>
            <form action="{{ route('relawan.program.hapus', ['id' => $program->id]) }}" method="post">
            @csrf
            @method('delete')
                <input type="submit" value="Hapus">
            </form>
            </td>
            <td>
            @if(DB::table('program_berita')->where('id_program', $program->id)->get()->first())
                <a href="{{ route('relawan.program.berita.edit', ['id' => DB::table('program_berita')->where('id_program', $program->id)->get()->first()->id]) }}">Edit Berita</a>
            @else
                <a href="{{ route('relawan.program.berita.buat', ['id' => $program->id]) }}">Buat berita</a>
            @endif
            </td>
        </tr>
        @endforeach
        <tr><td><a href="{{ route('relawan.program.buat') }}">Tambah Program</a></td></tr>
    </table>
</body>
</html>