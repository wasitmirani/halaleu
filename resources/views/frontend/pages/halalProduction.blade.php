@extends('layouts.master')


@section('title')
    {{ __('content.halal_production_title') }}
@endsection
@section('content')
    @component('frontend.components.breadcrumbs', [
        'active' => __('content.halal_production_title'),
        'message' => __('content.halal_production_heading'),
    ])
    @endcomponent

    <div class="about-inner bg-28 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mr50">
                        <div class="heading2 no-margin-heading ">
                            <small class="heading-top inner-heading-top">
                                <img src="assets/img/icons/hands.svg"
                                    alt="">{{ __('content.halal_production_title') }}</small>
                            <h2>{{ __('content.halal_production_heading') }}</h2>
                            <p> {{ __('content.halal_production_message_1') }}</p>
                            <p>{{ __('content.halal_production_message_2') }}</p>
                            <p>{{ __('content.halal_production_message_3') }}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-bg-main-img position-relative ml50">
                        <img src="assets/img/about/halal-food.jpg" alt="">
                        <div class="corner-right-bottom-shape2 position-absolute">
                            <img src="assets/img/shapes/shape-right-bottom2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--=====About start=======-->
    <div class="faqs-area  inner-font-1 inner-faq-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="ml50">
                        <div class="faqs">
                            <div id="faqs">


                                <div class="single-faq">
                                    <h2 class="faq-heading font-f-3 weight-700 collapsed" id="faq-heading1"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                        aria-controls="collapse1">
                                        {{ __('content.halal_requirement_title') }}
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq-heading1"
                                        data-bs-parent="#general" style="">
                                        <p class="font-f-3 weight-500">
                                            {{ __('content.halal_requirements') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="single-faq">
                                    <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading2"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                        aria-controls="collapse2">
                                        {{ __('content.halal_products_title') }}
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq-heading2"
                                        data-bs-parent="#general">
                                        <p class="font-f-3 weight-500">
                                            {{ __('content.halal_products_heading') }}
                                        </p>
                                        <p class="font-f-3 weight-500">
                                            {{ __('content.halal_products_message') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="single-faq">
                                    <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading3"
                                        data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                        aria-controls="collapse3">
                                        {{ __('content.raw_materials_title') }}
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq-heading3"
                                        data-bs-parent="#general">
                                        <p class="font-f-3 weight-500">
                                            {{ __('content.raw_materials_message') }}
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
