@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

 @section('content')

    <div class="slider-area slider-style-1">
            <div class="preview-2">
                <div id="nivoslider" class="slides">	
                    @foreach($sliders as $slider)
                    <img src="{{asset('uploads/slider/'.$slider->image)}}" alt="" title="#slider-1-caption{{$slider->id}}"/>
                    @endforeach
                </div> 
                @foreach($sliders as $slide)
                <div id="slider-1-caption{{$slide->id}}" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="text-content">
                                        <h1 class="title1">{{$slide->title}}</h1>
                                        <p class="sub-title">{{$slide->content}}</p>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="{{$slide->button_link}}">{{$slide->button_name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                @endforeach
            </div>
        </div>
    <!--End of Slider Area-->
    <!--Activity Area Start-->
    <div class="activity-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity">
                        <div class="single-activity-icon">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <h4>Funny Games</h4>
                        <p>Fusce pretium, est at aliquam semper, leo ante facilisis risus in feugiat ipsum augue pellent esque metu.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity">
                        <div class="single-activity-icon">
                            <i class="fa fa-fort-awesome"></i>
                        </div>
                        <h4>Toys</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity mrg-res-top-md">
                        <div class="single-activity-icon">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <h4>Activities</h4>
                        <p>It was popularised in the 1960s with the release of Letraset sheets release containing Lorem Ipsum passages</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity mrg-res-top-md">
                        <div class="single-activity-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <h4>Education</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page looking at layout</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Activity Area-->
    <!--Advertise Area Start-->
    <div class="advertise-area text-center section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>How to <span>Enroll Your Child</span> to a <span>Class</span>?</h2>
                    <a href="#">Join Us</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Advertise Area-->
    <!--Class Area Start-->
    <div class="class-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Classes</h3>
                            <p>Our preschool program has six dedicated classes</p>
                        </div>
                    </div> 
                </div>       
            </div>
            <div class="class-carousel carousel-style-one owl-carousel">
            @foreach($ourclasses as $ourclass)
                <div class="single-class">
                    <div class="single-class-image">
                        <a href="#">
                            <img src="{{asset('uploads/ourclass/'.$ourclass->image)}}" alt=""/>
                            <span class="class-date">Apr 21 <span>2016</span></span>
                        </a>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4><a href="#">{{ $ourclass->title }}Letter Match Class</a></h4>
                            <p>{{ $ourclass->content }}The concept of the activity room is about 'Learning', through play, in a totally different environment. The perfect class for your child with the best.</p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 5 - 6 years</span>
                            <span>CLASS SIZE: 25</span>
                            <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>  
        </div>
    </div>
    <!--End of Class Area-->
    <!--Register Area Start-->
    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="register-info text-center text-sm-start">
                        <h4>GET 100s OF ONLINE <span>COURSES FOR FREE</span></h4>
                        <h1>REGISTER NOW</h1>
                        <div class="timer">
                            <div data-countdown="2020/07/01" class="timer-grid"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="account-form">
                        <div class="register-title">
                            <i class="fa fa-lock"></i>
                            <h4>Create Your Free Account Now !</h4>
                        </div>
                        <form action="#" method="post">
                            <input type="text" placeholder="Your Name *" name="name">
                            <input type="email" placeholder="Email*" name="email">
                            <input type="text" placeholder="Phone *" name="phone">
                            <button type="submit" class="button-default">Get it now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Register Area-->
    <!--Service Area Start-->
    <div class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Services</h3>
                            <p>Our best services for your kids</p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-service-item-wrapper">
                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Meals Provided</h4>
                                <p>Lorem ipsum dolor sit amet cotetur adipisicing elit, sed do mod tempor incididunt ut labore etdolore.</p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-cutlery"></i>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Language Lessons</h4>
                                <p>Quidem laudantium itaque reiciendis inventore. Nobis dolorem, odit ipsam ratione minus quisquam iste.</p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-language"></i>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Transportation</h4>
                                <p>Amet voluptate, aperiam praesentium voluptas eveniet dignissimos nisi commodi, illum fuga sapiente?</p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-bus"></i>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="service-image">
                        <img src="{{asset('frontent-template1')}}/img/banner/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-service-item-wrapper">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="single-service-text">
                                <h4>Full Day Session</h4>
                                <p>Quibusdam harum est praesentium illo ad expedita nihil optio repellat, fugiat obcaecati is sunt.</p>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="fa fa-bookmark"></i>
                            </div>
                            <div class="single-service-text">
                                <h4>Special Education</h4>
                                <p>voluptatem, cupiditate eveniet dolores inventore delectus vel eius molestias tho minus, corporis.</p>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="single-service-text">
                                <h4>Special Education</h4>
                                <p>Et, itaque adipisci blanditiis eaque inventore tempore cum commodi, dicta quisquam similique magnam</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--End of Service Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h2><span class="counter">25</span></h2>
                        <span>Teacher</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <h2><span class="counter">45</span></h2>
                        <span>Campus</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2><span class="counter">55</span></h2>
                        <span>Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor no-margin">
                        <div class="fun-factor-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h2><span class="counter">250</span></h2>
                        <span>Teaching Hours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->
    <!--Teachers Area Start-->
    <div class="teachers-area section-margin">
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="teacher-image">
                        <img src="{{asset('frontent-template1')}}/img/teacher/1.jpg" alt=""/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-image-text-wrapper">
                        <div class="testimonial-image-slider text-center">
                            @foreach($teachers as $teacher)
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                <img src="{{asset('uploads/teacher/'.$teacher->image)}}" alt=""/>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/3.jpg" alt="teacher 2" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/4.jpg" alt="teacher 3" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/5.jpg" alt="teacher 4" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/2.jpg" alt="teacher 1" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/3.jpg" alt="teacher 2" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/4.jpg" alt="teacher 3" />
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('frontent-template1')}}/img/teacher/5.jpg" alt="teacher 4" />
                                </div>
                            </div> -->
                        </div>
                        <div class="testimonial-text-slider">
                            @foreach($teachers as $teacher)
                            <div class="sin-testiText">
                                <h2>{{ $teacher->name }}</h2>
                                <span class="language">Spanish Teacher</span>
                                <div class="teacher-info-container">
                                    <p><i class="fa fa-graduation-cap"></i>Degree: {{ $teacher->degree }}</p>
                                    <p><i class="fa fa-star"></i>Experience: {{ $teacher->experience }}</p>
                                    <p><i class="fa fa-edit"></i>My Courses: {{ $teacher->my_courses }}</p>
                                </div>
                                <p>{{ $teacher->description }}</p>
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            @endforeach
                        
                        </div>   
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!--End of Teachers Area-->
    <!--Gallery Area Start-->
    <div class="gallery-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Gallery</h3>
                            <p>Discove Our Kindergarten Photo Gallery</p>
                        </div>
                    </div> 
                </div>
            </div>
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
            <div class="gallery-row">
                <div class="filter-items row">
                    @foreach($photogallery as $photogaller)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('uploads/photogallery/'.$photogaller->image)}}" alt=""></a> 
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('uploads/photogallery/'.$photogaller->image)}}"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">{{$photogaller->category_id}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play courses overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/2.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/2.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Activities, Photos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/3.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/3.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Play Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play excursions overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/4.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/4.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Excursions, Play</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/5.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/5.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Courses, Exursions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/12.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/6.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Drawing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/6.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/7.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Excursions, Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing excursions overlay-hover">
                        <div class="overlay-effect">
                            <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/10.jpg" alt=""></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="{{asset('frontent-template1')}}/img/gallery/8.jpg"><i class="fa fa-image"></i></a>
                                <span class="gallery-text">Drawing, Exursions</span>
                            </div>
                        </div>
                    </div>                                                -->
                </div>  
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="view-gallery text-center">
                        <h4>See Our Kindergarten <span>Photo Gallery!</span></h4>
                        <a href="#" class="button-default">View Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Gallery Area-->
    <!--Blog Area Start-->
    <div class="blog-area section-padding section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Blog</h3>
                            <p>Latest news &amp; event of our schools</p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="blog-carousel carousel-style-one owl-carousel">
                @foreach($blogs as $blog)
                <div class="single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="#">
                                <img src="{{asset('uploads/blog/'.$blog->image)}}" alt=""/>
                                
                                <span class="class-date">Apr 21 <span>3000</span></span>
                            </a>
                        </div>    
                    </div>
                    <div class="single-blog-text">
                        <h4><a href="blog-details.html">{{$blog->title}}</a></h4>
                        <div class="blog-date">
                            <span><i class="fa fa-calendar"></i>08 Apr, 2016</span>
                        </div>
                        <p>{{$blog->content}}</p>
                        <a href="blog-details.html">Read more.</a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <!--End of Blog Area-->
    <!--Newsletter Area Start-->
    <div class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="newsletter-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <h4>You want to know more <br>
                                infomation? send us a mail!</h4>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <input type="text" name="subject" placeholder="Subject*">
                                <input type="text" name="name" placeholder="Your Name*">
                                <input type="email" name="email" placeholder="Your Email*">
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <textarea name="message" id="newsletter-msg" placeholder="Your Message"></textarea>
                                <button class="button-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End of Newsletter Area-->
    <!--Google Map Area Start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            <div id="googleMap" style="width:100%;height:451px;"></div>
        </div>
    </div>
    <!--End of Google Map Area-->
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