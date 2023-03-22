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
<div class="section">
    <h2 class="text-lg mb-5 mt-3 text-center">Joint Stock Registration</h2>
	<img src="{{asset('frontend-assets/ngo')}}/images/bg/image-5.jpg" alt="" class="">
</div>



@endsection