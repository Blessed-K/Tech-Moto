@extends('layouts.backend')

@section('content')
<section class="container">
    <div class="row">
        <!--col for tables-->
        <div class="col-sm-11"><br>
            <!--box for employees-->
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3>
                            <i class="fa fa-users"></i>Employees
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
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->firstname}} {{$employee->other_name}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->dob}}</td>
                                    <td>{{$employee->speciality}}</td>
                                    <td>
                                        <a href="{{route('employee.delete', $employee->id)}}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>Relieve
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