@extends('layouts.dashboard-header')

@section('content')

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
<style type="text/css">
  .glyphicon-bed:before {
  content: "\e215";

  }

  .col-md-3 a{
    text-decoration: none;
  }

</style>
<div class="container">

  <!-- @foreach(['danger','warning','success','info'] as $msg) -->
 <!--  alert alert-{{ $msg }} -->
 <!-- id="sentAlert" -->
    @if(Session::has('msg'))
    <div class="alert alert-success" >
    <a href="#" data-dismiss="alert" class="close">&times;</a>
    <p class=""><center> {{ Session::get('msg') }}</center></p>
    </div>
    @endif
  <!-- @endforeach -->

    <div class="row">
       <div class="container divs">
  <div class="row row-flex row-flex-wrap" id="accountDivs">
  <div class="col-md-12">
    <div class="col-md-3">
       <a href="{{ route('northernregion') }}" title="Retreat Songs" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Northern Region</h2></center>
    
      </div></a>
    </div>

     <div class="col-md-3">
       <a href="{{ route('ashantiregion') }}"  title="Bible Study" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Ashanti Region</h2></center>
    
      </div></a>
    </div>

    <div class="col-md-3">
      <a href="{{ route('brongahafo') }}"  tabindex="1" title="Get GS Messages @Retreat2017" ><div class="well accOffice" ><center align="middle"><i class="icon_pin_alt"></i><h2>Brong Ahafo</h2></center>
      </div></a>
    </div>

      

    <div class="col-md-3">
      <a href="{{ route('upperwestregion') }}" title="Meals" tabindex="1" ><div class="well schedule"><center align="middle"><i class="icon_pin_alt"></i><h2>Upper West</h2></center>
      </div></a>
    </div>
    

    <div class="col-md-3">
      <a href="{{ route('centralregion') }}" title="Accommodation Facilities" tabindex="1" ><div class="well library"><center align="middle"><i class="icon_pin_alt"></i><h2>Central Region</h2></center>
      </div></a>
    </div>

        <div class="col-md-3">
       <a href="{{ route('westernregion') }}"  title="Variety | Fun" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Western Region</h2></center>
    
     </div></a>
    </div>


        <div class="col-md-3">
       <a href="{{ route('greateraccra') }}" target="_blank" title="Download Programme Outline" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Greater Accra</h2></center>
    
      </div></a>
    </div>

       <div class="col-md-3">
       <a href="{{ route('easternregion') }}" title="Stream Live" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Eastern Region</h2></center>
    
      </div></a>
    </div>

    <div class="col-md-3">
       <a href="{{ route('uppereast') }}" title="Stream Live" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Upper East</h2></center>
    
      </div></a>
    </div>

    <div class="col-md-3">
       <a href="{{ route('voltaregion') }}" title="Volta Region" tabindex="1" > <div class="well course"><center align="middle"><i class="icon_pin_alt"></i><h2>Volta Region</h2></center>
    
      </div></a>
    </div>

    




 

    </div>
  </div><!--/row-->
</div><!--/container-->


</div>
</div>
<!-- <center>
  <footer id="footer">
    <ul class="list-inline">
      <li><a href="#sentDialog"  data-toggle="modal"> Give Us Feedback! </a> </li>
    </ul>
  </footer>
</center>
 -->


@endsection