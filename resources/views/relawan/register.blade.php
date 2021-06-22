<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Relawan</title>
</head>
<body>
    <div style="text-allign:center">
        <form action="{{ route('relawan.reg') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Nama depan</td>
                    <td><input type="text" name="nama_depan" id="nama_depan"></td>
                </tr>
                <tr>
                    <td>Nama belakang</td>
                    <td><input type="text" name="nama_belakang" id="nama_belakang"></td>
                </tr>
                <tr>
                    <td>Alamat ktp</td>
                    <td><input type="text" name="alamat_ktp" id="alamat_ktp"></td>
                </tr>
                <tr>
                    <td>No WA</td>
                    <td><input type="number" name="no_wa" id="no_wa"></td>
                </tr>
                <tr>
                    <td>Kelurahan</td>
                    <td>
                        <select name="id_kelurahan" id="id_kelurahan">
                        @foreach($list_kelurahan as $kelurahan)
                            <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Profesi</td>
                    <td>
                        <select name="id_profesi" id="id_progesi">
                        @foreach($list_profesi as $profesi)
                            <option value="{{ $profesi->id }}">{{ $profesi->nama }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Vendor</td>
                    <td>
                        <select name="id_jk" id="id_jk">
                        @foreach($list_jk as $jk)
                            <option value="{{ $jk->id }}">{{ $jk->nama }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="id_agama" id="id_agama">
                        @foreach($list_agama as $agama)
                            <option value="{{ $agama->id }}">{{ $agama->nama }}</option>
                        @endforeach
                        </select> 
                    </td>
                </tr>
                <tr><td><input type="submit" value="Daftar!"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>