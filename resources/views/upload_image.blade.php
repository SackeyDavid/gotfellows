@extends('layouts.dashboard-header')

@section('content')
<div class="container">
<div class="row">
@if (Session::has('success'))
   		<div class="alert alert-success">
   		<h4>{!! Session::get('success') !!}</h4>
   		</div>
@endif
<div class="col-sm-2">
						
						<label for="image">Product Image
						</label>
						<div class="input-group">
							{!! Form::open(array('url' => 'upload/image', 'method' => 'PUT', 'files' =>true)) !!}
							{!! Form::file('images[]', array('multiple' =>true)) !!}
							<p>{!! $errors->first('images') !!}</p>
							@if (Session::has('error'))

							<p>{!! Session::get('error') !!}</p>
							@endif

							{!! Form::submit('Upload Image', array('class' => 'btn btn-sm btn-success col-md-12')) !!}
							<!-- <input type="text" name="image" class="form-control" value="{{ old('image') }}" required>
							<div class="input-group-addon">
								<a href="#"><span class="fa fa-plus" title="Click to Upload image"></span></a>
							</div> -->
							{!! Form::close() !!}
						</div>
</div>
</div>
</div>
@endsection
