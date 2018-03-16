{!!Html::style('css/site.css')!!}

@yield('style')

<div class="modal fade" id="edit-favorite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				
				<ul class="list-unstyled list-inline chats">
                          	<li class="by-me">
                          	<div class="avatar pull-left">
                              <a id="toppostsyou" href="#"><strong class="modal-title">Edit Favorite</strong></a>
                            <span class="post-ava">
                            
                             
                             <img src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}" height="35" width="35">
                            </span>
                             </div>
                            
                            </li>
                </ul>
			</div>

			@if(!$favorite)
			<div class="modal-body">
			
			<div class="alert alert-success collapse " id="sentAlert">
			<a href="#" data-dismiss="alert" class="close">&times;</a>
			<p>Please fill out Favorite credentials first</p>
			</div>
			</div>

			@else

			{!! Form::model($favorite, ['route' => ['editfavorite', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
			
		
                                                    
			
			<div class="row">
			<div class="col-sm-12">
				{{ Form::label('brand', 'Brand') }}
				{{ Form::text('brand', null, ["class"=>'form-control input-md']) }}
			</div>
			</div>
			
			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('technology', 'Technology') }}
                 {{ Form::text('technology', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('car', 'Car') }}
                 {{ Form::text('car', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>


			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('building', 'Building') }}
                 {{ Form::text('building', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('book', 'Book') }}
                 {{ Form::text('book', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('public_figure', 'Public Figure') }}
                 {{ Form::text('public_figure', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('tv_show', 'TV Show') }}
                 {{ Form::text('tv_show', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('sport', 'Sport') }}
                 {{ Form::text('sport', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('meal', 'Meal') }}
                 {{ Form::text('meal', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			
			<div class="row">
			<div class="col-sm-12">
				  {{ Form::label('pet', 'Pet') }}
                  {{ Form::text('pet', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				  {{ Form::label('city', 'City') }}
                  {{ Form::text('city', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			
			</div>
			
			<div class="modal-footer">
			<div class="col-md-6">
			<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
			</div>
			<div class="col-md-4"> 
			{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
			</div>
				
			</div>
			{!! Form::close() !!}
			@endif
		</div>
			
	</div>
	
</div>


<style type="text/css">
	#edit-favorite .modal-dialog {
		margin-left: -30%;
	}
</style>

