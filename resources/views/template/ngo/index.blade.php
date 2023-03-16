@extends('template.ngo.include.master')


@section('content')
@include('template.ngo.include.slider')

<!-- Section Intro Start -->
<section class="section intro">
	<div class="container">
		<div class="columns is-align-items-center is-desktop mb-6">
			<div class="column is-6-desktop">
				<div class="section-title mb-0">
					<span class="text-color">What we can do</span>
					<h2 class="mt-4 content-title">We Believe that We can <br>Save More Lifes with you</h2>
				</div>
			</div>
			<div class="column is-6-desktop">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, dicta, iure. Esse quasi labore aperiam, dolorem amet voluptas soluta asperiores nostrum voluptate molestias numquam similique. Voluptate natus corporis ex, distinctio.</p>
			</div>
		</div>
		<div class="columns is-multiline is-justify-content-center">
			@foreach($blogs as $item)
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item mb-5 mb-lg-0"> 
					<img src="{{asset('uploads/blog/'.$item->image)}}" alt="" class=" w-100">
					
					<!-- <h4 class="mt-4 mb-3">Get inspired</h4> -->
					<p>{{ $item->title }}</p>
				</div>
			</div>
			@endforeach
			<!-- <div class="column is-3-desktop is-6-tablet">
				<div class="intro-item mb-5 mb-lg-0">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-2.jpg" alt="" class=" w-100">
					<h4 class="mt-4 mb-3">Give Donation</h4>
					<p>কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে। কুষ্টিয়াতে JU Foundation কর্তৃক পরিচালিত.... "মক্তব"। ওই এলাকায় শিশু-কিশোরদের মাঝে কুরআনের জ্ঞান ছড়িয়ে দিতে JU Foundation এর ক্ষুদ্র প্রচেষ্টা অব্যাহত</p>
				</div>
			</div>
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-3.jpg" alt="" class=" w-100">
					<h4 class="mt-4 mb-3">Become a Volunteer</h4>
					<p>কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে। কুষ্টিয়াতে JU Foundation কর্তৃক পরিচালিত.... "মক্তব"। ওই এলাকায় শিশু-কিশোরদের মাঝে কুরআনের জ্ঞান ছড়িয়ে দিতে JU Foundation এর ক্ষুদ্র প্রচেষ্টা অব্যাহত</p>
				</div>
			</div> 
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-1.jpg" alt="" class=" w-100">
					<h4 class="mt-4 mb-3">Help The children</h4>
					<p>কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে। কুষ্টিয়াতে JU Foundation কর্তৃক পরিচালিত.... "মক্তব"। ওই এলাকায় শিশু-কিশোরদের মাঝে কুরআনের জ্ঞান ছড়িয়ে দিতে JU Foundation এর ক্ষুদ্র প্রচেষ্টা অব্যাহত</p>
				</div>
			</div>  -->
		</div>
	</div>
