@extends('template.education.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('content')
    <!--End of Header Area-->
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Gallery</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Gallery Area Start-->
    <div class="gallery-area section-padding gallery-full-width">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-menu">
                        <ul>
                            <li class="filter" data-filter="all">All</li>
                            @foreach($categories as $cat)
                            <li class="filter" data-filter=".cat{{$cat->id}}">{{$cat->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="row">
                    @foreach($photogallery as $photogaller)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items cat{{$photogaller->category_id}} overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('uploads/photogallery/'.$photogaller->image)}}" alt=""></a> 
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('uploads/photogallery/'.$photogaller->image)}}"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">{{$photogaller->category_id}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach                           
                </div>  
                <div class="col-md-12">
                    <div class="button text-center">
                        <a class="button-default button-yellow" href="#"><i class="fa fa-refresh"></i>Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Gallery Area-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->
@endsection