 <!--=====Header start=======-->
 <header id="header" class="header header-2 header-absolute d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">
            <div class="header_menu_area">
              <div class="logo">
                <a href="index.html"><img width="80" src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
              </div>
              <div class="main-menu">
                <div class="menu-wrap">
                  <ul class="menu_list scroll">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('halal')}}">Halal</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('services')}}">Services </a></li>
                    <li><a href="#">Blogs </a></li>
                    <li><a href="{{route('contact')}}">Contact Us </a></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="desktop-info">
              <div class="quick_contact">
                <div class="quick_contact_icon bg-27">
                  <i class="fa-light fa-phone"></i>
                </div>
                <div class="quick_contact_content">
                  <small>Hotline 24/7</small>
                  <a href="tel:+49 30 923325544">+49 30 923325544</a>
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
            <a href="index.html"><img width="80" src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
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


        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('halal')}}">Halal</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('services')}}">Services </a></li>
        <li><a href="#">Blogs </a></li>
        <li><a href="{{route('contact')}}">Contact Us </a></li>




      </ul>

      <div class="mobile-contact">
        <div class="single-footer">
          <h3>Get in touch</h3>

          <div class="footer-contact">
            <div class="single-contact">
              <div class="contact-icon">
                <img src="assets/img/icons/contact-phone4.svg" alt="">
              </div>
              <a href="#">USA: +91 02 2585 0556</a>
              <a href="#">UK: +61 02 2585 0556</a>
            </div>
          </div>
          <div class="footer-contact">
            <div class="single-contact">
              <div class="contact-icon">
                <img src="assets/img/icons/contact-email4.svg" alt="">
              </div>
              <a href="#">Contacthelp@Demoui.co</a>
              <a href="#">Info@consultia.co</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--=====Mobile header end=======-->
