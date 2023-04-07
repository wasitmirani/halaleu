 <!--=====Header start=======-->
 <header id="header" class="header header-2 header-absolute d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">
            <div class="header_menu_area">
              <div class="logo">
                <a href="{{url('/')}}"><img width="80" src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
              </div>
              <div class="main-menu">
                <div class="menu-wrap">
                  <ul class="menu_list scroll">
                    <li><a href="{{route('home')}}">{{__('content.navbar_home')}}</a></li>
                    <li><a href="{{route('about')}}">{{__('content.navbar_about')}}</a></li>
                    <li><a href="{{route('halal.explained')}}">{{__('content.navbar_halal_explained')}}</a></li>
                    <li><a href="{{route('halal.production')}}">{{__('content.navbar_halal_production')}}</a></li>

                    <li><a href="{{route('services')}}">{{__('content.navbar_services')}} </a></li>
                    <li><a href="{{route('contact')}}">{{__('content.navbar_contact')}} </a></li>


                  </ul>
                </div>
              </div>
            </div>
            <div class="desktop-info">
              <div class="quick_contact">


                <div class="quick_contact_content">
                    <select class="form-control changeLang">
                        <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>
                            <img src="{{asset('/assets/img/deu.png')}}" alt="deu.png" srcset=""/>
                        Deutsch</option>
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                            <img src="{{asset('/assets/img/eng.png')}}" alt="eng.png" srcset=""/>
                        English</option>


                    </select>
                  {{-- <small>Hotline 24/7</small>
                  <a href="tel:+49 30 923325544">+49 30 923325544</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====Header end=======-->

  <!--=====Mobile header start=======-->
  <div class="mobile-header mobile-header-4 d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="{{url('/')}}"><img width="80" src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile-sidebar">
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

      <ul class="mobile-nav-list">


        <li><a href="{{route('home')}}">{{__('content.navbar_home')}}</a></li>
        <li><a href="{{route('about')}}">{{__('content.navbar_about')}}</a></li>
        <li><a href="{{route('halal.explained')}}">{{__('content.navbar_halal_explained')}}</a></li>
        <li><a href="{{route('halal.explained')}}">{{__('content.navbar_halal_explained')}}</a></li>
        <li><a href="{{route('services')}}">{{__('content.navbar_services')}} </a></li>
        <li><a href="{{route('contact')}}">{{__('content.navbar_contact')}} </a></li>






      </ul>

      <div class="mobile-contact">

      <div class="col-4">
        <h5 class="text-white">{{__('content.change_lang')}}</h5>
        <select class="form-control changeLang">
            <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>

            Deutsch</option>
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>


        </select>
      </div>
      <hr>
        <div class="single-footer">
          <h3>Get in touch</h3>

          <div class="footer-contact">
            <div class="single-contact">
              <div class="contact-icon">
                <img src="assets/img/icons/contact-phone4.svg" alt="">
              </div>
              <a href="#">Phone: +0 00 0000 0000</a>
              {{-- <a href="#">UK: +44 00 0000 0000</a> --}}
            </div>
          </div>
          <div class="footer-contact">
            <div class="single-contact">
              <div class="contact-icon">
                <img src="assets/img/icons/contact-email4.svg" alt="">
              </div>
              <a href="#">info@halalcs.eu</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Mobile header end=======-->
