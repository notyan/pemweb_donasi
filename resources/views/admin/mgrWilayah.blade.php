<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Manajemen Wilayah</title>
    </head>
    <body>
        <p>Manajemen Wilayah </p>
        <p>Tambah Provinsi</p>
        <form action='/admin/mgrWilayah/addProv' method="post">
            <input type="text" name="namaProv" placeholder="Nama Provinsi"/>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        <p>Tambah Kabupaten</p>
        <form action='/admin/mgrWilayah/addKab' method="post">
            <input type="text" name="namaKab" placeholder="Nama Kabupaten"/>
            <select name="idProv" id="idProv"> 
                @foreach($provinsi as $prov)
                    <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
                @endforeach
            </select>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        
        <p>Tambah Kecamatan</p>
        <form action='/admin/mgrWilayah/addKec' method="post">
            <input type="text" name="namaKec" placeholder="Nama Kecamatan"/>
            <select name="idKab" id="idKab"> 
                @foreach($kabupaten as $kab)
                    <option value="{{ $kab->id }}">{{ $kab->nama }}</option>
                @endforeach
            </select>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        <br/>
        <p>Tambah Kelurahan</p>
        <form action='/admin/mgrWilayah/addKel' method="post">
            <input type="text" name="namaKel" placeholder="Nama Kelurahan"/>
            <select name="idKec" id="idKec"> 
                @foreach($kecamatan as $kec)
                    <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                @endforeach
            </select>
            {{ csrf_field() }}
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>