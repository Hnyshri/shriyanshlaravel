@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Display Data</div>

                <div class="panel-body">
                        <h1><center>User Profile Data</center></h1>

                        <table class="table table-striped table-hover table-reflow">
                            <thead>
                            <tr>
                                <th ><strong> ID: </strong></th>
                                <th ><strong> Icon: </strong></th>
                                <th ><strong> Name: </strong></th>
                                <th ><strong> Age: </strong></th>
                                <th ><strong> Date Of Birth: </strong></th>
                                <th ><strong> Gender: </strong></th>
                                <th ><strong> Email: </strong></th>
                                <th ><strong> Mobile: </strong></th>
                                <th ><strong> Address: </strong></th>
                                <th ><strong> City: </strong></th>
                                <th ><strong> Pin Code: </strong></th>
                                <th ><strong> State: </strong></th>


                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>

                            @foreach($user as $row)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img class="imageIcon" src="{{ env('Storage_path') }}{{ $row->fileName }}"></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->age}}</td>
                                    <td>{{$row->dob}}</td>
                                    <td>{{$row->gender}}</td>
                                    <td>{{substr($row['email'],0,8)}}</td>
                                    <td>{{$row->mobileNumber}}</td>
                                    <td>{{substr($row['address'],0,5)}}</td>
                                    <td>{{$row->city}}</td>
                                    <td>{{$row->pinCode}}</td>
                                    <td>{{$row->cityState}}</td>
                                    <td>
                                        <a  class="btn btn-primary" href="{{ route('my-edit',$row->id) }}">Edit</a>
                                    <td>
                                        <form action="{{ route('my-delete',$row->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="delete">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <a type="submit" class="btn btn-success" id="displayRegistration" href="{{ route('home') }}">Home</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
