@section('fellows-people')

    @if (!$personal_fellows->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              

    @else
    
    @foreach ($personal_fellows as $fellow)
    @if($fellow->from_user == Auth::user()->id)
    @else
      
            <div class="col-md-6 well thumbnail profile-widget profile-widget-info" style="background: #fff; color: #000;border-radius: 0%;margin-bottom: 0%;">
            <a href="{{ route('user', [ 'name' => $fellow->name, 'id' => $fellow->author->id ]) }}" class="user-avatar" data-toggle="tooltip" target="_blank" title="<strong>{{ $fellow->name }}</strong> shares a <i>personal</i> credential with you" data-placement="bottom" data-html="true" style="text-decoration: none;">
            <center><strong></strong></center>
              <div class="follow-ava">
                          <img src="{{ URL::to('uploads/images/'.$fellow->author->featured_image) }}" alt="..." class="img-responsive">
              </div>
              </a>
              <div class="caption">
                <h5 class="user-avatar" data-toggle="tooltip" title="comes from {{ $fellow->country }}" data-placement="bottom" data-html="true"><i class="fa fa-flag-o"></i> </h5>
                <p class="description" style="font-size: 15px;"></p>
               </div> 
                
              
              <ul class="list-unstyled list-inline">
                <li class="user-info" data-toggle="tooltip" title="loves {{ $fellow->hobby }}" data-placement="bottom" data-html="true"><i class="fa fa-heart-o"></i>  <strong></strong> 
                
                  </li>


                <li class="user-info" data-toggle="tooltip" title="lives in {{ $fellow->neighbourhood }}" data-placement="bottom" data-html="true"> <i class="icon_pin_alt"></i> <strong></strong></li>

                <li class="user-info" data-toggle="tooltip" title="good at {{ $fellow->skills }}" data-placement="bottom" data-html="true"> <i class="fa fa-thumbs-o-up"></i> <strong></strong></li>
                </ul>

              
        
          </div>
     @endif     
          

    @endforeach
    @endif
        

      @if (!$academic_fellows->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              

    @else
    
    @foreach ($academic_fellows as $fellow)
    @if($fellow->from_user == Auth::user()->id)
    @else
      
            <div class="col-md-6 well thumbnail profile-widget profile-widget-info" style="background: #fff; color: #000;border-radius: 0%;margin-bottom: 0%;">
            <a href="{{ route('user', [ 'name' => $fellow->name, 'id' => $fellow->author->id ]) }}" class="user-avatar" data-toggle="tooltip" target="_blank" title="<strong>{{ $fellow->author->firstname }} {{ $fellow->author->middlenames }} {{ $fellow->author->lastname }}</strong> shares an <i>academic</i> credential with you" data-placement="bottom" data-html="true" style="text-decoration: none;">
            <center><strong></strong></center>
              <div class="follow-ava">
                          <img src="{{ URL::to('uploads/images/'.$fellow->author->featured_image) }}" alt="..." class="img-responsive">
              </div>
              </a>
              <div class="caption">
                <h5 class="user-avatar" data-toggle="tooltip" title="comes from {{ $fellow->country }}" data-placement="bottom" data-html="true"><i class="fa fa-flag-o"></i></h5>
                <p class="description" style="font-size: 15px;"></p>
               </div> 
                
              
              <ul class="list-unstyled list-inline">
                <li class=""><i class="fa fa-heart-o"></i>  <strong>{{ $fellow->hobby }}</strong> 
                
                  </li>


                <li class=""> <i class="icon_pin_alt"></i> <strong>{{ $fellow->state }}</strong></li>

                <li class=""> <i class="fa fa-thumbs-o-up"></i> <strong>{{ $fellow->skills }}</strong></li>
                </ul>

              
        
          </div>
    @endif      
          

    @endforeach
    @endif

    @if (!$career_fellows->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              

    @else
    
    @foreach ($career_fellows as $fellow)
    @if($fellow->from_user == Auth::user()->id)
    @else
      
            <div class="col-md-6 well thumbnail profile-widget profile-widget-info" style="background: #fff; color: #000;border-radius: 0%;margin-bottom: 0%;">
            <a href="{{ route('user', [ 'name' => $fellow->author->firstname, 'id' => $fellow->author->id ]) }}" class="user-avatar" data-toggle="tooltip" target="_blank" title="<strong>{{ $fellow->author->firstname }} {{ $fellow->author->middlenames }} {{ $fellow->author->lastname }}</strong> shares a <i>career</i> credential with you" data-placement="bottom" data-html="true" style="text-decoration: none;">
            <center><strong></strong></center>
              <div class="follow-ava">
                          <img src="{{ URL::to('uploads/images/'.$fellow->author->featured_image) }}" alt="..." class="img-responsive">
              </div>
              </a>
              <div class="caption">
                <h5><i class="fa fa-flag-o"></i> {{ $fellow->country }}, {{ $fellow->continent }}</h5>
                <p class="description" style="font-size: 15px;">{{ $fellow->description }}</p>
               </div> 
                
              
              <ul class="list-unstyled list-inline">
                <li class=""><i class="fa fa-heart-o"></i>  <strong>{{ $fellow->hobby }}</strong> 
                
                  </li>


                <li class=""> <i class="icon_pin_alt"></i> <strong>{{ $fellow->state }}</strong></li>

                <li class=""> <i class="fa fa-thumbs-o-up"></i> <strong>{{ $fellow->skills }}</strong></li>
                </ul>

              
        
          </div>
      @endif    
          

    @endforeach
    @endif

    @if (!$religion_fellows->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              

    @else
    
    @foreach ($religion_fellows as $fellow)
    @if($fellow->from_user == Auth::user()->id)
    @else
      
            <div class="col-md-6 well thumbnail profile-widget profile-widget-info" style="background: #fff; color: #000;border-radius: 0%;margin-bottom: 0%;">
            <a href="{{ route('user', [ 'name' => $fellow->author->firstname, 'id' => $fellow->author->id ]) }}" class="user-avatar" data-toggle="tooltip" target="_blank" title="<strong>{{ $fellow->author->firstname }} {{ $fellow->author->middlenames }} {{ $fellow->author->lastname }}</strong> shares a <i>religion</i> credential with you" data-placement="bottom" data-html="true" style="text-decoration: none;">
            <center><strong></strong></center>
              <div class="follow-ava">
                          <img src="{{ URL::to('uploads/images/'.$fellow->author->featured_image) }}" alt="..." class="img-responsive">
              </div>
              </a>
              <div class="caption">
                <h5><i class="fa fa-flag-o"></i> {{ $fellow->country }}, {{ $fellow->continent }}</h5>
                <p class="description" style="font-size: 15px;">{{ $fellow->description }}</p>
               </div> 
                
              
              <ul class="list-unstyled list-inline">
                <li class=""><i class="fa fa-heart-o"></i>  <strong>{{ $fellow->hobby }}</strong> 
                
                  </li>


                <li class=""> <i class="icon_pin_alt"></i> <strong>{{ $fellow->state }}</strong></li>

                <li class=""> <i class="fa fa-thumbs-o-up"></i> <strong>{{ $fellow->skills }}</strong></li>
                </ul>

              
        
          </div>
       @endif   
          

    @endforeach
    @endif

    @if (!$favorite_fellows->count())
             <!--  <script type="text/javascript">
               var comnum = '<strong>2</strong>';
               document.getElementById('commentnum').innerHTML = comnum;
              </script> -->

              

    @else
    
    @foreach ($favorite_fellows as $fellow)
    @if($fellow->from_user == Auth::user()->id)
    @else
      
            <div class="col-md-6 well thumbnail profile-widget profile-widget-info" style="background: #fff; color: #000;border-radius: 0%;margin-bottom: 0%;">
            <a href="{{ route('user', [ 'name' => $fellow->author->firstname, 'id' => $fellow->author->id ]) }}" class="user-avatar" data-toggle="tooltip" target="_blank" title="<strong>{{ $fellow->author->firstname }} {{ $fellow->author->middlenames }} {{ $fellow->author->lastname }}</strong> shares a <i>favorite</i> credential with you" data-placement="bottom" data-html="true" style="text-decoration: none;">
            <center><strong></strong></center>
              <div class="follow-ava">
                          <img src="{{ URL::to('uploads/images/'.$fellow->author->featured_image) }}" alt="..." class="img-responsive">
              </div>
              </a>
              <div class="caption">
                <h5><i class="fa fa-flag-o"></i> {{ $fellow->country }}, {{ $fellow->continent }}</h5>
                <p class="description" style="font-size: 15px;">{{ $fellow->description }}</p>
               </div> 
                
              
              <ul class="list-unstyled list-inline">
                <li class=""><i class="fa fa-heart-o"></i>  <strong>{{ $fellow->hobby }}</strong> 
                
                  </li>


                <li class=""> <i class="icon_pin_alt"></i> <strong>{{ $fellow->state }}</strong></li>

                <li class=""> <i class="fa fa-thumbs-o-up"></i> <strong>{{ $fellow->skills }}</strong></li>
                </ul>

              
        
          </div>
       @endif   
          

    @endforeach
    @endif
        

    
@endsection