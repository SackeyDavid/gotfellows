<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sharing and Knowing what people you share something with are doing">
    <meta name="author" content="Jabneel">
    <meta name="keyword" content="Fellows, People, Connect, Picks, Posts, Palmflet, Class, Career, Favourite">
    <link href="{{ URL::To('img/logo-big.png') }}" type="image/jpg" rel="shortcut icon"> 

    <title>Palmflet | Connect with Fellows</title>

    <!-- Styles -->
     <!-- Bootstrap CSS -->  
       {!!Html::style('welcome-css/bootstrap.min.css')!!} 
    <!-- bootstrap theme -->
    {!!Html::style('welcome-css/bootstrap-theme.css')!!}
    
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('welcome-css/elegant-icons-style.css')!!}
  

    {!!Html::style('welcome-css/font-awesome.min.css')!!}
    {!!Html::style('welcome-css/font-awesome.css')!!}
    
  {!!Html::style('welcome-css/style.css')!!}
  
    
    {!!Html::style('welcome-css/style-responsive.css')!!}
    
    
  @yield('style')
   
   

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
  
    <div class="container">
    <br>
    <div class="col-md-3 col-md-offset-9">
        
        <a class="btn btn-primary btn-lg btn-block" style="border-radius:24px;" href="{{ URL::route('facebookLogin') }}"> <i class="fa fa-facebook"></i> Continue with facebook</a>
    </div>

      <form class="login-form" role="form" action="{{ route('login') }}" method="POST">  
      {{ csrf_field() }}       
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_mail_alt"></i></span>
              <input  type="text" class="form-control" name="email" required autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input  type="password" class="form-control" name="password" required>
            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" value="remember"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            
            
            <a class="btn btn-default btn-lg btn-block" href="{{ route('register') }}"><i class="fa fa-edit "></i> Signup</a>
            
        </div>
      </form>
    <div class="text-center">
    <br>
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <center>
                <a>With palmflet, you get to know and interact with people who share something with you -fellows.</a>
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Welcome to palmflet.co.uk</a> by <a href="https://bootstrapmade.com/">David Sackey</a>
                <br>
                (C)Copyright 2017
                </center>
            </div>
        </div>
    </div>

@include('fellows.popup.register-dialog')
  </body>
</html>
