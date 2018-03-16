@extends('fellows.master')
@include('fellows.popup.createpost')
@include('fellows.popup.onthispost')
@include('fellows.popup.editpersonal')
@include('fellows.popup.edit-academia')
@include('fellows.popup.edit-career')
@include('fellows.popup.edit-religion')
@include('fellows.popup.edit-favorite')

@include('fellows.popup.reply-comment')


@section('pagination')
  <div class="row">
  <br>
  <center>
  {!! $posts->links() !!}
    </center>
  </div>
  
@endsection


@section('post-content')
<style type="text/css">
  div.hide {
  display: none;
}
div.show {
  display: block;
}

</style>

    @if (!$posts->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              <div class="alert alert-success">
              <p style="font-size: 15px;"><center>Hello {{ Auth::user()->firstname }}, please make a your first post on meineshule</center></p></div>

    @else
    @foreach ($posts as $post2)

  
                            
                  <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-edit" > </i> Post made by you</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-calendar-check-o"></i> {{ $post2->created_at->format('M d,Y \a\t h:i a') }}</a></li>
                            </ul>
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -6%;margin-bottom: -4%;">
                            
                            <ul  class="list-unstyled list-inline chats" style="margin-bottom: -3%;">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="{{ route('user', [ 'name' => $post2->author->firstname, 'id' => $post2->author->id ]) }}" title="{{ $post2->created_at->format('M d,Y \a\t h:i a') }}">
                              <div class="avatar pull-left">
                              <img class="user-avatar" src="{{ URL::to('uploads/images/'.$post2->author->featured_image) }}" height="45" width="45" 
                              data-toggle="tooltip" data-placement="left" 
                              title="
                              <img src='{{ URL::to('uploads/images/'.$post2->author->featured_image) }}' class='img-responsive' />
                              @if(!$pickings->count())
                              <a href='{{ route('unpickUsers', [ 'picked' => $post2->author_id ]) }}'
                              <button class='' type='submit'>Pick {{ $post2->author->firstname }} </button> 
                              </a>
                              @else
                              @foreach($pickings as $picking)
                              @if ($post2->author_id == $picking->picked_user)
                              
                              <a href='{{ route('unpickUsers', [ 'picked' => $post2->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>UnPick {{ $post2->author->firstname }} </button> 
                              </a>
                              @else
                              <a href='{{ route('pickUsers', [ 'for_user' => Auth::user()->id, 'picked' => $post2->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>Pick {{ $post2->author->firstname }} </button> 
                              </a>
                              @endif
                              @endforeach
                              @endif
                              
                              " 
                              data-html="true" >
                              {{ $post2->author->firstname }} posted {{ $post2->created_at->diffforhumans() }}
                              </div>
                              </a>
                              </li>
                             
                            </ul>
                           {{ $post2->body }}
                            
                           
                            @if($post2->featured_image)
                            <br>
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" >
                            @else
                            @endif
                            <br>

                            <ul class="list-unstyled list-inline" style="margin-top: 1%;">
                            <li><span class="badge bg-important">{{ $post2->tag1 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag2 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag3 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag4 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag5 }}</span></li>
                            </ul>

                            <ul class="list-unstyled list-inline" style="color: #7f7f7f;margin-top: -2%;">
                            <li title="post shared from {{ $post2->location }}, {{ $post2->author->country }}"><a href="#" title=""><b class="fa fa-map-marker red" style=""></b> </a>{{ $post2->location }}
                            </li>
                            <li><a href="#" title="122 views"><b class="fa fa-desktop"></b></a> </li>
                            <li>
                            <a href="#" title="0 likes"><b class="fa fa-heart-o"></b><span class="badge bg-important"></span></a>
                             </li>
                            </ul>
                            </div>

                            <div class="panel-footer" style="border-top: 1px solid #ddd;padding: 3px;padding-bottom: 0%;">
                            <div class="col-md-12 padd sscroll chats">
                            <form class="form-horizontal" role="form" action="{{ route('addcomment', ['on_post' => $post2->id]) }}" method="post">
                            <ul>
                            <li class="by-me">
                              <div class="avatar pull-left">
                              <img src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}" height="32" width="32" >
                              </div>
                              <div class="chat-body input-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input placeholder="  share your coment here" style="color: #000;margin-top: 3%;border: 1px solid #ddd;" class="form-control col-md-8"  name="body" autofocus>
                            </div>
                            </li>
                            </ul>
                            
                            <!-- <input type="submit" name="post_comment" value="comment"> -->
                            
                          
                            </form>
                            </div>
                             
                            <div class="clearfix">
                            <div class="col-md-12 padd sscroll" style="margin-top: -3%;">
                              
                            <ul class="chats">

                            @if (!$post2->comments->count())
                            <br>
                            <div class="col-md-12" style="color: #7f7f7f;"> There is no comment till now. </div>
                            @else
                            @foreach ($post2->comments as $comment2)
                                  
                                  <li class="by-me" style="margin-bottom: 0%;">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                      <img src="{{ URL::to('uploads/images/'.$comment2->author->featured_image) }}" width="32" height="32" alt="{{ $comment2->author->firstname }}"/>
                                    </div>

                                    <div class="chat-body">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $comment2->author->firstname }} <span class="pull-right"><i class="icon_clock_alt"></i> {{ $comment2->created_at->Diffforhumans() }}</span></div>
                                      {!! str_limit($comment2->body, $limit= 120, $end = '.....<a href='.url("/".$post2->slug).'>Read More</a>') !!}
                                      
                                    </div>
                                  </li> 
                            @endforeach
                            @endif
                            </ul>

                          
                            
                            </div>
                            </div>
                            </div>
                            </div>
               </a>

    @endforeach
    @endif

@endsection



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
     @yield('post-content')
     
         
         
         @yield('pagination')
         
  </div>

  <div class="tab-pane" id="peopleTab">
     @yield('home-content')
      
         @yield('pagination')
        
  </div>

  <div class="tab-pane" id="placesTab">
     @yield('home-content')
        
         @yield('pagination')
         
  </div>

  <div class="tab-pane" id="eventsTab">
     @yield('post-content')
         
         @yield('pagination')
        
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

