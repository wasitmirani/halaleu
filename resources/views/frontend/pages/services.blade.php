@extends('layouts.master')


@section('title') {{__('content.services_title')}} @endsection
@section('content')

@component('frontend.components.breadcrumbs',['active'=>__('content.services_title') ,'message'=>''])

@endcomponent


<div class="service-inner-1 section-padding2 inner-font-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="heading2 text-center">
            <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="">
                {{__('content.services_title')}}</small>
            <h2>{{__('content.services_heading')}}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">


            <p>{{__('content.services_message_1')}}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">

            <p>{{__('content.services_message_2')}}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">

            <p>{{__('content.services_message_3')}}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">

            <p>{{__('content.services_message_4')}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
