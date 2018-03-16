@section('fellows-place')


@if (!$personal_fellows->count())
                <!-- <div class="alert alert-info">
                <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share  with anybody on meineshule</center></p>
                </div> -->
@else

   

                @foreach ($personal_fellows as $person_fellow)

                 @if ($place->count())
                 @foreach ($place as $post2)

                  @if($post2->author_id == $person_fellow->from_user && $post2->author_id != Auth::user()->id)

                       <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                              @if ($personal) 
                              
                              @if ($person_fellow->name == $personal->name)
                                {{ $person_fellow->name }}
                              @else
                              @endif

                          

                              @if ($person_fellow->DOB == $personal->DOB)
                               {{ $person_fellow->DOB }}
                               @else
                              @endif

                              @if ($person_fellow->age == $personal->age)
                                 {{ $person_fellow->age }}
                              @else
                              @endif

                               @if ($person_fellow->description == $personal->description)
                               {{ $person_fellow->description }}
                               @else
                              @endif

                              @if ($person_fellow->hobby == $personal->hobby)
                               {{ $person_fellow->hobby }}
                              @else
                              @endif

                              @if ($person_fellow->town == $personal->town)
                                {{ $person_fellow->town }}
                              @else
                              @endif

                              @if ($person_fellow->home_town == $personal->home_town)
                               {{ $person_fellow->home_town }}
                               @else
                              @endif

                              @if ($person_fellow->state == $personal->state)
                               {{ $person_fellow->state }}
                              @else
                              @endif

                              

                              @if ($person_fellow->country == $personal->country)
                                <img src="{{ URL::to('uploads/images/'.$person_fellow->country.'.png') }}" height="17" width="17"  >
                              @else
                              @endif

                              @if ($person_fellow->continent == $personal->continent)
                               {{ $person_fellow->continent }}
                               @else
                              @endif

                              @if ($person_fellow->clan == $personal->clan)
                               {{ $person_fellow->clan }}
                              @else
                              @endif

                              @if ($person_fellow->skills == $personal->skills)
                                {{ $person_fellow->skills }}
                              @else
                              @endif

                              @if ($person_fellow->neighbourhood == $personal->neighbourhood)
                              
                                {{ $person_fellow->neighbourhood }}
                              @else
                              @endif

                              @else
                              something else
                              @endif

                               with you</a></li>
                                
                             
                            </ul>
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -5%;margin-bottom: -4%;">
                            
                            <ul  class="list-unstyled list-inline chats" style="margin-bottom: -3%;">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="{{ route('user', [ 'name' => $post2->author->firstname, 'id' => $post2->author->id ]) }}" title="{{ $post2->created_at->format('M d,Y \a\t h:i a') }}">
                              <div class="avatar pull-left">
                            @if($post2->author->facebook_id)
                                {{ HTML::image($post2->author->featured_image, $post2->author['firstname'], array( 'width' => 45, 'height' => 45 )) }}
                            @else
                            	<img src="{{ URL::to('uploads/images/'.$post2->author['featured_image']) }}" height="45" width="45" 
                              data-toggle="tooltip" data-placement="left" 
                              title="<img src='{{ URL::to('uploads/images/'.$post2->author->featured_image) }}' class='img-responsive' />
                              @if(!$pickings->count())
                              @else
                              @foreach($pickings as $picking)
                              @if ($post2->author_id == $picking->picked_user)
                              
                              <a href='{{ route('unpickUsers', [ 'picked' => $post2->author_id ]) }}'>
                              <button class='btn btn-default' type='submit'>UnPick {{ $post2->author->firstname }} </button> 
                              </a>
                              @else
                              <a href='{{ route('pickUsers', [ 'for_user' => Auth::user()->id, 'picked' => $post2->author_id ]) }}'>
                              <button class='btn btn-default' type='submit'>Pick {{ $post2->author->firstname }} </button> 
                              </a>
                              @endif
                              @endforeach
                              @endif
                              " 
                              data-html="true" class="user-avatar"/>
                            @endif
                              
                             
                              {{ $post2->author->firstname }} posted {{ $post2->created_at->diffforhumans() }}
                              </div>
                              </a>
                              </li>
                             
                            </ul>
                           {{ $post2->body }}
                            
                           
                            @if($post2->featured_image)
                            <br>
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" class="img-thumbnail">
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
                            <li><a href="#" class="view" title="122 views"><b class="fa fa-desktop"></b></a> </li>
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
                              @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                              </div>
                            <div class="chat-body form-group">
                              <div class="input-group" style="margin-top: 1%;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input type="text" placeholder="  share your comment here" style="color: #000;border: 1px solid #ddd;" class="form-control"  name="body" autofocus>
                            <div class="input-group-addon">
                              <button class="fa fa-share" style="background-color:inherit;border-style:none;"></button>
                            </div>
                            </div>

          
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
               @else
               <!-- <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on</center></p>
                </div> -->
               @endif
                 @endforeach
                 @else
                 @endif
               @endforeach
      
      
