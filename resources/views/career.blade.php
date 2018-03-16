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
         
       
		<div class="col-lg-12 clearfix">
				<section class="panel panel-default" style="border: 1px solid #ddd;">
					<header class="panel-heading">Career Information <b class="pull-right">3/5</b></header>
					
					<form class="form-horizontal"  role="form" method="POST" action="{{ route('addCareer') }}">
					{{ csrf_field() }}
					<div class="panel-body" style="border-bottom: 1px solid #ccc;color: #7f7f7f;">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					 <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">


					

					<div class="col-sm-4">
					<label for="career">Career </label>
					<div class="input-group">
							<input type="text" name="career" class="form-control" id="" value="{{ old('career') }}">
							<div class="input-group-addon">
								<span class="fa fa-user-o"></span>
							</div>
					</div>
					</div>
				
{{-------------------------------------------------}}
					
					<div class="col-sm-4">
						
							
							<label for="occupation">Occupation
						</label>
						<div class="input-group">
							<input type="text" name="occupation" class="form-control" value="{{ old('occupation') }}">
							
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						
						<div class="col-sm-4">
					
						<label for="company"> Company Name/Workplace
						</label>
						<div class="input-group">
							<input type="text" class="form-control" name="company" id="" value="{{ old('company') }}">
							<div class="input-group-addon">
								<span class="fa fa-" id="add-more-program"></span>
							</div>
						</div>
						</div>
						<br>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="position"> Position
						</label>
						<div class="input-group">
							<input type="text" name="position" class="form-control" value="{{ old('position') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
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
@endsection