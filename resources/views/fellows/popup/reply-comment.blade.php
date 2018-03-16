
@section('formDiv')
@if (!$posts->count())
@else
@foreach($posts as $post)
@if (!$post->comments->count())
@else
@foreach($post->comments as $comment)
<style type="text/css">
	div.hide {
  display: none;
}
div.show {
  display: block;
}

</style>

<form id='"reply-form".{{ $comment->id }}' class="hide" class="form-inline replyform" role="form" action="{{ route('addcomment', ['on_post' => $post->id]) }}" method="post">

 <div  class="widget-foot">
     

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
    <input type="hidden" name="active" value="1">
    <div class="form-group">
    <textarea placeholder="write a reply here" style="color: #000;" class="form-control" name="body"></textarea>
                          
    </div>
    <div class="pull-right"> <input type="submit" name="post_comment" value="Reply"> </center>

</div>

</form>
@endforeach
@endif
@endforeach                                               
 @endif                      
@endsection