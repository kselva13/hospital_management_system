<?php
    $page_title = "Email View";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">

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
        
        <div class="container " align="left" style="padding-top: 2px; margin-top: 1px;">

        <div class="mt-1 mb-5">
        <h1 class="mt-5"><span style="font-size: 25px; padding-top: 2px;">Send Email Appointment</span></h1>
    </div>

            <div class="col-md-6 mt-2 mb-3">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                        
                      <strong>Hey!</strong> {{session()->get('message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                @endif
            </div>
            
            <form action="{{url('sendemail',$data->id)}}" method="post">

                @csrf

                <div style="padding: 15px;">
                    <label for="">Greeting</label>
                    <input type="text" name="greeting" id="name" style="color: black;" title="Enter a Greeting" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Body</label>
                    <input type="text" name="body" id="phone" style="color: black;" title="Enter a message" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Action Text</label>
                    <input type="text" name="actiontext" id="name" style="color: black;" title="Enter an action text" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Action Url</label>
                    <input type="text" name="actionurl" id="name" style="color: black;" title="Enter an action url" required>
                </div>
                <div style="padding: 15px;">
                    <label for="">End Part</label>
                    <input type="text" name="endpart" id="name" style="color: black;" title="Enter an end part" required>
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success" value="SEND EMAIL">
                </div>
            </form>

        </div>

    </div>

        

    <!-- container-scroller -->
    
        @include('admin.script')

  </body>
</html>
