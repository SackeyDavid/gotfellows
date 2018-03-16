@extends('layouts.dashboard-header')

@section('content')

<div class="container">
	<div class="row">
		@if (count($out) > 0)
			@foreach ($out as $doc)
			
				<!-- {{ $doc }} -->
				 <a href="{{ route('viewthisproduct', [ $doc->id, $doc->from_user, $doc->product_name]) }}" style="text-decoration: none;"><div class="col-sm-6 col-md-4">
            <div class="thumbnail well">
            <center><strong>{{ $doc->price }}</strong></center>
              <img src="{{ URL::to('img/'.$doc->featured_image) }}" alt="..." class="img-responsive">
              <div class="caption">
                <h3>{{ $doc->product_name }}</h3>
                <p class="description">{{ $doc->description }}</p>
                <div class="pull-left price"><i class="fa fa-phone"></i>  <strong>{{ $doc->telephone }}</strong> <strong>{{ $doc->working_hours }}</strong>  <i class="icon_pin_alt"></i> <strong>{{ $doc->location }}</strong> </div>
                <div class="clearfix">
                <a href="#" class="btn btn-info pull-right" title="certified vendor" role="button">By <i class="fa fa-certificate" aria-hidden="true"></i> {{ $doc->vendor }}</a></div>
              </div>
            </div>
          </div>
          </a>
      
			
			@endforeach
		@else
			<p>No Product exist for this search</p>
		@endif
	</div>	
</div>

@endsection