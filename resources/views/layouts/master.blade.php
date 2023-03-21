
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=====Title=======-->
  <title> @yield('title')  || {{config('app.name')}}</title>

  <!--=====Fav icon=======-->
  <link rel="shortcut icon" href="{{asset('assets/img/icons/logo.png')}}" type="image/x-icon">

  <!--=====CSS=======-->
  <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/slick-slider.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">


  <!--===== jQuery=======-->
  <script src="{{asset('assets/js/plugins/jquery-3-6-0.min.js')}}"></script>
</head>

<body>

  <!--=====Preloader start=======-->
  {{-- <div class="preloader">
    <div class="loader"></div>
  </div> --}}
  <!--=====Preloader end=======-->


 @include('layouts.components.navbar')


@yield('content'))

  <!--=====Subscribe start=======-->
  <div class="subscribe2 bg7 section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="heading2 white-heading no-margin-heading">
            <small class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here For Your Tax Relief.</small>
            <h2>Join Us today and let us help <span class="heilight-right">you</span> <br> to grow your business.</h2>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 offset-lg-1">
          <div class="sunscribe-form">
            <div class="subscribe-from-wrap">
              <form action="#">
                <input type="email" placeholder="Email Address">
                <button type="submit" name="button">Subscribe Now <img src="assets/img/icons/arrow-up-right-black.svg" alt=""></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Subscribe end=======-->

  <!--=====Footer start=======-->
@include('layouts.components.footer')
  <!--=====Footer end=======-->




  <!--=====Up arrow start=======-->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!--=====Up arrow end=======-->

  <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/aos.js')}}"></script>
  <script src="{{asset('assets/js/plugins/fontawesome.js')}}"></script>
  <script src="{{asset('assets/js/plugins/slick-slider.js')}}"></script>
  <script src="{{asset('assets/js/plugins/mesonry.js')}}"></script>
  <script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
  <script src="{{asset('assets/js/plugins/jquery.countup.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>

</body>

</html>
