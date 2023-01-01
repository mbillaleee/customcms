
@extends('template.education.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">About Us</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Activity Area Start-->
    <div class="activity-area">
        {!!$activity_area->content!!}
    </div>
    <!--End of Activity Area-->
    <!--About Area Start-->
    <div class="about-area section-padding-bottom">
    {!! $about_area->content !!}
    </div>
    <!--End of About Area-->
    <!--Skill And Experience Area Start-->
    <div class="skill-and-experience-area">
    {!! $skill_and_experience_area->content !!}
    </div>
    <!--End of Skill And Experience Area-->
    <!--Teachers Column Carousel Start-->
    <div class="teachers-column-carousel-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Teachers</h3>
                            <p>We are glad to introduce our professional staff</p>
                        </div>
                    </div> 
                </div>       
            </div>
            <div class="teachers-column-carousel carousel-style-one owl-carousel">
            @foreach($teachers as $teacher)
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                        <img src="{{asset('uploads/teacher/'.$teacher->image)}}" alt=""/>
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>{{$teacher->name}}</h4>
                        <span>{{$teacher->designation}} Professor, Harvard College</span>
                        <p>{{ \Illuminate\Support\Str::limit($teacher->description, 150, $end='...') }}</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--End of Teachers Column Carousel-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->
@endsection
