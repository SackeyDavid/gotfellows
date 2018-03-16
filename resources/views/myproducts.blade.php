@extends('layouts.dashboard-header')

 @section('product-content')
    @if (!$products->count())
      There is no product. 

    @else
    @foreach ($products as $product)

       <!--  <p class="">

           <a href="">{{ $product->author->name }},</a> on {{ $product->created_at->format('M d,Y \a\t h:i a') }} <br>
           {!! str_limit($product->description, $limit= 120, $end = '....... <a href='.url("/".$product->slug).'>Read More</a>') !!} -->
           <!--  {{ $product->body }} -->
           <!-- {{ url('/user/'.$product->on_post) }} -->
           <!-- {{ url('/'.$product->body) }} -->
         <!--  </p> -->
       <!--    <div class="col-sm-6 col-md-4">
            <div class="thumbnail well">
              <img src="{{ URL::to('img/'.$product->image) }}" alt="..." class="img-responsive">
              <div class="caption">
                <h3>{{ $product->product_name }}</h3>
                <p class="description">{{ $product->description }}</p>
                <div class="pull-left price">{{ $product->price }}</div>
                <div class="clearfix">
                <a href="#" class="btn btn-info pull-right" title="certified vendor" role="button"><i class="fa fa-certificate" aria-hidden="true"></i> {{ $product->vendor }}</a></div>
              </div>
            </div>
          </div> -->
         					 <tr>
         					 	 <td><img src="{{ URL::to('uploads/images/'.$product->featured_image) }}" height="100" width="100" alt="..." class="img-responsive"></td>
                                 <td title="{{ $product->price }} and available between {{ $product->working_hours }}">{{ $product->product_name }}</td>
                                 <td>{{ $product->updated_at }}</td>
                                 <td title="">{{ $product->description }}</td>
                                 <td title="In {{ $product->region }}">{{ $product->location }}</td>
                                 <td title="And your email: {{ $product->email }}">{{ $product->telephone }}</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" title="edit product information" href="{{ route('editproduct', [$product->id, $product->product_name] ) }}"><i class="fa fa-edit"></i></a>
                                      <a class="btn btn-danger" title="delete this product" href="{{ route('deleteproduct', $product->id) }}"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              


    @endforeach
    @endif

    @endsection


