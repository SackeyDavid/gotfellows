@include('fellows.header.subhead')
<div class="col-md-3" style="color: #7f7f7f;">
          
                  <div class="panel-body posts" style="background-color: #f5f8fa;border-style: none; ">
                  <ul id="feeds" style="margin-top: -10%;" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Me</strong></li>
                      <li><a href="#"> </a></li>
                    </ul>
                  
                  
                
                      
                      <ul class="list-unstyled list-inline">
                      	<li><span class="glyphicon glyphicon-star"></span></li>
                        @if (!$post_sum)
                      	<li>0 Posts shared</li>
                        @else
                        <li>{{ $post_sum }} Posts shared</li>
                        @endif
                      	<li>{{ $com_sum }} comments received</li>
                      	<li></li>
                      	
                      	</ul>
                      	
                      
                      
                  
                    
                    
                
                    
                     <ul id="friendschools">
                       <li></li>
                       <li>{{ $i_comments->count() }} comments made</li>
                       <li></li>
                       <li>{{ $pickings->count() }} Picks</li>
                       <li class="dropdown">
                       
                      
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;color: #7f7f7f;font-size: 12px;">What you share with others</a>
                      <i class="caret" style="color: #7f7f7f;"></i></a>
                           
                            

                             
                              <ul class="dropdown-menu" style="opacity: 1;padding: 5px;">
                               @if(!$personal)
                                <p style="text-decoration: none;font-size: 12px;color: #7f7f7f;">Hi {{ Auth::user()->firstname }}
                                @if(Auth::user()->facebook_id)
                                {{ Html::image(Auth::user()->featured_image, Auth::user()->firstname, array('width' => 20, 'height' => 20 )) }}
                                @else
                            	<img alt="{{ Auth::user()->firstname }}" style="border-radius: 50%;" width="20" height="20" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                                @endif
                                , 
                                you will need to <a href="{{ route('account') }}">setup your account </a> to know what you share with others </p>
                               @else
                               @endif

                              @if ($personal && $personal_fellows) 
                               You share:
                              @foreach($personal_fellows as $person)
                              @if($person->from_user != Auth::user()->id)
                              @if ($person->name == $personal->name)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->from_user ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->name }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                          

                              @if ($person->DOB == $personal->DOB)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->from_user ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->DOB }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($person->age == $age)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                                <ul class='list-unstyled list-inline'>
                                <li>
                                 age {{ $age }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li style='margin-left: -6%;'>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                 </li>
                              @else
                              @endif

                               @if ($person->description == $personal->description)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->description }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($person->hobby == $personal->hobby)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->hobby }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' margin-left="0%" src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($person->town == $personal->town)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->town }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($person->home_town == $personal->home_town)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->home_town }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($person->state == $personal->state)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->state }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul>
                                 </a>
                                  </li>
                              @else
                              @endif

                              

                              @if ($person->country == $personal->country)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                                <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->country }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li> 
                                 </ul> </a>
                                 </li>
                              @else
                              @endif

                              @if ($person->continent == $personal->continent)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                                <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->continent }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li style='padding-left: -5%;'>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                 </li>
                               @else
                              @endif

                              @if ($person->clan == $personal->clan)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->clan }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($person->skills == $personal->skills)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->skills }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($person->neighbourhood == $personal->neighbourhood)
                              
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $person->author['firstname'], 'id' => $person->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $personal->neighbourhood }} with {{ $person->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @else
                              @endif
                              @endforeach
                              @else
                              
                              @endif

                              @if ($academic_fellows && $academic)
                              @foreach($academic_fellows as $fellow)  
                              @if($fellow->from_user != Auth::user()->id)
                              @if ($fellow->university == $academic->university)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->university }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li style="margin-left:-5%">
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->university == $academic->university && $fellow->uni_grad_year == $academic->uni_grad_year)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->uni_grad_year }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->college == $academic->college)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->college }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$person->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                               @if ($fellow->college == $academic->college && $academic_fellows->col_grade_year == $academic->col_grad_year)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->col_grad_year }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->high_school == $academic->high_school)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->high_school }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->high_school == $academic->high_school && $fellow->high_grad_year == $academic->high_grad_year)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->high_grad_year }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->other_school == $academic->other_school)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->other_school }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->other_school == $academic->other_school && $fellow->other_grad_year == $academic->other_grad_year)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->other_grad_year }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif


                              @if ($fellow->program == $academic->program)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->program }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->level == $academic->level)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $academic->level }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              @else
                              @endif
                              @endforeach
                              @else
                              
                              @endif


                              @if ($career && $career_fellows) 
                              @foreach($career_fellows as $fellow)  
                              @if($fellow->from_user != Auth::user()->id)
                              @if ($fellow->career == $career->career)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $career->career }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              
                              @if ($fellow->occupation == $career->occupation)
                                 <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $career->occupation }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                               
                              @if ($fellow->company == $career->company)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $career->company }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                              
                              @if ($fellow->position == $career->position)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $career->position }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                        
                              @else
                              @endif
                              @endforeach
                              @else
                              
                              @endif


                              @if ($religion && $religion_fellows) 
                              @foreach($religion_fellows as $fellow)  
                              @if($fellow->from_user != Auth::user()->id)

                              @if ($fellow->religion == $religion->religion)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                            <ul class="list-unstyled list-inline">
                            <li>
                            {{ $religion->religion }} with {{ $fellow->author['firstname'] }}
                            </li>
                                 <li>
                             <img style='border-radius: 50%;' src="{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}" height='20' width='20' class='img-responsive'/>
                            
                            
                            </li>
                          </ul></a>
                          </li>
                              @else
                              @endif

                              
                              @if ($fellow->sect == $religion->sect)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $religion->sect }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src="{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}" height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                               
                              @if ($fellow->denomination == $religion->denomination)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $religion->denomination }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              
                              @if ($fellow->worship_center == $religion->worship_center)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $religion->worship_center }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                               @else
                              @endif

                        
                              @else
                              @endif
                              @endforeach
                              @else
                              
                              @endif


                              @if ($favorite && $favorite_fellows) 
                              @foreach($favorite_fellows as $fellow)  
                              @if($fellow->from_user != Auth::user()->id)

                              @if ($fellow->brand == $favorite->brand)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->brand }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->technology == $favorite->technology)
                                 <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->technology }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->car == $favorite->car)
                                 <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->car }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul> </a>
                                  </li>
                              @else
                              @endif

                               @if ($fellow->building == $favorite->building)
                                 <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->building }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->book == $favorite->book)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->book }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->public_figure == $favorite->public_figure)
                                 <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->public_figure }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->tv_show == $favorite->tv_show)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->tv_show }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->sport == $favorite->sport)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->sport }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              

                              @if ($fellow->meal == $favorite->meal)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->meal }} with {{ $fellow->author['firstname'] }} 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                               @else
                              @endif

                              @if ($fellow->pet == $favorite->pet)
                                <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                               <ul class='list-unstyled list-inline'>
                                <li>
                                 {{ $favorite->pet }} with {{ $fellow->author['firstname'] }} 
                                 
                                 </li>
                                 <li>
                                 <img style='border-radius: 50%;' src='{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}' height='20' width='20' class='img-responsive' />
                                 </li>
                                 </ul></a>
                                  </li>
                              @else
                              @endif

                              @if ($fellow->city == $favorite->city)
                               <li> <a class="what-you-share" href="{{ route('user', [ 'name' => $fellow->author['firstname'], 'id' => $fellow->author['id'] ]) }}">
                            <ul class="list-unstyled list-inline">
                            <li>
                            {{ $favorite->city }} with {{ $fellow->author['firstname'] }}
                            </li>
                                 <li>
                             <img style='border-radius: 50%;' src="{{ URL::to('uploads/images/'.$fellow->author['featured_image']) }}" height='20' width='20' class='img-responsive'/>
                            
                            
                            </li>
                          </ul></a>
                          </li>
                             @else
                              @endif

                              

                              @else
                              @endif
                              @endforeach
                              @else
                              
                              @endif


                       
                       </ul>

                       </li>
                     </ul>
                     
                    
                     
                  </div>


                  <div class="panel-body" style="background-color: #f5f8fa;border-style: none; ">
                  <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><i class="icon_profile"></i><strong> Personal</strong></li>
                      <li><a href="#edit-personal" style="color: #7f7f7f;" data-toggle="modal"> Edit</a></li>
                    </ul>
                  
                 
                
                    
                     <ulP> 
                     @if(!$personal)

                    	<li title="click set up account to fill out this credentials">Name:</li>
                    	<li>Clan:</li>
                      	<li>Age:</li>
                      	<li>Birthday:</li>
                        <li>Skills:</li>
                      	<li>Hobby:</li>
                      	<li>Neighbourhood:</li>
                      	<li>Town:</li>
                        
                      @else
                    

                       <a title="name: {{ $personal->name }}" href="{{ route('search', [ 'input' => $personal->name, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                       <li>Name</li></a>

                       <a title="clan: {{ $personal->clan }}" href="{{ route('search', [ 'input' => $personal->clan, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Clan</li></a>
                      
                        <a title="Date of Birth: {{ $personal->DOB }}" href="{{ route('search', [ 'input' => $personal->DOB, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Date of Birth</li></a>

                        <a title="age: {{ $age }} years" href="{{ route('search', [ 'input' => $age, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Age</li></a>

                        <a title="skills: {{ $personal->skills }}" href="{{ route('search', [ 'input' => $personal->skills, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Skills</li></a>

                        <a title="hobby: {{ $personal->hobby }}" href="{{ route('search', [ 'input' => $personal->hobby, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Hobby</li></a>

                        <a title="neighbourhood: {{ $personal->neighbourhood }}" href="{{ route('search', [ 'input' => $personal->neighbourhood, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Neighbourhood</li></a>

                        <a title="town of residence: {{ $personal->town }}" href="{{ route('search', [ 'input' => $personal->town, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Town of Residence</li></a>

                        <a title="home town: {{ $personal->home_town }}" href="{{ route('search', [ 'input' => $personal->home_town, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Home Town</li></a>

                        <a title="state: {{ $personal->state }}" href="{{ route('search', [ 'input' => $personal->state, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>State</li></a>

                        <a title="country: {{ $personal->country }}" href="{{ route('search', [ 'input' => $personal->country, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Country</li></a>

                        <a title="continent: {{ $personal->continent }}" href="{{ route('search', [ 'input' => $personal->continent, 'category' => $personal->category ]) }}" style="text-decoration: none;">
                        <li>Continent</li></a>
                    
                      @endif
                     </ul>
                     <br>
                    <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><span class="glyphicon glyphicon-education"></span><strong> Academic</strong></li>
                      <li><a href="#edit-academia" style="color: #7f7f7f;" data-toggle="modal"> Edit</a></li>
                    </ul>
                  
                <ulP>
                      @if (!$academic)
                       
                       <li title="click set up account to fill out this credentials">School:</li>
                       <li>Programme of study:</li>
                       <li>Level:</li>
                       
                       @else
                       

                       <a title="university: {{ $academic->university }}" href="{{ route('search', [ 'input' => $academic->university, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li>University</li></a>

                       
                       @if ($academic->uni_grad_year)
                       <a title="Year of graduation from {{ $academic->university }}: {{ $academic->uni_grad_year }}" href="{{ route('search', [ 'input' => $academic->university . ' ' . $academic->uni_grad_year, 'category' => $academic->category  ]) }}" style="text-decoration: none;">
                       <li> Year of Graduation </li></a>
                       @endif

                       <a title="college: {{ $academic->college }}" href="{{ route('search', [ 'input' => $academic->college, 'category' => $academic->category  ]) }}" style="text-decoration: none;">
                       <li>College</li></a>


                       @if ($academic->col_grad_year)
                       <a title="Year of graduation from {{ $academic->college }}: {{ $academic->col_grad_year }}" href="{{ route('search', [ 'input' => $academic->college . ' ' . $academic->col_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Year of Graduation</li></a>
                       @endif

                       <a title="high school: {{ $academic->high_school }}" href="{{ route('search', [ 'input' => $academic->high_school, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li>High School</li></a>

                       @if ($academic->high_grad_year)
                       <a title="year of graduation from {{ $academic->high_school }}: {{ $academic->high_grad_year }}" href="{{ route('search', [ 'input' => $academic->high_school . ' ' . $academic->high_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Year of Graduation</li></a>
                       @endif

                       <a title="Another school attended: {{ $academic->other_school }}" href="{{ route('search', [ 'input' => $academic->other_school, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Added School</li></a>

                       @if ($academic->other_grad_year)
                       <a title="year of graduation from {{ $academic->other_school }}: {{ $academic->other_grad_year }}" href="{{ route('search', [ 'input' => $academic->other_school . ' ' . $academic->other_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Year of Graduation</li></a>
                       @endif
                       

                       @if ($academic->program)
                       <a title="current program of study: {{ $academic->degree }} {{ $academic->program }}" href="{{ route('search', [ 'input' => $academic->program, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Programme</li></a>
                       @endif

                       @if ($academic->level)
                       <a title="level of study of {{ $academic->degree }} {{ $academic->program }}: {{ $academic->level }}" href="{{ route('search', [ 'input' => $academic->program . ' ' . $academic->level, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       <li> Level</li></a>
                       @endif

                       
                        @endif
                     </ul>
                  
                     <br>

                  	<ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><i class="fa fa-legal"></i><strong> Career</strong></li>
                      <li><a href="#edit-career" style="color: #7f7f7f;" data-toggle="modal"> Edit</a></li>
                    </ul>
                  	

                 <ulP>
                      @if(!$career)
                       
                       <li title="click set up account to fill out this credentials">Career:</li>
                       <li>Occupation/Job:</li>
                       <li>Company name:</li>
                       @else
                      

                       <a title="career: {{ $career->career }}" href="{{ route('search', [ 'input' => $career->career, 'category' => $career->category  ]) }}" style="text-decoration: none;">
                       <li>Career</li></a>

                       <a title="occupation: {{ $career->occupation }}" href="{{ route('search', [ 'input' => $career->occupation, 'category' => $career->category  ]) }}" style="text-decoration: none;">
                       <li>Occupation</li></a>

                       <a title="workplace: {{ $career->company }}" href="{{ route('search', [ 'input' => $career->company, 'category' => $career->category  ]) }}" style="text-decoration: none;">
                       <li>Company</li></a>

                       <a title="position or role at {{ $career->company }}: {{ $career->position }}" href="{{ route('search', [ 'input' => $career->position, 'category' =>  $career->category  ]) }}" style="text-decoration: none;">
                       <li>Role</li></a>
                       
                       @endif
                     </ul>
                  
                  <br>
                  
                   <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><i class="fa fa-rocket"></i><strong> Religion</strong></li>
                      <li><a href="#edit-religion" style="color: #7f7f7f;" data-toggle="modal"> Edit</a></li>
                    </ul>
               
                 
                
                    
                     <ulP>
                        @if (!$religion)
                       <li title="click set up account to fill out this credentials">Religion:</li>
                       <li>Sect:</li>
                       <li>Denomination:</li>
                       @else
                       

                       <a title="religion: {{ $religion->religion }}" href="{{ route('search', [ 'input' => $religion->religion, 'category' => $religion->category ]) }}" style="text-decoration: none;">
                       <li>Religion</li></a>

                       <a title="sect belong in {{ $religion->religion }}: {{ $religion->sect }}" href="{{ route('search', [ 'input' => $religion->sect, 'category' => $religion->category ]) }}" style="text-decoration: none;">
                       <li>Sect</li></a>

                       <a title="denomination: {{ $religion->denomination }}" href="{{ route('search', [ 'input' => $religion->denomination, 'category' => $religion->category ]) }}" style="text-decoration: none;">
                       <li>Denomination</li></a>

                       <a title="venue of worship: {{ $religion->worship_center }}" href="{{ route('search', [ 'input' => $religion->worship_center, 'category' => $religion->category ]) }}" style="text-decoration: none;">
                       <li>Worship Center</li></a>
                      
                       @endif
                       
                     </ul>
                  	<br>
                  <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><i class="fa fa-heart"></i><strong> Favourite</strong></li>
                      <li><a href="#edit-favorite" style="color: #7f7f7f;" data-toggle="modal"> Edit</a></li>
                    </ul>
               
                
                
                    
                     <ulP>
                      @if (!$favorite)
                       <li title="click set up account to fill out this credentials">Product:</li>
                       <li>Sport:</li>
                       <li>Car:</li>
                       <li>Building:</li>
                       <li>TV Show:</li>
                       <li>Public figure:</li>
                       <li>Book:</li>
                       @else
                       

                        <a title="favorite book: {{ $favorite->book }}" href="{{ route('search', [ 'input' => $favorite->book, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Book</li></a>

                       <a title="favorite brand: {{ $favorite->brand }}" href="{{ route('search', [ 'input' => $favorite->brand, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Brand</li></a>

                       <a title="favorite technology: {{ $favorite->technology }}" href="{{ route('search', [ 'input' => $favorite->technology, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Technology</li></a>

                       <a title="favorite sport: {{ $favorite->sport }}" href="{{ route('search', [ 'input' => $favorite->sport, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Sport</li></a>

                       <a title="favorite car: {{ $favorite->car }}" href="{{ route('search', [ 'input' => $favorite->car, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Car</li></a>

                       <a title="favorite building: {{ $favorite->building }}" href="{{ route('search', [ 'input' => $favorite->building, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Building</li></a>

                       <a title="favorite TV show: {{ $favorite->tv_show }}" href="{{ route('search', [ 'input' => $favorite->tv_show, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>TV Show</li></a>

                       <a title="favorite public figure: {{ $favorite->public_figure }}" href="{{ route('search', [ 'input' => $favorite->public_figure, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Public Figure</li></a>

                       <a title="favorite pet: {{ $favorite->pet }}" href="{{ route('search', [ 'input' => $favorite->pet, 'category' => $favorite->category  ]) }}" style="text-decoration: none;">
                       <li>Pet</li></a>

                       <a title="favorite city: {{ $favorite->city }}" href="{{ route('search', [ 'input' => $favorite->city, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>City</li></a>

                       <a title="favorite meal: {{ $favorite->meal }}" href="{{ route('search', [ 'input' => $favorite->meal, 'category' => $favorite->category ]) }}" style="text-decoration: none;">
                       <li>Meal</li></a>
                    
                      @endif
                     </ul>

                     
                  </div>
            </div>          
