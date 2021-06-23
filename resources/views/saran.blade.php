<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
        <title> Saran</title>
    </head>

    <body>
        <section class="section my-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10 my-0">
                        <h4 class="card-title">Saran</h4>
                    </div>
                </div>
            </div>
        <form action='/createSaran' method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Hp</label>
                <div class="input-group mb-3" id="no_hp">
                    <span class="input-group-text">+62</span>
                    <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="subyek">Subyek</label>
                <input type="text" id="subyek" name="subyek" class="form-control" value="{{ old('subyek') }}">
            </div>

            <div class="form-group">
                <label for="konten" class="form-label">Pesan</label>
                <textarea class="form-control" id="konten" name="konten"
                rows="3">{{ old('konten') }}</textarea>
            </div>

            <div class="form-group">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                        </button>
                </div>
            </div>

            <div class="form-group">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" value="{{ old('captcha') }}">
            </div>
            <button type="submit" class="btn btn-primary my-2 mx-1">Kirim</button>
        </form>
        </div>
        </section>
     <ul>   


            <!-- <input type="text" name="nama" placeholder="Nama"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="text" name="noHp" placeholder="No HP"/>
            <input type="text" name="subyek" placeholder="Subyek"/>
            <input type="text" name="konten" placeholder="Konten"/>
            {{ csrf_field() }} -->
                <!-- <div class="form-group col-md-4">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-success" id="refresh">R</button>
                    </div>
                </div>
             <input type="text" name="captcha" placeholder="captcha"/>
            <input type="submit" value="Submit" /> -->
        <!-- </form>
        
        <ul> -->

            
        </ul>
        
    </body>

    <!-- @push('custom-scripts') -->
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
    <!-- @endpush -->
</html>