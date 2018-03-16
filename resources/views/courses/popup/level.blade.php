{!!Html::style('css/site.css')!!}

@yield('style')

<div class="modal fade" id="level-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Personal</h4>
			</div>
			
			{!! Form::model($personal, ['route' => ['editprofile', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
			
		
                                                    
			<div class="modal-body">
			<div class="row">
			<div class="col-sm-12">
				{{ Form::label('name', 'Full name') }}
				{{ Form::text('name', null, ["class"=>'form-control input-md']) }}
			</div>
			</div>
			
			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('DOB', 'Date of Birth') }}
                 {{ Form::text('DOB', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('clan', 'Clan') }}
                 {{ Form::text('clan', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>


			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('skills', 'Skill') }}
                 {{ Form::text('skill', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('hobby', 'Hobby') }}
                 {{ Form::text('hobby', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('neighbourhood', 'Neighbourhood') }}
                 {{ Form::text('neighbourhood', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('town', 'Town of Residence') }}
                 {{ Form::text('town', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('home_town', 'Home Town') }}
                 {{ Form::text('home_town', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				 {{ Form::label('state', 'State') }}
                 {{ Form::text('state', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			
			<div class="row">
			<div class="col-sm-12">
				  {{ Form::label('country', 'Country') }}
                  {{ Form::text('country', null, ["class"=>'form-control input-md']) }}

			</div>
			</div>

			<div class="row">
			<div class="col-sm-12">
				  {{ Form::label('continent', 'Continent') }}
                  {{ Form::text('continent', null, ["class"=>'form-control input-md']) }}

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

@section('style')
<style type="text/css">
	#level-show .modal-dialog {
		margin-left: -20%;
	}
</style>

@endsection