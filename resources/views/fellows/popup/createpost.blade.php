{!!Html::script('js/jquery.scrollTo.min.js')!!}
{!!Html::script('js/jquerynicescroll.js')!!}
@yield('script')
<div class="modal" id="sentDialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <a href="#" class="close" data-dismiss="modal">&times;</a>
                          <center>
                          <ul class="list-unstyled" style="color: #7f7f7f;">
                          <li>
                          <span class="profile-ava">
                          @if(Auth::user()->facebook_id)
                                {{ HTML::image(Auth::user()->featured_image, Auth::user()->firstname, array( 'width' => 25, 'height' => 25 )) }}
                            @else
                            	<img alt="" width="25" height="25" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                            @endif
                          </span>
                          </li>
                          <li>
                          about to post on {{ date('l, F g, Y \a\t G:i:s') }}
                          </li>
                          </ul>
                          </center>
                          </div>
                          <div class="modal-body">
                            <center>
                          <form  method="post" role="form" id="feedbackForm" action="{{ route('share') }}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="hidden" name="country" value="{{ Auth::user()->country }}">
                          <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                        <!-- <label for="message">Message</label> -->
                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                          
                          <textarea name="body" style="color: #000;" class="form-control" placeholder="share what you're doing recently with everyone" required autofocus>
                          </textarea>
                          <div class="col-md-12">
                          <br>
                          <ul class="list-unstyled list-inline">
                          <li>
                           <span class="badge bg-important">emoji</span>
                           </li>
                          <li>
                          <input type="file" name="featured_image" value="">
                          </li>
                          </ul>

                          <ul class="list-unstyled list-inline">
                          <li>
                          <center><strong><i class="fa fa-tag" style="color: #7f7f7f"></i> Tags:</strong></center>
                      
                          </li>
                          <li>
                          <div class="input-group">
                            <input style="color: #000;" class="form-control" name="tag1" placeholder="---tag1---" />
                         
                            
                          </div>
                        
                              </li>
                              <li>
                          <div class="input-group">
                            <input style="color: #000;" class="form-control" name="tag2" placeholder="---tag2---">
                              
                            
                          </div>
                        
                              </li>
                              <li>
                          <div class="input-group">
                            <input style="color: #000;" class="form-control" name="tag3" placeholder="---tag3---">
                              
                            
                          </div>
                        
                              </li>
                              <li>
                          <div class="input-group">
                            <input style="color: #000;" class="form-control" name="tag4" placeholder="---tag4---">
                              
                            
                          </div>
                        
                              </li>
                              <li>
                          <div class="input-group">
                            <select class="form-control" name="tag5" id="" required>
                              <option>selfie</option>
                              <option>place</option>
                              <option>event</option>
                            </select>
                            
                          </div>
                        
                              </li>
                            </ul>

                            <ul class="list-unstyled list-inline">
                              <li><strong><i class="fa fa-map-marker red" style="color: #7f7f7f"></i> Location:</strong></li>
                              <li> <input type="text" name="location" class="form-control" placeholder="current location">
                              </li>
                              
                              
                            </ul>
                            </div>
                            </div>
                          <div class="col-md-12">
                          <br><br>
                     <center> <input type="submit" name='submit' class="btn btn-success btn-sm" value="Share Post"> </center>
                      
                      </div>
                      </form> 
                    
                            </center>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
</div>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>