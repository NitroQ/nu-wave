@extends('template.main')

@section('css')
<style>
    #article-img{
        height: 250px;
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 5px;
    }
    .h-b{
        color: #1F4E79;
    }
@media (min-width: 976px) {
    #banner{
        height: 40vh;
        background-size: cover;
        background-image: linear-gradient(to bottom, rgb(31, 78, 121, 0.7),#FFFFFF), url('/images/nu-manila.png');
        background-position: center;
    }
}
@media  (max-width: 975px) {
    #banner{
        height: 20vh;
        background-size: cover;
        background-image: linear-gradient(to bottom,rgb(31, 78, 121, 0.7),#FFFFFF), url('/images/nu-manila.png');
        background-position: center;
    }
}


h6 {
      font-family: 'Montserrat';
      font-size: 15px;
}
</style>


@endsection

@section('main-content')
<div class="container-fluid">
  <div class="row justify-content-center align-items-center" id="banner">
      <div class="col-lg-6 text-center">
          <h1 class=" mt-5 h-b display-3 text-light">Contact us</h1>
     </div>
  </div>
</div>

    <div class="container">
      <div class="container py-3 my-5 px-5">
        <div class="row g-5 align-items-center justify-content-center">
          <div class="col-lg-7">
              <div class="container border border-3 rounded-5 text-center p-5">
                <h2 class="h-b">Have any questions? We'd love to hear from you!</h2>
                    <div class="row mt-4">
                        <input class="form-control" type="text" placeholder="Your Name" aria-label="default input example">
                    </div>
                    <div class="row mt-2">
                        <input class="form-control" type="text" placeholder="Email" aria-label="default input example">
                    </div>
                    <div class="row mt-2">
                        <textarea class="form-control" type="text" placeholder="Comments" rows="10"></textarea>
                    </div>
                    <div class="row mt-2">
                        <button type="button" class="btn btn-lg  background-blue" id="submitMsg">Send Message</button>
                    </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="container text-center py-5 ">
                  <div class="row">
                      <div class="col-lg-4 mb-3">
                        <h1 class="display-5"><i class="bi bi-geo-alt-fill"></i></h1>
                      </div>
                      <div class="col-lg-6">
                        <h6 class="text-break"><b>551 M.F. Jhocson St., <br> Sampaloc, Manila, PH 1008</b></h6>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-lg-4 mt-2">
                        <h1 class="display-5"><i class="bi bi-telephone-fill"></i></h1>
                      </div>
                        <div class="col-lg-6 mt-3">
                        <h6 class="text-break"><b>(+632) 8712-1900</b></h6>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-lg-4 mt-4">
                      <h1 class="display-5"><i class="bi bi-envelope-fill"></i></h1>
                    </div>
                      <div class="col-lg-6 mt-3">
                        <h6 class="text-break"><b>centie@national-u.edu.ph</b> <br>Monday-Friday<br>8:00 AM - 5:00 PM (GMT+8)</h6>
                    </div>
                  </div>

                  <hr>
                  <div class="row mt-5">
                    <h1 class="h-b">Socials</h1>
                    <h2><i class="bi bi-facebook"></i> <i class="bi bi-messenger"></i> <i class="bi bi-youtube"></i></h2>
                  </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
@endsection