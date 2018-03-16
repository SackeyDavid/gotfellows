<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
  <title>Account-Meineshule</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/amelia-bootstrap.min.css">
  <link href="css/meine_shule.css" rel="stylesheet" />
  <link href="css/account.css" rel="stylesheet" />
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="shortcut icon" 
      type="image/jpg" 
      href="img/carousel-4.jpg">


  <style type="text/css">
         .btn-info {
          color: #3c2d61;
      border-color: #3c2d61;;
      background-color: inherit;
    }
    .btn-info:hover {

      border-color: #332753;
      background-color: #3c2d61;
      
    }   

    .container span {
      color: #fff;
    }  

    #searchinput {
        min-width: 30em;

    } 
    #mTab, #mTab:hover {
      color: #fff;
      background-color: inherit;
      border-style: none;
    }
    #mTabs{
        color: #fff;
      background-color: inherit;
      
    }
    #mTabs:hover {

        color: #fff;
      background-color: inherit;
      border-bottom-color: #fff;
    }

    #mTabs:active {
      

    }
    .nav-tabs {
      background-color: red;
      border-bottom-color: red;

    }
    #apps{
            padding: 0px;
      margin: 0px;
    }
       .glyphicon-education:before {
  content: "\e233";
}
      .glyphicon-bishop:before {
  content: "\e214";
}
#feedlabel {
  color: rgba(255,255,255,0.8);
  margin-left: -5px;
}
#feeds a{
  padding: 90%;
}
#topposts {
  padding: 5px;
  border-radius: 5px;
  text-decoration: none;
  color: #fff;
  background-color: #ccc;
  border-color: #ccc;
}
 .glyphicon-star {
  padding: 5px;
 }
 #friendsch {
  color: rgba(255,255,255,0.8);
  font-size: 15px ;
 }
 #friendsch .glyphicon-education {
  padding: 15px;
 }
 #friendschools {
  color: #ccc;
  margin-left: -32px;
 }
 #toppostsyou {
  text-decoration: none;
  color: rgba(255,255,255,0.9);
 }
 #toppostsyoua {
  text-decoration: none;
  color: rgba(255,255,255,0.8);
 }
 #toppostsyouimg {
  border-radius: 25px;
  padding: 5px;
 }
 #postinfo {
  margin-left: -4px;
 }
 .anchor {

  text-decoration: none;
  color: rgba(255,255,255,0.8);
 }
 .anchor:hover {

  text-decoration: none;
  color: rgba(255,255,255,0.8);
 }
 #postheader {
  font: 25px Comic ;

 }
 #schoola {
  margin-left: -5px;
 }
#commenting, .fa-comments-o, .fa-bars {
    color: #fff;
      background-color: inherit;
}
.posts:hover {
  border-top: 1px solid rgba(255,255,255,0.5);
    background-color: rgba(105,105,105,0.3);
}
#questionbar {
  border-style: none;
  border-radius: 1px;
  background-color: rgba(255,255,255,0.9);

}
.fa-commenting {
  padding: 5px;
}
#questpara {
  text-decoration: none;
  font-size: 15px bold;
  color: rgba(127,255,0,0.7);
}
div.hide {
  display: none;
}
div.show {
  display: block;
}
.fa {
  padding: 5px;
}
.fa-comments {
  padding: 0px;
}
#posterimg {
  margin: 0px;
  border-radius: 25px;
}
#posterheader  {
  margin-top: 10px;
}
#upvotebutton {

  color: rgba(0,0,255,0.7);
  padding: 3px;
  border-radius: 5px;
  background-color: rgba(224,255,255,0.8);
  border-color: rgba(0,0,255,0.7);
  font: 16px;
  height: 30px;
}
#upvotebutton:hover {

  color: rgba(0,0,255,0.8);
  padding: 3px;
  border-radius: 5px;
  background-color: rgba(224,255,255,0.9);
  border-color: rgba(0,0,0,0.9);
  font: 16px;
  height: 30px;
}
#setuppost .panel {
  border-color: rgba(220,220,220,0.5);
}
#setuppost .panel-heading {
  border-color: rgba(220,220,220,0.5);
}
#commentnum {
  padding: 0px;
  height: 18px;
  border-radius: 1px;
  margin-top: -5px;
}
#sidebar-wrapper {
  margin-top: -45px;
}
.sidebar-nav {
  margin-top: 20px;
}

