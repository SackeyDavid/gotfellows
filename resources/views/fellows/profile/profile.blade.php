@extends('fellows.master')
@include('fellows.profile.users-posts')

@include('fellows.popup.editpersonal')
@include('fellows.popup.edit-academia')
@include('fellows.popup.edit-career')
@include('fellows.popup.edit-religion')
@include('fellows.popup.edit-favorite')

@section('content')
<div class="">
  <br><br><br><br>
                                  <div id="profile" class="home" style="margin-top: -30px;" class="">
                                    <section class="panel">
                                      <div class="bio-graph-heading chats">
                                      
                                      <br><br><br><br><br>
                                        <div class="home profile1-ava by-me">
                                          @if(!$user)
                                          @else
                                               <img alt="" class="pull-left" style="border: #000;" width="100" height="100" src="{{ URL::to('uploads/images/'.$user->featured_image) }}"> 
                                               </div>
                                               {{ $user->description }}
                                          @endif
                                               
                                      </div>
                                      
                                    </section>
                                      
                                  </div>

<br><br><br><br>
<div class="container">
@include('fellows.sidebars.onlyleft')
  <div class="col-md-6">
  <div class="alert alert-success collapse " id="sentAlert">
              <a href="#" data-dismiss="alert" class="close">&times;</a>
              <p>Your question has been submitted</p>
              </div> 
  @include('fellows.center.send')
  			 <div class="">
                  @yield('post-content')
             </div>
  </div>
  <!-- @include('fellows.sidebars.rightside') -->
	
</div>
</div>
@endsection