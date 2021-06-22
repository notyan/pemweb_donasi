<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Saran</title>
    </head>
    <body>
        <p>Test </p>
        <form action='/createSaran' method="post">
            <input type="text" name="nama" placeholder="Nama"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="text" name="noHp" placeholder="No HP"/>
            <input type="text" name="subyek" placeholder="Subyek"/>
            <input type="text" name="konten" placeholder="Konten"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        
        <ul>

            
        </ul>
        
    </body>
</html>