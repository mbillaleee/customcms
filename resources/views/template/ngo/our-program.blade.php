@extends('template.ngo.include.master')


@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Religious Program</h2>
        </div>
    </section>
</div>


<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-big">Our Religious Program</h3>
            </div>
            <div class="team-row mt-md-5 mt-4">
                @foreach($blogs as $item)
                <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="{{asset('uploads/blog/'.$item->image)}}" alt="" class="radius-image img-fluid vol_img">
                        </div>
                        <a href="#url" class="">{{ $item->title }}</a>
                        <p>{{ Str::limit($item->content, 100, ' ...') }}</p>
                    </div>
                </div>
                @endforeach
                <!-- end team member -->

            </div>
        </div>
</section>
<!--//team-sec-->


@endsection