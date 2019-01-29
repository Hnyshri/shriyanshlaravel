@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h1><center>User Profile Data</center></h1>

                        <table class="table table-striped table-hover table-reflow users">
                            <thead>
                                <tr>
                                    <th ><strong> ID: </strong></th>
                                    {{--<th ><strong> Icon: </strong></th>--}}
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.users').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('ajaxdata.getdata') }}",
                "columns":[
                    { "data": "id" },
//                    { "data": "fileName" },
                    { "data": "name" },
                    { "data": "age" },
                    { "data": "dob"},
                    { "data": "gender" },
                    { "data": "email" },
                    { "data": "mobileNumber" },
                    { "data": "address" },
                    { "data": "city" },
                    { "data": "pinCode" },
                    { "data": "cityState" }

                ]
            });
        });
    </script>
</div>
@endsection
