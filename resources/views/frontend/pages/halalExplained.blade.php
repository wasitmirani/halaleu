@extends('layouts.master')


@section('title')
    {{ __('content.halal_explained_title') }}
@endsection
@section('content')
    @component('frontend.components.breadcrumbs', [
        'active' => __('content.halal_explained_title'),
        'message' => __('content.halal_explained_heading'),
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
                                    alt="">{{ __('content.halal_explained_title') }}</small>
                            <h2>{{ __('content.halal_explained_heading') }}</h2>
                            <p> {{ __('content.halal_explained_message_1') }}</p>
                            <p>{{ __('content.halal_explained_message_2') }}</p>
                            <p>{{ __('content.halal_explained_message_3') }}</p>

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
    <div class="faqs-area  inner-font-1 inner-faq-1">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-12 d-none d-lg-block">
                <div class="ml50">
                    <div class="faqs">
                      <div id="faqs">


                        <div class="single-faq" >
                            <h2 class="faq-heading font-f-3 weight-700 collapsed" id="faq-heading1"
                                data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                aria-controls="collapse1">
                                {{ __('content.what_is_halal_title') }}
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse"
                                aria-labelledby="faq-heading1" data-bs-parent="#general" style="">
                                <p class="font-f-3 weight-500">
                                    {{ __('content.what_is_halal_message_1') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.what_is_halal_message_2') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.what_is_halal_message_3') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.what_is_halal_message_4') }}
                                </p>
                            </div>
                        </div>
                        <div class="single-faq">
                            <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading2"
                                data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                aria-controls="collapse2">
                                {{ __('content.important_terms_title') }}
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse"
                                aria-labelledby="faq-heading2" data-bs-parent="#general">
                                <p class="font-f-3 weight-500">
                                    {{ __('content.important_terms_message_1') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.important_terms_message_2') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.important_terms_message_3') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.important_terms_message_4') }}
                                </p>
                                <p class="font-f-3 weight-500">
                                    {{ __('content.important_terms_message_5') }}
                                </p>
                            </div>
                        </div>

                        <div class="single-faq">
                            <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading3"
                                data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                aria-controls="collapse3">
                                {{ __('content.glossary_title') }}
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse"
                                aria-labelledby="faq-heading3" data-bs-parent="#general">
                                <p class="font-f-3 weight-500">
                                    {{ __('content.glossary_message') }}
                                </p>
                            </div>
                        </div>
                        <div class="single-faq">
                            <h2 class="faq-heading collapsed font-f-3 weight-700" id="faq-heading4"
                                data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                aria-controls="collapse4">
                                {{ __('content.noble_intention_title') }}
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse"
                                aria-labelledby="faq-heading4" data-bs-parent="#general">
                                <p class="font-f-3 weight-500">
                                    {{ __('content.noble_intention_message') }}
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
