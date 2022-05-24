<div class="main-panel">
    <div class="mt-3 mb-3">
        <h1 class="mt-2"><span style="font-size: 30px; padding: 50px;">ADMIN DASHBOARD</span></h1>
    </div>
    <div class="col-md-12 mt-3 mb-3">
                @if(session()->has('success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">X</button>
                      {{session()->get('success')}}
                  </div>
                @endif
            </div>
          <div class="content-wrapper bg-white">
            <div class="col-md-12 mt-5">
            <div class="row">
              <div class="col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-success">
                    <div class="row">
                      <h6 class="h3 font-weight-normal text-white mt-4">LOGIN REGISTER</h6>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="h4 mt-3">TOTAL : {{ $users }}</h3>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-success">
                    <div class="row">
                      <h6 class="h3 font-weight-normal text-white mt-4">DOCTOR REGISTER</h6>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="h4 mt-3">TOTAL : {{ $doctor }}</h3>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-success">
                    <div class="row">
                      <h6 class="h3 font-weight-normal text-white">APPOINTMENT REGISTER</h6>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="h4 mt-3">TOTAL : {{ $appointment }}</h3>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer bg-white"> -->
            <!-- <div class="d-sm-flex justify-content-center bg-dark text-black"> -->
              <!-- <span class="text-muted h4 text-dark text-center text-sm-center " style="padding: 20px;">Copyright © 2022. HOSPITAL MANAGEMENT SYSTEM</span> -->
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span> -->
            <!-- </div> -->
          <!-- </footer> -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>