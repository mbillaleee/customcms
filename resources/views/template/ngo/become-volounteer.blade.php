@extends('template.ngo.include.master')


@section('content')
@include('template.ngo.include.slider')

<div class="volunteer section ">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-7-desktop is-12-tablet">
				<div class="volunteer-content">
					<h4 class="text-lg mb-5 mt-3">Heading</h4>
					<p>Volunteering is a noble way of giving back to society, and it is a fantastic way to make a positive impact on the lives of others. The J U Foundation is an excellent opportunity for young people to give back to their communities and make a positive difference in the world. By volunteering with the J U Foundation, you can be part of a team that strives to improve the lives of those who need it most.
						Volunteering with the J U Foundation provides an excellent opportunity to gain valuable skills, including communication, teamwork, and leadership. As a volunteer, you will have the chance to work alongside experienced professionals who will help you grow and develop as a person. You will also get the chance to make new friends and network with other like-minded individuals who share your passion for making a positive difference in the world.
						Whether you have a few hours or a few days to spare, volunteering with the J U Foundation is a fantastic way to make a positive difference in the lives of others. So, if you're looking for a meaningful and rewarding way to spend your free time, become a volunteer with the J U Foundation today!</p>

					
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
							<label class="text-white" for="">Name *</label>
							<input type="text" class="input" name="name" value="{{ @old('name')}}" placeholder="Full Name">
							@error('name')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Email *</label>
							<input type="email" class="input" name="email" value="{{ @old('email')}}" placeholder="Emaill Address">
							@error('email')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Phone *</label>
							<input type="text" class="input" name="phone" value="{{ @old('phone')}}" placeholder="Phone Number">
							@error('phone')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Address *</label>
							<input type="text" class="input" name="address" value="{{ @old('address')}}" placeholder="Adress">
							@error('address')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Date of birth</label>
							<input type="date" class="input" name="date_of_birth" value="{{ @old('date_of_birth')}}" placeholder="Date of birth">
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Occupation</label>
							<input type="text" class="input" name="occupation" value="{{ @old('occupation')}}" placeholder="Occupation">
						</div>
						<div class="mb-4">
						<label class="text-white" for="">Image (jpg,jpeg,png)</label>
							<input type="file" class="input" name="image" placeholder="Image">
							@error('image')
                            	<span class="error text-white">{{ $message }}</span>
                        	@enderror
						</div>
						<div class="mb-4">
							<label class="text-white" for="">Message </label>
							<textarea name="message" id="#" cols="30" rows="6"  class="input" placeholder="Your Message">{{ @old('message')}}</textarea>
						</div>

						<button type="submit" id="submitt" onClick="btnClick()" class="btn btn-main is-rounded mt-5">Register</button>
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


@if(Session::has('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
		setTimeout(function() { 
		
		Swal.fire({
			icon: 'success',
			title: 'Volunteer register successfully',
			showConfirmButton: false,
			timer: 3500
		})
		})
    </script>
@endif