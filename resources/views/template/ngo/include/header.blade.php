<header class="navigation">
	@php
	$setting = App\Models\Setting::where('status', 1)->get();
	$coloe_head = App\Models\Color::where('section_name', 'header')->first();
	@endphp
	
	<div class="header-top " style="background-color:{{$coloe_head->background_color}}; color:{{$coloe_head->color}}">
		<div class="container">
			<div class="columns is-gapless is-justify-content-space-between is-align-items-center">
				<div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
					<div class="header-top-info">
						<a href="tel:{{ $setting[0]->phone ?? ''}}"><i class="icofont-phone mr-2"></i><span>{{ $setting[0]->mobile ?? ''}}</span></a>
						<a href="mailto:{{ $setting[0]->email ?? ''}}" ><i class="icofont-email mr-2"></i><span>{{ $setting[0]->email ?? ''}}</span></a>
					</div>
				</div>
				<div class="column is-6-desktop is-8-tablet">
					<div class="header-top-right has-text-right-tablet has-text-centered-mobile">
						<a href="{{ $setting[0]->facebook_url ?? ''}}" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="{{ route('ngo.donation') }}" class="top-btn">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="{{ url('/') }}">
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
						<a class="navbar-link" href="{{ url('/') }}">Home </a>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Who We Are<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="{{ url('/about') }}">About J U Foundation</a>
							<a class="navbar-item" href="#">Vision & Mission and Values</a> 
							<a class="navbar-item" href="#">Legal Status</a>
							<a class="navbar-item" href="#">Governing Body</a>
							<a class="navbar-item" href="#">Partners and Donors</a>
							<!-- cause-single.html -->
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">What We Do<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="{{ url('/religious-program') }}">Religious Projects</a>
							<a class="navbar-item" href="#">Our Programs</a>
							<a class="navbar-item" href="#">Program Archive</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Ways to Support<span class="ml-1">+</span></a>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="#">Donate (Highlighted Colored)</a>
							<a class="navbar-item" href="#">Sponsor a Child</a>
							<a class="navbar-item" href="{{url('/become-volounteer')}}">Become a Volunteer </a>
							<a class="navbar-item" href="{{url('/volounteer')}}">Volunteer list</a>
						</div>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link" href="{{ url('/contact') }}">Contact Us </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>