
@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

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
    <!--About Area Start-->
    <div class="about-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Who we are</h3>
                            <p>Fable daycare, preschool, and kindergarten</p>
                        </div>
                    </div> 
                </div>       
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text-container">
                        <p><span>Well come to Techedu</span> come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people. They are taught the values and responsibilities needed to become active members of the community, tolerance and develop something which the modern world is desperate for norem ipsum dolor sit amet desperate.<br>
                        Adipiscing signiferumque vix et. No alii docendi usu, pri graeco possim percipit ne.</p>
                        <div class="about-us">
                            <span>Nam gravida magna vitae ante dignissim</span>
                            <span>Duis rhoncus lectus at velit hendrerit quis</span>
                            <span>Sed fringilla tempor arcu feugiat risus</span>
                            <span>Vivamus semper odio in nibh ultricies</span>
                        </div>    
                        <p>Snos trud exerci tation ullorper suscipit lobo maeisrn roester maeoirqs iserrtis nisl ut aliq poerwse thesr oper balinp asein hoinws mawsoib equat. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more tolerance and develop obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through makin of the word in classical literature.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-image">
                        <img src="{{asset('frontent-template1')}}/img/banner/7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Area-->
    <!--Skill And Experience Area Start-->
    <div class="skill-and-experience-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Skills and Experience</h3>
                            <p>Fable daycare, preschool, and kindergarten</p>
                        </div>
                    </div> 
                </div>       
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="experience-skill-wrapper">
                        <div class="skill-bars orange">
                            <div class="skill-bar-item">
                                <span>Playing Science</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>Arts And Craft</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">75%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>Creative Writing</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>English Lessons</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">70%</span>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>    
                </div>
                <div class="col-lg-6">
                    <div class="experience-skill-wrapper">
                        <div class="skill-bars orange">
                            <div class="skill-bar-item">
                                <span>Arts And Craft</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">75%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>Creative Writing</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>Playing Science</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-bar-item">
                                <span>English Lessons</span>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                        <span class="text-top">100%</span>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>    
                </div>
            </div>
        </div>
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
        </div>
    </div>
    <!--End of Teachers Column Carousel-->
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
