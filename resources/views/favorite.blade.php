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
					<header class="panel-heading">What is your favorite?<b class="pull-right">5/5</b></header>
					
					<form class="form-horizontal"  role="form" method="POST" action="{{ route('addFavorite') }}">
					{{ csrf_field() }}
					<div class="panel-body" style="border-bottom: 1px solid #ccc;color: #7f7f7f;">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					 <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">


					

					
					<div class="col-sm-4">
						
							
							<label for="book">Book
						</label>
						<div class="input-group">
							<input type="text" name="book" class="form-control" value="{{ old('book') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
					<div class="col-sm-4">
					<label for="brand">Brand </label>
					<div class="input-group">
							<input type="text" name="brand" class="form-control" id="" value="{{ old('brand') }}">
							<div class="input-group-addon">
								<span class="fa fa-user-o"></span>
							</div>
					</div>
					</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="technology">Technology
						</label>
						<div class="input-group">
							<input type="text" name="technology" class="form-control" value="{{ old('technology') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="tv_show">TV show
						</label>
						<div class="input-group">
							<input type="text" name="tv_show" class="form-control" value="{{ old('tv_show') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						
						<div class="col-sm-4"> 
					
						<label for="public_figure">Public Figure and Star
						</label>
						<div class="input-group">
							<input type="text" class="form-control" name="public_figure" id="" value="{{ old('public_figure') }}">
							<div class="input-group-addon">
								<span class="fa fa-" id="add-more-program"></span>
							</div>
						</div>
						</div>
						

				
{{-------------------------------------------------}}
					
					<div class="col-sm-4">
						
							
							<label for="sport">Sport
						</label>
						<div class="input-group">
							<input type="text" name="sport" class="form-control" value="{{ old('sport') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
						
							
							<label for="car">Car
						</label>
						<div class="input-group">
							<input type="text" name="car" class="form-control" value="{{ old('car') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
						
							
							<label for="building">Building
						</label>
						<div class="input-group">
							<input type="text" name="building" class="form-control" value="{{ old('building') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-4">
						
							
							<label for="city">City in the World
						</label>
						<div class="input-group">
							<input type="text" name="city" class="form-control" value="{{ old('city') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
						
							
							<label for="meal">Meal
						</label>
						<div class="input-group">
							<input type="text" name="meal" class="form-control" value="{{ old('meal') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}

						<div class="col-sm-4">
						
							
							<label for="pet">Pet
						</label>
						<div class="input-group">
							<input type="text" name="pet" class="form-control" value="{{ old('pet') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
						<br>
						</div>

						<div class="panel-footer">
						<center>
							<button type="submit" class="btn btn-primary">Done</button>
							
						</center>
						</div>

					</form>
 


					
				</section>
			</div>
			</div>
	</div>		

		    
@endsection