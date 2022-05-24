<div class="page-section" id="appointment">
    <div class="container">
      <h1 class="text-center wow fadeInUp h1">Make an Appointment</h1>
            
      <form class="main-form" action="{{url('doctor_appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="col-md-12 py-2" placeholder="Full name" pattern="[a-zA-Z .]{5,30}" minlength="5" maxlength="30" title="Enter a Valid Name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="col-md-12 py-2" placeholder="Email address.." pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,4}" maxlength="50" title="Enter a Valid Email Address" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="col-md-12 py-1" title="Select Appointment Date" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="col-md-12 py-2" required>
              <option value="">---Select Doctor---</option>              
              @foreach($doctor as $dr)
                <option value="{{$dr->name}} - {{$dr->speciality}}">{{$dr->name}} - {{$dr->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="col-md-12 py-2" placeholder="Number.." pattern="[6-9]\d{9}" minlength="10" maxlength="10" title="Enter a Valid Phone Number" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="col-md-12 py-2" rows="6" placeholder="Enter message.." title="Enter a message" required></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" name="save">Submit Request</button>
          </div>
        </div>
      </form>
    </div>
  </div>