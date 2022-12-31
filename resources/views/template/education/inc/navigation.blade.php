<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                
                <div class="">
                    <div class="header-login-register ">
                        <ul class="login">
                            <li>
                                <a href="#"><i class="fa fa-key"></i>Login</a>
                                <div class="login-form">
                                    <h4>Login</h4>
                                    <form action="#" method="post">
                                        <div class="form-box">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="user-name" placeholder="Username">
                                        </div>
                                        <div class="form-box">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="user-password" placeholder="Password">
                                        </div>
                                        <div class="button-box">
                                            <button type="submit" class="login-btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <ul class="register">
                            <li>
                                <a href="#"><i class="fa fa-lock"></i>Sign Up</a>
                                <div class="register-form">
                                    <h4>Sign Up</h4>
                                    <span>Please sign up using account detail bellow.</span>
                                    <form action="#" method="post">
                                        <div class="form-box">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="user-name" placeholder="Username">
                                        </div>
                                        <div class="form-box">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="user-password" placeholder="Password">
                                        </div>
                                        <div class="form-box">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="user-email" placeholder="Email">
                                        </div>
                                        <div class="button-box">
                                            <input checked data-toggle="toggle" type="checkbox">
                                            <span>Remember me</span>
                                            <button type="submit" class="register-btn">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu sticker">
        <div class="container">
            <div class="logo-menu-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('frontent-template1')}}/img/logo/logo.png" alt="TECHEDU"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current"><a href="{{url('/education/home')}}">Home </a>
                                        </li>
                                        <li><a href="{{url('/education/about')}}">About us</a></li>
                                        <li><a href="class-grid.html">Classes <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('/education/blog-details')}}">Classes Grid</a></li>
                                                <li><a href="{{url('/education/class-grid')}}">Classes List</a></li>
                                                <li><a href="{{url('/education/class-list')}}">Class Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/education/teacher')}}">Teachers<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('/education/teachers-info')}}">Teachers Info</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/education/gallery')}}">Gallery</a></li>
                                        <li><a href="index.html">Pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('/education/about')}}">About Us</a></li>
                                                <li><a href="{{url('/education/blog')}}">Blog Page</a></li>
                                                <li><a href="{{url('/education/blog-details')}}">Blog Details Page</a></li>
                                                <li><a href="{{url('/education/class-grid')}}">Class Grid</a></li>
                                                <li><a href="{{url('/education/class-list')}}">Class List</a></li>
                                                <li><a href="{{url('/education/class-details')}}">Class Details</a></li>
                                                <li><a href="{{url('/education/teacher')}}">Teachers Page</a></li>
                                                <li><a href="{{url('/education/teachers-info')}}">Teachers Info</a></li>
                                                <li><a href="{{url('/education/gallery')}}">Gallery</a></li>
                                                <li><a href="{{url('/education/contact')}}">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('/education/blog-details')}}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/education/contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-search">
                                <li class="search-menu">
                                    <i id="toggle-search" class="fa fa-search"></i>
                                </li>
                            </ul>
                            <!--Search Form-->
                            <div class="search">
                                <div class="search-form">
                                    <form id="search-form" action="#">
                                        <input type="search" placeholder="Search here..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>                                
                                </div>
                            </div>
                            <!--End of Search Form-->
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">HOME</a>
                                    <ul>
                                        <li><a href="index-2.html">Homepage Version 2</a></li>
                                        <li><a href="index-3.html">Homepage Version 3</a></li>
                                        <li><a href="index-4.html">Homepage Version 4</a></li>
                                        <li><a href="index-5.html">Homepage Version 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/education/about')}}">About Us</a></li>
                                <li><a href="class-grid.html">Classes</a>
                                    <ul>
                                        <li><a href="{{url('/education/class-grid')}}">Classes Grid</a></li>
                                        <li><a href="{{url('/education/class-list')}}">Classes List</a></li>
                                        <li><a href="{{url('/education/class-list')}}">Class Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/education/teacher')}}">Teachers Page</a>
                                    <ul>
                                        <li><a href="{{url('/education/teachers-info')}}">Teachers Info</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="blog.html">Blog Page</a>
                                    <ul>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->  
</header>