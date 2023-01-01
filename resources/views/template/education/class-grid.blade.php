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
                @foreach($ourclasses as $ourclass)
                <div class="col-lg-4 col-md-6">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{asset('uploads/ourclass/'.$ourclass->image)}}" alt=""/>
                                <span class="class-date">Apr 21 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">{{$ourclass->title}}</a></h4>
                                <p>{{$ourclass->content}}</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: {{$ourclass->age_range}}</span>
                                <span>CLASS SIZE: {{$ourclass->class_size}}</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
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
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->
@endsection