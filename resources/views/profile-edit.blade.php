<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> @yield('title', 'Profile - POSTS-IT')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/plugins/hmenu/ace-responsive-menu.css">

<!-- form wizard -->
<link rel="stylesheet" href="dist/plugins/formwizard/jquery-steps.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header"> 
            @include('partials.header')
        </header>
        
        <!-- Main Nav -->
        <div class="main-nav">
            @include('partials.sidebar')
        </div>
        <!-- Main Nav --> 

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> 
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1>Mon espace profile</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><i class="fa fa-angle-right"></i> Profile</li>
                </ol>
                <hr>

    <!-- Main content -->
    <div class="content">
      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Modifier mon profile</h5>
            </div>
            <div class="card-body">
              
              <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Nom</label>
                    <input class="form-control" placeholder="Nom" type="text">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Prénom</label>
                    <input class="form-control" placeholder="Prénom" type="text">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Bio</label>
                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Bio"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file" class="custom-file-input" type="file">
                      <span class="custom-file-control"></span> </label>
                  </div>
                </div>
                </div>
                 </div>
                 <div class="card-footer text-left">
                    <a href="{{ route('home') }}" class="btn btn-default">Annuler</a>
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
              </form>
           
            </div>
          </div>
        </div>
    </div>
</div>
      
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  @include('partials.footer')
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/niche.js"></script>
<script src="dist/plugins/hmenu/ace-responsive-menu.js" type="text/javascript"></script> 
<!--Plugin Initialization--> 
<script type="text/javascript">
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