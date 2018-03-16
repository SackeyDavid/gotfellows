<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashboard</title>


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
    
    {!!Html::style('css/style-responsive.css')!!}
    
    {!!Html::style('css/xcharts.min.css')!!}
  
  {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
  {!!HTML::style('css/datepicker.css')!!}
  {!!HTML::style('css/datepicker.min.css')!!}
  {!!HTML::style('css/datepicker.standalone.css')!!}
  
  @yield('style')
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
<body>


			<section id="container" class="">
				@include('layouts.header.header')
				@include('layouts.sidebars.sidebar')
				<section id="main-content">
					<div class="wrapper">
            @yield('content')
          </div>
				</section>
				
			</section>

    <!-- javascripts -->
    {!!Html::script('js/jquery.js')!!}
    
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

  {!!Html::script('js/gdp-data.js')!!}
  
  {!!Html::script('js/morris.min.js')!!} 

  {!!Html::script('js/sparklines.js')!!}

  {!!Html::script('js/charts.js')!!} 
  
  {!!Html::script('js/jquery.slimscroll.min.js')!!}
  {!!Html::script('js/bootstrap-datepicker.js')!!}
  <!-- {!!Html::script('js/bootstrap-datepicker.min.js')!!}
   -->
  @yield('script')

  
  <script>

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
</body>
</html>