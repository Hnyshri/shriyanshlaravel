@extends('layouts.app')
@section('my')
    sdeadsasd
    @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Display Data</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('my-update',$user->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>

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
                                <input id="name" type="text" class="form-control" name="age" value="{{ $user->age }}" autofocus>

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
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ $user->dob }}" autofocus>

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
                                    <label><input id="gender" type="radio"  name="gender" value="{{ $user->gender }}" autofocus checked>Male</label>
                                    <label><input id="gender" type="radio"  name="gender" value="{{  $user->gender }}" autofocus>Female</label>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" >

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
                                <input id="mobileNumber" type="number" maxlength="10" class="form-control" name="mobileNumber" value="{{ $user->mobileNumber }}" autofocus>

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
                                <input id="address" type="text" class="form-control" value="{{ $user->address }}" name="address" autofocus>

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
                                <input id="city" type="text" class="form-control" value="{{ $user->city }}" name="city" autofocus>

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
                                <input id="pinCode" type="number" maxlength="6" value="{{ $user->pinCode }}" class="form-control" name="pinCode" autofocus>

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
                                <input id="cityState" type="text" class="form-control" value="{{ $user->cityState }}" name="cityState" autofocus>

                                @if ($errors->has('cityState'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cityState') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fileName') ? ' has-error' : '' }}">
                            <label for="fileName" class="col-md-4 control-label">File Upload</label>

                            <div class="col-md-6">
                                <input id="fileName" type="text" class="form-control" value="{{ $user->fileName }}" name="fileName" autofocus>

                                @if ($errors->has('fileName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fileName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="submitRegistration">Update Data</button>
                                <a type="reset" class="btn btn-danger" id="canelRegistration" href="{{ route('my-display') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
