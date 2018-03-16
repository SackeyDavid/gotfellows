<div class="panel-body" style="border-style: none;">
                      
                      
                          <a href="#">
                        	<ul class="list-unstyled list-inline chats">
                          	<li class="by-me">
                          	<div class="avatar pull-left">
                              <a style="margin-top: -15%;text-decoration: none;" href="#"></a>
                            <span class="post-ava">
                            
                             <a href="#sentDialog" data-toggle="modal"><em>Post</em></a>
                             @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 25, 'height' => 25 )) }}
                            @else
                            	<img alt="" width="25" height="25" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                            </span>
                             </div>
                            
                            </li>
                    	    </ul>
                          </a>
                    
                          

                          
                          
                          
                          
                            

</div>


<script type="text/javascript">

  function showDialog(){

                                    
  $('#sentDialog').modal('show');
                                     
  };
</script>