#sidebar-wrapper table td {

  border-color: rgba(0,0,0,0.5);
}
#sidebar-wrapper table td:hover {
  text-decoration: none;
    color: #fff;
    opacity: 1;
    background: rgba(255,255,255,0.2);
    opacity: 1px;
  border-color: rgba(0,0,0,0.5);
}
#sidebar-wrapper table td {
  padding: 0px;
  margin: 0px;

}
#sidebar-wrapper .glyphicon {
  padding: 3px;
}
#sidebar-wrapper table td a{
  padding: 0px;
  margin: 0px;
  
}
.sider-brand  {
  padding: 0px;
  margin: 0px;
}
</style>
         
</head>

<body>

    

      <div class="col-md-12" id = "apps">
    <ul class="nav nav-tabs ">
      <li><a href="#" id="mTab" data-toggle="tab"><span class="glyphicon glyphicon-home"></span></a></li>

      <li>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group row ">
        <div class="col-md-12">
          <input type="text" id="searchinput" class="form-control" placeholder="search school name or location">
          </div>
        </div>
        <!--<button type="submit" class="btn btn-default">Submit</button>-->
      </form>
      </li>

      <li><a href="document.php" title="Write Document" id="mTabs" ><span class="glyphicon glyphicon-font"></span></a></li>
      <li><a href="#teacherTab" id="mTabs" title="Do Calculation"><span class="glyphicon glyphicon-stats"></span></a></li>
      <li><a href="myaccount.php" id="mTabs" title="See the Globe"><span class="glyphicon glyphicon-globe"></span></a></li>
      <li><a href="discussion.php" title="Go to Discussion" id="mTabs"><i  class="fa fa-comments "></i></a></li>
    </ul>


          <div class="col-md-2 col-md-offset-1">
          
                  <div class="well">
                  
                    
                      <ul id="feeds" class="list-unstyled list-inline">
                      <li id="feedlabel"><strong> Feeds</strong></li>
                      <li><a href="#"> Edit</a></li>
                    </ul>
                  
                  <hr>
                
                      <a href="#" id="topposts" class="">Top Posts<span class="glyphicon glyphicon-star"></span></a></br>
                  
                    
                      <span href="#" id="friendsch" class=""><strong>Friend Schools</strong><span class="glyphicon glyphicon-education"></span></span>
                  
                
                    
                     <ul id="friendschools">
                       <li>First School</li>
                       <li>Second School</li>
                       <li>Third School</li>
                       <li>Fourth School</li>
                     </ul>
                     
                    
                     
                  </div>
            </div>          

            <div class="col-md-6">
            <div class="alert alert-success collapse " id="sentAlert">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            <p>Your question has been submitted</p>
          </div>
                <div class="well">
                  <div class="col-md-4 col-md-offset-4 "><a id="toppostsyou" href="#"><strong>Top Posts for You</strong></a></div></br>
                  
                  <a href="#" id="toppostsyoua"><img id="toppostsyouimg" src="img/carousel-1.jpg" height="25" width="25" >{{ Auth::user()->firstname }}</a> </br>
                  
                    <a id="questpara" onclick="showDiv('questform')" href="javascript:void(0);">Have a Question?</a>
                    <br>
                    <script type="text/javascript">
                        var x = 'f';
                        
                          function showDiv(show){

                        var formdiv = document.getElementById(show);
                          if(x == 'f'){

                        formdiv.className = "show";
                        $('#questionbar').focus();
                        x = 't';
                          }
                  
                         else {
                        formdiv.className = "hide";
                           x = 'f';
                          }
                        
                        }
                      
                    </script>
                    
                    
                  <form id="questform" class="hide" class="navbar-form" >
                    <br>
                        <div class="col-md-12">
                          <input type="text" id="questionbar" class="form-control" placeholder="ask anything..." autofocus>
                          <hr>
                           <a type="submit" class="col-md-12 oksubmit btn btn-default" name="">Ask<i  class="fa fa-commenting " ></i></a>
                          </div>
                      
                       
                 </form>
                  <br>

                  
                            <div  class="well posts">
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" class="anchor"><i class="fa fa-edit" > </i>Post made</a></li>
                              <li><a href="#" class="anchor"><i class="fa fa-thumbs-o-up"></i>Subject you would like</a></li>
                              <li><a href="#" class="anchor"><i class="fa fa-calendar-check-o"></i>Feb 22</a></li>
                            </ul>
                            <span id="postheader"> How Did The Guans come into Accra?</span></br>
                            <ul  class="list-unstyled list-inline">
                              <li ><a href="#" id="schoola"><img id="posterimg" src="img/carousel-2.jpg" height="45" width="45" ></a></li>
                              <li >
                              <ul id="posterheader" class="list-unstyled">
                              <li class="posterlabel">Owue Ben, Teacher at Mempeasem  Schools, GNAT Award Winner</li>
                              
                              <li>time writen</li>
                              </ul>
                              </li>
                            </ul>
                            <span>Progress has been slow, unfortunely. We did get some solid work done on the code last Google Summer of Code, and hope to be selected again this year. Stuart Russell has been super-busy, but he go..<a href="#">(more)</a></span>
                            <br>
                            <br>
                            
                              <ul class="list-unstyled list-inline">
                              <li>
                            <button class="btn btn-default" id="upvotebutton"></button>
                              <script type="text/javascript">
                              var status = "Upvotes | " + "<strong>2</strong>";
                              
                              document.getElementById('upvotebutton').innerHTML = status;
                             
                            </script>
                                </li>
                              
                                <li>downvotes</li>
                                <li>comments <button id="commentnum" class="btn btn-default"></button>
                                    <script type="text/javascript">
                                      var comnum = '<strong>2</strong>';
                                       document.getElementById('commentnum').innerHTML = comnum;
                                    </script>
                                </li>
                              </ul>

                              </div>

                              <div  class="well posts">
                            <ul id="postinfo" class=" list-inline">
                              <li><a href="#" class="anchor"><i class="fa fa-edit" > </i>Post made</a></li>
                              <li><a href="#" class="anchor"><i class="fa fa-thumbs-o-up"></i>Subject you would like</a></li>
                              <li><a href="#" class="anchor"><i class="fa fa-calendar-check-o"></i>Feb 22</a></li>
                            </ul>
                            <span id="postheader"> How Did The Guans come into Accra?</span></br>
                            <ul  class="list-unstyled list-inline">
                              <li ><a href="#" id="schoola"><img id="posterimg" src="img/carousel-2.jpg" height="45" width="45" ></a></li>
                              <li >
                              <ul id="posterheader" class="list-unstyled">
                              <li class="posterlabel">Owue Ben, Teacher at Mempeasem  Schools, GNAT Award Winner</li>
                              
                              <li>time writen</li>
                              </ul>
                              </li>
                            </ul>
                            <span>Progress has been slow, unfortunely. We did get some solid work done on the code last Google Summer of Code, and hope to be selected again this year. Stuart Russell has been super-busy, but he go..<a href="#">(more)</a></span>
                            <br>
                            <br>
                            
                            <button class="btn btn-default" id="upvotebutton"></button>
                              <script type="text/javascript">
                              var status = "Upvotes | " + "<strong>2</strong>";
                              document.getElementById('upvotebutton').innerHTML = status;
                            </script>

                              </div>
                    
                </div>
                

            </div>
            <div id="setuppost" class="col-md-3 ">
            <br>
              <div class="panel">
                <div class="panel-heading">
                  Set Up Your Account
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i><s>Visit yor feed</s> </li>
                    <li><i class="fa fa-check"></i>Follow 4 more subjects </li>
                    <li><i class="fa fa-check"></i><s>Find your friends on Meineshule</s> </li>
                    <li><i class="fa fa-check"></i>Upvote 6 more good nswers </li>
                    <li><i class="fa fa-check"></i>Ask your first question </li>
                    <li><i class="fa fa-check"></i>Add three credentials </li>
                    <li><i class="fa fa-check"></i>Answer a question </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--<div class="tab-content col-md-offset-1 col-md-10 ">
              <div class="well tab-pane" id="studentTab"><div class="row"><textarea cols="40" id="textArea" rows="6" class="form-control"></textarea>

              </div></div>


              <div class="well tab-pane" id="teacherTab"><div class="row"><textarea cols="40" id="textArea" rows="6" class="form-control"></textarea>

              </div></div>


              <div class="well tab-pane" id="instTab"><div class="row">akafsfsa

              </div>
              </div>

              </div>-->



    

  <a href="#sentDialog" id="largeIcons" class="btn btn-info" accesskey="t" data-toggle="modal"><span class="glyphicon glyphicon-th-large"></span></a> 


  <a href="#" id="photoholder"><img  src="img/carousel-1.jpg" height="25" width="25" >Joana</a> 


  <!--<a href="#" id="a" class="btn btn-info" ><span class="glyphicon glyphicon-send"></span></a> 


  <a href="#" id="b" class="btn btn-info" ><span class="glyphicon glyphicon-floppy-disk"></span></a> 

  <a href="#" id="f" class="btn btn-info" ><span class="glyphicon glyphicon-floppy-disk"></span></a>

  <a href="#" id="g" class="btn btn-info" ><span class="glyphicon glyphicon-floppy-disk"></span></a>

  <a href="#" id="i" class="btn btn-info" ><span class="glyphicon glyphicon-floppy-disk"></span></a>

  <a href="#" id="groups" class="btn btn-info" ><span class="glyphicon glyphicon-heart-empty"></span></a> 


  <a href="#" id="folder" class="btn btn-info" ><span class="glyphicon glyphicon-folder-open"></span></a> 


  <a href="#" id="c" class="btn btn-info" ><span class="glyphicon glyphicon-calendar"></span></a> 


  <a href="#" id="inbox" class="btn btn-info" ><span class="glyphicon glyphicon-inbox"></span></a> 


  <a href="#" id="d" class="btn btn-info" ><span class="glyphicon glyphicon-bell"></span></a> 


  <a href="#" id="e" class="btn btn-info" ><span class="glyphicon glyphicon-time"></span></a> 


  <a href="#" id="trash" class="btn btn-info" ><span class="glyphicon glyphicon-trash"></span></a> -->


  <div class="modal fade" id="sentDialog" tabindex="-1">

      

    <div class="modal-dialog " id="account-modal">
      <div class="modal-content">
      
      
      <div class="modal-body">


          
      <a href="#menu-toggle" id="menu-toggle" tabindex="0">  <i class="fa fa-bars"></i></a>

      <!-- <a href="" class=""><div class="off">
        <span class="glyphicon glyphicon-off"></span>
      </div>
      </a> -->


    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
             <ul class="sidebar-nav">
                

                
                <li>
              
                <div class="col-md-11 col-md-offset-1">
                    <table class="table table-hover table-condensed">
                      <tr><td><a href="#"> <i class="fa fa-info-circle"></i>About</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-bookmark"></i>Alumni</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-bullhorn"></i>Announcement</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-trophy"></i>Awards</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-cutlery"></i>Canteen</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-certificate"></i>Certification</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-legal"></i>Constitution</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-phone"></i>Contact</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-tree"></i>Emblems</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-info"></i>Entry Requirements</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-edit"></i>Exams</a></td></tr>
                      
                      <tr><td><a href="#"> <i class="fa fa-balance-scale"></i>Extracurricular Activity</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-money"></i>Fees</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-building"></i>Facilities</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-image"></i>Gallery</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-male"></i>Heads</a></td></tr>
                      
                      <tr><td><a href="#"> <i class="fa fa-flask"></i>Labs</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-rocket"></i>Projects</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-pencil"></i>Publications</a></td></tr>
                      <tr><td><a href="#"> <span class="glyphicon glyphicon-knight"></span>Recreational Facilities</a></td></tr>
                      <tr><td><a href="#"> <span class="glyphicon glyphicon-time"></span>School Schedule</a></td></tr>
                      <tr><td><a href="#"> <span class="glyphicon glyphicon-piggy-bank"></span>Scholarships</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-dribbble"></i>Sports</a></td></tr>
                      <tr><td><a href="#"> <i class="fa fa-users"></i>Student Body </a></td></tr>

                    </table>
                    
              
                    </div>

                

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
          

      <div class="dropdown">
        <ul class="dropdown-menu">
          <li><a href="#" tabindex="-1">logout</a></li> 
          <li><a href="#" tabindex="-1">sleep</a></li>
        </ul>
      </div>

  <a href="#" class="close" data-dismiss="modal">&times;</a>
