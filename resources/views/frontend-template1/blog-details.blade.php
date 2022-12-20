@extends('frontend-template1.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])


@section('content')
        <!--End of Header Area-->
        <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Blog</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Blog Details Area Start-->
        <div class="blog-details-area section-padding blog-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog-post-wrapper">
                            <div class="blog-post-details">
                                <h1>New Friends Everyday at Kiddie</h1>
                                <span><i class="fa fa-calendar"></i>May 9, 2016/ By: Admin</span>
                            </div>
                            <div class="blog-post-details-img">
                                <img src="{{asset('frontent-template1')}}/img/blog/7.jpg" alt="">
                            </div>
                            <div class="blog-post-details-text">
                                <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <h4>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                <h4>1914 translation by H. Rackham</h4>
                                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            </div>   
                            <div class="single-title">
                                <h3>Related Posts</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="single-blog-item overlay-hover">
                                        <div class="single-blog-image">
                                            <div class="overlay-effect">
                                                <a href="#">
                                                    <img src="{{asset('frontent-template1')}}/img/blog/1.jpg" alt="">
                                                    <span class="class-date">Dec 21 <span>2015</span></span>
                                                </a>
                                            </div>    
                                        </div>
                                        <div class="single-blog-text">
                                            <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                                            <div class="blog-date">
                                                <span><i class="fa fa-calendar"></i>08 Apr, 2016</span>
                                            </div>
                                            <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                            <a href="blog-details.html">Read more.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="single-blog-item overlay-hover">
                                        <div class="single-blog-image">
                                            <div class="overlay-effect">
                                                <a href="#">
                                                    <img src="{{asset('frontent-template1')}}/img/blog/2.jpg" alt="">
                                                    <span class="class-date">Jan 24 <span>2016</span></span>
                                                </a>
                                            </div>    
                                        </div>
                                        <div class="single-blog-text">
                                            <h4><a href="blog-details.html">Swimming Lessons at the New</a></h4>
                                            <div class="blog-date">
                                                <span><i class="fa fa-calendar"></i>27 Jan, 2014</span>
                                            </div>
                                            <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                            <a href="blog-details.html">Read more.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="single-blog-item overlay-hover">
                                        <div class="single-blog-image">
                                            <div class="overlay-effect">
                                                <a href="#">
                                                    <img src="{{asset('frontent-template1')}}/img/blog/3.jpg" alt="">
                                                    <span class="class-date">May 18 <span>2016</span></span>
                                                </a>
                                            </div>    
                                        </div>
                                        <div class="single-blog-text">
                                            <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                                            <div class="blog-date">
                                                <span><i class="fa fa-calendar"></i>30 Feb, 2015</span>
                                            </div>
                                            <p>The concept of the activity room is about 'Learning', through play, in a totally different environment.</p>
                                            <a href="blog-details.html">Read more.</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="single-widget-item">
                            <div class="single-title">
                                <h3>All Classes</h3>
                            </div>
                            <div class="single-widget-container">
                                <ul class="sidebar-categories">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Drawing</a></li>
                                    <li><a href="#">Color</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Children</a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget-item">
                            <div class="single-title">
                                <h3>Recent Classes</h3>
                            </div>
                            <div class="single-widget-container">
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/15.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4><a href="#">Alphabet Match Class</a></h4>
                                        <span><i class="fa fa-calendar"></i>March 25, 2016</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/16.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4><a href="#">Cool Math Class</a></h4>
                                        <span><i class="fa fa-calendar"></i>April 23, 2016</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/17.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4><a href="#">Color Match Class</a></h4>
                                        <span><i class="fa fa-calendar"></i>July 12, 2016</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#"><img src="{{asset('frontent-template1')}}/img/gallery/18.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4><a href="#">Letter Match Class</a></h4>
                                        <span><i class="fa fa-calendar"></i>June 29, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget-item hidden-sm">
                            <div class="single-widget-container">
                                <a href="#">
                                    <img src="{{asset('frontent-template1')}}/img/banner/11.jpg" alt="">
                                    <span>Enroll Your Child</span>
                                </a>
                            </div>
                        </div>  
                        <div class="single-widget-item">
                            <div class="single-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="single-widget-container">
                                <ul class="tag-list">                  
                                    <li><a href="#">Art Class</a></li>
                                    <li><a href="#">Class</a></li>
                                    <li><a href="#">Letter</a></li>
                                    <li><a href="#">Sport Class</a></li>
                                    <li><a href="#">Learn</a></li>
                                    <li><a href="#">Color</a></li>
                                    <li><a href="#">Language</a></li>
                                    <li><a href="#">Paint</a></li>
                                    <li><a href="#">Letter</a></li>
                                    <li><a href="#">Paint Class</a></li>
                                    <li><a href="#">Toys</a></li>
                                    <li><a href="#">Color</a></li>
                                </ul>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!--End of Blog Details Area-->
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