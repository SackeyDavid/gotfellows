@extends('fellows.master')
@include('fellows.popup.createpost')
@include('fellows.popup.view-this-post')
@include('fellows.popup.onthispost')
@include('fellows.popup.editpersonal')
@include('fellows.popup.edit-academia')
@include('fellows.popup.edit-career')
@include('fellows.popup.edit-religion')
@include('fellows.popup.edit-favorite')
@include('fellows.content.home.people')
@include('fellows.content.home.place')
@include('fellows.content.home.event')
@include('fellows.content.home.all')

{!!Html::script('js/site.js')!!}

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
                       <!-- <div class="row">
                       <br>
                       @yield('pagination')
                       </div> -->
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


    var $postsDialog = $("#postsDialog")

    $("#onthispost").on("click", function() {
      $postsDialog.modal('show');
    });
      
  
  })();

  function showDialog(){
     
                                    
     $("#sentDialog").modal('show');                                
  };
</script>
@endsection