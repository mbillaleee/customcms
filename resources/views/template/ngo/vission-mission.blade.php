@extends('template.ngo.include.master')


@section('content')

@php
	$setting = App\Models\Setting::where('status', 1)->get();
@endphp
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Vision, Mission and Values of JU Foundation</h2>
        </div>
    </section>
</div>
<section class="w3-services-ab py-5" id="mission">
    <div class="container py-lg-5 py-md-4">
        <h3 class="title-big text-center mb-5">Vision, Mission and Values of JU Foundation</h3>
        <div class="w3-services-grids">
            <div class="fea-gd-vv row">
                <div class="col-lg-12">
                    <div class="float-lt mt-3 feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/home.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Our vission</h5>
                            <p> {!! $setting[0]->vission ?? '' !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-md-0 mt-4">
                    <div class="float-mid mt-3 feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/education.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Our mission </h5>
                            <p>{!! $setting[0]->mission ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-lg-0 mt-4">
                    <div class="float-rt mt-3 feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/health.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Values</h5>
                            <p> {!! $setting[0]->values ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection