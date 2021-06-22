<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program {{ $data->nama_program }}</title>
</head>
<body>
    <form action="{{ route('relawan.program.edit', ['id' => $data->id]) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama Program</td>
            <td><input type="text" name="nama_program" id="nama_program" value="{{ $data->nama_program }}"></td>
        </tr>
        <tr>
            <td>Info</td>
            <td><textarea name="info" id="info">{{ $data->info }}</textarea></td>
        </tr>
        <tr>
            <td>Target</td>
            <td><input type="number" name="target" id="target" value="{{ $data->target }}"></td>
        </tr>
        <tr>
            <td>Batas Akhir</td>
            <td><input type="date" name="batas_akhir" id="batas_akhir" value="{{ $data->batas_akhir }}"></td>
        </tr>
    </table>
    <input type="submit" value="Perbarui!">
    </form>
</body>
</html>