@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

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
                                <li class="filter" data-filter=".drawing">Drawing</li>
                                <li class="filter" data-filter=".excursions">Excursions</li>
                                <li class="filter" data-filter=".courses">Courses</li>
                                <li class="filter" data-filter=".play">Play time</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items drawing overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/1.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/1.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawings</span>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play courses overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/2.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/2.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Activities, Photos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/3.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/3.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Play Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/4.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/4.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Play</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items courses excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/5.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/5.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Courses, Exursions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items drawing overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/12.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/12.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items courses excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/6.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/6.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/10.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/10.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing, Exursions</span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items drawing overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/7.jpg" alt=""></a> 
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/7.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play courses overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/13.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/13.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Activities, Photos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/14.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/14.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Play Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items play excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/8.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/8.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Play</span>
                                </div>
                            </div>
                        </div>                                 
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