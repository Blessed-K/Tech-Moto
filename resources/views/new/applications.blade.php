@extends('layouts.backend')
@section('content')
<section class="container">
    <div class="row">
        <!--col for tables-->
        <div class="col-sm-11"><br>
            <!--box for Applicants-->
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3>
                            <i class="fa fa-users"></i>Applicants
                        </h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                <th>Fullname</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email Address</th>
                                <th>DOB</th>
                                <th>Speciality</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                                <tr>
                                <td>{{$application->firstname}} {{$application->other_name}}</td>
                                    <td>{{$application->gender}}</td>
                                    <td>{{$application->phone}}</td>
                                    <td>{{$application->email}}</td>
                                    <td>{{$application->dob}}</td>
                                    <td>{{$application->speciality}}</td>
                                    <td>
                                        <a href="{{route('shiftdata', $application->id)}}" class="btn btn-sm btn-success">Hire
                                          
                                        </a>
                                      </td>
                                      <td>
                                          <a href="{{route('apply.delete', $application->id)}}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>Reject
                                        </a>
                                      </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            <!--end of box-->
        </div>
    </div>

</section>
@endsection