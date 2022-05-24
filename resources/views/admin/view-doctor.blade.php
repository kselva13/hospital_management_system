<?php
    $page_title = "Doctor Details";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="admin/assets/images/ftopicon.jfif" />

        @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      
    <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

    <!-- partial -->

        @include('admin.navbar')

    <!-- partial -->
    

    <div class="container-fluid page-body-wrapper">
        
        <div class="container mt-5 justify-content-center" align="center" style="margin-top: 0px;">
        <h1 align="center"><span style="font-size: 25px;">DOCTOR DETAILS</span></h1>
    

            <div class="col-md-12 mt-5 mb-3">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                        
                      <strong>Hey!</strong> {{session()->get('message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                @endif
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive">
                        <tr style="background-color: skyblue; color: black;">
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Doctor Name</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Mobile</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Specialist</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Room Number</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Image</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red" colspan="2">Action</th>
                        </tr>
                        @foreach($data as $dt)
                        <tr style="background-color: white; color: black;">
                            <td style="padding: 20px; text-align: center; border: 2px solid red">{{$dt->name}}</td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">{{$dt->phone}}</td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">{{$dt->speciality}}</td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">{{$dt->room}}</td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">
                                <img src="doctorimage/{{$dt->image}}" height="100px" width="100px" alt="">
                            </td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">
                            <a href="{{url('edit-doctor',$dt->id)}}" class="btn btn-success">Update</a>
                            </td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">
                            <a href="{{url('delete-doctor',$dt->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this...!')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

</div>  
</div>

    <!-- container-scroller -->
    
        @include('admin.script')

  </body>
</html>
