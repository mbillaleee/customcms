@extends('template.ngo.include.master')


@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Religious Program</h2>
        </div>
    </section>
</div>

@if($setting[0]->blog_show == 1)
<section class="section intro">
	<div class="container">
		<div class="columns is-multiline is-justify-content-center">
			@foreach($blogs as $item)
			<div class="column is-3-desktop is-6-tablet fst_blog">
				<div class="intro-item mb-5 mb-lg-0"> 
					<img src="{{asset('uploads/blog/'.$item->image)}}" alt="" class=" w-100">
					
					<!-- <h4 class="mt-4 mb-3">Get inspired</h4> -->
					<p class="mt-4">{{ $item->title }}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!--//team-sec-->
@elseif($setting[0]->blog_show == 2)

<section class="section intro">
	<div class="container">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<h6 class="text-muted">List Group with Images</h6> 
			<ul class="list-group">
				@foreach($blogs as $item)
				<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mt-4">
				<div class="flex-column">
					{{ $item->title }}
					<p><small>{{ $item->content }}</small></p>
				</div>
				<div class="image-parent">
					<!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote"> -->
					<img src="{{asset('uploads/blog/'.$item->image)}}" class="img-fluid image-blog-list" alt="quixote">
				</div>
				</a>
				@endforeach
			</ul>
		</div>
	</div>
	</div>
</section>

@endif


@endsection