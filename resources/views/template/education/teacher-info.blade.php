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
                                <li>Teacher Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Teacher Details Area Start-->
    <div class="teacher-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="teacher-details-image">
                        <img src="{{asset('frontent-template1')}}/img/teacher/7.jpg" alt="">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="teacher-details-info">
                        <h4>graves</h4>
                        <span>Professor, Harvard College</span>
                        <div class="teacher-info-text">
                            <span><i class="fa fa-phone"></i>Phone: +1 (000) 234 5670 | +0800 12345</span>
                            <span><i class="fa fa-envelope"></i>Email: admin@power-boosts.com</span>
                            <span><i class="fa fa-skype"></i>Skype: power-boosts</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="teacher-about-info">
                        <div class="single-title">
                            <h3>About</h3>
                        </div>
                        <div class="teacher-info-text">
                            <span><i class="fa fa-graduation-cap"></i>Degree: Spanish Literature Master</span>
                            <span><i class="fa fa-star"></i>Experience: 5 Years in Preschool Education</span>
                            <span><i class="fa fa-heart"></i>Hobbies: Music, Dancing and Family</span>
                            <span><i class="fa fa-edit"></i>My Courses: Paint Kiddie, Mini Kiddie</span>
                            <span><i class="fa fa-bookmark"></i>Projects: Map Creation</span>
                        </div>
                        <p>He works in partnership with clients, advising them how to use information technology in order to meet their business objectives or overcome problems. Lorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.</p>
                    </div>
                    <div class="schedule-skill-wrapper section-padding-bottom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-title">
                                    <h3>My Schedule</h3>
                                </div>
                                <div class="schedule-text"> 
                                    <span>Monday <span class="schedule-time">9AM - 3PM</span></span>   
                                    <span>Tuesday <span class="schedule-time">9AM - 3PM</span></span>   
                                    <span>Wednesday <span class="schedule-time">8AM - 2PM</span></span>   
                                    <span>Thursday <span class="schedule-time">8AM - 2PM</span></span>   
                                    <span>Friday <span class="schedule-time">9AM - 3PM</span></span>   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-title">
                                    <h3>My Skills</h3>
                                </div>
                                <div class="skill-bars orange">
                                    <div class="skill-bar-item">
                                        <span>Language</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">80%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Drawing</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Paint</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">100%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item">
                                        <span>Music</span>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">85%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-bar-item no-margin">
                                        <span>Sport</span>
                                        <div class="progress no-margin">
                                            <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span class="text-top">70%</span>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-title">
                                <h3>My Classes</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-class">
                                <div class="single-class-image">
                                    <a href="#">
                                        <img src="{{asset('frontent-template1')}}/img/class/10.jpg" alt="">
                                        <span class="class-date">Apr 21 <span>2016</span></span>
                                    </a>
                                </div>
                                <div class="single-class-text">
                                    <div class="class-des">
                                        <h4><a href="#">Letter Match Class</a></h4>
                                        <p>The concept of the activity room is about 'Learning', through play, in a totally different environment. The perfect class for your child with the best.</p>
                                    </div>
                                    <div class="class-schedule">
                                        <span>AGE: 5 - 6 years</span>
                                        <span>CLASS SIZE: 25</span>
                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-class">
                                <div class="single-class-image">
                                    <a href="#">
                                        <img src="{{asset('frontent-template1')}}/img/class/11.jpg" alt="">
                                        <span class="class-date">OCT 10 <span>2016</span></span>
                                    </a>
                                </div>
                                <div class="single-class-text">
                                    <div class="class-des">
                                        <h4><a href="#">Cool Math Class</a></h4>
                                        <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem ipsum dolor sit amet. The perfect class for your child with the best.</p>
                                    </div>
                                    <div class="class-schedule">
                                        <span>AGE: 4 - 5 years</span>
                                        <span>CLASS SIZE: 38</span>
                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Teacher Details Area-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->     
@endsection








