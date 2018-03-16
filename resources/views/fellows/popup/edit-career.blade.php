{!!Html::style('css/site.css')!!}

@yield('style')

<div class="modal fade" id="edit-career" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				
				<ul class="list-unstyled list-inline chats">
                          	<li class="by-me">
                          	<div class="avatar pull-left">
                              <a id="toppostsyou" href="#"><strong class="modal-title">Edit Career</strong></a>
                            <span class="post-ava">
                            
                             <a href="#"><strong></strong></a>
                             <img src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}" height="35" width="35">
                            </span>
                             </div>
                            
                            </li>
                </ul>
			</div>
			
			{!! Form::model($career, ['route' => ['editprofile', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
			
		
                                                    
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				{{ Form::label('career', 'Career') }}
				{{ Form::text('career', null, ["class"=>'form-control input-md']) }}
			</div>
			</div>
			
			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('occupation', 'Occupation') }}
                 {{ Form::text('occupation', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('company', 'Company/Workplace') }}
                 {{ Form::text('company', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>


			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('position', 'Position') }}
                 {{ Form::text('position', null, ["class"=>'form-control input-md']) }}

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
	#edit-career .modal-dialog {
		margin-left: -30%;
	}
</style>

