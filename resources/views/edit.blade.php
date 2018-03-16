@extends('fellows.master')

@section('content')
<!-- profile -->
  <div class="container">
  <br><br><br><br><br>
                                  <div id="profile" style="margin-top: -30px;" class="">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                        <div class="profile-ava">
                                               <img alt="" class="pull-left" style="border: #000;" width="100" height="100" src="{{ URL::to('uploads/images/'.Auth::user()->featured_image) }}"> 
                                               </div>
                                               {{ Auth::user()->description }}
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                      <br><br><br>
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Full Name </span>: {{ Auth::user()->firstname }} {{ Auth::user()->middlenames }} {{ Auth::user()->lastname }} </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Date of Birth </span>: {{ Auth::user()->DOB }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>: {{ Auth::user()->email }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: {{ Auth::user()->telephone }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Country </span>:  {{ Auth::user()->country }}</p>
                                              </div>
                                               <div class="bio-row">
                                                  <p><span>Gender </span>: {{ Auth::user()->gender }}</p>
                                              </div>                                             
                                              
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>

                        <!-- edit-profile -->
                                  <div id="edit-profile">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1>Edit Bio Graph Info</h1>
                                              <div class="row">
                                              {!! Form::model(Auth::user(), ['route' => ['editprofile', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
                                                  
                                                                                                
                                                  <div class="col-md-7">
                                                       
                                                      {{ Form::label('firstname', 'First name') }}
                                                      {{ Form::text('firstname', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('middlenames', 'Middle names') }}
                                                      {{ Form::text('middlenames', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('lastname', 'Last name') }}
                                                      {{ Form::text('lastname', null, ["class"=>'form-control input-md']) }}


                                                      {{ Form::label('DOB', 'Date of Birth') }}
                                                      {{ Form::text('DOB', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('email', 'Email') }}
                                                      {{ Form::email('email', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('telephone', 'Telephone') }}
                                                      {{ Form::text('telephone', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('country', 'Country') }}
                                                      {{ Form::text('country', null, ["class"=>'form-control input-md']) }}

                                                      {{ Form::label('gender', 'Gender') }}
                                                      {{ Form::text('gender', null, ["class"=>'form-control input-md']) }}

                                                     <!--  {{ Form::label('description', "About Me:", ['class' => 'form-spacing-top']) }}
                                                      {{ Form::textarea('description', null, ['class'=>'form-control']) }}
 -->
                                                      {{ Form::label('featured_image', "Update Profile Photo:", ['class' => 'form-spacing-top']) }}
                                                      {{ Form::file('featured_image') }}
                                                  

                                                  </div>

                                                  <div class="col-md-5">
                                                    <div class="well">
                                                      <dl class="dl-horizontal">
                                                        <dt>Created At:</dt>
                                                        <dd>{{ date('M j, Y h:ia', strtotime(Auth::user()->created_at)) }}</dd>
                                                      </dl>

                                                      <dl class="dl-horizontal">
                                                        <dt>Last Updated:</dt>
                                                        <dd>{{  date('M j, Y h:ia', strtotime(Auth::user()->updated_at)) }}</dd>
                                                      </dl>
                                                      <hr>

                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          {!! Html::linkRoute('profile', 'Cancel', array(Auth::user()->id), array('class' => 'btn btn-danger btn-block')) !!}

                                                        </div>
                                                        <div class="col-md-6">
                                                          {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                                                          
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  {!! Form::close() !!}
                                                </div>

                                       </div>
                                      </section>
                                  </div>
    </div>             

@endsection