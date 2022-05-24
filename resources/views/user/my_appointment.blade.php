<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>My Appointment - HPM</title>

  <link rel="icon" type="image/x-icon" href="topicon.jfif" />

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body id="home">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="h4 text-primary">HOSPITAL MANAGEMENT SYSTEM</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link mr-3" href="{{url('')}}">Home</a>
            </li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link ml-4" style="background-color: lightgreen; color: white;" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>

            </x-app-layout>

            @else


            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div> <!-- .container -->
    </nav>
  </header>


  <div align="center" style="padding: 70px;">

      <div class="col-md-6 mb-3" align="left">          
        @if(session()->has('success'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">X</button>
              {{session()->get('success')}}
          </div>
        @endif
      </div>

      <table style="border: 2px solid black;">
          <tr style="background-color: black;">
              <th style="padding: 10px; text-align: center; font-size: 20px; color: white;">Doctor Name</th>
              <th style="padding: 10px; text-align: center; font-size: 20px; color: white;">Date</th>
              <th style="padding: 10px; text-align: center; font-size: 20px; color: white;">Message</th>
              <th style="padding: 10px; text-align: center; font-size: 20px; color: white;">Status</th>
              <th style="padding: 10px; text-align: center; font-size: 20px; color: white;">Action</th>
          </tr>
          @foreach($appoints as $appoint)
          <tr>
              <td style="padding: 10px; font-size: 15px; border: 2px solid black;">{{$appoint->doctor}}</td>
              <td style="padding: 10px; font-size: 15px; border: 2px solid black;">{{$appoint->date}}</td>
              <td style="padding: 10px; font-size: 15px; border: 2px solid black;">{{$appoint->message}}</td>
              <td style="padding: 10px; font-size: 15px; border: 2px solid black;">{{$appoint->status}}</td>
              <td style="padding: 10px; font-size: 15px; border: 2px solid black;">
              <a href="{{url('appointment-delete')}}/{{$appoint->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to cancel this...!')">CANCEL</a>
              </td>
          </tr>
          @endforeach
      </table>
  </div>

  <!-- <footer class="page-footer" id="contact">
    <div class="container">
      <div class="row px-md-3">
               <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">No: 10, Nehru St, Lakshmi Nagar, Sholinganallur, Chennai, Tamil Nadu - 600 119</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

        </div>
      </div>

      <hr>

      <p id="copyright" align="center" class="mt-2">Copyright &copy; 2022. <span style="color: skyblue;"> Hospital Management System</span></p>
    </div>
  </footer> -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

