<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Donatur</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Pengirim</td>
            <td>{{ $data->nama_pengirim }}</td>
        </tr>
        <tr>
            <td>Nomor Rekening</td>
            <td>{{ $data->no_rekening_pengirim }}</td>
        </tr>
        <tr>
            <td>Nama atas nama Rekening</td>
            <td>{{ $data->nama_atas_nama }}</td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td>{{ $vendor }}</td>
        </tr>
        <tr>
            <td>Nominal Donasi</td>
            <td>{{ $data->nominal_donasi }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $data->email }}</td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>{{ $data->pesan }}</td>
        </tr>
        <form action="{{ route('relawan.donatur', ['id' => $data->id]) }}" method="post">
        @csrf
        @method('PUT')
        <tr>
            <td>Status Verifikasi</td>
            <td>
                <select name="status_verifikasi">
                    <option value="0" @if($data->status_verifikasi == 0) {{ "selected" }} @endif>Belum Verifikasi</option>
                    <option value="1" @if($data->status_verifikasi == 1) {{ "selected" }} @endif>Sudah Verifikasi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status Donasi</td>
            <td>
                <select name="status_donasi">
                    <option value="0" @if($data->status_donasi == 0) {{ "selected" }} @endif>Belum Terkonfirmasi</option>
                    <option value="1" @if($data->status_donasi == 1) {{ "selected" }} @endif>Sudah Terkonfirmasi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Konfirmasi"></td>
        </tr>
        </form>
    </table>
</body>
</html>