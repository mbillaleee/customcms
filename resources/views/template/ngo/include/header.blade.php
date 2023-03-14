<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="columns is-gapless is-justify-content-space-between is-align-items-center">
				<div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
					<div class="header-top-info">
						<a href="tel:+23-345-67890"><i class="icofont-phone mr-2"></i><span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="icofont-email mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
				<div class="column is-6-desktop is-8-tablet">
					<div class="header-top-right has-text-right-tablet has-text-centered-mobile">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="icofont-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="icofont-github"></i></a>
						<a href="#" target="_blank"><i class="icofont-pinterest"></i></a>
						<a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
						<a href="donation.html" class="top-btn">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="index.html">
					<img src="{{asset('frontend-assets/ngo')}}/images/logo.jpg" alt="logo" height="50px">
				</a>
				<button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>

			<div class="navbar-menu mr-0" id="navigation">
				<ul class="navbar-end">			

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Who We Are<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="service.html">About J U Foundation</a>
							<a class="navbar-item" href="cause-single.html">Vision & Mission and Values</a>
							<a class="navbar-item" href="cause-single.html">Legal Status</a>
							<a class="navbar-item" href="cause-single.html">Governing Body</a>
							<a class="navbar-item" href="cause-single.html">Partners and Donors</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">What We Do<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="donation.html">Religious Projects</a>
							<a class="navbar-item" href="volunteer.html">Our Programs</a>
							<a class="navbar-item" href="volunteer.html">Program Archive</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Ways to Support<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="event.html">Donate (Highlighted Colored)</a>
							<a class="navbar-item" href="event-single.html">Sponsor a Child</a>
							<a class="navbar-item" href="confirmation.html">Become a Volunteer </a>
							<a class="navbar-item" href="404.html">404</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Contact Us </a>
					</li>
					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link" href="{{ url('/ngo/about') }}">About Us </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>