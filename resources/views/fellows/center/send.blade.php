<div class="well posts">
                      
                      
                          <a href="#">
                        	<ul class="list-unstyled list-inline chats">
                          	<li class="by-me">
                          	<div class="avatar pull-left">
                             @if(!$user)
                             @else 
                            <span class="post-ava">
                            
                             <a href="#">Write to {{ $user->firstname }}</a>
                             <img src="{{ URL::to('uploads/images/'.$user->featured_image) }}" height="25" width="25">
                            </span>
                            @endif
                             </div>
                            
                            </li>
                    	    </ul>
                          </a>
                    
                          

                          
                          
                        <form class="form-horizontal" role="form" action="{{ route('sendMessage', ['from_user' => Auth::user()->id, 'to_user' => $id ]) }}" method="post">

                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <textarea style="color: #000;" class="form-control" placeholder="send a message to {{ $name }}..." name="message"></textarea> 
                          <br>
                           <center> <input type="submit" name="send_message" value="send"> </center>
                        </form>
                          
                        
                            

</div>

@section('script')
<script type="text/javascript">

  function showDialog(show){
  
                                    
  $('#sentDialog').modal('show');
                                     
  };
</script>
@endsection