@section('content')
<div class="container">
   <div class="row">
   		

         <div class="row">
		<div class="col-lg-12 clearfix">
				<section class="panel panel-default">
					<header class="panel-heading">Quick Advertisement</header>
					<!--  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('advertise') }}">
                        {{ csrf_field() }}
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">

                        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label for="product_name" class="col-md-4 control-label">Product name</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required autofocus>

                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">About Product</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="description" id="" value="{{ old('description') }}" required></textarea>
							
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Telephone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                               
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" >

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('working_hours') ? ' has-error' : '' }}">
                            <label for="working_hours" class="col-md-4 control-label">Business hours</label>

                            <div class="col-md-6">
                                <textarea id="working_hours" type="text" class="form-control" name="working_hours" value="{{ old('working_hours') }}" required></textarea> 

                                @if ($errors->has('working_hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('working_hours') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select class="form-control" name="category" id="" required>
								 				  <option value="">- Choose Cateogry -</option>
                                                  <option value="1" title="Coconut fruit, dried or fresh">Whole fruit</option>
                                                  <option value="2" title="Any drink made from coconut">Juice</option>
                                                  <option value="3" title="Any edible product made from coconut">Refined Products</option>
                                                  <option value="4" title="Any unedible product made from coconut">Byproducts</option>
							</select>
							
                               
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                              
                            </div>
                        </div>


                        <div class="pull-right">
						
							
							<label for="featured_image">Product Image
						</label>
							<input type="file" name="featured_image" value="{{ old('featured_image') }}">
							
						</div>
					

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Advertise
                                </button>
                            </div>
                        </div>
                    </form>
 -->
					<form class="form-horizontal"  role="form" method="POST" action="{{ route('advertise') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="panel-body" style="border-bottom: 1px solid #ccc;">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="vendor" value="{{ Auth::user()->name }}">

					

					<div class="col-sm-3">
					<label for="product_name"> Product Name
						</label>
						<div class="input-group">
							<input type="text" name="product_name" class="form-control" id="" value="{{ old('product_name') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-newspaper-o"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="category">Category
						</label>
						<div class="input-group">
							<select class="form-control" name="category" id="" required>
								 				  <option value="">- Choose Cateogry -</option>
                                                  <option value="1" title="Coconut fruit, dried or fresh">Whole fruit</option>
                                                  <option value="2" title="Any drink made from coconut">Juice</option>
                                                  <option value="3" title="Any edible product made from coconut">Refined Products</option>
                                                  <option value="4" title="Any unedible product made from coconut">Byproducts</option>
							</select>
							<div class="input-group-addon">
								<span class="fa fa-newspaper-o"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						
						<div class="col-sm-5">
					
						<label for="description">Description
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
						<div class="col-sm-3">
					
						<label for="price">Price
						</label>
						<div class="input-group">
							<input type="text" name="price" class="form-control" id="" value="{{ old('price') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>



						
{{-------------------------------------------------}}
						<div class="col-sm-4">
					
						<label for="location">Your Location
						</label>
						<div class="input-group">
							<input type="text" name="location" placeholder=" {{ Auth::user()->location }} Optional" class="form-control" value="{{ old('location') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>





{{-------------------------------------------------}}
						<div class="col-sm-3">
					
						<label for="telephone">Telephone
						</label>
						<div class="input-group">
							<input type="text" name="telephone" placeholder=" {{ Auth::user()->telephone }} Optional" class="form-control" value="{{ old('telephone') }}">
							<div class="input-group-addon">
								<i class="fa fa-"></i>
							</div>
						</div>
						</div>


{{-------------------------------------------------}}
						<div class="col-sm-5">
					
						<label for="email">Email
						</label>
						<div class="input-group">
							<input type="email" name="email" placeholder="Default: {{ Auth::user()->email }} Optional" class="form-control" value="{{ old('email') }}">
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>
{{-------------------------------------------------}}
						<div class="col-sm-2">
					
						<label for="working_hours">Working hours
						</label>
						<div class="input-group">
							<input type="text" name="working_hours" class="form-control" value="{{ old('working_hours') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
						<div class="col-sm-2">
					
						<label for="working_hours">Region
						</label>
						<div class="input-group">
							<input type="text" name="region" class="form-control" value="{{ old('region') }}" required>
							<div class="input-group-addon">
								<span class="fa fa-"></span>
							</div>
						</div>
						</div>

{{-------------------------------------------------}}
					
					<div class="col-sm-2">
						
							
							<label for="featured_image">Product Image
						</label>
							<input type="file" name="featured_image" value="{{ old('featured_image') }}">
							
						</div>
					


						<!-- <div class="col-sm-2">
						
						<label for="image">Product Image
						</label>
						<div class="input-group">
						<input type="text" name="image" class="form-control" value="{{ old('image') }}" required>
						<button onclick="uploadImage()"> Upload Image</button>
						<script type="text/javascript">
							function uploadImage() {
								window.open("{{ route('uploadimage', Auth::user()->id) }}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=400,height=400");
							}
						
						</script>
						
						
						</div>
						</div>
					 	 --> <br>





						</div>

						<div class="panel-footer">
						<center>
							<button type="submit" class="btn btn-primary">Advertise</button>
							
						</center>
						</div>

					</form>
 


					
				</section>
			
		</div>
		    


          <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              My Advertised Products 
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                              	 <th><i class="fa fa-picture-o"></i> Image</th>
                                 <th><i class="fa fa-truck"></i> Product Name</th>
                                 <th><i class="icon_calendar"></i> Date Advertised</th>
                                 <th><i class="fa fa-desktop"></i> Description</th>
                                 <th><i class="icon_pin_alt"></i> City</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                                  @yield('product-content')               
                           </tbody>
                        </table>
                      </section>
                  </div>
      
</div>
</div>

@endsection
