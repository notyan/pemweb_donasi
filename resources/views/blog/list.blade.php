<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    @foreach($list_blog as $blog)
    <article>
        <h2><a href="{{ route('blog.baca', ['id' => $blog->id]) }}">{{ $blog->judul }}</a></h2>
        <small>Penulis : {{ DB::table('users')->where('id', $blog->id_user)->get()->first()->name }}</small>
    </article>
    @endforeach
</body>
</html>