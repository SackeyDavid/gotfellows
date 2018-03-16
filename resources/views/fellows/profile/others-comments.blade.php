@section('pagination')

@endsection

@section('post-content')
@if ($posts->count())
              @foreach ($posts as $post)
              <div  class="well">
                            
                          
                            <ul  class="list-unstyled list-inline chats">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="#">
                              <div class="avatar pull-left">
                              <img  src="{{ URL::to('uploads/images/'.$post->author->featured_image) }}" height="45" width="45"
                              data-toggle="tooltip" data-placement="left" 
                              title="
                              <img src='{{ URL::to('uploads/images/'.$post->author->featured_image) }}' class='img-responsive' />
                              
                              " 
                              data-html="true" class="user-avatar">
                              You posted {{ $post->created_at->diffforhumans() }}
                              </div>
                              </a>
                              </li>
                             
                            </ul>
                            <span>{{ $post->body }}<a href="#postsDialog" data-toggle="modal">(more)</a></span>
                            @if($post->featured_image)
                            <br>
                            <br>
                            <img src="{{ URL::to('uploads/images/'.$post->featured_image) }}" min-height="500" min-width="600" >
                            @else
                            @endif
                            <br><br>

                           

                            


                          <div class="clearfix">
                            
                               @if (!$post->comments->count())
                              <br>
                              <div class="col-md-12" style="color: #7f7f7f;"> There is no comment till now. </div>

                              @else
                              <div class="col-md-12 padd sscroll">
                              <ul class="chats">
                              @foreach ($post->comments as $comment)

                                  @if ($comment->author->id == Auth::user()->id )
                                 
                            
                            


                                  <li class="by-other">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-right">
                                      <img src="{{ URL::to('uploads/images/'.$comment->author->featured_image) }}" width="32" height="32" alt="{{ $comment->author->firstname }}"/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $comment->created_at->Diffforhumans() }}<span class="pull-right">{{ $comment->author->firstname }} </span></div>
                                      {!! str_limit($comment->body, $limit= 120, $end = '.....<a href='.url("/".$post->slug).'>Read More</a>') !!}
                                      <div class="clearfix"></div>
                                    </div>
                                  </li> 
                              
                                @else

                                <li class="by-me">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                      <img src="{{ URL::to('uploads/images/'.$comment->author->featured_image) }}" width="32" height="32" alt="{{ $comment->author->firstname }}"/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $comment->author->firstname }} <span class="pull-right">{{ $comment->created_at->Diffforhumans() }}</span></div>
                                      {!! str_limit($comment->body, $limit= 120, $end = '.....<a href='.url("/".$post->slug).'>Read More</a>') !!}
                                      
                                    </div>
                                    <a id="show-reply-form"  onclick="showDiv('reply-form')" href="javascript:void(0);"> Reply</a>

                                    <script type="text/javascript">
                                        var x = 'f';
                                                            
                                        function showDiv(show){
                                        
                                        var form = document.getElementById(show);
                                          if(x == 'f'){
                                         form.className = "show";
                                         x = 't';
                                        }
                                          else {
                                         form.className = "hide";
                                         x = 'f';
                                        }

                                      }
                                                          
                                    </script>
                                    <div class="col-md-12">
                                    <form id="reply-form" class="hide" class="form-inline" role="form" action="{{ route('sendReply', ['on_comment' => $comment->id]) }}" method="post">

                                
                                         

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="active" value="1">
                                        <div class="form-group">
                                        <textarea placeholder="write a reply here" style="color: #000;" class="form-control" name="body"></textarea>
                                                              
                                        </div>
                                        <div class="pull-right"> <input type="submit" name="post_comment" value="Reply"> </div>

                                    

                                    </form>
                                    </div>
                                  
                                  </li> 
                                  
                              
                                 @endif

                                 @if(!$comment->replies->count())
                                 @else
                                 @foreach($comment->replies as $replies)
                                 <li class="by-other">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="col-md-12">
                                    <div class="avatar pull-right">
                                      <img src="{{ URL::to('uploads/images/'.$replies->author->featured_image) }}" width="32" height="32" alt="{{ $replies->author->firstname }}"/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $replies->created_at->Diffforhumans() }}<span class="pull-right">{{ $replies->author->firstname }} </span></div>
                                      {!! str_limit($replies->body, $limit= 120, $end = '.....<a href='.url("/".$post->slug).'>Read More</a>') !!}
                                      <div class="clearfix"></div>
                                    </div>
                                    </div>
                                  </li> 
                                  @endforeach
                                  @endif
                                 @endforeach
                            </ul>
                            </div>
                            @endif
                            
                            </div>
                  
                            
                             

 </div>

  @endforeach
              
                
              
    @else
    @if(!$posts->count())
      <div class="alert alert-info">
      <a href="#" data-dismiss="alert" class="close">&times;</a>
      <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you {{ $name }} has not made any post</center></p></div>
    @endif
    @endif
                
@endsection

