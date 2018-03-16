@extends('fellows.master')
@include('fellows.profile.others-messages')
@include('fellows.popup.createpost')

@section('content')
<div class="">
 <br><br><br><br>
<div class="container">
@include('fellows.sidebars.onlyleft')
  <div class="col-md-6">
  <div class="alert alert-success collapse " id="sentAlert">
              <a href="#" data-dismiss="alert" class="close">&times;</a>
              <p>Your question has been submitted</p>
              </div> 
  @include('fellows.center.post')
  			 <div class="">
                  @yield('post-content')
             </div>
  </div>
  @include('fellows.sidebars.rightside')
	
</div>
</div>
@endsection