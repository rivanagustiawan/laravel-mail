<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Database Kepemudaan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Custom styles for this template -->
    <link rel="icon" type="image/gif/png" href="/images/ic_logo.ico">
    <link href="/css/register.css" rel="stylesheet">
  </head>

  <body>

    <div class="daftar">
        <div class="container">
<main class="form-signin mt-4">
    <div class="title-register">
        <h1 >DAFTAR AKUN BARU</h1>
    </div>
    <div class="containerLogin mt-4">
        <div class="effect-wrap">
            <img draggable="false" class="effect-1" src="/asset/1.png" data-speed="5" alt="kanan">
            <img draggable="false" class="effect-2" src="/asset/2.png" data-speed="5" alt="kanan">
            <img draggable="false" class="asap" src="/asset/asap.png" id="awan1"  alt="asap1">
            <img draggable="false" class="asap2" src="/asset/asap.png"  alt="asap1">
          </div>
        <form method="POST" action="/register">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 text-start">
                    <label class="fs10 poppins-500 text-white">Nama Lengkap <span style="color: red;">*</span></label> 
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> 
                <div class="col-12 text-start col-md-6">
                    <label class="fs10 poppins-500 text-white">Email <span style="color: red;">*</span></label> 
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> 
            </div>
            <div class="row">
                <div class="col-12 text-start col-md-6">
                    <label class="fs10 poppins-500 text-white">Username <span style="color: red;">*</span></label> 
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                    @error('username')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> 
                <div class="col-12 text-start col-md-6">
                    <label class="fs10 poppins-500 text-white">Password <span style="color: red;">*</span></label> 
                    <div id="show_hide_password" style="position: relative">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        <div class="eye">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div>
                    </div>
                    @error('password')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> 
            </div>
            
            <button class="w-100 btn btn-lg btn_login mt-4" type="submit">DAFTAR</button>
        </form>
    </div>
</main>

 </div>
    </div>
    <script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>

  </body>
</html>

