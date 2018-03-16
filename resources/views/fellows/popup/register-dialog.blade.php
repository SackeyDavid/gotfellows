<div class="modal fade " id="registerDialog" tabindex="-1">
    <div class="modal-dialog">
       <div class="modal-content col-md-12">
            <div class="modal-header">
            <a href="#" class="close" data-dismiss="modal">&times;</a>
              <p text-align:center>Kindly register as one of the following:</p>
            </div>
            <div class="modal-body">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="border: 1px solid #ddd;">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <br>
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middlenames') ? ' has-error' : '' }}">
                            <label for="middlenames" class="col-md-4 control-label">Middle Names</label>

                            <div class="col-md-6">
                                <input id="middlenames" type="text" class="form-control" name="middlenames" value="{{ old('middlenames') }}">

                                @if ($errors->has('middlenames'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlenames') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-2">
                                <input id="gender" type="radio" class="form-control" name="gender" value="male" required>Male
                                </div>
                                <div class="col-md-2">
                                <input id="gender" type="radio" class="form-control" name="gender" value="female" required >Female


                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                         <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                            <label for="DOB" class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-6">
                            
                            <input id="DOB" type="text" class="form-control" data-provide="datepicker" name="DOB" value="{{ old('DOB') }}" placeholder="YYYY/MM/DD"  required/>
                                @if ($errors->has('DOB'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DOB') }}</strong>
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


                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!-- Language&nbsp;&nbsp;&nbsp;
                        <select name="state" id="">
                            <option value="usa">usa</option>
                            <option value="eng">eng</option>
                            <option value="ger">ger</option>
                        </select>-->
                        <br>

                       <center> <input type="checkbox" name="agree" value="agree"> I Agree to terms and conditions</center>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
        
            <div class="modal-footer"></div>

            </div>
            
            </div>
      </div>