{!!Html::style('css/bootstrap.min.css')!!}
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/bootstrap3-typeahead.min.js')!!}
@yield('script')
<header class="container">
      <div id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          
          <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <div class="toggle-nav">
                      <!--<a href="{{ url('/home') }}"><img src="{{ URL::to('img/logo-big.png') }}" style="margin-top: -30%;margin-left:90%;" height="35" width="35"></a>-->
               <!--  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
               {{ URL::to('img/logo.png') }} -->
            </div> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'meineshule') }}
                    </a>
                </div>
        </div>
        <div class="navbar-collapse collapse" id="app-navbar-collapse">
          <ul class="nav navbar-nav navbar-right notification-row" style="margin-bottom: -55%;">
          @if (Auth::guest())
           <li style="" ><a href="{{ route('ownposts') }}" style="text-decoration: none;"><i class="fa fa-bullhorn"></i> Shared Posts</a></li> 
            <li style=""><a href="{{ route('picks') }}" style="text-decoration: none;"><i class="fa fa-users"></i> Picks</a></li>
          <li><a href="{{ route('login') }}" style="text-decoration: none;"><i class="fa fa-key"></i> Login</a></li>
          <li><a href="{{ route('register') }}" style="text-decoration: none;"><i class="fa fa-edit"></i> Register</a></li>
          @else
          <li>
          <form role="form" method="GET"  action="{{ route('searchitem') }}" class="navbar-form">
          <div class="input-group" style="margin-top: 0%;">
                        <input type="text" id="searchinput" name="searchinput" data-provide="typeahead"  autocomplete="off" class="typeahead form-control round-input" placeholder="search people, places or events">
                        </div>
          </form>
          </li>
          <li style="" title="Posts you've shared" ><a href="{{ route('ownposts') }}" style="text-decoration: none;"><i class="fa fa-bullhorn fa-2x" style="color:#ccc;margin-top:-15%;"></i> </a></li> 
          <li style="" title="People you've picked"><a href="{{ route('picks') }}" style="text-decoration: none;"><i class="fa fa-users fa-2x" style="color:#ccc;margin-top:-15%;"></i> </a></li>
          @if (!$comments->count())
          <li title="comments on your posts"  id="mail_notificatoin_bar" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-comment-o fa-2x" style="color:#4b4c4c;margin-top:-35%;" aria-hidden="true"></i>
                                <span id="com_sum_badge" class="badge bg-important"> 0 </span>
                                
                                </a>
          <ul class="dropdown-menu extended inbox">
         <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                               
             <p class="blue">You have no new comments</p>
                            </li>
                            <li>
                               <a href="#"> You have no comments </a>
                            </li>

                            </ul>
                            </li>
          @else
                            <li title="comments on your posts" id="mail_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" id="notify-com-icon" class="dropdown-toggle" onclick="changeColor('com_sum_badge')" href="javascript:void(0);">
                            <i class="fa fa-comment-o fa-2x" style="color:#ccc;margin-top:-35%;"></i>
                                
                            <span id="com_sum_badge" class="badge bg-important">{{ $com_sum }}</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                               
                                <p class="blue" style="font-size: 12px;">You have {{ $com_sum }} new comments</p>
                            </li>
                            
                            @foreach($comments as $comment)
                            @if($comment->post->author_id ==  Auth::user()->id )

                            <li>
                                <a href="{{ route('seeComments') }}">
                                    <span class="photo"><img alt="avatar" src="{{ URL::to('uploads/images/'.$comment->author->featured_image) }}"></span>
                                    <span class="subject">
                                    <span class="from">{{ $comment->author->firstname }} {{ $comment->author->lastname }}</span>
                                    <span class="time">{{ $comment->created_at->Diffforhumans() }}</span>
                                    </span>
                                    <span class="message">
                                        {{ $comment->body }}
                                    </span>
                                </a>
                            </li>
                            @endif
                            @endforeach
                            <li>
                                <a href="{{ route('seeComments') }}">See all messages</a>
                            </li>
                          </ul>
                            
                          </li>
                            
                        @endif
                        
                    
                    
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    @if(!$sent_messages->count())

                     <li title="messages sent you" id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o fa-2x" style="color:#ccc;margin-top:-35%;"></i>
                            <span id="com_sum_badge" class="badge bg-important">{{ $sent_messages->count() }}</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have {{ $sent_messages->count() }} new notifications</p>
                            </li>
                                                        
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li> 
                    @else

                     <li title="messages sent you" id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"  onclick="changeColor('reply_sum_badge')" href="javascript:void(0);">

                            <i class="fa fa-bell-o fa-2x" style="color:#ccc;margin-top:-35%;"></i>
                            <span id="reply_sum_badge" class="badge bg-important">{{ $sent_messages->count() }}</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                            @foreach($sent_messages as $message)
                            <li>
                                <a href="{{ route('seeMessages') }}">
                                    <span class="label label-info"><i class="icon_mail_alt"></i></span> 
                                    {{ $message->author->firstname }} left a message.
                                    <span class="small italic pull-right"> {{ $message->created_at->diffforhumans() }}</span>
                                </a>
                            </li>
                            @endforeach                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li style="margin-top: -1%;" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="text-decoration: none;">
                              <span class="username">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                            
                            <span class="profile-ava">
                                @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 32, 'height' => 32 )) }}
                            @else
                            	<img alt="" width="32" height="32" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif

                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout" style="margin-top:10%;">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ route('profile', Auth::user()->id) }}"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <!-- <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                                
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                             -->
                             <li>
                                 <a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           <!--  <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li> -->
                        </ul>
                    </li>
          @endif
          </ul>

        </div>
      </div>
    </header>
    
        <script type="text/javascript">
            
                        
                        
            function changeColor(show){

             var span = document.getElementById(show);
             span.className = "badge bg-primary";
                       
            }
            
            var path = "{{ route('autocomplete') }}";
            $('input.typeahead').typeahead({
                source: function (query, process) {
                    return $.get(path, { query: query }, function (data) {
                        return process(data);
                    });
                }
            });       
                    
                    
        </script>