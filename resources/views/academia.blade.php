@extends('fellows.master')
@section('content')
<!-- Styles -->
     <!-- Bootstrap CSS -->  
       {!!Html::style('welcome-css/bootstrap.min.css')!!} 
    <!-- bootstrap theme -->
    {!!Html::style('welcome-css/bootstrap-theme.css')!!}

    {!!Html::style('content-css/account.css')!!}

   
    
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('content-css/elegant-icons-style.css')!!}
  

    {!!Html::style('welcome-css/font-awesome.min.css')!!}
       
    
  {!!Html::style('content-css/style.css')!!}
  
    
    {!!Html::style('welcome-css/style-responsive.css')!!}
     {!!Html::style('css/site.css')!!}
    
  @yield('style')



   
   		<div class="container">
   		<br><br><br><br>
         <div class="row">
       
		<div class="col-lg-12 clearfix">
				<section class="panel panel-default" style="border: 1px solid #ddd;">
					<header class="panel-heading">Academic Information <b class="pull-right">2/5</b></header>
					
					<form class="form-horizontal"  role="form" method="POST" action="{{ route('addAcademic') }}">
					{{ csrf_field() }}
					<div class="panel-body" style="border-bottom: 1px solid #ccc;color: #7f7f7f;">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					 <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">


					

					<div class="col-sm-4">
					<label for="university"> University (postgraduate) </label>
					<div class="input-group">
							<input type="text" name="university" class="form-control" id="" value="{{ old('university') }}">
							<div class="input-group-addon">
								<span class="fa fa-user-o"></span>
							</div>
					</div>
					</div>
				
{{-------------------------------------------------}}
					
					<div class="col-sm-4">
						
							
							<label for="uni_grad_year">Year of Graduation from University
						</label>
						<div class="input-group">
							<input type="text" name="uni_grad_year" data-provide="datepicker" class="form-control" value="{{ old('uni_grad_year') }}">
								
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						
						<div class="col-sm-4">
					
						<label for="college"> College (undergraduate)
						</label>
						<div class="input-group">
							<input class="form-control" name="college" id="" value="{{ old('college') }}">
							<div class="input-group-addon">
								<span class="fa fa-" id="add-more-program"></span>
							</div>
						</div>
						</div>
						<br>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="col_grad_year"> Year of Graduation from College
						</label>
						<div class="input-group">
							<input type="text" name="col_grad_year" data-provide="datepicker" class="form-control" value="{{ old('col_grad_year') }}">
								<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="high_school">High School
						</label>
						<div class="input-group">
							<input type="text" name="high_school" class="form-control" id="" value="{{ old('high_school') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="high_grad_year">Year of Graduation from High School
						</label>
						<div class="input-group">
							<input type="text" name="high_grad_year" data-provide="datepicker" class="form-control" value="{{ old('high_grad_year') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>



						
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="other_school">Other School 
						</label>
						<div class="input-group">
							<input type="text" name="other_school" placeholder="vocational or other" class="form-control" value="{{ old('other_school') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
					
					<div class="col-sm-4">
						
							
							<label for="other_grad_year">Year of Graduation from Other School
						</label>
						<div class="input-group">
							<input type="text" name="other_grad_year" data-provide="datepicker" class="form-control" value="{{ old('other_grad_year') }}">
								
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>





{{-------------------------------------------------}}
						<div class="col-sm-6">
					
						<label for="program"> Program of Study (current)
						</label>
						<div class="input-group col-md-12">
							<div class="col-md-4">
								<select type="text" name="degree" class="form-control" value="{{ old('other_grad_year') }}">
									<option></option>
									<option>Diploma</option>
									<option>BSc</option>
									<option>BA</option>
									<option>MSc</option>
									<option>MBa</option>
									<option>Phd</option>
									<option></option>
									
									
								</select>
							</div>
							<div class="input-group col-md-8">
						
							<input type="text" name="program" placeholder="" class="form-control" value="{{ old('program') }}">
							<div class="input-group-addon">
								<i class="fa fa-"></i>
							</div>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-5">
					
						<label for="level">Current Level in Program of Study
						</label>
						<div class="input-group col-md-12">
							<div class="col-md-4">
								<select type="text" name="class" class="form-control" value="{{ old('other_grad_year') }}">
									<option></option>
									<option>Stage</option>
									<option>Grade</option>
									<option>Class</option>
									<option>Form</option>
									<option>Level</option>
									<option>Year</option>
									<option></option>
									
									
								</select>
							</div>
							<div class="input-group col-md-8">
							<input type="text" name="level" placeholder="eg level 200" class="form-control" value="{{ old('level') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
							</div>
						</div>
						</div>


					


						<br>





						</div>

						<div class="panel-footer">
						<center>
							<button type="submit" class="btn btn-primary">Next</button>
							
						</center>
						</div>

					</form>
 


					
				</section>
			</div>
			</div>
			
		</div>
		    
@endsection