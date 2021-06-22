<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi {{ $data_program->nama_program }}</title>
</head>
<body>
    <h1>Donasi Program {{ $data_program->nama_program }}</h1>
    <form action="" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Pengirim</td>
            <td><input type="text" name="nama_pengirim"></td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td>
            <select name="vendor">
            @foreach($list_vendor as $vendor)
                <option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
            @endforeach
            </select>
            </td>
        </tr>
        <tr>
            <td>No Rekening</td>
            <td><input type="text" name="no_rekening_pengirim"></td>
        </tr>
        <tr>
            <td>Nama atas nama Rekening</td>
            <td><input type="text" name="nama_atas_nama"></td>
        </tr>
        <tr>
            <td>Nominal Donasi</td>
            <td><input type="number" name="nominal_donasi"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td><textarea name="pesan"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="Donasi!">
    </form>
</body>
</html>