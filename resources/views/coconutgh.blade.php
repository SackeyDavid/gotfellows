<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>COCONUTGH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link href="{{ URL::To('img/logo.png') }}" type="image/jpg" rel="shortcut icon"> 
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
    {!!Html::style('css/site.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    
    {!!Html::style('css/xcharts.min.css')!!}
  
  {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
  {!!HTML::style('css/datepicker.css')!!}
  {!!HTML::style('css/datepicker.min.css')!!}
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
        


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />


        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class='preloader'>
            <div class='loaded'>&nbsp;</div>
        </div>

        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="assets/images/logo.png"/>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->




                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                            <p id="headar">

                                                <li><a href="{{ route('/') }}">HOME</a></li>
                                                <li><a href="{{ route('products') }}">PRODUCTS</a></li>
                                                <li><a href="#testimonial">BENEFITS</a></li>
                                                <li><a href="#contact">CONTACT</a></li>
                                                @if(Auth::guest())
                                                <li><a href="{{ route('register') }}">REGISTER</a></li>
                                                <li><a href="{{ route('login') }}">LOGIN</a></li>
                                                @else
                                                <li >
                        <a href="{{ route('profile', Auth::user()->id) }}">{{ Auth::user()->firstname }}</a>
                            
                        </li>
                    
                                                @endif
                                                


                                                <li>
                                                    <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <span class="glyphicon glyphicon-search"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <form class="navbar-form" role="search">
                                                                <div class="form-group ">
                                                                  
                                                                    <input type="text" class="form-control" placeholder="Search">
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </p>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->





            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1><b>WELCOME TO COCONUT</b><span><b>GH</b></span></h1>
                                            <p>We Better Your Coconut Experience Here</p>
                                            <div class="home_btn">
                                                <a href="{{ route('register') }}" class="btn btn-primary">REGISTER AS VENDOR</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>HELLO DEAR VENDOR<span></span></h1>
                                            <p>See what customers have said about your product and make a quick advertisement at 0.00 GHS</p>
                                            <div class="home_btn">
                                                <a href="{{ route('login') }}" class="btn btn-primary">VENDOR LOGIN</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>THE STEPS ARE PRETTY EASY<span></span></h1>
                                            <p>Get a wide customer base just for free!</p>
                                            <div class="home_btn">
                                                <a href="{{ route('register') }}" class="btn btn-primary">REGISTER AS VENDOR</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonial" class="testimonial">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="main_teastimonial_slider text-center">

                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <h3>BENEFITS OF CONSUMING COCONUT PRODUCTS</h3>
                                                    <ul>
                                                        <li><p>Full of Vitamins and Minerals</p></li>
                                                        <li><p>Prevents heart Diseases</p></li>
                                                        <li><P>Restore Damaged hair and Acne</P></li>
                                                        <li><p>Help with weight loss</p></li>
                                                        <li><p>Provides energy</p></li>
                                                    </ul>

                                                    <div class="single_test_author">
                                                        <h4><a href="http://www.newhealthadvisor.com/benefits-of-eating-coconut.html"> 
                                                        <span>BENEFITS OF CONSUMING COCONUT PRODUCTS</span></a> </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p><ul class="list-unstyled">
                                                        <li>Whole Product: vitamins and minerals</li>
                                                        <li>Coconut Water: Cools the body on a hot day </li>
                                                        <li>Refined Product: Secondary products such as biscuit, oil made fom Coconut</li>
                                                        <li>By Product: Coconut waste that when dried can be used for small firemaking</li>
                                                    </ul>
                                                    </p>
                                                    <div class="single_test_author">
                                                        <h4>Mrs. Debrah Yemsi <span> Domestic Worker</span></h4>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                         <!-- <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have 
                                                        suffered alteration in some form, by injected humour, or randomised words which don't look even 
                                                        slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there 
                                                        isn't anything embarrassing hidden in the middle of text. All the Lorem</p>
                                                    <div class="single_test_author">
                                                        <h4>JANE GALADRIEL <span> -- CEO TENGKUREP</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="contact_contant sections">
                                    <div class="col-sm-6">

                                        <div class="main_contact_info">
                                            <div class="head_title">
                                                <h3>CONTACT INFO</h3>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="row">
                                                <div class="contact_info_content">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>VISIT US</h3>
                                                                <p> University of Ghana, Legon, Accra Ghana</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>MAIL US</h3>
                                                                <p>coconutgh@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-mobile"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <p>+(233) 245 0042 247</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>WORK HOUR</h3>
                                                                <p>Mon - Sat: 08 Am - 17 Pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="head_title">
                                            <h3>LEAVE MESSAGE</h3>
                                            <div class="separator"></div>
                                        </div>
                                        <div class="single_contant_left">
                                            <form action="{{ route('feedback') }}" id="formid">
                                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                                                         </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
                                                </div>
                                                <!--</div>--> 
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>  <!-- End of contact section -->



            <section id="maps" class="maps">
                <div class="map-overlay">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="main_maps text-center">
                                <div class="col-sm-12 no-padding">
                                    <div class="map_canvas_icon">
                                        <i class="fa fa-map-marker" onClick="showmap()"></i>
                                        <h2 onClick="showmap()">FIND US ON GOOGLE MAP</h2>
                                    </div>
                                    <div id="map_canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="footer" class="footer_widget">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="main_widget">
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <div class="footer_logo">
                                                    <img src="assets/images/logo.png" alt="COCONUT logo" />
                                                </div>
                                                <p>Coconutgh is the only coconut vending website which makes available for you all your coconut vending joints within your location.</p>

                                            </div>
                                        </div>

                                        <div class="col-sm-3  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                                <div class="footer_title">
                                                    <h4>SITEMAP</h4>
                                                    <div class="separator"></div>
                                                </div>
                                                <ul>
                                                    <li><a href="">Services</a></li>
                                                    <li><a href="{{ route('aboutus') }}" target="_blank">About Us</a></li>
                                                    <!-- <li><a href="">Our Team</a></li> -->
                                                    <li><a href="{{ route('seeallregions') }}">Regions</a></li>
                                                </ul> 
                                            </div>
                                        </div>

                                        <div class="col-sm-3  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                               <!--  <div class="footer_title">
                                                    <h4>ACHIVES</h4>
                                                    <div class="separator"></div>
                                                </div> -->
                                                <ul>
                                                    <!-- <li><a href="">January 2015</a></li>
                                                    <li><a href="">February 2015</a></li>
                                                    <li><a href="">March 2015</a></li>
                                                    <li><a href="">April 2015</a></li> -->
                                                </ul> 
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                                <div class="footer_title">
                                                    <h4>NEWSLETTER</h4>
                                                    <div class="separator"></div>
                                                </div>

                                                <div class="footer_subcribs_area">
                                                    <p>Sign up for our mailing list to get latest updates and offers.</p>
                                                    <form class="navbar-form navbar-left" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            <button type="submit" class="submit_btn"></button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">CoconutGH</a>2017. All Rights Reserved</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href="https://fb.me/coconutgh" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <!-- <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>









        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb_R-CScqUL3j_RvPuIjUq-BH7z5P8XEU&callback=initMap"
    async defer></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>


        <script>

                                            function showmap() {
                                                map = new google.maps.Map(document.getElementById('map_canvas'), {
          center: {lat: 5.650562, lng:  -0.1962244},
          zoom: 13,
          zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
          }
        });

        marker = new google.maps.Marker({
          position: {
            lat: 5.650562, 
            lng: -0.1962244
          },
          map: map
        })

                                                /*var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(5.650562, -0.1962244),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };


                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                                                var marker = new google.maps.Marker({
                                                      position: {
                                                        lat: 5.650562, 
                                                        lng: -0.1962244
                                                      },
                                                      map: map
                                                    })*/
                                            }
        </script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
