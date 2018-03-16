<style type="text/css">
  #postsDialog .modal-dialog {
  margin-top: 5%;
  margin-right: 45%;
  height: auto;
  margin-left: -30%;
  width: 60%;

}
</style>
<div  class="modal" id="view-this-post" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header clearfix">
                          <a href="#" class="close" data-dismiss="modal">&times;</a>
                          </div>

                            <div class="modal-body">
                           

                             <div  class="well posts">
                             
              
             
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-edit" > </i> Post made</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-thumbs-o-up"></i> Subject that pertains to you</a></li>
                              <li><a href="#" style="text-decoration: none;" class="anchor"><i class="fa fa-calendar-check-o"></i> </a></li>
                            </ul>
                          
                            <ul  class="list-unstyled list-inline chats">
                              <li class="by-me" style="margin-right: 5%;">
                              <a href="#" style="text-decoration: none;">
                              <div class="avatar pull-left">
                              <img  src="" height="45" width="45" data-toggle="tooltip" data-placement="left" 
                              title="" 
                              data-html="true" class="user-avatar">
                              
                               
                              </div>
                              </a>
                         
                              </li>
                             
                              
                              
                            </ul>
                            <span id="post-body"><a href="#">(more)</a></span>
                            
                            <img src="" min-height="500" min-width="600" >
                           
                            <br>
                            <br>
                            <ul class="list-unstyled list-inline">
                            <li><span class="badge bg-important"></span></li>
                            <li><span class="badge bg-important"></span></li>
                            <li><span class="badge bg-important"></span></li>
                            <li><span class="badge bg-important"></span></li>
                            <li><span class="badge bg-important"></span></li>
                            </ul>

                            <ul class="list-unstyled list-inline" style="color: #7f7f7f">
                            <li title="post shared from "><i class="fa fa-map-marker red" style="color: #7f7f7f"></i> <img src="" height="17" width="17"  ></li>
                            <li><i class="fa fa-desktop"></i> 122 views</li>
                            <li>
                            <a href="#"><span class="badge bg-important"><b class="fa fa-heart-o"></b></span></a>
                             0 impressed</li>
                            </ul>

                            <div class="col-md-8">
                            <form class="form-horizontal" role="form" action="" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="from_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="active" value="1">
                            
                            <textarea placeholder="share your coment here" style="color: #000;" class="form-control" name="body"></textarea>
                          
                            
                            <br>
                            <input type="submit" name="post_comment" value="Post">
                            
                          
                            </form>
                            </div>
                             
                            <div class="clearfix">
                            <div class="col-md-12 padd sscroll">
                              
                            <ul class="chats">

                            
                            <br>
                            <div class="col-md-12" style="color: #7f7f7f;"> There is no comment till now. </div>
                           
                                  <li class="by-me">
                                    <!-- Use the class "pull-left" in avatar -->
                                    <div class="avatar pull-left">
                                      <img src="" width="32" height="32" alt=""/>
                                    </div>

                                    <div class="chat-content">
                                      <!-- In meta area, first include "name" and then "time" -->
                                      <div class="chat-meta"><span class="pull-right"></span></div>
                                      
                                      <div class="clearfix"></div>
                                    </div>
                                  </li> 
                           
                            </ul>
                            </div>
                            </div>
                  
                  </div>
                  
                  </div>
          </div>
    </div>
</div>
