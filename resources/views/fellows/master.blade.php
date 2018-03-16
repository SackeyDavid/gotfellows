<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Palmflet- Connect and share posts with fellows">
    <meta name="author" content="Palmflet">
    <meta name="keyword" content="Fellows, Picks, Posts, Share, Personal, Career, Academic, Favorite, Religious">
    <link href="{{ URL::To('img/logo-big.png') }}" type="image/jpg" rel="shortcut icon">  

    <title>Palmflet</title>


    <!-- Styles -->
     <!-- Bootstrap CSS -->  
     {!!Html::style('css/site.css')!!}
     {!!Html::style('css/bootstrap.min.css')!!} 
    <!-- bootstrap theme -->
    {!!Html::style('css/bootstrap-theme.css')!!}
    
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('css/elegant-icons-style.css')!!}
  

    {!!Html::style('css/font-awesome.min.css')!!}
       
    <!-- full calendar and datepicker css-->
    {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!!Html::style('assets/jquery-ui/jquery-ui-1.10.1.custom.css')!!}
    {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
    {!!Html::style('assets/jquery-ui/jquery-ui-1.10.1.custom.min.css')!!}
    {!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}

    <!-- easy pie chart-->
    {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    {!!Html::style('css/site.css')!!}
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
  {!!Html::style('css/app.css')!!}
  @yield('style')
   
    
    
    
     
    <!-- =======================================================
        
    ======================================================= -->
  </head>
<body style="background-color:#f5f8fa;">
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1107553102709431',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


      <div id="app" style="background-color:#f5f8fa;">
			<section id="app" class="con">
				@include('fellows.header.header')
        
				
        
				<section>
          <div>
          <!-- Styles -->
           <!-- Bootstrap CSS -->  
          

          {!!HTML::style('welcome-css/bootstrap.min.css')!!} 
          <!-- bootstrap theme -->
          {!!Html::style('welcome-css/bootstrap-theme.css')!!}

          {!!Html::style('content-css/account.css')!!}

         
          
          <!--external css-->
          <!-- font icon -->
          {!!Html::style('content-css/elegant-icons-style.css')!!}
        

          {!!Html::style('welcome-css/font-awesome.min.css')!!}
             
          
          {!!Html::style('content-css/style.css')!!}
        
          
          {!!Html::style('welcome-css/style-responsive.css')!!}
          {!!Html::style('css/site.css')!!}
          
          @yield('style')

          <style type="text/css">
                #app {
                  background-color:#f5f8fa;
                }
                
                .glyphicon-education:before {
                 content: "\e233";
                }
                .post:hover {
                  border-top: 1px solid rgba(255,255,255,0.5);
                  background-color: rgba(105,105,105,0);
                }
              </style>

          

            

            @yield('content')

           





          </div>
				</section>
    </section>
       </div>

    <!-- javascripts -->
    {!!Html::script('js/jquery.js')!!}
    
    {!!Html::script('js/app.js')!!}

    {!!Html::script('js/site.js')!!}

    {!!Html::script('js/jquery-3.2.1.min.js')!!}

    {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
  
    {!!Html::script('js/jquery-1.8.3.min.js')!!}
    
    {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}
    
    <!-- bootstrap -->
    {!!Html::script('js/bootstrap.min.js')!!}
    
    <!-- nice scroll -->
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    
    {!!Html::script('js/jquery.nicescroll.js')!!}
    
    <!-- charts scripts -->
    {!!Html::script('js/jquery.knob.js')!!}
    
    {!!Html::script('js/jquery.sparkline.js')!!}
    
    {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
  
    {!!Html::script('js/owl.carousel.js')!!}
    
    <!-- jQuery full calendar -->
    {!!Html::script('js/fullcalendar.min.js')!!}
    <!-- Full Google Calendar - Calendar -->
    {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
  
    <!--script for this page only-->
    {!!Html::script('js/calendar-custom.js')!!}
  
    {!!Html::script('js/jquery.rateit.min.js')!!}
  
    <!-- custom select -->
    {!!Html::script('js/jquery.customSelect.min.js')!!}
    
    {!!Html::script('assets/chart-master/Chart.js')!!}

   
    <!--custome script for all page-->
    {!!Html::script('js/scripts.js')!!}
  
    <!-- custom script for this page-->
    {!!Html::script('js/sparkline-chart.js')!!}
    
    {!!Html::script('js/easy-pie-chart.js')!!}
  
    {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
  
  {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}

  {!!Html::script('js/xcharts.min.js')!!}
  
  {!!Html::script('js/jquery.autosize.min.js')!!}
  
  {!!Html::script('js/jquery.placeholder.min.js')!!}

  {!!Html::script('js/jquery-2.0.3.js')!!}
  
  {!!Html::script('js/bootstrap.js')!!} 

  {!!Html::script('js/morris.js')!!}   

  {!!Html::script('js/sparklines.js')!!}

  {!!Html::script('js/charts.js')!!} 
  {!!Html::script('js/form-component.js')!!} 
  {!!Html::script('js/jquery-1.11.3.min.js')!!} 
  {!!Html::script('js/jquery.slimscroll.min.js')!!}
  {!!Html::script('js/bootstrap-datepicker.js')!!}
  {!!Html::script('js/bootstrap3-typeahead.min..js')!!}
  {!!Html::script('js/bootstrap-datepicker.min.js')!!}
  {!!Html::style('assets/jquery-ui/jquery-ui-1.10.1.custom.min.js')!!}
  {!!Html::style('assets/jquery-ui/jquery-ui-1.10.2.custom.min.js')!!}
  {!!Html::script('src/js/app.js')!!}
    
  @yield('script')

  
  <script>
    $('.datepicker').datepicker({
    dateFormat: 'yy-mm-dd'
    });

    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    });

    $(document).ready(function(){
    $('input[name="DOB"]').datepicker({
      format: 'yyyy/mm/dd',
      
      });
    });

    var path = "{{ route('autocomplete') }}";
          $('input.typeahead').typeahead({
                source: function (query, process) {
                    return $.get(path, { query: query }, function (data) {
                        return process(data);
                    });
                }
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

   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    <script src="{{ asset('js/jquery.tagsinput.js') }}"></script>
    <script src="{{ asset('js/form-component.js') }}"></script>
    <script src="js/scripts.js"></script>
    <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
 
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.9.2.custom.min"></script>
    <script src="js/vue.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="{{ URL::to('src/js/app.js') }}"></script>
   
</body>

</html>