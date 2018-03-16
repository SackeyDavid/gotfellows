@section('users-post')
@if ($posts->count())
              @foreach ($posts as $post)

@if ($post->author_id == Auth::user()->id)
              <div class="alert alert-success">
              <a href="#" data-dismiss="alert" class="close">&times;</a>
              <p style="font-size: 15px;"><center>Hello {{ Auth::user()->firstname }}, we've prevented this content which was posted by you on {{ $post->created_at->format('M d,Y \a\t h:i a') }}. You can view it on your home page</center></p>
              <p><center>
              <ul class="list-unstyled list-inline">
              <li class="by-me">
              <img src="{{ URL::to('uploads/images/'.$post->author->featured_image) }}" height="30" width="30" class="img-responsive" />
              </li>
              <li>
              
              </li>
              </ul><span> <a href="#">{{ $post->body }} (more)</a></span></center>
              </p>
              </div>
              
              @else
              
               

               <style type="text/css">
                 /*.posts:hover {
                        /*border-top: 1px solid rgba(255,255,255,0.9);*/
                         /* background-color: rgba(105,105,105,0);
                      }*/
               </style>
              
              <a  href="#" id="onthispost" style="text-decoration: none;">

              <div  class="well posts">
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-edit" > </i> Post made</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i> Subject that pertains to you</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-calendar-check-o"></i> {{ $post->created_at->format('M d,Y \a\t h:i a') }}</a></li>
                            </ul>
                          
                            <ul  class="list-unstyled list-inline chats">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="#" style="text-decoration: none;">
                              <div class="avatar pull-left">
                              <img  src="{{ URL::to('uploads/images/'.$post->author->featured_image) }}" height="45" width="45" data-toggle="tooltip" data-placement="left" 
                              title="
                              <img src='{{ URL::to('uploads/images/'.$post->author->featured_image) }}' class='img-responsive' />
                              @if(!$pickings->count())
                              @else
                              @foreach($pickings as $picking)
                              @if ($post->author_id == $picking->picked_user)
                              <a href='{{ route('unpickUsers', [ 'picked' => $post->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>UnPick {{ $post->author->firstname }} </button> 
                              </a>
                              @else
                              <a href='{{ route('pickUsers', [ 'for_user' => Auth::user()->id, 'picked' => $post->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>Pick {{ $post->author->firstname }} </button> 
                              </a>
                              @endif
                              @endforeach
                              @endif
                              " 
                              data-html="true" class="user-avatar">
                              {{ $post->author->firstname }} posted {{ $post->created_at->diffforhumans() }}
                               
                              </div>
                              </a>
                         
                              </li>
                             
                              
                              
                            </ul>
                            <span>{{ $post->body }}<a onclick="showDialog('postsDialog',{{ $post->id }})" href="javascript:void(0);">(more)</a></span>
                            <script type="text/javascript">

                                  function showDialog(show, id){
                                    var sentDialog = document.getElementById(show);
                                    
                                     $('#postsDialog').modal('show');
                                     
                                  };
                              </script>
                            @if($post->featured_image)
                            <br>
                            <br>
                            <img src="{{ URL::to('uploads/images/'.$post->featured_image) }}" min-height="500" min-width="600" >
                            @else
                            @endif
                            <br>
                            <br>
                            <ul class="list-unstyled list-inline">
                            <li><span class="badge bg-important">{{ $post->tag1 }}</span></li>
                            <li><span class="badge bg-important">{{ $post->tag2 }}</span></li>
                            <li><span class="badge bg-important">{{ $post->tag3 }}</span></li>
                            <li><span class="badge bg-important">{{ $post->tag4 }}</span></li>
                            <li><span class="badge bg-important">{{ $post->tag5 }}</span></li>
                            </ul>

                            <ul class="list-unstyled list-inline" style="color: #7f7f7f">
                            <li title="post shared from {{ $post->location }}, {{ $post->author->country }}"><i class="fa fa-map-marker red" style="color: #7f7f7f"></i> {{ $post->location }} <img src="{{ URL::to('uploads/images/'.$post->author->country.'.png') }}" height="17" width="17"  ></li>
                            <li><i class="fa fa-desktop"></i> 122 views</li>
                            <li>
                            <a href="#"><span class="badge bg-important"><b class="fa fa-heart-o"></b></span></a>
                             0 impressed</li>
                            </ul>

                            <div class="col-md-8">
                            <form class="form-horizontal" role="form" action="{{ route('addcomment', ['on_post' => $post->id]) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <textarea placeholder="share your coment here" style="color: #000;" class="form-control" name="body"></textarea>
                          
                            
                            <br>
                            <input type="submit" name="post_comment" value="Post">
                            
                          
                            </form>
                            </div>
                             
                            <div class="clearfix">
                            <div class="col-md-12 padd sscroll">
                              
                            <ul class="chats">

                            @if (!$post->comments->count())
                            <br>
                            <div class="col-md-12" style="color: #7f7f7f;"> There is no comment till now. </div>
                            @else
                            @foreach ($post->comments as $comment)
                                  <li class="by-me">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                      <img src="{{ URL::to('uploads/images/'.$comment->author->featured_image) }}" width="32" height="32" alt="{{ $comment->author->firstname }}"/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $comment->author->firstname }} <span class="pull-right">{{ $comment->created_at->Diffforhumans() }}</span></div>
                                      {!! str_limit($comment->body, $limit= 120, $end = '.....<a href='.url("/".$post->slug).'>Read More</a>') !!}
                                      <div class="clearfix"></div>
                                    </div>
                                  </li> 
                            @endforeach
                            @endif
                            </ul>
                            </div>
                            </div>
                  </div>

                         
                 
                    </a>
                    @endif
                     @endforeach
      @else
              
              @if($favorite)
              <div class="alert alert-success">
              <p style="font-size: 15px;"><center>Soorry {{ Auth::user()->firstname }}, still you don't have feeds pertaining to you. Kindly use the search bar to find posts with something pertaining to you</center></p></div>
               
              @else
              <div class="alert alert-success">
              <p style="font-size: 15px;"><center>Hello {{ Auth::user()->firstname }}, welcome to meineshule! Please click 'setup your account' on the right to view feeds on meineshule</center></p></div>
              
              @endif

                
     @endif  
@endsection