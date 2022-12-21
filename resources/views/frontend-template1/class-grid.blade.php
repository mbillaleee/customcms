@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])


@section('content')
    <!--End of Header Area-->
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Classes</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Classes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Class Grid Area Start-->
    <div class="class-grid-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="class-menu">
                        <div class="class-icon">
                            <a href="class-grid.html" class="active"><i class="fa fa-th-large"></i></a>
                        </div>
                        <div class="class-icon">
                            <a href="class-list.html"><i class="fa fa-bars"></i></a>
                        </div>  
                        <div class="search-container">
                            <form action="#" method="post">
                                <input type="text" placeholder="Search our classes" />
                                <button class="submit"><i class="fa fa-search"></i></button>
                            </form>                               
                        </div>  
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/1.jpg" alt="">
                                <span class="class-date">Apr 21 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Letter Match Class</a></h4>
                                <p>Labore sequi impedit expedita alias dolore, nulla consequuntur tempore at voluptatibus fugit quo nihil fugiat!  alias ut delectus cupiditate voluptatum.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 5 - 6 years</span>
                                <span>CLASS SIZE: 25</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">    
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/5.jpg" alt="">
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
                <div class="col-lg-4 col-md-6">    
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/12.jpg" alt="">
                                <span class="class-date">Nov 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Awsome Drawing Class</a></h4>
                                <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem dolor sit amet. The perfect class for your child with the best.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 4 - 5 years</span>
                                <span>CLASS SIZE: 38</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/7.jpg" alt="">
                                <span class="class-date">OCT 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Cool Activity Class</a></h4>
                                <p>Lorem ipsum dolor sit amet, abconsectetur adipisicing elit. Sunt quasi molestiae ipsa ullam perferendis student est magnam nobis vel laborum.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 4 - 5 years</span>
                                <span>CLASS SIZE: 38</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/2.jpg" alt="">
                                <span class="class-date">FEB 19 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Alphabet Matching Class</a></h4>
                                <p>Fuga animi vel cumque officiis provident, quam, odit libero perferendis, itaque odio rem culpa ab a maxime quas quos illo quod</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 3 - 4 years</span>
                                <span>CLASS SIZE: 50</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/3.jpg" alt="">
                                <span class="class-date">Mar 22 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Alphabet Matching Class</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum incidunt quo voluptatem id dicta ea similique blanditiis nihi</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 7 - 8 years</span>
                                <span>CLASS SIZE: 20</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/4.jpg" alt="">
                                <span class="class-date">FEB 19 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Drawing Class</a></h4>
                                <p>Minima ipsa possimus voluptatum is consequatur aperiam fuga beatae iusto et quod expedita, numquam sit, accusantium non expedita!</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 5 - 6 years</span>
                                <span>CLASS SIZE: 12</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/13.jpg" alt="">
                                <span class="class-date">May 13 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Science Class</a></h4>
                                <p>Suscipit qui eum non, vel doloremque placeat, consequuntur explicabo tempore eius! Numquam amet exercit accusamus praesentium.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 10 - 11 years</span>
                                <span>CLASS SIZE: 45</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('frontent-template1')}}/img/gallery/6.jpg" alt="">
                                <span class="class-date">Feb 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Science Class</a></h4>
                                <p>Suscipit qui eum non, vel doloremque placeat, consequuntur explicabo tempore eius! Numquam amet exercit accusamus praesentium.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 2 - 3 years</span>
                                <span>CLASS SIZE: 15</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-content">
                        <div class="pagination-button">
                            <ul class="pagination">
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                            <span>Page:</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Class Grid Area-->
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