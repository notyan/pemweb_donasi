<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data_berita->judul }}</title>
</head>
<body>
    {!! $data_berita->konten_berita !!}
    <div id="info">
        <p>
            <h3>Info tentang program</h3>
            Nama Program : {{ $data_program->nama_program }}
            Pemilik : {{ DB::table('users')->where('id', $data_program->id_user)->get()->first()->name }} <br />
            Target : {{ $data_program->target }} <br />
            Batas Akhir : {{ $data_program->batas_akhir }} <br />
            <a href="{{ route('program.donasi', ['id' => $data_program->id]) }}">Donasi</a>
        </p>
    </div>
</body>
</html>