@extends('layouts.master')


@section('title')  {{__('content.about_section_title')}} @endsection
@section('content')

@component('frontend.components.breadcrumbs',['active'=>__('content.about_section_title'),'message'=>__('content.about_section_heading')])

@endcomponent
<div class="about-inner bg-28 section-padding">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="mr50">
            <div class="heading2 no-margin-heading ">
              <small class="heading-top inner-heading-top">
              <img src="assets/img/icons/hands.svg" alt="">{{__('content.about_section_title')}}</small>
              <h2>{{__('content.about_section_heading')}}</h2>
              <p> {{__('content.about_section_message_1')}}</p>
              <p>{{__('content.about_section_message_2')}}</p>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-bg-main-img position-relative ml50">
            <img src="assets/img/about/about23.png" alt="">
            <div class="corner-right-bottom-shape2 position-absolute">
              <img src="assets/img/shapes/shape-right-bottom2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--=====About start=======-->
  <div class="about-area  bg5">
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
@endsection
