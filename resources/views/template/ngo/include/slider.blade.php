<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Charity Life</p>
                                    <h5>Charity, Faith and Hope. Help the Homeless. Charity life.</h5>
                                    <a href="about.html" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Save Children</p>
                                    <h5>Donate with Kindness. Every amount Donated by you Counts.</h5>
                                    <a href="about.html" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Unconditional Help</p>
                                    <h5>Give a Helping hand. We all need to come together. Our Mission.</h5>
                                    <a href="about.html" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Unconditional Help</p>
                                    <h5>Should Children suffer this way? Don't leave Orphans alone</h5>
                                    <a href="about.html" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>



@push('js')
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      dots: false,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
@endpush