@section('pagination')

@endsection

@section('post-content')
@if ($sent_messages->count())
              @foreach ($sent_messages as $post1)

<a href="" style="text-decoration: none;">
              
            
                 <div  class="well">
                            
                            <ul  class="list-unstyled list-inline chats">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="#">
                              <div class="avatar pull-left">
                              <img src="{{ URL::to('uploads/images/'.$post1->author->featured_image) }}" height="45" width="45" 
                              data-toggle="tooltip" data-placement="left" 
                              title="
                              <img src='{{ URL::to('uploads/images/'.$post1->author->featured_image) }}' class='img-responsive' />
                              @if(!$pickings->count())
                              @else
                              @foreach($pickings as $picking)
                              @if ($post1->author_id == $picking->picked_user)
                              
                              <a href='{{ route('unpickUsers', [ 'picked' => $post1->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>UnPick {{ $post1->author->firstname }} </button> 
                              </a>
                              @else
                              <a href='{{ route('pickUsers', [ 'for_user' => Auth::user()->id, 'picked' => $post1->author_id ]) }}'
                              <button class='btn btn-default' type='submit'>Pick {{ $post1->author->firstname }} </button> 
                              </a>
                              @endif
                              @endforeach
                              @endif
                              
                              " 
                              data-html="true" class="user-avatar">
                              {{ $post1->author->firstname }} sent you a message {{ $post1->created_at->diffforhumans() }}
                              </div>
                              </a>
                              </li>
                             
                            </ul>
                            <span>{{ $post1->message }}<a onclick="showDialog('postsDialog')" href="javascript:void(0);"></a></span>
                            <script type="text/javascript">

                                  function showDialog(show){
                                    
                                    
                                     $('#postsDialog').modal('show');
                                     
                                  };
                              </script>
                            
                            <br>
                            <br>
                            

                            
                            <div class="clearfix">
                            <div class="col-md-8">
                            <form class="form-horizontal" role="form" action="{{ route('replyMessage', ['on_message' => $post1->id, 'to_user' => $post1->author->id ]) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <textarea placeholder="send {{ $post1->author->firstname }} a reply here" style="color: #000;" class="form-control" name="body"></textarea>
                          
                            
                            <br>
                            <input type="submit" name="post_comment" value="reply">
                            
                          
                            </form>
                            </div>
                            </div>
                             
                            
                            </div>
               </a>
  @endforeach
              
                
              
    @else
    @if(!$posts->count())
      <div class="alert alert-info">
      <a href="#" data-dismiss="alert" class="close">&times;</a>
      <p style="font-size: 15px;"><center>Sorry {{ Auth::user()->firstname }}, till now you {{ $name }} has not made any post</center></p></div>
    @endif
    @endif
                
@endsection

