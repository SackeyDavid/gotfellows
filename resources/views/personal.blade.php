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
					<header class="panel-heading">Personal Information <b class="pull-right">1/5</b></header>
					
					<form class="form-horizontal"  role="form" method="POST" action="{{ route('personal') }}">
					{{ csrf_field() }}

					<div class="panel-body" style="border-bottom: 1px solid #ccc;">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					 <input type="hidden" name="name" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} ">
                     <input type="hidden" name="country" value="{{ Auth::user()->country }}">
                     <input type="hidden" name="DOB" value="{{ Auth::user()->DOB }}">
                     <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
				    <input type="hidden" name="by_user" value="{{ Auth::user()->id }}">
				    <input type="hidden" name="picked_user" value="8">


					

					<div class="col-sm-7">
					<label for="skills"> Skills
						</label>
						<div class="input-group">
							<input type="text" name="skills" class="form-control" id="" value="{{ old('skills') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-user-o"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						
						<div class="col-sm-5">
					
						<label for="description">About Me
						</label>
						<div class="input-group">
							<textarea class="form-control" name="description" id="" value="{{ old('description') }}" required></textarea>
							<div class="input-group-addon">
								<span class="fa fa-" id="add-more-program"></span>
							</div>
						</div>
						</div>
						<br>

{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="hobby">Hobby
						</label>
						<div class="input-group">
							<input type="text" name="hobby" class="form-control" id="" value="{{ old('hobby') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>



						
{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="neighbourhood">Neighbourhood
						</label>
						<div class="input-group">
							<input type="text" name="neighbourhood" placeholder="area of residence" class="form-control" value="{{ old('neighbourhood') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>





{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="town">Town of Residence
						</label>
						<div class="input-group">
							<input type="text" name="town" placeholder="" class="form-control" value="{{ old('town') }}">
							<div class="input-group-addon">
								<i class="fa fa-"></i>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="home_town">Home Town
						</label>
						<div class="input-group">
							<input type="text" name="home_town" placeholder="" class="form-control" value="{{ old('home_town') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="state">State
						</label>
						<div class="input-group">
							<input type="text" name="state" class="form-control" value="{{ old('state') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="clan"> Clan
						</label>
						<div class="input-group">
							<input type="text" name="clan" class="form-control" value="{{ old('clan') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
					
					<div class="col-sm-2">
						
							
							<label for="continent">Continent
						</label>
						<div class="input-group">
							<input type="text" name="continent" class="form-control" value="{{ old('continent') }}">
								<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
					
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