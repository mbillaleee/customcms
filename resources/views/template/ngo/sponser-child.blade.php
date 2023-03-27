@extends('template.ngo.include.master')

@section('content')
@php
$setting = App\Models\Setting::where('status', 1)->get();
@endphp
<!-- Header Close -->
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <span class="text-white">Sponsor a Child</span>
               <h1 class="is-capitalize text-lg">Sponsor a Child details</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="w3-services-ab py-5" id="mission">
    <div class="container py-lg-5 py-md-4">
        <h3 class="title-big text-center mb-5">Sponsor a Child</h3>
        <div class="w3-services-grids">
            <div class="fea-gd-vv row">
                <div class="col-lg-12">
                    <div class="float-lt mt-3 feature-gd">
                        <div class="icon">
                            <img src="{{asset('frontend-assets/ngo')}}/images/home.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <p>
							{!! $setting[0]->sponsor_child ?? '' !!}
							</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection