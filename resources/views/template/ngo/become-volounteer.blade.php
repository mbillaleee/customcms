@extends('template.ngo.include.master')


@section('content')
@include('template.ngo.include.slider')

<div class="volunteer section ">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-7-desktop is-12-tablet">
				<div class="volunteer-content">
					<img src="{{asset('frontend-assets/ngo')}}/images/bg/image-5.jpg" alt="" class="">
					<h2 class="text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>
					<p>Assumenda reiciendis delectus dolore incidunt molestias omnis quo quaerat voluptate, eligendi perspiciatis ipsa laudantium nesciunt officia, odit nemo quidem hic itaque. Fugiat.</p>

					<h2 class="mt-6 mb-5">Trusted worldwide partner</h2>
					<div class="clients-wrap">
						<a href="#">
							<img src="{{asset('frontend-assets/ngo')}}/images/clients/client1.png" alt="" class="">
						</a>
						<a href="#">
							<img src="{{asset('frontend-assets/ngo')}}/images/clients/client2.png" alt="" class="">
						</a>
						<a href="#">
							<img src="{{asset('frontend-assets/ngo')}}/images/clients/client4.png" alt="" class="">
						</a>
						<a href="#">
							<img src="{{asset('frontend-assets/ngo')}}/images/clients/client5.png" alt="" class="">
						</a>
						<a href="#">
							<img src="{{asset('frontend-assets/ngo')}}/images/clients/client6.png" alt="" class="">
						</a>
					</div>
				</div>
			</div>

			<div class="column is-5-desktop is-12-tablet">
				<div class="volunteer-form-wrap">
					<span class="text-white">Join With us</span>
					<h2 class="mb-6 text-lg text-white">Become A Volunteer</h2>
					<form action="{{route('frontendvolunteer.store')}}" method="POST" enctype="multipart/form-data" class="volunteer-form">
						@csrf
						<input type="hidden" class="input" value="0" name="status">
						<div class="mb-4">
							<input type="text" class="input" name="name" value="{{ @old('name')}}" placeholder="Full Name">
							@error('name')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
							<input type="email" class="input" name="email" value="{{ @old('email')}}" placeholder="Emaill Address">
							@error('email')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
							<input type="text" class="input" name="phone" value="{{ @old('phone')}}" placeholder="Phone Number">
							@error('phone')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
							<input type="text" class="input" name="address" value="{{ @old('address')}}" placeholder="Adress">
							@error('address')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
							<input type="text" class="input" name="occupation" value="{{ @old('occupation')}}" placeholder="Occupation">
						</div>
						<div class="mb-4">
							<input type="file" class="input" name="image" placeholder="Image">
						</div>
						<div class="mb-4">
							<textarea name="message" id="#" cols="30" rows="6"  class="input" placeholder="Your Message">{{ @old('message')}}</textarea>
						</div>

						<button type="submit" class="btn btn-main is-rounded mt-5">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section causes">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-7-desktop is-8-tablet">
				<div class="section-title has-text-centered">
					<!-- <span class="text-color">Latest Events</span> -->
					<h2 class="mt-4 mb-5 is-relative content-title">Volunteer</h2>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
            @foreach($become_volunteers as $item)
			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-1.jpg" class=" w-100" alt="...">

					<div class="card-body row">
						<h3 class="mb-4"><a href="cause-single.html">{{ $item->name }}</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
						<li class="list-inline-item">Phone:	<span>{{ $item->phone }}</span></li>
						<li class="list-inline-item">Email: <span>{{ $item->email }}</span></li>
						</ul>
						<p class="card-text mb-5">{{ $item->message }}</p>

						<!-- <a href="donation.html" class="btn btn-main is-rounded">Donate Now</a> -->
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
<!--//team-sec-->


@endsection