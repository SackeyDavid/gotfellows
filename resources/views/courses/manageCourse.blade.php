@extends('layouts.master')
@section('content')
@include('courses.popup.academic')
@include('courses.popup.program')
@include('courses.popup.level')
<div class="row">
		<div class="col-lg-12">

			<div class="alert alert-success collapse" id="sentAlert">
			<a href="#" data-dismiss="alert" class="close">&times;</a>
				<p id="bootstrap-alert"></p>
			</div>

			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Courses</h3>

			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
				<li><i class="icon_document_alt"></i>Course</li>
				<li><i class="fa fa-file-text-o"></i>Manage Course</li>
				
			</ol>
			
		</div>
		
	</div>

	<div class="row">
		<div class="col-lg-12">
				<section class="panel panel-default">
					<header class="panel-heading">Manage Course</header>
					<form class="form-horizontal" id="frm-create-class">
					<div class="panel-body" style="border-bottom: 1px solid #ccc;">
					<div class="col-sm-3">
					
						<label for="academic-year">Academic Year
						</label>
						<div class="input-group">
							<select class="form-control" name="academic_id" id="academic_id">
							<option value="">--------------</option>
							@foreach($academics as $key => $y)
								<option value="{{ $y->academic_id }}">{{ $y->academic }}</option>
								@endforeach

							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus" id="add-more-academic"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-5">
					
						<label for="program">Course
						</label>
						<div class="input-group">
							<select class="form-control" name="program_id" id="program_id">
								<option value="">--------------</option>
							@foreach($programs as $key => $p)
								<option value="{{ $p->program_id }}">{{ $p->program }}</option>
								@endforeach
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus" id="add-more-program"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="level">Level
						</label>
						<div class="input-group">
							<select class="form-control" name="level_id" id="level_id">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus" id="add-more-level"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="shift">Shift
						</label>
						<div class="input-group">
							<select class="form-control" name="shift_id" id="shift_id">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus"></span>
							</div>
						</div>
						</div>



						
{{-------------------------------------------------}}
						<div class="col-sm-5">
					
						<label for="time">Time
						</label>
						<div class="input-group">
							<select class="form-control" name="time_id" id="time_id">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus"></span>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-2">
					
						<label for="batch">Batch
						</label>
						<div class="input-group">
							<select class="form-control" name="batch_id" id="batch_id">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus"></span>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-2">
					
						<label for="group">Group
						</label>
						<div class="input-group">
							<select class="form-control" name="group_id" id="group_id">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-plus"></span>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="startDate">Start Date
						</label>
						<div class="input-group">
							<select class="form-control" name="start_date" id="start_date">
								
							</select>
							<div class="input-group-addon">
								<i class="fa fa-calender"></i>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-5">
					
						<label for="endDate">End Date
						</label>
						<div class="input-group">
							<select class="form-control" name="end_date" id="end_date">
								
							</select>
							<div class="input-group-addon">
								<span class="fa fa-calender"></span>
							</div>
						</div>
						</div>

						</div>

						<div class="panel-footer">
							<button type="submit" class="btn btn-default btn-sm">Create Course</button>
						</div>

					</form>
					
				</section>
			
		</div>
		{{-----------------Btn picker dat---------------}}
	</div>
	@endsection

	@section('script')
			<script type="text/javascript">
				$('#start_date').datepicker({
					changeMonth:true,
					changeYear:true,
				});
				$('#frm-create-class #program_id').on('change',function(e){
					var program_id = $(this).val();
					var level = $('#level_id');
					$(level).empty();
					$.get("{{ route('showLevel') }}", { program_id:program_id }, function(data){
						$(level).append($("<option/>",{
							value : data.level_id,
							text  : data.level,
						}))

					})
				})
				//===========================
				$('#add-more-level').on('click', function(){
					var programs = $('#program_id option');
					var program  = $('#frm-level-create').find('#program_id');

					$(program).empty();

					$.each(programs,function(i,pro){
						$(program).append($("<option/>",{
							value : $(pro).val(),
							text  : $(pro).text(),
						}))
					})
				 	$('#level-show').modal('show');	
				});
				//===========================
				$('#frm-level-create').on('submit', function(e){
					e.preventDefault();
					var data = $(this).serialize();
					var url = $(this).attr('action');
					$.post(url,data, function(data){
						$('#level_id').append($("<option/>",{
							value : data.level_id,
							text  : data.level
						}))
					})
				})

				//==========================
				$('#add-more-academic').on('click', function(){
				 	$('#academic-year-show').modal();	
				});
				//==========================
				/*$('academic-year-show').on('hidden.bs.modal', function(){

				});*/


				$('.btn-save-academic').on('click', function(){

					 var academic = $('#new-academic').val();
					
					 
					 $.post("{{ route('postInsertAcademic') }}",{ academic:academic }, function(data){
					 	 $('#academic_id').append($("<option/>",{
					 	 		value : data.academic_id,
					 	 		text  : data.academic
					 	 }))
					 	 $('#new-academic').val();
					 });


					 
/*
					document.getElementById('bootstrap-alert ').innerHTML = academic;
				
					$('#sentAlert').show();*/
				});

				var $sentAlert = $('#sentAlert');

				$sentAlert.on('close.bs.alert', function(){
					$sentAlert.hide(); 
					return false;
				});

				//===============================
				$('#add-more-program').on('click', function(e){
				    $('#program-show').modal();

				})

				$('.btn-save-program').on('click',function(){
  					var program = $('#program').val();
					var description = $('#description').val();
					 
					 $.post("{{ route('postInsertProgram') }}",{ program:program,description:description }, function(data){
					 	 $('#program_id').append($("<option/>",{
					 	 		value : data.program_id,
					 	 		text  : data.program
					 	 }))
					 	 $('#program').val("");
					 	 $('#description').val();
					 });

				})

			</script>
	@endsection