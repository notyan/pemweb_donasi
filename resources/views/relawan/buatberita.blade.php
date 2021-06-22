<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Berita</title> 
    <script src="https://cdn.tiny.cloud/1/xc7g3ykd3apgrbw5s1u17syg2grst5lrpt9sg5epz0dglib2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#konten_berita'
      });
    </script>
</head>
<body>
    <form action="{{ route('relawan.program.berita.buat', ['id' => $id_program]) }}" method="post">
    @csrf
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul"></td>
            </tr>
            <tr>
                <td>Konten</td>
                <td><textarea name="konten_berita" id="konten_berita"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Buat!">
    </form>
</body>
</html>