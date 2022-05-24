<?php
    $page_title = "Add Doctor Details";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="admin/assets/images/ftopicon.jfif" />

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

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
        
        <div class="container" align="left" style="padding-top: 2px; margin-top: 1px;">

        <div class="mt-1 mb-5">
        <h1 class="mt-5"><span style="font-size: 25px; padding-top: 2px;">Add Doctor</span></h1>
    </div>

            <div class="col-md-6 mt-2 mb-3">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                        
                      <strong>Hey!</strong> {{session()->get('message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                @endif
            </div>
            
            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" id="name" style="color: black;" pattern="[a-zA-Z .]{5,30}" minlength="5" maxlength="30" title="Enter a Valid Doctor Name" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="phone" style="color: black;" pattern="[6-9]\d{9}" minlength="10" maxlength="10" title="Enter a Valid Phone Number" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Speciality</label>
                    <select name="speciality" id="" style="color: black; width: 220px;" title="Select Doctor Speciality" required>
                        <option value="">--Select--</option>
                        <option value="Skin Specialist">Skin</option>
                        <option value="Heart Specialist">Heart</option>
                        <option value="Eye Specialist">Eye</option>
                        <option value="Ear Specialist">Ear</option>
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="">Room No</label>
                    <input type="text" name="room" id="name" style="color: black;" pattern="[0-9]{1,3}" minlength="1" maxlength="3" title="Enter a Valid Room Number" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Doctor Image</label>
                    <input type="file" name="file" id="file" title="Select Doctor Image" required>
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success" value="SAVE">
                </div>
            </form>

        </div>

    </div>

        

    <!-- container-scroller -->
    
        @include('admin.script')

  </body>
</html>
