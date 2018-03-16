@include('fellows.content.fellows-all.fellows-all')
@include('fellows.content.fellows-all.out1')
@include('fellows.content.out')
@section('all-content')

                
      @if (!$out1->count())

      <div class="alert alert-info">
      <a href="#" data-dismiss="alert" class="close">&times;</a>
      <p style="font-size: 15px;"><center>Hi {{ Auth::user()->firstname }}, till now no post has {{ $input }} as a tag</center></p></div>
    
      @else
      @yield('out1-content')
  
      
      @endif

      @yield('out-content')
      
      @yield('fellows-all')
      
 
@endsection
