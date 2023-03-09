@extends('layouts.master')


@section('title') Halal @endsection
@section('content')

@component('frontend.components.breadcrumbs',['active'=>'Halal','message'=>''])

@endcomponent
<div class="about-inner bg-28 section-padding">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="mr50">
            <div class="heading2 no-margin-heading ">
              <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="">Our stories how we establish our company.</small>
              <h2>We Handle The Most Tedious Bookkeeping Tasks of Your Business Operations.</h2>
              <p>Imagine building some of the most sophisticated hardware-driven technologies in the world – spacecraft, drones or autonomous vehicles. Then imagine being unable to easily share your data to different teams, having to use clunky user
                interfaces, and relying on a single person manually inputting data.</p>
              <p>Excel spreadsheet to bottom line your project. To solve this problem, Violet Labs is developing a cloud-based platform that can act as a single source of truth, collecting the data from all the tools and making them easily accessible
                across teams. Hoag likened the product to Zapier, which uses APIs to talk to different tools. </p>
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
  <div class="about-inner padding-bottom bg-29">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 ">
          <div class="about-bg-main-img position-relative mr50">
            <img src="assets/img/about/about24.png" alt="">
            <div class="corner-right-bottom-shape2 position-absolute">
              <img src="assets/img/shapes/shape-right-bottom2.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ml50">
            <div class="heading2 no-margin-heading ">
              <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="">Our Vision help us to improve our quality.</small>
              <h2>We Handle The Most Tedious Bookkeeping Tasks of Your Business Operations.</h2>
              <p>Imagine building some of the most sophisticated hardware-driven technologies in the world – spacecraft, drones or autonomous vehicles. Then imagine being unable to easily share your data to different teams, having to use clunky user
                interfaces, and relying on a single person manually inputting data.</p>
              <p>Excel spreadsheet to bottom line your project. To solve this problem, Violet Labs is developing a cloud-based platform that can act as a single source of truth, collecting the data from all the tools and making them easily accessible
                across teams. Hoag likened the product to Zapier, which uses APIs to talk to different tools. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
