
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CONNEXION | POSTS-IT</title>
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

         <img src="{{asset('img/logo-login.jpeg')}}" alt="logo" width="250">

     </div>
     <p class="login-box-msg">Veuillez-vous connecter</p>
     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror
     @if(session('success'))
     <div class="container">
 <div class="alert alert-success">
     {{ session('success') }}
 </div>
 </div>
 @endif

     @if(session('error'))
    <div class="container">
<div class="alert alert-danger">
    {{ session('error') }}
</div>
</div>
@endif

     <form action="{{ route('login') }}" method="POST">
        @csrf
          <div class="form-group has-feedback">
        <input id="email"  type="email" class="form-control sty1 @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Adresse e-mail') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control sty1 @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Mot de passe') }}" required autocomplete="current-password">
      </div>
      @if (Route::has('password.request'))
      <div class="checkbox icheck">
        <label>
          <a href=" {{ route('password.request') }} " class="pull-right"><i class="fa fa-lock"></i> Mot de passe oublié?</a> </div>
          <div>
          @endif
            <!-- /.col -->
            <div class="col-xs-4 m-t-1">
              <button type="submit" id="submit" class="btn btn-primary btn-block btn-flat">  {{ __('Se connecter') }}</button>
            </div>
            <!-- /.col --> 
          </div>
        </form>
        <div class="m-t-2">
          <a href="{{ route('register') }}" class="text-center">{{ __('Inscrivez-vous gratuitement') }}</a></div>

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
      <script src="{{asset('js/login.js')}}"></script>
      <!-- dist --> 
      <script src="{{asset('dist/js/niche.js')}}"></script>


    </body>
    </html>
