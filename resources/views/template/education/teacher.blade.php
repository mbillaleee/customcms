@extends('template.education.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('content')
    <!--End of Header Area-->
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Teachers</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Teacher Fullwidth Area Start-->
    <div class="teacher-fullwidth-area section-padding">
        <div class="container">
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
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
                            <h4>{{ $teacher->name }}</h4>
                            <span>{{ $teacher->designation }}</span>
                            <p>{{ $teacher->description }}</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/7.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>graves</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/10.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>poppy</h4>
                            <span>Professor, Harvard College</span>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/9.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>maokai</h4>
                            <span>Professor, Harvard College</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/8.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Julia</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/11.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Tulip</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/6.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Kailo</h4>
                            <span>Professor, Harvard College</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/7.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>graves</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/10.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>poppy</h4>
                            <span>Professor, Harvard College</span>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/9.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>maokai</h4>
                            <span>Professor, Harvard College</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/8.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Julia</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="{{asset('frontent-template1')}}/img/teacher/11.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Tulip</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-12">
                <div class="button text-center">
                    <a href="#" class="button-default button-yellow"><i class="fa fa-refresh"></i>Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Teacher Fullwidth Area-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->
@endsection