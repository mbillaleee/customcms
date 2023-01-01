@extends('template.education.inc.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])


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
    <!--Class List Area Start-->
    <div class="class-list-area section-padding">
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
                <div class="col-xl-9 col-lg-8">
                @foreach($ourclasslists as $ourclasslist)
                    <div class="class-list-item">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6">
                            <img src="{{asset('uploads/ourclass/'.$ourclasslist->image)}}" alt=""/>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <div class="class-list-text">
                                    <h3><a href="#">{{$ourclasslist->title}}</a></h3>
                                    <div class="class-information">
                                        <span>Age: {{$ourclasslist->age_range}}</span>
                                        <span>Class Size: {{$ourclasslist->class_size}}</span>
                                        <span>Start Date: {{$ourclasslist->class_date}}</span>
                                    </div>
                                    <p>{{$ourclasslist->content}} </p>
                                    <a href="#" class="button-default">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
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
                <div class="col-xl-3 col-lg-4">
                    <div class="single-widget-item res-mrg-top-xs">
                        <div class="single-title">
                            <h3>All Classes</h3>
                        </div>
                        <div class="single-widget-container">
                            <ul class="sidebar-categories class">
                                <li><a href="#">Art Class</a></li>
                                <li><a href="#">Sports Class</a></li>
                                <li><a href="#">Math Class</a></li>
                                <li><a href="#">Science Class</a></li>
                                <li><a href="#">History Class</a></li>
                                <li><a href="#">Paint Class</a></li>
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
    <!--End of Class List Area-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->        
@endsection