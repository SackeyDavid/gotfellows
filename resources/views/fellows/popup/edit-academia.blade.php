{!!Html::style('css/site.css')!!}

@yield('style')

<div class="modal fade" id="edit-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				
				<ul class="list-unstyled list-inline chats">
                          	<li class="by-me">
                          	<div class="avatar pull-left">
                              <a id="toppostsyou" href="#"><strong class="modal-title">Edit Academic</strong></a>
                            <span class="post-ava">
                            
                             <a href="#"><strong></strong></a>
                             <img src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}" height="35" width="35">
                            </span>
                             </div>
                            
                            </li>
                </ul>
			</div>
			
			{!! Form::model($academic, ['route' => ['editprofile', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
			
		
                                                    
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				{{ Form::label('university', 'University') }}
				{{ Form::text('university', null, ["class"=>'form-control input-md']) }}
			</div>
			</div>
			
			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('uni_grad_year', 'Year of Graduation') }}
                 {{ Form::text('uni_grad_year', null, ["class"=>'form-control input-md', "data-provide"=>'datepicker']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('college', 'College') }}
                 {{ Form::text('college', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>


			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('col_grad_year', 'Year of Graduation') }}
                 {{ Form::text('col_grad_year', null, ["class"=>'form-control input-md', "data-provide"=>'datepicker']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('high_school', 'High School') }}
                 {{ Form::text('high_school', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('high_grad_year', 'Year of Graduation') }}
                 {{ Form::text('high_grad_year', null, ["class"=>'form-control input-md', "data-provide"=>'datepicker']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('other_school', 'Other School') }}
                 {{ Form::text('other_school', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('other_grad_year', 'Year of Graduation') }}
                 {{ Form::text('other_grad_year', null, ["class"=>'form-control input-md', "data-provide"=>'datepicker']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('program', 'Current Program of Study') }}
                 {{ Form::text('program', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			
			<div class="row">
			<div class="col-sm-12">
				  {{ Form::label('level', 'Level') }}
                  {{ Form::text('level', null, ["class"=>'form-control input-md']) }}

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
		</div>
		
	</div>
	
</div>


<style type="text/css">
	#edit-academia .modal-dialog {
		margin-left: -30%;
	}
</style>

