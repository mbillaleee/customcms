@extends('template.ngo.include.master')


@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Religious Program</h2>
        </div>
    </section>
</div>


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


@endsection