<div class="container ">
 
<div class="container divs">
  <div class="row row-flex row-flex-wrap" id="accountDivs">
  <div class="col-md-12">
    <div class="col-md-3">
       <a href="course.php" target="_blank" title="Course" tabindex="1" > <div class="well course"><span class="glyphicon glyphicon-education"></span>
    
      </div></a>
    </div>

  <div class="col-md-3">
      <a href="residence.php" target="_blank" title="Residence" tabindex="2"> <div class="well residence"><span class="glyphicon glyphicon-home"></span>
      </div></a>
      <a href="discussion.php" target="_blank" title="Discussion" tabindex="2"> <div class="well discussion"><i id="commentimg" class="fa fa-comments-o "></i>
      </div></a>
 </div>

    <div class="col-md-3">
      <a href="finance.php" target="_blank" title="Finance" tabindex="1" ><div class="well accOffice"><span class="glyphicon glyphicon-euro"></span>
      </div></a>
    </div>

    <div class="col-md-3">
      <a href="schedule.php" target="_blank" title="Schedule" tabindex="1" ><div class="well schedule"> <span class="glyphicon glyphicon-time"></span>
      </div></a>
    </div>

    <div class="col-md-3">
      <a href="library.php" target="_blank" title="Library" tabindex="1" ><div class="well library"><span class="glyphicon glyphicon-book"></span>
      </div></a>
    </div>

    <div class="col-md-3">
      <a href="meals.php" target="_blank" title="food" tabindex="1" ><div class="well food"> <span class="glyphicon glyphicon-cutlery"></span>
      </div></a>
    </div>


    <div class="col-md-3   ">
      <a href="assignment.php" target="_blank" title="Assignment" tabindex="1" ><div class="well assignment"> <span class="glyphicon glyphicon-tasks"></span>
      </div></a>
        <a href="inbox.php" target="_blank" title="Inbox" tabindex="1" ><div class="well inbox"> <span class="glyphicon glyphicon-inbox"></span>
      </div></a>
    </div>

    <div class="col-md-2 col-md-offset-1 ">
      <a href="drive.php" target="_blank" title="Admin" tabindex="1" ><div class="well drive"><span class="glyphicon glyphicon-bishop"></span>
      </div></a>


      <!--<a href="play.php" title="play" target="_blank" tabindex="1" >-->

      <div class="well tv carousel slide" data-interval="2000" id="featured">

      <!--<ol class="carousel-indicators">
        <li data-target="#featured" data-fade-to="0" class="active"></li>
        <li data-target="#featured" data-fade-to="1"></li>
        <li data-target="#featured" data-fade-to="2"></li>
        <li data-target="#featured" data-fade-to="3"></li>
      </ol>-->
      <a href="play.php" target="_blank">
       <div class="carousel-inner">

        <div class="item active" title="play vendam"><img src="img/carousel-1.jpg" alt="">
        </div>
        <div class="item " title="play solarid"><img src="img/carousel-2.jpg" alt=""></div>
        <div class="item " title="play chess"><img src="img/carousel-3.jpg" alt=""></div>
        <div class="item " title="play soduku"><img src="img/carousel-4.jpg" alt=""></div>
        
      </div></a>

          <!--</a>-->
         <a href="#featured" class="carousel-control left" data-slide="prev"><span class="icon-prev"></span></a>

         <a href="#featured" class="carousel-control right" data-slide="next"><span class="icon-next"></span></a>
      

    </div>
    </div>
  </div><!--/row-->
</div><!--/container-->


</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
     
</div>

      </div>
  
      
        
      </div>
    </div>
</div>
</div>




    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/site.js"></script>-->

</body>
</html>