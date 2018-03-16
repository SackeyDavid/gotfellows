 <div id="setuppost" class="col-md-3 ">
             <div class="panel panel-default" style="border: 1px solid #ddd;">
                <div class="panel-heading">
                  <a style="color: #7f7f7f;">Fill Up Your Account </a>
                </div>
                <div class="panel-body" style="font-size: 14px;padding: 5%;padding-bottom: 1%;">
                  <ul class="list-unstyled">
                      
                    
                      
                      @if(!$favorite)
                    <li><a href="{{ route('account') }}"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Fill Favorite credentials </a> </li>
                    <br>

                      

                      @if(!$personal)
                    <li><a href="{{ route('account') }}"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Fill Personal credentials </a> </li>
                    <br>
                      @else
                    <li style="color: #3CB371;"><i class="fa fa-check success" style="margin-right: 5%;"></i>Personal credentials filled</li>
                    <br>
                      @endif

		    @if(!$academic)
                    <li><a href="{{ route('account') }}"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Fill Academic credentials </a> </li>
                    <br>
                      @else
                    <li style="color: #3CB371;"><i class="fa fa-check success" style="margin-right: 5%;"></i>Academic credentials filled</li>
                    <br>
                      @endif
                      
                      @if(!$career)
                    <li><a href="{{ route('account') }}"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Fill Career credentials </a> </li>
                    <br>
                      @else
                    <li style="color: #3CB371;"><i class="fa fa-check success" style="margin-right: 5%;"></i>Career credentials filled </li>
                    <br>
                      @endif

                      @if(!$religion)
                    <li><a href="{{ route('account') }}"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Fill Religion credentials </a> </li>
                    <br>
                      @else
                    <li style="color: #3CB371;"><i class="fa fa-check success" style="margin-right: 5%;"></i>Religion credentials filled </li>
                    <br>
                      @endif
                          
                     

                      @else
                    <li style="color: #3CB371;"><i class="fa fa-check" style="margin-right: 5%;"></i>All credentials filled </li>
                      @endif
                      
                      <br>
                      
                       @if($pickings->count() == 1)
                    <li><a href="#"><i class="fa fa-check" style="color: #ddd;margin-right: 5%;"> </i> Make your first pick </a></li>
                    <br>
                      @else
                        @if($pickings->count() < 21)
                    <li><a href="#"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Add {{ $remain_to_pick }} more picks</a></li>
                    <br>
                        @else
                    <li style="color: #3CB371;"><i class="fa fa-check" style="margin-right: 5%;"></i>20+ picks </li>
                    <br>
                        @endif
                      @endif

                      @if(!$i_comments->count())
                    <li><a href="#"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Make your first comment</a></li>
                    <br>
                      @else
                        @if($i_comments->count() < 5)
                    <li><a href="#"><i class="fa fa-check" style="color: #ddd;margin-right: 5%;"> </i> Add {{ $remain_to_comment }} more comments </a> </li>
                    <br>
                        @else
                    <li style="color: #3CB371;"><i class="fa fa-check" style="margin-right: 5%;margin-right: 5%;"></i>Made {{ $i_comments->count() }} comments </li> 
                    <br>
                        @endif
                      @endif


                      @if (!$postings->count())
                    <li><a href="#sentDialog" data-toggle="modal"><i class="fa fa-check" style="margin-right: 5%;color: #ddd;"> </i> Make your first post </a></li>
                    <br>
                      @else
                        @if($postings->count() < 5 )
                    <li><a href="#sentDialog" style="text-decoration: none;" data-toggle="modal"><i class="fa fa-check" style="margin-right: 5%;color: #ccc;"> </i> Add {{ $remain_to_post }} more posts </a> </li>
                    <br>
                        @else
                    <li style="color: #ADD8E6";><i class="fa fa-info" style="margin-right: 5%;"></i> Add tags to posts </li>
                    <br>
                        @endif
                      @endif



                      
                  </ul>
                </div>
              </div>
</div>

<div class="col-md-3">

</div>