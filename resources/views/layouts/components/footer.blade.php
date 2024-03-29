<footer class="footer-area padding-top footer-2 bg9">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-footer mr50">
            <a href="{{route('home')}}" class="footer-logo"> <img width="90" src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
            <div class="space20"></div>
            <p>{{__('content.main_subheading')}}
            </p>
          </div>
        </div>

        <div class="col-lg col-md-6">
          <div class="single-footer">
            <h3>Our Company</h3>
            <div class="footer-menu">
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">User Terms</a></li>
                <li><a href="#">Help Centre</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-footer">
            <h3>Get in touch</h3>

            {{-- <div class="footer-contact">
              <div class="single-contact">
                <div class="contact-icon">
                  <img src="assets/img/icons/contact-phone2.svg" alt="">
                </div>
                <a href="#">Phone: +91 02 2585 0556</a>
              </div>
            </div> --}}
            <div class="footer-contact">
              <div class="single-contact">
                <div class="contact-icon">
                  <img src="assets/img/icons/contact-email2.svg" alt="">
                </div>
                <a href="#"> info@halalcs.eu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center copyright2">
        <div class="col-lg-6">
          <p>© 2023 {{config('app.name')}}. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 text-right">
          <div class="social social2">
            <ul>
              <li><a data-bs-toggle="tooltip" title="Linked in" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a data-bs-toggle="tooltip" title="Instagram" href="#"><i class="fa-brands fa-instagram"></i></a></li>
              {{-- <li><a data-bs-toggle="tooltip" title="TikTok" href="#"><i class="fa-brands fa-tiktok"></i></a></li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
