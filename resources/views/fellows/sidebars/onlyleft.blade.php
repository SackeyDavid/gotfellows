<div class="col-md-3">
          
                  <div class="well posts">
                  <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong>{{ $user->firstname }} {{ $user->lastname }}</strong></li>
                      <li><a href="#"> </a></li>
                    </ul>
                  
                  
                
                      <a href="#" id="topposts" class="">
                      <ul class="list-unstyled list-inline">
                      	<li><span class="glyphicon glyphicon-star"></span></li>
                        @if (!$post_sum1)
                      	<li>{{ $post_sum1 }} Posts</li>
                        @else
                        <li>{{ $post_sum1 }} Posts shared</li>
                        @endif
                      	<li>{{ $com_sum1 }} comments received</li>
                      	
                      	
                      	</ul>
                      	</a>
                      
                      
                  
                    
                    
                
                    
                     <ul id="friendschools">
                       <li></li>
                       <li>{{ $i_comments->count() }} comments made</li>
                       
                       <li>{{ $pickings->count() }} Picks</li>
                       
                     </ul>
                     
                    
                     
                  </div>


                  <div class="well posts">
                  <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Personal</strong></li>
                      @if ($id == Auth::user()->id)
                      <li><a href="#edit-personal" style="color: #7f7f7f;" data-toggle="modal"> Edit </a></li>
                      @else
                      @endif
                    </ul>
                  
                 
                
                    
                     <ulP> 
                     @if(!$personal)

                    	<li>Name:</li>
                    	<li>Clan:</li>
                      	<li>Age:</li>
                      	<li>Birthday:</li>
                        <li>Skills:</li>
                      	<li>Hobby:</li>
                      	<li>Neighbourhood:</li>
                      	<li>Town:</li>
                        <li>Home town:</li>
                      	<li>State:</li>
                      	<li>country:</li>
                      	<li>continent:</li>
                      @else
                    

                       
                       <li>Name :<a title="fullname: {{ $personal->name }}" href="{{ route('search', [ 'input' => $personal->name, 'category' => $personal->category ]) }}" style="text-decoration: none;"> {{ $personal->name }} </a></li>

                       
                        <li>Clan : <a title="clan: {{ $personal->clan }}" href="{{ route('search', [ 'input' => $personal->clan, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->clan }}</a></li>
                      
                        
                        <li>Skills : <a title="skills: {{ $personal->skills }}" href="{{ route('search', [ 'input' => $personal->skills, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->skills }}</a></li>

                        
                        <li>Hobby : <a title="hobby: {{ $personal->hobby }}" href="{{ route('search', [ 'input' => $personal->hobby, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->hobby }}</a></li>

                        
                        <li>Neighbourhood : <a title="neighbourhood: {{ $personal->neighbourhood }}" href="{{ route('search', [ 'input' => $personal->neighbourhood, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->neighbourhood }}</a></li>

                        
                        <li>Town : <a title="town: {{ $personal->town }}" href="{{ route('search', [ 'input' => $personal->town, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->town }}</a></li>

                        
                        <li>Home Town : <a title="home town: {{ $personal->home_town }}" href="{{ route('search', [ 'input' => $personal->home_town, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->home_town }}</a></li>

                        
                        <li>State/Province : <a title="state: {{ $personal->state }}" href="{{ route('search', [ 'input' => $personal->state, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->state }}</a></li>

                        
                        <li>Country : <a title="country: {{ $personal->country }}" href="{{ route('search', [ 'input' => $personal->country, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->country }}</a></li>

                        
                        <li>Continent : <a title="continent: {{ $personal->continent }}" href="{{ route('search', [ 'input' => $personal->continent, 'category' => $personal->category ]) }}" style="text-decoration: none;">{{ $personal->continent }}</a></li>
                    
                      @endif
                     </ul>
                     <br>
                    <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Academic</strong></li>
                      @if ($id == Auth::user()->id)
                      <li><a href="#edit-academia" style="color: #7f7f7f;" data-toggle="modal"> Edit </a></li>
                      @else
                      @endif
                    </ul>
                  
                  
                <ulP>
                        @if (!$academic)
                       
                       <li>School:</li>
                       <li>Programme of study:</li>
                       <li>Class/level/stage/Grade:</li>
                       
                       @else
                       

                       
                       <li>University : <a title="university: {{ $academic->university }}" href="{{ route('search', [ 'input' => $academic->university, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->university }}</a></li>

                       
                       @if ($academic->uni_grad_year)
                       
                       <li> -Year of Graduation <a title="Year of graduation from university: {{ $academic->uni_grad_year }}" href="{{ route('search', [ 'input' => $academic->university . ' ' . $academic->uni_grad_year, 'category' => $academic->category  ]) }}" style="text-decoration: none;">{{ $academic->uni_grad_year }}</a></li>
                       @endif

                       <li> College :
                       <a title="college: {{ $academic->college }}" href="{{ route('search', [ 'input' => $academic->college, 'category' => $academic->category  ]) }}" style="text-decoration: none;">{{ $academic->college }}</a></li>


                       @if ($academic->col_grad_year)
                       <li> -Year of Graduation : 
                       <a title="Year of graduation from college: {{ $academic->col_grad_year }}" href="{{ route('search', [ 'input' => $academic->college . ' ' . $academic->col_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->col_grad_year }}</a></li>
                       @endif

                       <li> High School : <a title="high school: {{ $academic->high_school }}" href="{{ route('search', [ 'input' => $academic->high_school, 'category' => $academic->category ]) }}" style="text-decoration: none;">
                       {{ $academic->high_school }}</a></li>

                       @if ($academic->high_grad_year)
                       <li> -Year of Graduation :
                       <a title="year of graduation from {{ $academic->high_school }}: {{ $academic->high_grad_year }}" href="{{ route('search', [ 'input' => $academic->high_school . ' ' . $academic->high_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->high_grad_year }}</a></li>
                       @endif

                       
                       <li> Other School : <a title="Another school attended: {{ $academic->other_school }}" href="{{ route('search', [ 'input' => $academic->other_school, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->other_school }}</a></li>

                       @if ($academic->other_grad_year)
                       <li> -Year of Graduation : 
                       <a title="year of graduation from {{ $academic->other_school }}: {{ $academic->other_grad_year }}" href="{{ route('search', [ 'input' => $academic->other_school . ' ' . $academic->other_grad_year, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->other_grad_year }}</a></li>
                       @endif
                       

                       @if ($academic->program)
                       <li> Program : 
                       <a title="current program of study: {{ $academic->program }}" href="{{ route('search', [ 'input' => $academic->program, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->program }}</a></li>
                       @endif

                       @if ($academic->level)
                       <li> -Level : 
                       <a title="level in study of {{ $academic->program }}: {{ $academic->level }}" href="{{ route('search', [ 'input' => $academic->program . ' ' . $academic->level, 'category' => $academic->category ]) }}" style="text-decoration: none;">{{ $academic->level }}</a></li>
                       @endif

                       
                        @endif
                     </ul>
                  

		<br>
                  	<ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Career</strong></li>
                      @if ($id == Auth::user()->id)
                      <li><a href="#edit-career" style="color: #7f7f7f;" data-toggle="modal"> Edit </a></li>
                      @else
                      @endif
                    </ul>
                  	

                 <ulP>
                      @if(!$career)
                       
                       <li>Career:</li>
                       <li>Occupation/Job:</li>
                       <li>Company name:</li>
                       @else
                      

                       <li> Career : 
                       <a title="career: {{ $career->career }}" href="{{ route('search', [ 'input' => $career->career, 'category' => $career->category  ]) }}" style="text-decoration: none;">{{ $career->career }}</a></li>

                       <li> Occupation : 
                       <a title="occupation: {{ $career->occupation }}" href="{{ route('search', [ 'input' => $career->occupation, 'category' => $career->category  ]) }}" style="text-decoration: none;">{{ $career->occupation }}</a></li>

                       <li> Company : 
                       <a title="workplace: {{ $career->company }}" href="{{ route('search', [ 'input' => $career->company, 'category' => $career->category  ]) }}" style="text-decoration: none;">{{ $career->company }}</a></li>

                       
                       <li> Position/Role : <a title="position or role at {{ $career->company }}: {{ $career->position }}" href="{{ route('search', [ 'input' => $career->position, 'category' =>  $career->category  ]) }}" style="text-decoration: none;">{{ $career->position }}</a></li>
                       
                       @endif
                     </ul>
                  
                  <br>
                   <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Religion</strong></li>
                      @if ($id == Auth::user()->id)
                      <li><a href="#edit-religion" style="color: #7f7f7f;" data-toggle="modal"> Edit </a></li>
                      @else
                      @endif
                    </ul>
               
                 
                
                    
                     <ulP>
                        @if (!$religion)
                       <li>Religion:</li>
                       <li>Sect:</li>
                       <li>Denomination:</li>
                       @else
                       

                       <li> Religion :
                       <a title="religion: {{ $religion->religion }}" href="{{ route('search', [ 'input' => $religion->religion, 'category' => $religion->category ]) }}" style="text-decoration: none;">{{ $religion->religion }}</a></li>

                       
                       <li> Sect : <a title="sect belong in {{ $religion->religion }}: {{ $religion->sect }}" href="{{ route('search', [ 'input' => $religion->sect, 'category' => $religion->category ]) }}" style="text-decoration: none;">{{ $religion->sect }}</a></li>

                       <li> Denomination : 
                       <a title="denomination: {{ $religion->denomination }}" href="{{ route('search', [ 'input' => $religion->denomination, 'category' => $religion->category ]) }}" style="text-decoration: none;">{{ $religion->denomination }}</a></li>

                      
                       <li> Worship Center :  <a title="venue of worship: {{ $religion->worship_center }}" href="{{ route('search', [ 'input' => $religion->worship_center, 'category' => $religion->category ]) }}" style="text-decoration: none;">{{ $religion->worship_center }}</a></li>
                      
                       @endif
                       
                     </ul>
                  <br>
                  <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Favourite</strong></li>
                      @if ($id == Auth::user()->id)
                      <li><a href="#edit-favorite" style="color: #7f7f7f;" data-toggle="modal"> Edit </a></li>
                      @else
                      @endif
                    </ul>
               
                
                
                    
                     <ulP>
                      @if (!$favorite)
                       <li>Product:</li>
                       <li>Sport:</li>
                       <li>Car:</li>
                       <li>Building:</li>
                       <li>TV Show:</li>
                       <li>Public figure:</li>
                       <li>Book:</li>
                       @else
                       

                       <li> Book: 
                        <a title="favorite book: {{ $favorite->book }}" href="{{ route('search', [ 'input' => $favorite->book, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->book }}</a></li>

                       <li> Brand :
                       <a title="favorite brand: {{ $favorite->brand }}" href="{{ route('search', [ 'input' => $favorite->brand, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->brand }}</a></li>

                       <li> Tedchnology: 
                       <a title="favorite technology: {{ $favorite->technology }}" href="{{ route('search', [ 'input' => $favorite->technology, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->technology }}</a></li>

                       <li> Sport : 
                       <a title="favorite sport: {{ $favorite->sport }}" href="{{ route('search', [ 'input' => $favorite->sport, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->sport }}</a></li>

                       <li> Car : 
                       <a title="favorite car: {{ $favorite->car }}" href="{{ route('search', [ 'input' => $favorite->car, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->car }}</a></li>

                       <li> Building: 
                       <a title="favorite building: {{ $favorite->building }}" href="{{ route('search', [ 'input' => $favorite->building, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->building }}</a></li>

                       <li> TV Show: 
                       <a title="favorite TV show: {{ $favorite->tv_show }}" href="{{ route('search', [ 'input' => $favorite->tv_show, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->tv_show }}</a></li>

                       
                       <li> Public Figure: <a title="favorite public figure: {{ $favorite->public_figure }}" href="{{ route('search', [ 'input' => $favorite->public_figure, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->public_figure }}</a></li>

                       <li> Pet : 
                       <a title="favorite pet: {{ $favorite->pet }}" href="{{ route('search', [ 'input' => $favorite->pet, 'category' => $favorite->category  ]) }}" style="text-decoration: none;">{{ $favorite->pet }}</a></li>

                       <li> City :
                       <a title="favorite city: {{ $favorite->city }}" href="{{ route('search', [ 'input' => $favorite->city, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->city }}</a></li>

                       <li> Meal : 
                       <a title="favorite meal: {{ $favorite->meal }}" href="{{ route('search', [ 'input' => $favorite->meal, 'category' => $favorite->category ]) }}" style="text-decoration: none;">{{ $favorite->meal }}</a></li>
                    
                      @endif
                     </ul>

                     
                  </div>
            </div>          
