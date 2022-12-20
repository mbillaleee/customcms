<!-- jquery
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/vendor/jquery-1.12.4.min.js"></script>
        
		<!-- Popper JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/popper.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/bootstrap.min.js"></script>
        
		<!-- bootstrap Toggle JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/bootstrap-toggle.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="{{asset('frontent-template1')}}/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="{{asset('frontent-template1')}}/lib/nivo-slider/home.js"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/wow.min.js"></script>
        
		<!-- meanmenu JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/jquery.meanmenu.js"></script>
        
		<!-- Owl carousel JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/owl.carousel.min.js"></script>
        
		<!-- Countdown JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/jquery.countdown.min.js"></script>
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/jquery.scrollUp.min.js"></script>
        
		<!-- Waypoints JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/waypoints.min.js"></script>
        
		<!-- Counterup JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/jquery.counterup.min.js"></script>
        
		<!-- Slick JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/slick.min.js"></script>
        
		<!-- Mix It Up JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/jquery.mixitup.js"></script>
        
		<!-- Venubox JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/venobox.min.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/plugins.js"></script>
        
        <!-- Google Map js
		============================================ --> 		
        
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		<script src="https://www.google.com/jsapi"></script>

        

            @stack('js')

        


		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.763494, 90.432226)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>	
        
		<!-- main JS
		============================================ -->		
        <script src="{{asset('frontent-template1')}}/js/main.js"></script>