</section>
<!-- Section Intro END -->
<section class="w3-services-ab py-5" id="mission">
    <div class="container py-lg-5 py-md-4">
        <h3 class="title-big text-center mb-5">Our Mission and Goals</h3>
        <div class="w3-services-grids">
            <div class="fea-gd-vv row">
                <div class="col-lg-4 col-md-6">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/home.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Homeless Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="float-mid feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/education.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Education Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="float-rt feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/health.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Health Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/icon1.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Animal Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/food.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Food Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/eco.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Eco Charities.</h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod init
                                tempor primis in init.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section gallery">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-8-desktop is-10-tablet">
				<div class="section-title has-text-centered">
					<span class="text-color">Our Gallery</span>
					<h2 class="mt-4 mb-5 is-relative content-title">We connect with people across different sectors. we take risksand we always keep learning.</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gallery-wrap">
			<div class="columns is-multiline">
				
				@foreach($photo_galleries as $item)
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/1.jpg" class="gallery-popup">
						@if($item->image != null)<img src="{{asset('uploads/photogallery/'.$item->image)}}" alt="" class=" w-100"> @endif
						</a>
					</div>
				</div>
				@endforeach
				<!-- <div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/2.jpg" class="gallery-popup">
							<img src="{{asset('frontend-assets/ngo')}}/images/gallery/2.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/3.jpg" class="gallery-popup">
							<img src="{{asset('frontend-assets/ngo')}}/images/gallery/3.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/4.jpg" class="gallery-popup">
							<img src="{{asset('frontend-assets/ngo')}}/images/gallery/4.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>

				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/5.jpg" class="gallery-popup">
							<img src="{{asset('frontend-assets/ngo')}}/images/gallery/5.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="{{asset('frontend-assets/ngo')}}/images/gallery/6.jpg" class="gallery-popup">
							<img src="{{asset('frontend-assets/ngo')}}/images/gallery/5.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="column">
			<div class="column lg-12">
				<div class="section-divider"></div>
			</div>
		</div>
	</div>
</section>

<!-- Section About Start -->
<section class="section causes">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-7-desktop is-8-tablet">
				<div class="section-title has-text-centered">
					<span class="text-color">Latest Events</span>
					<h2 class="mt-4 mb-5 is-relative content-title">Our Recent Causes <br> to serve better</h2>
					<p class="mb-5">We provide services in the area of IFRS and management reporting, helping companies to reach their highest level.</p>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-1.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Save Poor Childrens</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Goal:	<span>$890</span></li>
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Raised: <span>$390</span></li>
						</ul>
						<p class="card-text mb-5">Save poor child by supporting text below as a natural lead-in to additional content.</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-2.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Clean Drink Water</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Goal:	<span>$890</span></li>
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Raised: <span>$390</span></li>
						</ul>
						<p class="card-text mb-5">Save poor child by supporting text below as a natural lead-in to additional content.</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>
			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/about/image-3.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Fund for Education</a></h3>
						
						<p class="card-text mb-4">Save poor child by supporting text below as a natural lead-in to additional content. </p>
						<p class="card-text mb-4">Quia vitae ab maxime cum quod neque .</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section About End -->
<div class="cta-block section">
	<div class="container">
		<div class="columns is-justify-content-center ">
			<div class="column is-7-desktop is-12-tablet">
				<div class="cta-content has-text-centered">
					<i class="icofont-diamond text-lg text-color"></i>
					<h2 class="text-white text-lg mb-6 mt-4">We can’t help everyone, but everyone can help someone</h2>
					<a href="donation.html" class="btn btn-main is-rounded">Make a donation</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section latest-blog">
	<div class="container">
		<div class="columns is-justify-content-center is-desktop">
			<div class="column is-7-desktop has-text-centered">
				<div class="section-title">
					<span class="h6 text-color">Latest News</span>
					<h2 class="mt-4 content-title">Latest articles to enrich knowledge</h2>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
			@foreach($blogs_foot as $item)
			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="{{asset('uploads/blog/'.$item->image)}}" alt="" class="">
					

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">{{ $item->title }}</a></h3>
						<p class="mb-4">{{ $item->content }}</p>
					</div>
				</div>
			</div>
			@endforeach
			<!-- <div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/blog/blog_2.jpg" alt="" class="">

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">A place where start new life with peace</a></h3>
						<p class="mb-4">Aspernatur obcaecati unde, quasi nihil neque, voluptatem. Consectetur.</p>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="{{asset('frontend-assets/ngo')}}/images/blog/blog_3.jpg" alt="" class="">

					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">January 3, 2019</span>
						<h3 class="mb-3"><a href="blog-single.html" class="">Build school for poor childrens</a></h3>
						<p class="mb-4">Aspernatur obcaecati unde, quasi nihil neque, voluptatem. Consectetur.</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>


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

						<button type="submit" class="btn btn-main is-rounded mt-5">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection