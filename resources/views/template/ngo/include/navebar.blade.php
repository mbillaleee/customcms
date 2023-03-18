<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="{{url('/')}}">
					<img src="{{asset('frontend-assets/ngo')}}/images/logo.jpg" alt="logo">
				</a>
				<button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>

			<div class="navbar-menu mr-0" id="navigation">
				<ul class="navbar-end">					 
					<li class="navbar-item">
						<a class="navbar-link" href="">Home</a>
					</li>
					
					<li class="navbar-item">
						<a class="navbar-link" href="">About</a>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Causes<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="service.html">Causes</a>
							<a class="navbar-item" href="cause-single.html">Cause details</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Get Involved<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="donation.html">Donation</a>
							<a class="navbar-item" href="volunteer.html">Be a Volunteer</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Pages<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="event.html">Event</a>
							<a class="navbar-item" href="event-single.html">Event Single</a>
							<a class="navbar-item" href="confirmation.html">Confirmation</a>
							<a class="navbar-item" href="404.html">404</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Blog +</a>
						<div class="navbar-dropdown align-right">
							<a class="navbar-item" href="blog-grid.html">Blog Grid</a>
							<a class="navbar-item" href="blog-sidebar.html">Blog with Sidebar</a>
							<a class="navbar-item" href="blog-single.html">Blog Single</a>
						</div>
					</li>
					
					<li class="navbar-item">
						<a class="navbar-link" href="{{url('/contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>