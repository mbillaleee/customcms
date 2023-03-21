
<!-- ======= Footer ======= -->
<footer id="footer">
    @php
    $setting = App\Models\Setting::where('status', 1)->get();
    @endphp
  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>xPrTx</h3>
          <p>
          {{ $setting[0]->address ?? ''}} <br>
            <strong>Phone:</strong> {{ $setting[0]->mobile ?? ''}}<br>
            <strong>Email:</strong> {{ $setting[0]->email ?? ''}}<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links mt-3">
            <a href="{{ $setting[0]->twitter_url ?? ''}}" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{ $setting[0]->facebook_url ?? ''}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $setting[0]->email ?? ''}}" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="{{ $setting[0]->email ?? ''}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="{{ $setting[0]->youtube_url ?? ''}}" class="toutube"><i class="bx bxl-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      <strong><span>{{ $setting[0]->copy_right ?? ''}}</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://xprtx.net/">xPrTx</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontend-assets/xprtx')}}/vendor/aos/aos.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('frontend-assets/xprtx')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend-assets/xprtx')}}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
