@extends('template.ngo.include.master')


@section('content')
@include('template.ngo.include.slider')


<section class="section causes">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-7-desktop is-8-tablet">
				<div class="section-title has-text-centered">
					<!-- <span class="text-color">Latest Events</span> -->
					<h2 class="mt-4 mb-5 is-relative content-title">Happy Volunteer</h2>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
            @foreach($volunteers as $item)
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