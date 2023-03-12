<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INSCRIPTION | POSTS-IT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/build/css/intlTelInput.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dist/plugins/hmenu/ace-responsive-menu.css')}}">
  <link rel="stylesheet" href="{{asset('dist/vendor/select2/dist/css/select2.min.css')}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-box-body">
      <h3 class="login-box-msg">Inscription</h3>
      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      <form role="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group has-feedback">
        <input id="name"  type="name" class="form-control sty1 @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Nom') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
      </div>
        <div class="form-group has-feedback">
        <input id="email"  type="email" class="form-control sty1 @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Adresse e-mail') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
      <div class="form-group has-feedback">
        <input id="password"  type="password" class="form-control sty1 @error('password') is-invalid @enderror" placeholder="{{ __('Mot de passe') }}" name="password" required autocomplete="new-password">
      </div>
    
      <div class="form-group has-feedback">
        <input id="password-confirm"  type="password" class="form-control sty1 @error('password-confirm') is-invalid @enderror" placeholder="Retapez votre mot de passe" name="password-confirm" required autocomplete="new-password">
      </div>
    
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __("S'inscrire") }}</button>
        </div>
        <!-- /.col --> 
     
    </form>
    <div class="m-t-2">Avez-vous déjà un compte? <a href="{{ route('login') }}" class="text-center">{{ __('Connectez-vous facilement') }}</a></div>
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!-- jQuery 3 --> 
<script src="{{asset('dist/js/jquery.min.js')}}"></script> 
<script src="{{url('js/login.js')}}"></script>
<!-- v4.0.0-alpha.6 --> 
<script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script> 

<!-- template --> 
<script src="{{asset('dist/js/niche.js')}}"></script>
<script src="{{asset('dist/vendor/select2/dist/js/select2.full.min.js')}}"></script>
<script type="{{('text/javascript')}}">
  $(".select2").select2({ 'data-placeholder': 'Choisir...' });
  </script>
<script src="{{asset('dist/build/js/intlTelInput.js')}}"></script>
</body>
</html>