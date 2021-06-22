<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Saran</title>
    </head>
    <body>
        <p>Manajemen Saran </p>

        <ul>
            @foreach($saran as $s)
                <li>{{ $s->subyek }}</li>
                {{$s -> inserted_by  }} 
                <br/>{{$s -> konten}}
                <br/>{{$s -> inserted_at}}
                <a href="#">Edit</a> 
                <a href="#">Validasi</a> 
                <a href="/admin/mgrSaran/{{ $s->id }}">Hapus</a>
            @endforeach
            
            
        </ul>
        
    </body>
</html>