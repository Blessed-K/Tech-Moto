@extends('layouts.backend')

@section('content')
<section class="content">
   <!--row 1-->    
<div class="row">
    <!--col 1-->
        <div class="col-sm-6">
            <div class="box box-solid box-success">
                <div class="box-header"><h2>Employees</h2></div>
                <div class="box-body">
                    <!--info box-->
                    <div class="info-box">
                        <span class="info-box-icon bg-orange">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </span>
                        <!--info-box-content-->
                        <div class="info-box-content">
                            <span class="info-box-text">Employees</span>
                            <span class="info-box-number">20</span>
                            <a href="{{route('employees.index')}}">View details</a>
                        </div>
                        <!--end of info box content-->
                    </div>
                    <!--end of info box-->
                </div>
            </div>
        </div>
        <!--end of col 1-->

        <!--col 2-->
        <div class="col-sm-6">
            <div class="box box-solid box-success">
                <div class="box-header"><h2>Applicants</h2></div>
                <div class="box-body">
                    <!--info box-->
                    <div class="info-box">
                        <span class="info-box-icon bg-orange">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </span>
                        <!--info-box-content-->
                        <div class="info-box-content">
                            <span class="info-box-text">Applicants</span>
                            <span class="info-box-number">30</span>
                            <a href="{{route('new.applications')}}">View details</a>
                        </div>
                        <!--end of info box content-->
                    </div>
                    <!--end of info box-->
                </div>
            </div>
        </div>
        <!--end of col 2-->
        

    </div>
<!--end of row 1-->
</section>
@endsection
