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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='/createSaran' method="post">
            <input type="text" name="nama" placeholder="Nama"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="text" name="noHp" placeholder="No HP"/>
            <input type="text" name="subyek" placeholder="Subyek"/>
            <input type="text" name="konten" placeholder="Konten"/>
            {{ csrf_field() }}
                <div class="form-group col-md-4">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-success" id="refresh">R</button>
                    </div>
                </div>
             <input type="text" name="captcha" placeholder="captcha"/>
            <input type="submit" value="Submit" />
        </form>
        
        <ul>

            
        </ul>
        
    </body>
    <script type="text/javascript">
        $('#refresh').click(function(){
          $.ajax({
             type:'GET',
             url:'refreshcaptcha',
             success:function(data){
                $(".captcha span").html(data.captcha);
             }
          });
        });
    </script>
</html>