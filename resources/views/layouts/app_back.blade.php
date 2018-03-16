<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'meineshule') }}</title>


    <!-- Styles -->
     <!-- Bootstrap CSS -->  
       {!!HTML::style('css/bootstrap.min.css')!!} 
    <!-- bootstrap theme -->
    {!!Html::style('css/bootstrap-theme.css')!!}
    
    <!--external css-->
    <!-- font icon -->
    {!!Html::style('css/elegant-icons-style.css')!!}
  

    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/font-awesome.css')!!}

    {!!Html::style('css/style-2.css')!!}
    
  {!!Html::style('css/style-3.css')!!}
    
    
    {!!Html::style('css/style-responsive.css')!!}
    
    
  @yield('style')
   
   

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="{{ URL::To('img/logo.png') }}" type="image/jpg" rel="shortcut icon"> 
    @yield('style')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="app">
<div class="container-fluid">
    <div class="row">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">{{ Auth::user()->firstname }}</a></h5>
                              <span><a href="#">{{ Auth::user()->email }}</a></span>
                              <br>
                              <span><a href="{{ route('logout') }}"> <i class="fa fa-lock"></i> Logout</a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Compose
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Compose</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="cc" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                      <button class="btn btn-send" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

                          </li>
                          <li>
                              <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Labels</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info ">
                          <li> <h4>Buddy online</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-success"></i>Alireza Zare <p>I do not think</p></a>  </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-danger"></i>Dark Coders<p>Busy with coding</p></a> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Mentaalist <p>I out of control</p></a>
                          </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>H3s4m<p>I am not here</p></a>
                          </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Dead man<p>I do not think</p></a>
                          </li>
                      </ul>

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Inbox</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Search Mail">
                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                             <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group">
                                     <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                         All
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"> None</a></li>
                                         <li><a href="#"> Read</a></li>
                                         <li><a href="#"> Unread</a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>
                             <div class="btn-group hidden-phone">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Move to
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>

                             <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                         
                          @yield('content')
                      </div>
                  </aside>
              </div>
</div>
</div>
        
   {!!Html::script('js/app.js')!!} 
   {!!Html::script('js/vue.min.js')!!} 
   
</body>
</html>