@endif

              @if (!$academic_fellows->count())
                <!-- <div class="alert alert-info">
                <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share  with anybody on meineshule</center></p>
                </div> -->
                @else
                @foreach ($academic_fellows as $aca_fellow)
                @if ($place->count())
                 @foreach ($place as $post2)

                  @if($post2->author_id == $aca_fellow->from_user && $post2->author_id != Auth::user()->id)

                       <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                               @if ($academic) 
                              
                              @if ($aca_fellow->university == $academic->university)
                               {{ $aca_fellow->university }}
                              @else
                              @endif

                              @if ($aca_fellow->university == $academic->university && $aca_fellow->uni_grad_year == $academic->uni_grad_year)
                               {{ $aca_fellow->uni_grad_year }}
                               @else
                              @endif

                              @if ($aca_fellow->college == $academic->college)
                                {{ $aca_fellow->college }}
                              @else
                              @endif

                               @if ($aca_fellow->college == $academic->college && $aca_fellow->col_grade_year == $academic->col_grad_year)
                               {{ $aca_fellow->col_grad_year }}
                               @else
                              @endif

                              @if ($aca_fellow->high_school == $academic->high_school)
                                {{ $aca_fellow->high_school }}
                              @else
                              @endif

                              @if ($aca_fellow->high_school == $academic->high_school && $aca_fellow->high_grad_year == $academic->high_grad_year)
                                {{ $aca_fellow->high_grad_year }}
                              @else
                              @endif

                              @if ($aca_fellow->other_school == $academic->other_school)
                               {{ $aca_fellow->other_school }}
                               @else
                              @endif

                              @if ($aca_fellow->other_school == $academic->other_school && $aca_fellow->other_grad_year == $academic->other_grad_year)
                               {{ $aca_fellow->other_grad_year }}
                              @else
                              @endif


                              @if ($aca_fellow->program == $academic->program)
                               {{ $aca_fellow->program }}
                               @else
                              @endif

                              @if ($aca_fellow->level == $academic->level)
                               {{ $aca_fellow->level }}
                              @else
                              @endif

                              
                              @else
                              something else
                              @endif

                               with you</a></li>
                              
                            </ul>
                          
                          
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -5%;margin-bottom: -4%;">
                            
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
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" class="img-thumbnail">
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
                              @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                              </div>
                              <div class="chat-body form-group">
                              <div class="input-group" style="margin-top: 1%;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input type="text" placeholder="  share your comment here" style="color: #000;border: 1px solid #ddd;" class="form-control"  name="body" autofocus>
                            <div class="input-group-addon">
                              <button class="fa fa-share" style="background-color:inherit;border-style:none;"></button>
                            </div>
                            </div>

          
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
               @else
               <!-- <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on </center></p>
                </div> -->
               @endif
                 @endforeach
                 @else
                 @endif
               @endforeach
              @endif
              @if (!$career_fellows->count())
                <!-- <div class="alert alert-info">
                <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share  with anybody on meineshule</center></p>
                </div> -->
                @else
                @foreach ($career_fellows as $car_fellow)
                @if ($place->count())
                 @foreach ($place as $post2)

                  @if($post2->author_id == $car_fellow->from_user && $post2->author_id != Auth::user()->id)

                       <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                              @if ($career) 
                              
                              @if ($car_fellow->career == $career->career)
                                {{ $car_fellow->career }}
                              @else
                              @endif

                              
                              @if ($car_fellow->occupation == $career->occupation)
                                 {{ $car_fellow->occupation }}
                              @else
                              @endif

                               
                              @if ($car_fellow->company == $career->company)
                               {{ $car_fellow->company }}
                              @else
                              @endif

                              
                              @if ($car_fellow->position == $career->position)
                               {{ $car_fellow->position }}
                               @else
                              @endif

                        
                              @else
                              something else
                              @endif

                               with you</a></li>
                              
                            </ul>
                          
                            
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -5%;margin-bottom: -4%;">
                            
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
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" class="img-thumbnail" >
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
                              @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                              </div>
                              <div class="chat-body form-group">
                              <div class="input-group" style="margin-top: 1%;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input type="text" placeholder="  share your comment here" style="color: #000;border: 1px solid #ddd;" class="form-control"  name="body" autofocus>
                            <div class="input-group-addon">
                              <button class="fa fa-share" style="background-color:inherit;border-style:none;"></button>
                            </div>
                            </div>

          
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
               @else
               <!-- <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on </center></p>
                </div> -->
               @endif
                @endforeach
                @else
                @endif
               @endforeach
              @endif
              @if (!$religion_fellows->count())
                <!-- <div class="alert alert-info">
                <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share  with anybody on meineshule</center></p>
                </div> -->
                @else
                @foreach ($religion_fellows as $rel_fellow)
                @if ($place->count())
                 @foreach ($place as $post2)

                  @if($post2->author_id == $rel_fellow->from_user && $post2->author_id != Auth::user()->id)

                       <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                              @if ($religion) 
                              
                              @if ($rel_fellow->religion == $religion->religion)
                                {{ $rel_fellow->religion }}
                              @else
                              @endif

                              
                              @if ($rel_fellow->sect == $religion->sect)
                                 {{ $rel_fellow->sect }}
                              @else
                              @endif

                               
                              @if ($rel_fellow->denomination == $religion->denomination)
                                {{ $rel_fellow->denomination }}
                              @else
                              @endif

                              
                              @if ($rel_fellow->worship_center == $religion->worship_center)
                               {{ $rel_fellow->worship_center }}
                               @else
                              @endif

                        
                              @else
                              something else
                              @endif

                               with you</a></li>
                              
                            </ul>
                          
                            
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -5%;margin-bottom: -4%;">
                            
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
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" class="img-thumbnail" >
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
                              @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                              </div>
                              <div class="chat-body form-group">
                              <div class="input-group" style="margin-top: 1%;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input type="text" placeholder="  share your comment here" style="color: #000;border: 1px solid #ddd;" class="form-control"  name="body" autofocus>
                            <div class="input-group-addon">
                              <button class="fa fa-share" style="background-color:inherit;border-style:none;"></button>
                            </div>
                            </div>

          
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
               @else
               <!-- <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on </center></p>
                </div> -->
               @endif
                  @endforeach
                  @else
                  @endif
               @endforeach
              @endif
              @if (!$favorite_fellows->count())
               <!--  <div class="alert alert-info">
                <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share  with anybody on meineshule</center></p>
                </div> -->
                @else
                @foreach ($favorite_fellows as $fav_fellow)
                @if ($place->count())
                 @foreach ($place as $post2)

                  @if($post2->author_id == $fav_fellow->from_user && $post2->author_id != Auth::user()->id)

                       <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                               @if ($favorite) 
                              
                              @if ($fav_fellow->brand == $favorite->brand)
                               <i class="fa fa-user"></i> {{ $fav_fellow->brand }}
                              @else
                              @endif

                              @if ($fav_fellow->technology == $favorite->technology)
                               {{ $fav_fellow->technology }}
                               @else
                              @endif

                              @if ($fav_fellow->car == $favorite->car)
                                <i class="fa fa-tree"></i> {{ $fav_fellow->car }}
                              @else
                              @endif

                               @if ($fav_fellow->building == $favorite->building)
                               {{ $fav_fellow->building }}
                               @else
                              @endif

                              @if ($fav_fellow->book == $favorite->book)
                               <i class="fa fa-music"></i> {{ $fav_fellow->book }}
                              @else
                              @endif

                              @if ($fav_fellow->public_figure == $favorite->public_figure)
                                {{ $fav_fellow->public_figure }}
                              @else
                              @endif

                              @if ($fav_fellow->tv_show == $favorite->tv_show)
                               {{ $fav_fellow->tv_show }}
                               @else
                              @endif

                              @if ($fav_fellow->sport == $favorite->sport)
                               {{ $fav_fellow->sport }}
                              @else
                              @endif

                              

                              @if ($fav_fellow->meal == $favorite->meal)
                               {{ $fav_fellow->meal }}
                               @else
                              @endif

                              @if ($fav_fellow->pet == $favorite->pet)
                               {{ $fav_fellow->pet }}
                              @else
                              @endif

                              @if ($fav_fellow->city == $favorite->city)
                                {{ $fav_fellow->city }}
                              @else
                              @endif

                              

                              @else
                              something else
                              @endif

                               with you</a></li>
                              
                            </ul>
                          
                            
                           </div>
                            <div class="panel-body" style="padding: 10px;margin-top: -5%;margin-bottom: -4%;">
                            
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
                            
                            <img src="{{ URL::to('uploads/images/'.$post2->featured_image) }}" max-height="300" max-width="500" class="img-thumbnail" >
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
                              <div class="avatar pull-left">@if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                            </div>
                            <div class="chat-body form-group">
                              <div class="input-group" style="margin-top: 1%;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <input type="text" placeholder="  share your comment here" style="color: #000;border: 1px solid #ddd;" class="form-control"  name="body" autofocus>
                            <div class="input-group-addon">
                              <button class="fa fa-share" style="background-color:inherit;border-style:none;"></button>
                            </div>
                            </div>

          
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
               @else
               <!-- <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on </center></p>
                </div> -->
               @endif
                  @endforeach
                  @else
                  @endif
               @endforeach
              @endif
@if(!$place->count())
      <div class="alert alert-info">
               <a href="#" data-dismiss="alert" class="close">&times;</a>
                <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now your fellows haven't posted anything on {{ $input }} place</center></p>
      </div> 
@else
@endif 
    
@endsection