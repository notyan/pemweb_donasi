<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Saran</title>
    </head>
    <body>
        <p>Manajemen Wilayah </p>
        <p>Tambah Provinsi</p>
        <form action='/addProvinsi' method="post">
            <input type="text" name="namaProv" placeholder="Nama Provinsi"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        <p>Tambah Kabupaten</p>
        <form action='/addKabupaten' method="post">
            <input type="text" name="namaKab" placeholder="Nama Kabupaten"/>
            <input type="text" name="idProv" placeholder="Kode Provinsi"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        
        <p>Tambah Kecamatan</p>
        <form action='/addKecamatan' method="post">
            <input type="text" name="namaKec" placeholder="Nama Kecamatan"/>
            <input type="text" name="idKab" placeholder="Kode Kabupaten"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        <p>Tambah Kelurahan</p>
        <form action='/addKelurahan' method="post">
            <input type="text" name="namaKel" placeholder="Nama Kelurahan"/>
            <input type="text" name="idKec" placeholder="Kode Kecamatan"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>