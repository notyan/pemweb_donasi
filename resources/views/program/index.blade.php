<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>
<body>
    @foreach($list_berita as $berita)
    <article>
        <h2><a href="{{ route('berita.baca', ['id' => $berita->id]) }}">{{ $berita->judul }}</a></h2>
        <small>Penulis : {{ DB::table('users')->where('id', DB::table('program')->where('id', $berita->id_program)->get()->first()->id_user)->get()->first()->name }}</small>
    </article>
    @endforeach
</body>
</html>