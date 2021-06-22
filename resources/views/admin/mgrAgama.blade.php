<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Saran</title>
    </head>
    <body>
        <p>Test </p>
        
        <form action='/admin/mgrAgama/add' method="post">
            <input type="text" name="nama" placeholder="Nama Agama"/>
            <select name='isActive' id='isActive'>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        
        <ul>

            
        </ul>
        
    </body>
</html>