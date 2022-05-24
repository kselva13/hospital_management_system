<?php  
$page_title = "Admin Dashboard";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="../topicon.jfif" />

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
    <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        @include('admin.body')

    <!-- container-scroller -->
    
    @include('admin.script')

  </body>
</html>
