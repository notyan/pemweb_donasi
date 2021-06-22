<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Program</title>
</head>
<body>
    <h1>Buat program baru</h1>
    <form action="{{ route('relawan.program.buat') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Program</td>
            <td><input type="text" name="nama_program" id="nama_program"></td>
        </tr>
        <tr>
            <td>Info</td>
            <td><textarea name="info" id="info"></textarea></td>
        </tr>
        <tr>
            <td>Target</td>
            <td><input type="number" name="target" id="target"></td>
        </tr>
        <tr>
            <td>Batas Akhir</td>
            <td><input type="date" name="batas_akhir" id="batas_akhir"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Buat!"></td>
        </tr>
    </table>
    </form>
</body>
</html>