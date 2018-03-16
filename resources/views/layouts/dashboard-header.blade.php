<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'meineshule') }}</title>

    <!-- Styles -->
     <!-- Bootstrap CSS -->  
       {!!HTML::style('css/bootstrap.min.css')!!} 
    <!-- bootstrap theme -->
    {!!Html::style('css/bootstrap-theme.css')!!}
    
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('css/elegant-icons-style.css')!!}
  

    {!!Html::style('css/font-awesome.min.css')!!}
       
    <!-- full calendar css-->
    {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    
    {!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}

    <!-- easy pie chart-->
    {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    
    <!-- owl carousel -->
    {!!Html::style('css/owl.carousel.css')!!}
    
    {!!Html::style('css/jquery-jvectormap-1.2.2.css')!!}
  
    <!-- Custom styles -->
    {!!Html::style('css/fullcalendar.css')!!}

  {!!Html::style('css/widgets.css')!!}
  {!!Html::style('css/style.css')!!}
  {!!Html::style('css/style-1.css')!!}
    {!!Html::style('css/site.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    
    {!!Html::style('css/xcharts.min.css')!!}
  
  {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
  {!!HTML::style('css/datepicker.css')!!}
  {!!HTML::style('css/datepicker.min.css')!!}
  {!!HTML::style('css/app.css')!!}
  {!!HTML::style('css/datepicker.standalone.css')!!}
  
  @yield('style')
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/site.css') }}" rel="stylesheet">
    <link href="{{ URL::To('img/logo.png') }}" type="image/jpg" rel="shortcut icon"> 
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

        $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    });
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });

    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <div class="toggle-nav">
                      
               <!--  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
               {{ URL::to('img/logo.png') }} -->
            </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="{{ url('/') }}">
                    <a href="{{ url('/') }}"><img src="{{ URL::to('img/logo.png') }}" height="35" width="35"></a>
                        {{ config('app.name', 'meineshule') }}
                    </a>
                </div>
                <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form role="form" method="GET" action="{{ route('searchitem') }}" class="navbar-form">
                            <input class="form-control" name="searchitem" placeholder="Search" type="text">
                        </form>
                        
                    </li> 
                                     
                </ul>
                <!--  search form end -->                
            </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                    <!--Notification dropdown begin-->
                     <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu nav navbar-nav navbar-right">
                <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon_pin_alt"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">6 regions sell coconuts here</p>
                            </li>
                            <li>
                                <a href="{{ route('greateraccra') }}">
                                    <div class="task-info">
                                        <div class="desc">Greater Accra </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a title="30% of coconut vendors in the Northern Region are here" href="{{ route('northernregion') }}">
                                    <div class="task-info">
                                        <div class="desc">
                                            Northern Region
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('easternregion') }}">
                                    <div class="task-info">
                                        <div class="desc">Eastern Region</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('uppereast') }}">
                                    <div class="task-info">
                                        <div class="desc">Upper West</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('voltaregion') }}">
                                    <div class="task-info">
                                        <div class="desc">Volta Region</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="{{ route('seeallregions') }}">See All Regions</a>
                            </li>
                        </ul>
                    </li>
                    
                        

                     @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                    <!-- task notificatoin start -->

                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    
                   <!--  <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new reviews</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <!-- <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ route('profile', Auth::user()->id) }}"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('myproducts', Auth::user()->name) }}"><i class="fa fa-truck"></i> My Products</a>
                            </li>
                            <!-- <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                                
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                             --><li>
                                 <a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           <!--  <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li> -->
                        </ul>
                    </li>
                      @endif
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>

                        </ul>
                   
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    

</body>
</html>
