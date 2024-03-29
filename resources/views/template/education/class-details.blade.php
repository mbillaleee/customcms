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
                                <li>Class Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Class Details Area Start-->
    <div class="class-details-area section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="class-details-container">
                        <h1>Letter Match Class</h1>
                        <div class="class-details-carousel carousel-style-one owl-carousel">
                            <img src="{{asset('frontent-template1')}}/img/class/13.jpg" alt="">
                            <img src="{{asset('frontent-template1')}}/img/class/14.jpg" alt="">
                            <img src="{{asset('frontent-template1')}}/img/class/15.jpg" alt="">
                            <img src="{{asset('frontent-template1')}}/img/class/13.jpg" alt="">
                        </div>
                    </div>
                    <div class="class-details-tab">
                        <div class="class-details-tab-menu">
                            <ul role="tablist" class="nav nav-tabs">
                                <li role="presentation"><a class="active" data-bs-toggle="tab" role="tab" aria-controls="overview" href="#overview"><i class="fa fa-graduation-cap"></i>Overview</a></li>
                                <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="schedule" href="#schedule"><i class="fa fa-calendar"></i>Week Courses Schedule</a></li>
                                <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="comments" href="#comments"><i class="fa fa-comments"></i>Comments(2)</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content">
                            <div id="overview" class="tab-pane active" role="tabpanel">
                                <h3>COURSE DESCRIPTION</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <h3>CERTIFICATION</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <h3>LEARNING OUTCOMES</h3>
                                    <div class="tab-info">
                                        <span class="icon">Over 37 lectures and 55.5 hours of content!</span>
                                        <span class="icon">LIVE PROJECT End to End Software Testing Training Included.</span>
                                        <span class="icon">Learn Software Testing and Automation basics from a professional trainer from your own desk.</span>
                                        <span class="icon">Information packed practical training starting from basics to advanced testing techniques.</span>
                                        <span class="icon">Best suitable for beginners to advanced level users and who learn faster when demonstrated.</span>
                                        <span class="icon">Course content designed by considering current software testing technology and the job market.</span>
                                        <span class="icon">Practical assignments at the end of every session.</span>
                                        <span class="icon">Practical learning experience with live project work and examples.</span>
                                    </div>  
                            <p>Pellentesque lacus vamus lorem arcu semper duiac Cras ornare arcu avamus nda leo. Etiam ind arcu. Morbi justo mauri segtempus pharetra interdum congue semper purus. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed eiusmod tempor incididunt Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div id="schedule" class="tab-pane" role="tabpanel">
                                <h3>Weekly Courses Schedule For High School</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum officia unde quas dolorum inventore voluptatem fugiat neque! Sunt ad harum dolores voluptatem libero, tempore fugit perspiciatis commodi voluptas, nesciunt quibusdam voluptatibus, dolor minima inventore accusantium sed aliquam, sint nihil cumque consectetur. Optio exercitationem tempora deleniti. Laborum et distinctio voluptas, rerum.</p>			
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td><div>Mon &amp; Wed</div></td>
                                                <td><div>Tues &amp; Thurs</div></td>
                                                <td><div>Mon, Wed or Thurs</div></td>
                                                <td><div>Friday</div></td>
                                                <td><div>Friday</div></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="sub-title"><div>1 hr 15 min <span>twice per week</span></div></td>
                                                <td class="sub-title"><div>1 hr 15 min <span>twice per week</span></div></td>
                                                <td class="sub-title"><div>2 hr 30 min <span>once per week</span></div></td>
                                                <td class="sub-title"><div>2 hr 30/45 min* <span>once per week</span></div></td>
                                                <td class="sub-title"><div>2 hr 45 min* <span>once per week</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div>8:00am - 9:15am</div></td>
                                                <td><div>8:00am - 9:15am</div></td>
                                                <td><div>8:00am - 10:30am</div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><div>9:30am - 10:45am</div></td>
                                                <td><div>9:30am - 10:45am</div></td>
                                                <td></td>
                                                <td><div>9:30am - 12:15pm</div></td>
                                                <td><div>9:30am - 12:15pm</div></td>
                                            </tr>
                                            <tr>
                                                <td><div>11:00am - 12:15pm</div></td>
                                                <td><div>11:00am - 12:15pm</div></td>
                                                <td><div>11:00am - 1:30pm</div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><div>12:30pm - 1:45pm</div></td>
                                                <td><div>12:30pm - 1:45pm</div></td>
                                                <td></td>
                                                <td><div>12:30pm - 3:15pm </div></td>
                                                <td><div>12:30pm - 3:15pm </div></td>
                                            </tr>
                                            <tr>
                                                <td><div>2:00pm - 3:15pm</div></td>
                                                <td><div>2:00pm - 3:15pm</div></td>
                                                <td><div>2:00pm - 4:30pm</div></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><div>3:30pm - 6:00pm</div></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><div>4:30pm - 5:45pm</div></td>
                                                <td><div>4:30pm - 5:45pm</div></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Dolores, a magni nostrum deleniti voluptatem libero at, maiores nisi rem perspiciatis ipsa aliquam aspernatur. Totam mollitia perferendis veniam porro eligendi rem et laborum, corporis. Asperiores temporibus delectus aliquam aspernatur obcaecati laborum in officiis maxime ex, doloremque optio cumque</p>
                            </div>
                            <div id="comments" class="tab-pane" role="tabpanel">
                                <h3>What parents said about Techedu in our 2016 survey…</h3>
                                    <span>"A lovely school with a small school feeling."</span>
                                    <span>"We are very happy as parents that our son is happy at the school and enjoys coming to school."</span> 
                                    <span>"My children have made fantastic progress at Hareside, my sincerest thanks to all involved."</span>
                                    <span>"I am as ever very impressed with the school."</span>

                                    <span>"The school has been massively supporting of my child through difficulties faced due to health problems."</span>
                                    <span>"Both of our children are happy and settled and enjoy coming to school. The staff are fantastic and genuinely care about the pupils and their progress. We would always recommend the school as it has developed both of our girls emotionally and socially as well as educating them to the curriculum."</span>
                                    <span>"I am very pleased with every aspect of the school and the opportunities it provides. Excellent school with excellent teachers / teaching. I can't thank the school enough for all the support given to students and students during the past 18 months."</span>
                                    <span>"Can't comment on how effectively the school deals with bullying as I've not had any experience - I do however think that it would be dealt with in the same manner they deal with everything else – well!"</span>
                                    <span>"Fantastic school, fantastic staff - outstanding!"</span>
                                    <span>"Hareside is a fantastic school and I am very happy with everything about it."</span>
                                    <span>"Highly recommend Hareside. My child has had a great encouragement and teaching all the way to Y6."</span>
                                    <span>"students is extremely happy at school and I really appreciate all the extra help and support he receives."</span>
                                    <span>"students is my third child at this school and I find the staff friendly and approachable and warm reception and overall feel happy that my boys had the chance to learn here."</span>
                                    <span>"I am very happy with students 's progress and he seems to really enjoy school."</span>
                                    <span>"students has made great progress and has settled well and made good friends."</span>
                                    <span>"A school where our child thrives in both the social and educational environment."</span>
                                    <span>"My son is always happy to come into school and tells me he really likes his teacher. He has progressed well this year."</span>

                                    <span>"students has settled into nursery with no problems at all. I couldn't be happier!"</span>
                                    <span>"Fab! Loving Hareside. Great teachers, great support."</span>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="single-widget-item">
                        <div class="single-title">
                            <h3>Info Classes</h3>
                        </div>
                        <div class="single-widget-container">
                            <ul class="class-infos">
                                <li><i class="fa fa-calendar"></i>Start Date: June 15, 2016</li>
                                <li><i class="fa fa-birthday-cake"></i>Years Old: 2-5 Years</li>
                                <li><i class="fa fa-bank"></i>Class Size: 30</li>
                                <li><i class="fa fa-clock-o"></i>Class Duration: 10:00 am - 1:00 pm</li>
                                <li><i class="fa fa-bus"></i>Transportation: Available</li>
                                <li><i class="fa fa-cutlery"></i>Morning Foods: Included</li>
                                <li><i class="fa fa-users"></i>Class Starff: 2 Teachers, 3 Caretakers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget-item">
                        <div class="single-title">
                            <h3>Teachers</h3>
                        </div>
                        <div class="single-widget-container">
                            <div class="teacher-info-widget">
                                <div class="widget-image">
                                    <a href="#"><img src="{{asset('frontent-template1')}}/img/teacher/img-1.jpg" alt=""></a>
                                </div>
                                <div class="widget-infos">
                                    <h4><a href="#">Graves</a></h4>
                                    <p>Professor, Harvard College</p>
                                </div>
                            </div>
                            <div class="teacher-info-widget">
                                <div class="widget-image">
                                    <a href="#"><img src="{{asset('frontent-template1')}}/img/teacher/img-2.jpg" alt=""></a>
                                </div>
                                <div class="widget-infos">
                                    <h4><a href="#">Poppy</a></h4>
                                    <p>Professor, Harvard College</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget-item">
                        <div class="single-title">
                            <h3>Register Classes</h3>
                        </div>
                        <div class="single-widget-container">
                            <form action="#" method="post">
                                <input type="text" name="class" placeholder="Class Name">
                                <input type="text" name="name" placeholder="Your Name">
                                <input type="email" name="email" placeholder="Your Email">
                                <textarea name="Message" placeholder="Message"></textarea>
                                <button type="submit" class="button-default button-yellow">Send</button>
                            </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    <!--End of Class Details Area-->
    <!--Class Area Start-->
    <div class="class-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-title">
                        <h3>Register Classes</h3>
                    </div>
                </div>
            </div>
            <div class="class-carousel carousel-style-one owl-carousel">
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
                <div class="single-class">
                    <div class="single-class-image">
                        <a href="#">
                            <img src="{{asset('frontent-template1')}}/img/class/12.jpg" alt="">
                            <span class="class-date">FEB 19 <span>2016</span></span>
                        </a>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4><a href="#">Alphabet Matching Class</a></h4>
                            <p>The concept of the activity room is about 'Learning', through play, in a totally different environment. The perfect class for your child with the best.</p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 3 - 4 years</span>
                            <span>CLASS SIZE: 50</span>
                            <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                        </div>
                    </div>
                </div>
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
                            <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem ipsum dolor sit amet. The perfect class for your child with the best.</p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 5 - 6 years</span>
                            <span>CLASS SIZE: 25</span>
                            <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!--End of Class Area-->
    <!--Footer Area Start-->
    <div class="footer-area">
    {!! $footer_area->content !!}
    </div>
    <!--End of Footer Area-->
@endsection