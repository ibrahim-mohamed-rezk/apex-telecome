  <!--=====footer-start=======-->
  <div class="footer sec-padding" style="background-color:#432c8d">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <div class="footer-hadding">
                      <a href="index1.html"><img src="{{url('')}}/assets/web/img/logo/apex-logo.png" alt=""></a>
                      <p>{{ __('web.working_with_a_life') }}</p>
                      <div class="footer-shere">
                          <ul>
                              <li><a href="{{ settings('x_sa') }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></i></a></li>
                              <li><a href="{{ settings('facebook_sa') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="{{ settings('instagram_sa') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="{{ settings('tiktok_sa') }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="footer-menu">
                      <h4>{{ __('web.main_pages') }}</h4>
                      <ul>
                          <li><a href="{{ route('web.home') }}">{{ __('web.home') }}</a></li>
                          <li><a href="{{ route('web.about_us') }}">{{ __('web.about_us') }}</a></li>
                          <li><a href="{{ route('web.products') }}">{{ __('web.products') }}</a></li>
                          <li><a href="{{ route('web.services') }}">{{ __('web.our_Service') }}</a></li>
                          <li><a href="{{ route('web.contact') }}">{{ __('web.contact') }}</a></li>

                      </ul>
                  </div>
              </div>

              {{-- <div class="col-md-2">
                  <div class="footer-menu">
                      <h4>{{ __('web.company') }}</h4>
                      <ul>

                          <li><a href="#">{{ __('web.privacy_policy') }}</a></li>
                          <li><a href="#">{{ __('web.return_policy') }}</a></li>
                          <li><a href="error.html">404</a></li>
                      </ul>
                  </div>
              </div> --}}
              <div class="col-md-3">
                  <div class="footer-menu">
                      <h4>{{ __('web.contact_information') }}</h4>
                      <div class="foter-contact">
                          <div class="footer-contact-icon">
                              <img src="assets/img/icons/footer-icon-1.svg" alt="">
                          </div>
                          <div class="footer-contact-p">
                              <p>{{ __('web.egypt_location') }}</p>
                          </div>
                      </div>

                      <div class="foter-contact">
                          <div class="footer-contact-icon">
                              <img src="assets/img/icons/footer-icon-2.svg" alt="">
                          </div>
                          <div class="footer-contact-p">
                              <a href="tel:0572424940">
                                  <p>057-242-4940</p>
                              </a>
                          </div>
                      </div>

                      <div class="foter-contact">
                          <div class="footer-contact-icon">
                              <img src="assets/img/icons/footer-icon-3.svg" alt="">
                          </div>
                          <div class="footer-contact-p">
                              <a href="mailto:info@apex-telecom.net">
                                  <p>info@apex-telecom.net</p>
                              </a>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="fonter-end " style="background-color:#432c8d">
      <div class="contaier">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="footer-end-p" style="color:white">
                      {{ __('web.copyright') }}
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--=====footer-end=======-->
