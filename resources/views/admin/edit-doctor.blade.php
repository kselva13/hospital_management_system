<?php
    $page_title = "Update Doctor Details";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="admin/assets/images/ftopicon.jfif" />

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      
    <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
        
        <div class="container " align="left" style="padding-top: 2px; margin-top: 1px;">

        <div class="mt-1 mb-1">
        <h1 class="mt-5"><span style="font-size: 25px; padding-top: 2px;">Update Doctor Details</span></h1>
    </div>

            <div class="col-md-6 mt-2 mb-3">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                        
                      <strong>Hey!</strong> {{session()->get('message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                @endif
            </div>
            
            <form action="{{url('update-doctor', $data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">
                    <img src="doctorimage/{{$data->image}}" alt="doctor image" height="100" width="100">
                </div>

                <div style="padding: 15px;">
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}" id="name" style="color: black;" pattern="[a-zA-Z .]{5,30}" minlength="5" maxlength="30" title="Enter a Valid Doctor Name" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{$data->phone}}" id="phone" style="color: black;" pattern="[6-9]\d{9}" minlength="10" maxlength="10" title="Enter a Valid Phone Number" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Speciality</label>
                    <select name="speciality" id="" style="color: black; width: 220px;" title="Select Doctor Speciality" required>
                        <option value="">--Select--</option>
                        <option value="Skin Specialist" {{$data->speciality == "Skin Specialist" ? 'selected' : ''}}>Skin</option>
                        <option value="Heart Specialist" {{$data->speciality == "Heart Specialist" ? 'selected' : ''}}>Heart</option>
                        <option value="Eye Specialist" {{$data->speciality == "Eye Specialist" ? 'selected' : ''}}>Eye</option>
                        <option value="Ear Specialist" {{$data->speciality == "Ear Specialist" ? 'selected' : ''}}>Ear</option>
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="">Room No</label>
                    <input type="text" name="room" value="{{$data->room}}" id="name" style="color: black;" pattern="[0-9]{1,3}" minlength="1" maxlength="3" title="Enter a Valid Room Number" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Change Doctor Image</label>
                    <input type="file" name="file" id="file" title="Select Doctor Image">
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success" value="UPDATE">
                </div>
            </form>

        </div>

    </div>

    
    <!-- container-scroller -->
    
    @include('admin.script')

  </body>
</html>
