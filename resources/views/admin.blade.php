@extends('layouts.app')

@section('content')
@section('product-content')
    @if (!$feedbacks->count())
      There is no feedback. 

    @else
    @foreach ($feedbacks as $feedback)

                             <tr>
                                 <td title="{{ $feedback->created_at }}">{{ $feedback->firstname }}</td>
                                 <td>{{ $feedback->lastname }}</td>
                                 <td title="">{{ $feedback->email }}</td>
                                 <td >{{ $feedback->subject }}</td>
                                 <td >{{ $feedback->message }}</td>
                                 
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
                     <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('advertise') }}">
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

                   


                    
                </section>
            
        </div>
            


          <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Our Feedbacks 
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 
                                 <th><i class="fa fa-truck"></i> First name</th>
                                 <th><i class="icon_calendar"></i> Last name</th>
                                 <th><i class="fa fa-desktop"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Subject</th>
                                 <th><i class="icon_mobile"></i> Message</th>
                            
                              </tr>
                                  @yield('product-content')               
                           </tbody>
                        </table>
                      </section>
                  </div>
      
</div>
</div>

@endsection
@endsection
