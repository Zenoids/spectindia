@extends('layouts.app')
@section('title','Contact Us || SPECT FOUNDATION INDIA')
@section('content')
    <div class="   container-fluid ">
    <div class=" d-flex flex-column text-center bg-light justify-content-center  py-5 row">
      <div class="col-1 col-lg-3"></div>
  <div class="col-10 col-lg-6 bg-white rounded shadow mx-auto pt-5 mt-5"> 
      <div class="row title mx-auto  ">
        <h2>Contact Us</h2>
      </div>
      <hr>
      <div class="row para ">
        <p class="text-center w-responsive mx-auto pb-5">Get in Touch with SPECT India: Empowering Change Through Socio-Political Insights</p>
  
      </div>
      <div class="row col-12 col-lg-10 mx-auto">
         <!--Google map-->
         <div id="map-container-section" class="w-100 pb-4" style="position: relative; padding-bottom: 50%; height: 400px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56035.66696556256!2d77.12672747651266!3d28.62289245105144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2daa9eb4d0b%3A0x717971125923e5d!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1692278649546!5m2!1sen!2sin" width="800" height="400" style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  
        <div class="row para mt-4 mx-auto">
          <div class="col-lg-4  ">
            <div class="shadow rounded my-3 card p-3"><h3 >Mail us <i class="fas fa-envelope"></i></h3>
            <p>info@spectindia.com</p></div>
          </div>
          <div class="col-lg-4  ">
            <div class="shadow rounded my-3 card p-3"><h3 >Call us   <i class="fas fa-phone"></i></h3>          
  
            <p>(+91) 9000000001</p></div>
          </div>
          <div class="col-lg-4  ">
            <div class="shadow rounded my-3 card p-3"><h3 >Find us             <i class="fas fa-map-marker-alt"></i>
  </h3>
            <p>New Delhi, India</p></div>
          </div>
  
      </div>
      </div>
    </div>
  
    </div>
  
    <div class="col-1 col-lg-3"></div>
  </div>
  @endsection