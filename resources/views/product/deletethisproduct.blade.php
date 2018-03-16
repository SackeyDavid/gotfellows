@extends('layouts.dashboard-header')

@section('content')
	<div id="edit-profile" class="container">
       <section class="panel">                                          
          <div class="panel-body bio-graph-info">
	<div class="row">
		{!! Form::model($product, ['route' => ['deletemyproduct', $product->id], 'method' => 'DELETE', 'files' => true]) !!}

		<div class="col-md-8">
			{{ Form::label('vendor', 'Name:') }}
			{{ Form::text('vendor', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('product_name', 'Product Name:') }}
			{{ Form::text('product_name', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('description', "About Product:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('description', null, ["class" => 'form-control']) }}

			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('telephone', 'Telephone:') }}
			{{ Form::text('telephone', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('working_hours', 'Business Hours:') }}
			{{ Form::text('working_hours', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category', null, ["class" => 'form-control input-md']) }}

			{{ Form::label('location', 'Location:') }}
			{{ Form::text('location', null, ["class" => 'form-control input-md']) }}
			
			{{ Form::label('featured_image', "Update Photo:", ['class' => 'form-spacing-top']) }}
			{{ Form::file('featured_image') }}
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Advertised On:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last Updated At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</dd>
			</dl>
			<hr>
                <div class="row">
                    <div class="col-md-6">
                    {!! Html::linkRoute('myproducts', 'Cancel', array(Auth::user()->name), array('class' => 'btn btn-danger btn-block')) !!}

                    </div>
                    <div class="col-md-6">
                    {{ Form::submit('Delete', ['class' => 'btn btn-success btn-block']) }}
                                                          
                    </div>
               </div>
             
			
		</div>

		
	</div>
	{!! Form::close() !!}
		
	</div>
	</div>
	</section>
	</div>
		

@endsection