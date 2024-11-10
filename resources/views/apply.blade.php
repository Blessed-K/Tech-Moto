<!Doctype html>
<html>
    <head>
        <title>Apply</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/" href="{{asset('logo/logo.jpg')}}">
    </head>
    <body>
    @include('sweetalert::alert')  
    <div class="row">
        <div class="col-sm-4"></div>
                <div class="col-sm-4">
            <div class="box box-solid box-success">
                <div class="box-header " style="background-color:#2aa15f;">
                
                            <h3 style="color:white;">Apply</h3>
                        
                </div>
                  <!--Box body-->
                  <div class="box-body">
                      <form method="POST" action="{{route('apply.create')}}">
                      @csrf

                          <!--first name-->
                          <label>First Name</label>
                         <div class="form-input">
                             <input type="text" class="form-control" name="firstname">
                         </div>
                    

                         <!--other names--> 
                         <label>Other names</label>
                         <div class="form-input">
                             <input type="text" class="form-control" name="other_name">
                         </div>

                         <!--gender-->
                         <div class="form-input">
                             <label>Gender</label>
                         <select class="form-control" name="gender">
                         <option value="">Select Gender</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         </select>
                            </div>

                            <!--email-->
                            <div class="form-input">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <!--date of birth-->
                            <div class="form-input">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                            </div>

                            <!--number-->
                            <div class="form-input">
                                <label>phone Number</label>
                                <input type="number" class="form-control" name="phone">
                            </div>

                            <!--speciality-->
                            <div class="form-input">
                                <label>Speciality</label>
                                <select class="form-control" name="speciality" >
                                    <option value="">Select Speciality</option>
                                    <option value="Software dev">Software dev</option>
                                    <option value="H.R relaions">H.R relaions</option>
                                    <option value="Finance manager">Finance manager</option>
                                    <option value="Social media manage">Social media manager</option>
                                 </select>
                            </div>
                                
                            <div class="form-input">
                                <button type="submit" name="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                      </form>
                  </div>
                    <!--end of box body-->
            </div>
        </div></div>

</div> 
<div class="col-sm-4"></div>         
    </body>
</html>
    