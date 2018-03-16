@section('out-content')
@if ($out1->count())
              @foreach ($out1 as $post2)

 <a href="#" style="text-decoration: none;">
                        <div  class="panel" style="border: 1px solid #ddd;">
                          <div class="panel-heading" style="background-color: #fff;padding-bottom: 2px;padding-top: 1%;">
                            <ul id="postinfo" class=" list-inline" style="border-color: #fff;">
                              
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i>
                              Shares
                              @if ($personal) 
                              
                              @if ($post2->author->personal['name'] == $personal->name)
                                {{ $personal->name }}
                              @else
                              @endif

                          

                              @if ($post2->author->personal['DOB'] == $personal->DOB)
                               {{ $personal->DOB }}
                               @else
                              @endif

                              @if ($post2->author->personal['age'] == $personal->age)
                                 {{ $personal->age }}
                              @else
                              @endif

                               @if ($post2->author->personal['description'] == $personal->description)
                               {{ $personal->description }}
                               @else
                              @endif

                              @if ($post2->author->personal['hobby'] == $personal->hobby)
                               {{ $personal->hobby }}
                              @else
                              @endif

                              @if ($post2->author->personal['town'] == $personal->town)
                                {{ $personal->town }}
                              @else
                              @endif

                              @if ($post2->author->personal['home_town'] == $personal->home_town)
                               {{ $personal->home_town }}
                               @else
                              @endif

                              @if ($post2->author->personal['state'] == $personal->state)
                               {{ $personal->state }}
                              @else
                              @endif

                              

                              @if ($post2->author->personal['country'] == $personal->country)
                                <img src="{{ URL::to('uploads/images/'.$personal->country.'.png') }}" height="17" width="17"  >
                              @else
                              @endif

                              @if ($post2->author->personal['continent'] == $personal->continent)
                               {{ $personal->continent }}
                               @else
                              @endif

                              @if ($post2->author->personal['clan'] == $personal->clan)
                               {{ $personal->clan }}
                              @else
                              @endif

                              @if ($post2->author->personal['skills'] == $personal->skills)
                                {{ $personal->skills }}
                              @else
                              @endif

                              @if ($post2->author->personal['neighbourhood'] == $personal->neighbourhood)
                              
                                {{ $personal->neighbourhood }}
                              @else
                              @endif

                              @else
                              
                              @endif

                              @if ($academic && $post2->author->academic) 
                              
                              @if ($other_academic->university == $academic->university)
                               {{ $academic->university }}
                              @else
                              @endif

                              @if ($other_academic->university == $academic->university && $other_academic->uni_grad_year == $academic->uni_grad_year)
                               {{ $academic->uni_grad_year }}
                               @else
                              @endif

                              @if ($other_academic->college == $academic->college)
                                {{ $academic->college }}
                              @else
                              @endif

                               @if ($other_academic->college == $academic->college && $other_academic->col_grade_year == $academic->col_grad_year)
                               {{ $academic->col_grad_year }}
                               @else
                              @endif

                              @if ($other_academic->high_school == $academic->high_school)
                                {{ $academic->high_school }}
                              @else
                              @endif

                              @if ($other_academic->high_school == $academic->high_school && $other_academic->high_grad_year == $academic->high_grad_year)
                                {{ $academic->high_grad_year }}
                              @else
                              @endif

                              @if ($other_academic->other_school == $academic->other_school)
                               {{ $academic->other_school }}
                               @else
                              @endif

                              @if ($other_academic->other_school == $academic->other_school && $other_academic->other_grad_year == $academic->other_grad_year)
                               {{ $academic->other_grad_year }}
                              @else
                              @endif


                              @if ($other_academic->program == $academic->program)
                               {{ $academic->program }}
                               @else
                              @endif

                              @if ($other_academic->level == $academic->level)
                               {{ $academic->level }}
                              @else
                              @endif

                              
                              @else
                              
                              @endif

                              @if ($career && $post2->author->career) 
                              
                              @if ($other_career->career == $career->career)
                                {{ $career->career }}
                              @else
                              @endif

                              
                              @if ($other_career->occupation == $career->occupation)
                                 {{ $career->occupation }}
                              @else
                              @endif

                               
                              @if ($other_career->company == $career->company)
                               {{ $career->company }}
                              @else
                              @endif

                              
                              @if ($other_career->position == $career->position)
                               {{ $career->position }}
                               @else
                              @endif

                        
                              @else
                              
                              @endif

                              @if ($religion && $post2->author->religion) 
                              
                              @if ($other_religion->religion == $religion->religion)
                                {{ $religion->religion }}
                              @else
                              @endif

                              
                              @if ($other_religion->sect == $religion->sect)
                                 {{ $religion->sect }}
                              @else
                              @endif

                               
                              @if ($other_religion->denomination == $religion->denomination)
                                {{ $religion->denomination }}
                              @else
                              @endif

                              
                              @if ($other_religion->worship_center == $religion->worship_center)
                               {{ $religion->worship_center }}
                               @else
                              @endif

                        
                              @else
                              
                              @endif

                              @if ($favorite && $post2->author->favorite) 
                              
                              @if ($other_favorite->brand == $favorite->brand)
                               <i class="fa fa-user"></i> {{ $favorite->brand }}
                              @else
                              @endif

                              @if ($other_favorite->technology == $favorite->technology)
                               {{ $favorite->technology }}
                               @else
                              @endif

                              @if ($other_favorite->car == $favorite->car)
                                <i class="fa fa-tree"></i> {{ $favorite->car }}
                              @else
                              @endif

                               @if ($other_favorite->building == $favorite->building)
                               {{ $favorite->building }}
                               @else
                              @endif

                              @if ($other_favorite->book == $favorite->book)
                               <i class="fa fa-music"></i> {{ $favorite->book }}
                              @else
                              @endif

                              @if ($other_favorite->public_figure == $favorite->public_figure)
                                {{ $favorite->public_figure }}
                              @else
                              @endif

                              @if ($other_favorite->tv_show == $favorite->tv_show)
                               {{ $favorite->tv_show }}
                               @else
                              @endif

                              @if ($other_favorite->sport == $favorite->sport)
                               {{ $favorite->sport }}
                              @else
                              @endif

                              

                              @if ($other_favorite->meal == $favorite->meal)
                               {{ $favorite->meal }}
                               @else
                              @endif

                              @if ($other_favorite->pet == $favorite->pet)
                               {{ $favorite->pet }}
                              @else
                              @endif

                              @if ($other_favorite->city == $favorite->city)
                                {{ $favorite->city }}
                              @else
                              @endif

                              

                              @else
                              nothing
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
                            
                            <input placeholder="  share your comment here" style="color: #000;margin-top: 3%;border: 1px solid #ddd;" class="form-control col-md-8"  name="body" autofocus>
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
              
                
              
    @else
    @if(!$out1->count())
      <!-- <div class="alert alert-info">
      <a href="#" data-dismiss="alert" class="close">&times;</a>
      <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you do not share {{ $input }} with anybody on meineshule</center></p></div> -->
    @endif
    @endif
                
@endsection

