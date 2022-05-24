<?php
    $page_title = "Appointment Details";
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
        
        <div class="container mt-5" align="left" style="margin-top: 0px;">
        <h1 align="center"><span style="font-size: 25px;">APPOINTMENT DETAILS</span></h1>
    

            <div class="col-md-12 mb-3">
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
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Customer Name</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Email ID</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Mobile</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Doctor Name</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Date</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Message</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red">Status</th>
                            <th style="padding: 20px; text-align: center; border: 2px solid red" colspan="3">Action</th>
                        </tr>
                        @foreach($data as $dt)
                        <tr style="background-color: white; color: black;">
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->name}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->email}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->phone}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->doctor}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->date}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->message}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">{{$dt->status}}</td>
                            <td style="padding: 5px; text-align: center; border: 2px solid red">
                            <a href="{{url('approved')}}/{{$dt->id}}" class="btn btn-success">Approved</a>
                            </td>
                            <td style="padding: 20px; text-align: center; border: 2px solid red">
                            <a href="{{url('canceled')}}/{{$dt->id}}" class="btn btn-danger">Cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
</div>  
</div>
        </div>
    </div>

    <!-- container-scroller -->
    
        @include('admin.script')

  </body>
</html>
