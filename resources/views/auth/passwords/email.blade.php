<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reinitialisation - UTILISATEUR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dist/plugins/hmenu/ace-responsive-menu.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->

</head>
<body class="hold-transition login-page sty1">
  <div class="login-box sty1">
    <div class="login-box-body sty1">
      <div class="login-logo">

        <img src="{{url('img/logo-login.jpeg')}}" alt="logo" width="250">

      </div>
      
      <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <h6>Entrez votre adresse e-mail ci-dessous et nous vous enverrons la marche à suivre. Si vous ne voyez pas notre e-mail, regardez dans votre dossier Spam.</h6>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        
    @endif
@error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    
                @enderror
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control sty1 @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Adresse e-mail') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div>
          <div class="col-xs-8">
            <div class="checkbox icheck">
            </div>
            <!-- /.col -->
            <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __('Envoyer ma demande') }}</button>
            </div>
            <p>
              <a href="{{ route('login') }}" class="text-center"><i class="fa fa-arrow-left"></i> {{ __('Retourner en arrière') }}</a>
            </p>
            <!-- /.col --> 
          </div>
        </form>
        
        <!-- /.social-auth-links -->
        
      </div>
      <!-- /.login-box-body --> 
    </div>
    <!-- /.login-box --> 
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <!-- jQuery 3 --> 
    <script src="{{asset('dist/js/jquery.min.js')}}"></script> 

    <!-- v4.0.0-alpha.6 --> 
    <script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script> 

    <!-- template --> 
    <script src="{{asset('dist/js/niche.js')}}"></script>

  </body>
  </html>
