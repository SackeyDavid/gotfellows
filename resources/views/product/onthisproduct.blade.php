@extends('layouts.dashboard-header')

@section('comment-content')
          @if (!$posts->count())
          There is no review till now. 
          @else
          @foreach ($posts as $post)
                    <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="{{ URL::to('uploads/images/'.$post->images) }}" width="32" height="32" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta">{{ $post->author->name }} <span class="pull-right">{{ $post->created_at->Diffforhumans() }}</span></div>
                          {!! str_limit($post->body, $limit= 120, $end = '.....<a href='.url("/".$post->slug).'>Read More</a>') !!}
                          <div class="clearfix"></div>
                        </div>
                      </li> 
          @endforeach
          @endif
 
@endsection


  

@section('pagination')
  <div class="row">
    <br>
    {!! $posts->links() !!}
  </div>
 
@endsection

  



@section('content')
 @if (!$product) 
 There is no product
 @else
 <style type="text/css">
   #map-canvas {
    width: 100%;
    height: 250px;
   }
 </style>
<div style="margin-top: -30px;" class="bio-graph-heading">
  <img alt="{{ $product->product_name }}" class="pull-left" style="border: #000;background-color: inherit;border-color: inherit; " width="150" height="150" src="{{ URL::to('uploads/images/'.$product->featured_image) }}"> 
                                               
   {{ $product->description }}
  </div>

<div class="container-fluid">
<br>
<br>
<br><br><br>
   <!-- project team & activity start -->
          <div class="row">
            <div class="col-md-8 portlets">
              <!-- Widget -->
              <div class="panel panel-default">
				<div class="panel-heading">
                  <div class="pull-left">Reviews</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                  <!-- Widget content -->
                  <div class="padd sscroll">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
                      
                        <!-- Use the class "pull-left" in avatar -->
                        @yield('comment-content')
                    

                      <!-- Chat by other. Use the class "by-other". -->
                      
                        <!-- Use the class "pull-right" in avatar -->
                    
                      

                                                              

                    </ul>
                      @yield('pagination')
                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
          @if (Auth::guest())
					 	<p>
					 		<a href="{{ route('login') }}"><strong>Login to write a review on this product</strong></a>
					 	</p>
				  @else
					 
					 	<center><h4>Review this Product</h4></center>
					 

					 <div class="panel-body">
					 	<form class="" action="{{ route('addcomment', ['on_product' => $product->id]) }}" method="post">

					 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
              <input type="hidden" name="images" value="{{ Auth::user()->featured_image }}">
              <input type="hidden" name="active" value="1">
					 		
					 	
					 		<div class="form-group">
					 			<textarea placeholder="write your review here" class="form-control" name="body" required></textarea>
					 		</div>
					 		<input type="submit" name='post_comment' class="btn btn-success" value="Post">
					 	</form>
					 </div>
			     @endif
	


                  </div>
                </div>


              </div> 
            </div>

                  <div class="col-lg-4">
                      <!--Project Activity start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-6 task-progress pull-left">
                                  <h1>Vendor's Info</h1>                                  
                              </div>
                              <div class="col-lg-6">
                                <span class="profile-ava pull-right">
                                        <img alt="" class="simple" height="32" width="32" src="{{ URL::to('img/'.$user->featured_image) }}">
                                        {{ $product->vendor}}
                                </span>                                
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td><strong>Vendor:</strong></td>
                                  <td>
                                      {{ $product->vendor }}
                                  </td>
                                  </tr>
                              <tr>
                                  <td><strong>Product name:</strong></td>
                                  <td>
                                      {{ $product->product_name }}
                                  </td>
                                  </tr>
                              <tr>
                                  <td><strong>Price:</strong></td>
                                  <td>
                                      {{ $product->price }}
                                  </td>
                                  
                              </tr>                              
                              <tr>
                                  <td><strong>Description:</strong></td>
                                  <td>
                                      {{ $product->description }}
                                  </td>
                                  
                              </tr>
                              <tr>
                                  <td><strong>Email:</strong></td>
                                  <td>
                                      {{ $product->email }}
                                  </td>
                                 
                              </tr>                              
                              <tr>
                                  <td><strong>Telephone:</strong></td>
                                  <td>
                                      {{ $product->telephone }}
                                  </td>
                                  
                              </tr>
							  <tr>
                                  <td><strong>Working Hours:</strong></td>
                                  <td>
                                      {{ $product->working_hours }}
                                  </td>
                                  
                              </tr>
							  <tr>
                                  <td><strong>Category:</strong></td>
                                  <td>
                                      {{ $product->category }}
                                  </td>
                                  
                              </tr>
                               <tr>
                                  <td><strong>Location:</strong></td>
                                  <td>
                                      {{ $product->location }}
                                  </td>
                                  
                              </tr>
                              <tr>
                                  <td><strong>Region:</strong></td>
                                  <td>
                                      {{ $product->region }}
                                  </td>
                                  
                              </tr>
                              
                              </tbody>
                          </table>
                      </section>
                      <!--Project Activity end-->
                  </div>
              </div><br><br>
              
		</div>
     <!-- {!! Form::model($product, ['route' => ['vendorslocation', 'id' => $product->id], 'method' => 'PUT', 'files' => true]) !!}

     <input type="hidden" id="searchmap" name="searchmap" value="{{ $product->location }}">

      {!! Form::close() !!}
 -->
      <script src="https://maps.googleapis.com/maps/api/js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
      <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
      <script src="{{ asset('js/jquery-ui-1.10.4.min.js') }}"></script>
      <script src="{{ asset('js/jquery.js') }}"></script>
    <div id="map-canvas" class="bio-graph-heading" style="width:100%;height:400px;border-color: #ccc;">
                
              </div>
              
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb_R-CScqUL3j_RvPuIjUq-BH7z5P8XEU&callback=initMap"
    async defer></script>
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript">
    var map;
      var marker;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: 5.650562, lng:  -0.1962244},
          zoom: 13,
          scrollwheel: false;
          zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
          }
        });

        marker = new google.maps.Marker({
          position: {
            lat: 5.650562, 
            lng: -0.1962244
          },
          map: map
        })

      }


          
      
    </script>
 @endif

@endsection