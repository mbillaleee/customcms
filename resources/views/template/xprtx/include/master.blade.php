<!DOCTYPE html>
<html lang="en">

@include('template.xprtx.include.head')

<body>

  <!-- ======= Header ======= -->
  @include('template.xprtx.include.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h2>Best Software Development Company To Architect The Dream For Next Generation</h2>
          <p class="text-white">Bdtask, Inc. has a global reputation for up to scratch customer experience which marks us as one of the best software development companies in the world.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('frontend-assets/xprtx')}}/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('template.xprtx.include.footer')

</body>

</html>