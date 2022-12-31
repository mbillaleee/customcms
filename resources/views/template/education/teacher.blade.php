@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-info-container text-center section-padding">
                        <div class="footer-logo">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/logo/footer-logo.png" alt=""></a>
                        </div>
                        <div class="footer-info">
                            <span><i class="fa fa-map-marker"></i>1st Floor New World Tower Miami</span>
                            <span><i class="fa fa-envelope"></i>admin@power-boosts.com</span>
                            <span><i class="fa fa-phone"></i>(801) 2345 - 6789</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-container section-padding">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Our School</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Become a Teacher</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Links</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Support</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="subscribe-container">
                            <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>
                            <form action="#">
                                <div class="subscribe-form">
                                    <input type="email" name="email" placeholder="Your email here">
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>&copy; 2021 <a href="#">Power-Boosts</a>. All rights reserved</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Footer Area-->
@endsection