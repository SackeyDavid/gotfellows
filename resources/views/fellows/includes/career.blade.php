@section('career-fellows')
@if ($posts->count())
              @foreach ($posts as $post2)

@if (!$career_fellows->count())
                <div class="alert alert-info">
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share {{ $input }} with anybody on meineshule</center></p>
                </div>
@else
                @foreach ($career_fellows as $fellow)
                  @if($post2->author_id == $fellow->from_user && $post2->author_id != Auth::user()->id)

<a href="" style="text-decoration: none;">
              
            
                 <div  class="well">
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-edit" > </i> Post made</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i> Subject that pertains to you</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-calendar-check-o"></i> {{ $post2->created_at->format('M d,Y \a\t h:i a') }}</a></li>
                            </ul>
                          
                            <ul  class="list-unstyled list-inline chats">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="#">
                              <div class="avatar pull-left">
                              <img src="{{ URL::to('uploads/images/'.$post2->author->featured_image) }}" height="45" width="45" 
                              data-toggle="tooltip" data-placement="left" 
                              title="
                              <img src='{{ URL::to('uploads/images/'.$post2->author->featured_image) }}' class='img-responsive' />
                              @if(!$pickings->count())
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
                              data-html="true" class="user-avatar">
                              {{ $post2->author->firstname }} posted {{ $post2->created_at->diffforhumans() }}
                              </div>
                              </a>
                              </li>
                             
                            </ul>
                            <span>{{ $post2->body }}<a onclick="showDialog('postsDialog',{{ $post2->id }})" href="javascript:void(0);">(more)</a></span>
                            <script type="text/javascript">

                                  function showDialog(show, id){
                                    var sentDialog = document.getElementById(show);
                                    
                                     $('#postsDialog').modal('show');
                                     
                                  };
                              </script>
                            @if($post2->featured_image)
                            <br>
                            <br>
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="400" max-width="600" >
                            @else
                            @endif
                            <br>
                            <br>
                            <ul class="list-unstyled list-inline">
                            <li><span class="badge bg-important">{{ $post2->tag1 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag2 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag3 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag4 }}</span></li>
                            <li><span class="badge bg-important">{{ $post2->tag5 }}</span></li>
                            </ul>

                            <ul class="list-unstyled list-inline" style="color: #7f7f7f">
                            <li title="post shared from {{ $post2->location }}, {{ $post2->author->country }}"><i class="fa fa-map-marker red" style="color: #7f7f7f"></i> {{ $post2->location }} <img src="{{ URL::to('uploads/images/'.$post2->author->country.'.png') }}" height="17" width="17"  ></li>
                            <li><i class="fa fa-desktop"></i> 122 views</li>
                            <li>
                            <a href="#"><span class="badge bg-important"><b class="fa fa-heart-o"></b></span></a>
                             0 impressed</li>
                            </ul>

                            <div class="col-md-8">
                            <form class="form-horizontal" role="form" action="{{ route('addcomment', ['on_post' => $post2->id]) }}" method="post">

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

                            @if (!$post2->comments->count())
                            <br>
                            <div class="col-md-12" style="color: #7f7f7f;"> There is no comment till now. </div>
                            @else
                            @foreach ($post2->comments as $comment2)
                                  <li class="by-me">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                      <img src="{{ URL::to('uploads/images/'.$comment2->author->featured_image) }}" width="32" height="32" alt="{{ $comment2->author->firstname }}"/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta">{{ $comment2->author->firstname }} <span class="pull-right">{{ $comment2->created_at->Diffforhumans() }}</span></div>
                                      {!! str_limit($comment2->body, $limit= 120, $end = '.....<a href='.url("/".$post2->slug).'>Read More</a>') !!}
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
               @else
               <!-- <div class="alert alert-info">
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything</center></p>
                </div> -->
               @endif
               @endforeach
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