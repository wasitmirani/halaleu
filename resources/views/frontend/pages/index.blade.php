@extends('layouts.master')


@section('title') Home @endsection
@section('content')


<!--=====Welcome start=======-->
  <div class="welcome-area welcome-2 bg5 position-relative" id="home">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="title title2 ">
            <small data-aos="fade-right" data-aos-duration="600" class="heading-top2">
            {{-- <img src="assets/img/icons/money.png" alt=""> --}}
                {{ __('content.site_title') }}
              </small>
            <h2 data-aos="fade-right" data-aos-duration="800">{{__('content.main_heading')}}</h2>
            <p data-aos="fade-right" data-aos-duration="1000">
                {{__('content.main_subheading')}}
            </p>
            <div class="space30"></div>
            <div class="btn-group" data-aos="fade-right" data-aos-duration="1200">
              <a class="theme-btn-2" href="{{route('contact')}}">
                {{__('content.est_quote')}}
              <span><i class="fa-solid fa-arrow-right"></i></span></a>
              <a class="theme-btn-3" href="{{route('contact')}}">
                {{__('content.schedule_call')}}
              <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="space80"></div>
            <div class="logo-area2" data-aos="fade-right" data-aos-duration="1400">
              <p>{{__('content.partner_message')}}</p>
              <div class="logos logos2 owl-carousel">
                <div class="single-logo">
                  <img src="{{asset('assets/img/logo/Nestle.png')}}" alt="Nestle">
                </div>
                <div class="single-logo">
                  <img src="{{asset('assets/img/logo/Nespresso.png')}}" alt="Nespresso">
                </div>
                <div class="single-logo">
                  <img src="{{asset('assets/img/logo/merck.png')}}" alt="merck">
                </div>
                <div class="single-logo">
                  <img src="{{asset('assets/img/logo/sweetly.png')}}" alt="sweetly">
                </div>
                <div class="single-logo">
                  <img src="{{asset('assets/img/logo/swiss.png')}}" alt="swiss">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="hero-img-elements" data-aos="zoom-out" data-aos-duration="800">
            <div class="hero-main-img position-relative top-right-polygon-1">
              <img class="border-radius" src="{{asset('assets/img/bg/main2.jpg')}}" alt="bg">
              <div class="corner-shape2 position-absolute">
                <img src="{{asset('assets/img/shapes/tax-shape1.png')}}" alt="shape">
              </div>
              <div class="corner-right-bottom-shape2 position-absolute">
                <img src="{{asset('assets/img/shapes/shape-right-bottom2.png')}}" alt="bottom">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="down-arrow2" data-aos="fade-down" data-aos-duration="400">
      <a href="#about"><img src="{{asset('assets/img/icons/down-arrow-black.svg')}}" alt="black"></a>
    </div>
  </div>
  <!--=====Welcome end=======-->

  <!--=====Tax business start=======-->
  <div class="tax-business section-padding2 bg6" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4 m-auto">
          <div class="heading2 white-heading text-center">
            <small data-aos="fade-up" data-aos-duration="600" class="heading-top">
            <img src="{{asset('assets/img/icons/hands.svg')}}" alt="">
            {{__('content.site_title')}}
            </small>
            <h2 data-aos="fade-up" data-aos-duration="800"><span class="heilight-left">
            {{__('content.main_heading')}}</span> </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="single-business trans-1">
            {{-- <div class="business-icon">
              <img src="{{asset('assets/img/icons/tax-business1.png')}}" alt="business">
            </div> --}}
            {{-- <h3>IRS Tax Problems</h3> --}}
            <p>{{__('content.section_message_1')}}</p>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="single-business trans-1">
            {{-- <div class="business-icon">
              <img src="{{asset('assets/img/icons/tax-business2.png')}}" alt="img">
            </div> --}}

            <p>{{__('content.section_message_2')}}</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="single-business trans-1">
            {{-- <div class="business-icon">
                <img src="{{asset('assets/img/icons/tax-business3.png')}}" alt="img">
            </div> --}}
            <p>{{__('content.section_message_3')}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Tax business end=======-->


  <!--=====About start=======-->
  <div class="about-area section-padding bg5-left">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-bg-21 mr50" data-aos="zoom-out" data-aos-duration="800">
            <div class="about-bg-main-img position-relative top-left-polygon-1">
              <img src="{{asset('assets/img/about/about21.png')}}" alt="img">
              <div class="corner-right-bottom-shape2 position-absolute">
                <img src="{{asset('assets/img/shapes/shape-right-bottom2.png')}}" alt="img">
              </div>
              <div class="corner-shape2-left position-absolute">
                <img src="{{asset('assets/img/shapes/tax-shape2.png')}}" alt="img">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="heading2 no-margin-heading ml50">
            <small data-aos="fade-left" data-aos-duration="600" class="heading-top">
            <img src="assets/img/icons/hands.svg" alt="">{{__('content.about_section_title')}}</small>
            <h3 data-aos="fade-left" data-aos-duration="800">{{__('content.about_section_heading')}}.</h3>
            <p data-aos="fade-left" data-aos-duration="1000">
            {{__('content.about_section_message_1')}}
            </p>
            <p data-aos="fade-left" data-aos-duration="1000">   {{__('content.about_section_message_2')}}</p>
            <div class="space50"></div>
            <div class="button-group" data-aos="fade-left" data-aos-duration="1200">
              <a class="theme-btn-2" href="{{route('about')}}">{{__('content.about_button')}} <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====About end=======-->











@endsection
