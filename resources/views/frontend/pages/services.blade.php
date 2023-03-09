@extends('layouts.master')


@section('title') Services @endsection
@section('content')

@component('frontend.components.breadcrumbs',['active'=>'Services','message'=>''])

@endcomponent


<div class="service-inner-1 section-padding2 inner-font-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="heading2 text-center">
            <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="">Our Success in Numbers</small>
            <h2>Our team of financial professionals.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-11.png" alt="">
            </div>
            <h3>We seek clarity</h3>
            <p>See whether your time-off schedule overlaps with a teammate’s while applying for or reviewing a time-off request.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-12.png" alt="">
            </div>
            <h3>We Improve</h3>
            <p>Get notified in any Slack channel about who is on break, the next public holiday, and who to wish a happy birthday. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-13.png" alt="">
            </div>
            <h3>We act with empathy</h3>
            <p>Get notified in any Slack channel about who is on break, the next public holiday, and who to wish a happy birthday. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-14.png" alt="">
            </div>
            <h3>We are champion</h3>
            <p>See whether your time-off schedule overlaps with a teammate’s while applying for or reviewing a time-off request.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-15.png" alt="">
            </div>
            <h3>Our transparency</h3>
            <p>Get notified in any Slack channel about who is on break, the next public holiday, and who to wish a happy birthday. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="single-service text-center">
            <div class="service-icon bg-24">
              <img src="assets/img/icons/service-16.png" alt="">
            </div>
            <h3>We work together</h3>
            <p>Get notified in any Slack channel about who is on break, the next public holiday, and who to wish a happy birthday. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
