@extends('fellows.master')
@include('fellows.popup.createpost')
@include('fellows.popup.editpersonal')
@include('fellows.popup.edit-academia')
@include('fellows.popup.edit-career')
@include('fellows.popup.edit-religion')
@include('fellows.popup.edit-favorite')
@include('fellows.popup.moreonresult')
@include('fellows.content.all')
@include('fellows.content.people')
@include('fellows.content.place')
@include('fellows.content.event')


@section('content')
<div class="container">
@include('fellows.sidebars.leftside')
	<div class="col-md-6">
  <div class="alert alert-success collapse " id="sentAlert">
              <a href="#" data-dismiss="alert" class="close">&times;</a>
              <p>Your question has been submitted</p>
              </div> 
@include('fellows.center.post')
<div class="tab-content">
    @yield('script')
  <div class="tab-pane active" id="allTab">
     @yield('all-content')
    
       
       
         
  </div>

  <div class="tab-pane" id="peopleTab">
     @yield('people-content')
       
        
  </div>

  <div class="tab-pane" id="placesTab">
     @yield('places-content')
        
       
         
  </div>

  <div class="tab-pane" id="eventsTab">
     @yield('event-content')
         
        
        
  </div>

  </div>
</div>
	
@include('fellows.sidebars.rightside')
</div>

@endsection

@section('script')
<script type="text/javascript">
  (function(){
    "use strict";

    $(".user-avatar").tooltip({
      delay: {
        show: 500,
        hide: 3000
      } 
      
      });
  })();
</script>
@endsection