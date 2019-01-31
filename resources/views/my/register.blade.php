@extends('layouts.app')
@section('my')
    sdeadsasd
    @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('my-signup') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="age" value="{{ old('age') }}" autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('date') }}" autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-sm-2">
                                <div class="radio">
                                    <label><input id="gender" type="radio"  name="gender" value='male' autofocus>Male</label>
                                    <label><input id="gender" type="radio"  name="gender" value='female' autofocus>Female</label>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobileNumber') ? ' has-error' : '' }}">
                            <label for="mobileNumber" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobileNumber" type="number" value="{{ old('mobileNumber') }}" maxlength="10" class="form-control" name="mobileNumber" autofocus>

                                @if ($errors->has('mobileNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('pinCode') ? ' has-error' : '' }}">
                            <label for="pinCode" class="col-md-4 control-label">Pin Code</label>

                            <div class="col-md-6">
                                <input id="pinCode" type="number" maxlength="6" class="form-control" name="pinCode" value="{{ old('pinCode') }}"  autofocus>

                                @if ($errors->has('pinCode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pinCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cityState') ? ' has-error' : '' }}">
                            <label for="cityState" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="cityState" type="text" class="form-control" name="cityState" value="{{ old('cityState') }}" autofocus>

                                @if ($errors->has('cityState'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cityState') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" value="{{ old('password') }}"name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fileName') ? ' has-error' : '' }}">
                            <label for="fileName" class="col-md-4 control-label">File Upload</label>

                            <div class="col-md-6">
                                <input id="fileName" type="file" class="form-control" name="fileName" value="{{ old('fileName') }}" autofocus>

                                @if ($errors->has('fileName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fileName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title" class="col-md-4 control-label">Post Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_details') ? ' has-error' : '' }}">
                            <label for="post_details" class="col-md-4 control-label">Post Detail</label>

                            <div class="col-md-6">
                                <input id="post_details" type="text" class="form-control" name="post_details" value="{{ old('post_details') }}" autofocus>

                                @if ($errors->has('post_details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment_title') ? ' has-error' : '' }}">
                            <label for="comment_title" class="col-md-4 control-label">Comment Title</label>

                            <div class="col-md-6">
                                <input id="comment_title" type="text" class="form-control" name="comment_title" value="{{ old('comment_title') }}" autofocus>

                                @if ($errors->has('comment_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment_details') ? ' has-error' : '' }}">
                            <label for="comment_details" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="comment_details" type="text" class="form-control" name="comment_details" value="{{ old('comment_details') }}" autofocus>

                                @if ($errors->has('comment_details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment_details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="submitRegistration">Register</button>
                                <a type="reset" class="btn btn-danger" id="canelRegistration" href="{{ route('home') }}">Cancel</a>
                                <a type="submit" class="btn btn-success" id="displayRegistration" href="{{ route('my-display') }}">Display</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
