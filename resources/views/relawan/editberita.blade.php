<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <script src="https://cdn.tiny.cloud/1/xc7g3ykd3apgrbw5s1u17syg2grst5lrpt9sg5epz0dglib2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#konten_berita'
      });
    </script>
</head>
<body>
<form action="{{ route('relawan.program.berita.edit', ['id' => $data->id]) }}" method="post">
    @csrf
    @method('PUT')
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul" value="{{ $data->judul }}"></td>
            </tr>
            <tr>
                <td>Konten</td>
                <td><textarea name="konten_berita" id="konten_berita">{{ $data->konten_berita }}</textarea></td>
            </tr>
            <tr>
                <td>Berita masih aktif?</td>
                <td>
                    <select name="is_active" id="is_active">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Perbarui!">
    </form>
    <form action="{{ route('relawan.program.berita.edit', ['id' => $data->id]) }}" method="post">
    @csrf
    @method('delete')
        <input type="submit" value="Hapus Berita!">
    </form>
</body>
</html>