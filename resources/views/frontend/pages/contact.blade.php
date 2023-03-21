@extends('layouts.master')

@section('title')
Contact

@endsection
@section('content')

@component('frontend.components.breadcrumbs',['active'=>'Contact Us','message'=>''])

@endcomponent

<div class="contact-boxes">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-4">
          <div class="single-contact-box">
            <div class="contact-box-icon">
              <img src="assets/img/icons/contact-1.svg" alt="">
            </div>
            <div class="contact-box-content">
              <p class="font-f-3">CALL US</p>
              <a class="font-f-3" href="tel:+11 1111 11000">+11 1111 11000</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="single-contact-box">
            <div class="contact-box-icon">
              <img src="assets/img/icons/contact-2.svg" alt="">
            </div>
            <div class="contact-box-content">
              <p class="font-f-3">EMAIL US</p>
              <a class="font-f-3" href="mailto:info@halalcs.eu">info@halalcs.eu</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="single-contact-box">
            <div class="contact-box-icon">
              <img src="assets/img/icons/contact-3.svg" alt="">
            </div>
            <div class="contact-box-content">
              <p class="font-f-3">Our Office Address</p>
              <a class="font-f-3" href="#">Cesar-Stünzi-Strasse 13
                79618 Rheinfelden
                Germany</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="main-contact-form section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="heading2 mr50">
            <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="">Our Success in Numbers</small>
            <h2>Let’s Work Together</h2>
            <p>Share your vision for your next projects with us now. Please contact us for basic questions. we’re here to help! </p>
          </div>
        </div>
        <div class="col-lg-8">
            @component('frontend.components.contactform')

            @endcomponent
        </div>
      </div>
    </div>
  </div>

  <div class="office-area section-padding2 bg-13 inner-font-1 _relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="heading2 text-center">
            <small class="heading-top inner-heading-top">
            <h2>Our Office</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-office">
            <div class="office-icon">
              <img src="assets/img/icons/telegram.png" alt="">
            </div>
            <h3>
              <a href="#">Germany Office</a>
            </h3>
            <p>Cesar-Stünzi-Strasse 13 79618 Rheinfelden Germany</p>
            <a href="#" class="theme-btn-13">Get Direction <img src="assets/img/icons/arrow-up-right-inner-1.svg" alt=""></a>
          </div>
        </div>


   
      </div>
    </div>
    <div class="shape-007">
      <img src="assets/img/shapes/shape007.svg" alt="">
    </div>
  </div>
@endsection
