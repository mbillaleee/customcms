<footer class="footer section">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-4-desktop is-6-tablet">
				<div class="footer-widget widget">
					<h4 class="is-capitalize mb-4 text-white">Company</h4>
					<p>ka-147/1/1, Khilkhet, Dhaka-1229</p>

					<ul class="list-unstyled footer-menu mt-4">
						<li><a href="#"><i class="icofont-phone"></i>+88-01827-510787</a></li>
						<li><a href="#"><i class="icofont-email"></i>jufoundation.bd@gmail.com</a></li>
					</ul>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/jufoundation.bd"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="column is-2-desktop is-6-tablet">
				<div class="widget footer-widget">
					<h4 class="is-capitalize mb-4 text-white">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{url('/about')}}">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>

			<div class="column is-3-desktop is-6-tablet">
				<div class="footer-widget widget">
					<h4 class="is-capitalize mb-4 text-white">Subscribe Us</h4>
					<p class="mb-4">Subscribe to get latest news article and resources  </p>

					<form action="#" class="sub-form">
						<input type="text" class="input mb-4 text-white" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small is-rounded">subscribe</a>
					</form>
				</div>
			</div>
			
			<div class="column is-3-desktop is-6-tablet">
				<div class="widget footer-widget">
					@php
					$gallery = App\Models\PhotoGallery::where('status', 1)->take(6)->get();
					@endphp
					<h4 class="is-capitalize mb-4 text-white">Gallery</h4>

					<div class="gallery-wrap">
						@foreach($gallery as $item)
						<div class="gallery-img">
							<img src="{{asset('uploads/photogallery/'.$item->image)}}" alt="" class="">
						</div>
						@endforeach
						<!-- <div class="gallery-img">
							<img src="{{asset('frontend-assets/ngo')}}/images/blog/gallery-2.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="{{asset('frontend-assets/ngo')}}/images/blog/gallery-3.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="{{asset('frontend-assets/ngo')}}/images/blog/gallery-6.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="{{asset('frontend-assets/ngo')}}/images/blog/gallery-5.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="{{asset('frontend-assets/ngo')}}/{{asset('frontend-assets/ngo')}}/images/blog/gallery-2.jpg" alt="" class="">
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-5">
			<div class="columns is-justify-content-center">
				<div class="column is-12">
					<div class="copyright has-text-centered">
						<small>&copy; Copyright Reserved to JU Foundation by <a href="https://themefisher.com/" target="_blank" class="text-color">xPrTx</a></small>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{asset('frontend-assets/ngo')}}/plugins/jquery/jquery.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/js/contact.js"></script>
   <!--  Magnific Popup-->
    <script src="{{asset('frontend-assets/ngo')}}/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="{{asset('frontend-assets/ngo')}}/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="{{asset('frontend-assets/ngo')}}/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="{{asset('frontend-assets/ngo')}}/plugins/modal-video/jquery-modal-video.min.js"></script>

    <script src="{{asset('frontend-assets/ngo')}}/js/script.js"></script>


    


    <!-- poor template -->
    <script src="{{asset('frontend-assets/ngo')}}/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <script src="{{asset('frontend-assets/ngo')}}/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
    <script src="{{asset('frontend-assets/ngo')}}/js/owl.carousel.js"></script>


    <!-- Helpz template -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{asset('frontend-assets/ngo')}}/lib/parallax/parallax.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend-assets/ngo')}}/js/main.js"></script>




	
	<!-- Landing page start -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


	<!-- Landing page edn -->


<script>    
  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  	toastr.success("{{ session('success') }}");
  @endif
  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif
        
        $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
</script>

