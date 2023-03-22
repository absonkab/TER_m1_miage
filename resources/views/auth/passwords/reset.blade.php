<!DOCTYPE html>
<html lang="fr">
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
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-box-body">
      <h3 class="login-box-msg m-b-1">Récupérer votre mot de passe</h3>
      <p>Ça y est, vous êtes presque arrivé ! </p>

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
      <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
          <label for="email">{{ __("Adresse e-mail") }}</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="ti-email"></i></div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="password">{{ __("Mot de passe") }}</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="ti-lock"></i></div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          </div>
        </div>
        <div class="form-group">
            <label for="password-confirm">{{ __(" Confirmation mot de passe") }}</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="ti-lock"></i></div>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
  
            </div>
          </div>
        <div>
          <div class="col-xs-4 m-t-1">
            <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __('Réinitialiser') }}</button>
          </div>
          <div class="m-t-2">
            <a href="{{ route('logout') }}" class="text-center">Connectez-vous facilement !</a>
          </div>
        </div>
        <!-- /.col --> 
      </div>
    </form>
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!-- jQuery 3 --> 
<script src="{{asset('dist/js/jquery.min.js')}}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- dist --> 
<script src="{{asset('dist/js/niche.js')}}"></script>
<script src="{{asset('dist/plugins/hmenu/ace-responsive-menu.js')}}" type="text/javascript"></script> 
<!--Plugin Initialization--> 
<script type="{{asset('dist/text/javascript')}}">
$(document).ready(function () {
 $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query       
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
               });
});
</script>

</body>
</html>