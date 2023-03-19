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
              <a class="theme-btn-2" href="#">
                {{__('content.est_quote')}}
              <span><i class="fa-solid fa-arrow-right"></i></span></a>
              <a class="theme-btn-3" href="#">
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
            <div class="business-icon">
              <img src="{{asset('assets/img/icons/tax-business1.png')}}" alt="business">
            </div>
            {{-- <h3>IRS Tax Problems</h3> --}}
            <p>{{__('content.section_message_1')}}</p>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="single-business trans-1">
            <div class="business-icon">
              <img src="{{asset('assets/img/icons/tax-business2.png')}}" alt="img">
            </div>

            <p>{{__('content.section_message_2')}}</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="single-business trans-1">
            <div class="business-icon">
                <img src="{{asset('assets/img/icons/tax-business3.png')}}" alt="img">
            </div>
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

  <!--=====About start=======-->
  <div class="about-area section-padding bg5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 d-none d-lg-block">
          <div class="mr50">
            <div class="heading2 no-margin-heading">
              {{-- <small data-aos="fade-right" data-aos-duration="600" class="heading-top">
              <img src="{{asset('assets/img/icons/hands.svg')}}" alt="">
                    {{__('content.main_title')}}
                </small> --}}
              {{-- <h2 data-aos="fade-right" data-aos-duration="800">
                    {{__('content.about_title')}}
              </h2> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-12 d-none  d-lg-block">
            <div class="faq-items" id="masonry-grid" >
                <div class="mesonry-item general single-price-list" style="position: absolute; left: 0px; top: 0px;">
                  <div class="faqs inner-faq">
                    <div id="general">
                      <div class="single-faq">
                        <h2 class="faq-heading font-f-3 weight-700 collapsed" id="faq-heading1" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                          {{__('content.history_title')}}
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq-heading1" data-bs-parent="#general" style="">
                          <p class="font-f-3 weight-500">
                            {{__('content.history_message_1')}}
                          </p>
                          <p class="font-f-3 weight-500">
                            {{__('content.history_message_2')}}
                          </p>
                        </div>
                      </div>
                      <div class="single-faq">
                        <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading2" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                         {{__('content.mission_title')}}
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq-heading2" data-bs-parent="#general">
                          <p class="font-f-3 weight-500">
                          {{__('content.mission_message_1')}}
                          </p>
                          <p class="font-f-3 weight-500">
                            {{__('content.mission_message_2')}}
                            </p>
                            <p class="font-f-3 weight-500">
                                {{__('content.mission_message_3')}}
                            </p>
                            <p class="font-f-3 weight-500">
                                {{__('content.mission_message_4')}}
                            </p>
                        </div>
                      </div>
                      <div class="single-faq">
                        <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading3" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                         {{__('content.objectives_title')}}
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq-heading3" data-bs-parent="#general">
                          <p class="font-f-3 weight-500">
                            {{__('content.objectives_message_1')}}
                          </p>
                          <p class="font-f-3 weight-500">
                            {{__('content.objectives_message_2')}}
                          </p>
                          <p class="font-f-3 weight-500">
                            {{__('content.objectives_message_3')}}
                          </p>
                          <p class="font-f-3 weight-500">
                            {{__('content.objectives_message_4')}}
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>









              </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====About end=======-->

  <!--=====Case study start=======-->
  <div class="case-study-1 section-padding bg6">
    <div class="container">
      <div class="row">
        <div class="col-md-4 m-auto">
          <div class="heading2 white-heading text-center">
            <small data-aos="fade-up" data-aos-duration="600" class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here For Your Tax
              Relief.</small>
            <h2 data-aos="fade-up" data-aos-duration="800"><span class="heilight-left">Consultia</span> tax is built for small business.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="case-studes owl-carousel" data-aos="fade-up" data-aos-duration="1200">
            <div class="single-case-study">
              <div class="case-study-img">
                <img src="assets/img/case-study/casestudy1.jpg" alt="">
              </div>
              <div class="case-study-content">
                <h4>Operational Excellence</h4>
                <p>Making a mistake on your return can be costly. From missed deductions.</p>
                <a href="#" class="theme-btn-7">Check out Check Study <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            <div class="single-case-study">
              <div class="case-study-img">
                <img src="assets/img/case-study/casestudy2.jpg" alt="">
              </div>
              <div class="case-study-content">
                <h4>Analytics Consulting</h4>
                <p>Making a mistake on your return can be costly. From missed deductions.</p>
                <a href="#" class="theme-btn-7">Check out Check Study <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            <div class="single-case-study">
              <div class="case-study-img">
                <img src="assets/img/case-study/casestudy3.jpg" alt="">
              </div>
              <div class="case-study-content">
                <h4>Analytics Strategy</h4>
                <p>Making a mistake on your return can be costly. From missed deductions.</p>
                <a href="#" class="theme-btn-7">Check out Check Study <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            <div class="single-case-study">
              <div class="case-study-img">
                <img src="assets/img/case-study/casestudy3.jpg" alt="">
              </div>
              <div class="case-study-content">
                <h4>Analytics Strategy</h4>
                <p>Making a mistake on your return can be costly. From missed deductions.</p>
                <a href="#" class="theme-btn-7">Check out Check Study <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--=====Case study end=======-->





  <!--=====Testimonial start=======-->
  <div class="testimonial-area testimonial-2 position-relative bg6 section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7 m-auto">
          <div class="heading2 white-heading text-center">
            <small data-aos="fade-up" data-aos-duration="600" class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here For Your Tax
              Relief.</small>
            <h2 data-aos="fade-up" data-aos-duration="800"><span class="heilight-left">We</span> have reduced the property taxes on more than 40,000 properties
              across 10+ counties.</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">

          <div class="testimonial-sliders">

            <div class="testimonial-nav ">
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author1.jpg" alt="">
              </div>
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author2.jpg" alt="">
              </div>
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author3.jpg" alt="">
              </div>
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author4.jpg" alt="">
              </div>
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author5.jpg" alt="">
              </div>
              <div class="single-testimonial-nav">
                <img src="assets/img/testimonial/author3.jpg" alt="">
              </div>

            </div>

            <div class="slider-testimonial">

              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
              <div class="single-testimonial">
                <h5>“If your appetite is whetted, check out which tour might take your fancy, fill out the contact form or send an email so we can make an appointment. Tours are privately organised and tailor-made to suit most tastes.”</h5>
                <div class="author">
                  <a href="#">Leslie Alexander</a>
                  <p>CEO, Business Administ</p>
                </div>
              </div>
            </div>
            <div class="testimonial-arrows">
              <div class="testimonial-prev-arrow">
                <button><img src="assets/img/icons/testi-prev.svg" alt=""></button>
              </div>
              <div class="testimonial-next-arrow">
                <button><img src="assets/img/icons/testi-next.svg" alt=""></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Testimonial end=======-->


  <!--=====Blog start=======-->
  <div class="blog-area blog2 section-padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-5 m-auto">
          <div class="heading2 text-center">
            <small data-aos="fade-up" data-aos-duration="600" class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here For Your Tax
              Relief.</small>
            <h2 data-aos="fade-up" data-aos-duration="800"><span class="heilight-left">Take</span> a look at the latest articles from Consultia Tax.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="600">
          <div class="single-blog blog-md ">
            <div class="blog-img">
              <img src="assets/img/blog/blog4.png" alt="">
            </div>
            <div class="blog-contents">
              <ul class="blog-tags">
                <li><a href="#"> <img src="assets/img/icons/hands.svg" alt="">Stories</a></li>
              </ul>
              <h3><a href="single.html">How To Write Your Consulting Firm Mission Statement (& Why It’s Important).</a></h3>
              <a href="#" class="theme-btn-4">Read More <span><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="800">
          <div class="single-blog blog-md">
            <div class="blog-img">
              <img src="assets/img/blog/blog1.png" alt="">
            </div>
            <div class="blog-contents">
              <ul class="blog-tags">
                <li><a href="#"> <img src="assets/img/icons/hands.svg" alt="">Product</a></li>
              </ul>
              <h3><a href="single.html">Personal Branding For Consultants: Be Authentic To Get More Clients.</a></h3>
              <a href="#" class="theme-btn-4">Read More <span><i class="fa-solid fa-arrow-right"></i></a>
            </div>

          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
          <div class="single-blog blog-md">
            <div class="blog-img">
              <img src="assets/img/blog/blog2.png" alt="">
            </div>
            <div class="blog-contents">
              <ul class="blog-tags">
                <li><a href="#"> <img src="assets/img/icons/hands.svg" alt="">Business</a></li>
              </ul>
              <h3><a href="single.html">What Is An Entrepreneurial Consultant? (Examples & Stories).</a></h3>
              <a href="#" class="theme-btn-4">Read More <span><i class="fa-solid fa-arrow-right"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Blog end=======-->

@endsection
