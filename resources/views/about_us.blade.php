@extends("layout.header_wrapper")
@section("body")
    <!-- work Wrapper Start -->
    @if(Auth::guard('candidate')->check())
        <h1>hello there</h1>
        @endif
    <div class="iner_abt_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="about_slider_wrapper float_left">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="about_image">
                                    <img src="images/about1.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="about_image">
                                    <img src="images/about2.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="about_image">
                                    <img src="images/about3.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="about_image">
                                    <img src="images/about2.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-12 col-sm-12 offset-lg-1">
                    <div class="about_text_wrapper">
                        <p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis ndum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit et nibh vulputate cursus a sit amet mauris. This is Photoshop's version of Lorem um. Proin gravida nibh vel velit auctor aliquet.”</p>
                        <h5> - by <span> sarika fenny</span> (Director) </h5>
                        <img src="images/sign.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work Wrapper end -->
    <!-- counter wrapper start-->
    <div class="counter_wrapper jb_cover">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_mockup_design jb_cover">
                        <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                        <img src="images/mockup2.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_right_wrapper jb_cover">
                        <h1>Some Statistical Facts</h1>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"><span class="timer">2500</span>
                                    <p class="con2">happy customers </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9425</span>
                                    <p class="con2">ticket solved</p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9</span><span>+</span>
                                    <p class="con2">average rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!-- job agency Wrapper Start -->
    <div class="job_agency_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="jb_heading_wraper left_jb_jeading">

                        <h3>We Iusto Creative Digital
Agency, We Provide
Professional Web Page.</h3>

                    </div>
                    <div class="grow_next_text agency_main_wrapper jb_cover">
                        <p>What do all consultants need? In short, trust. This is achprofessional presentation and the ability to communicateclearly with existing and potential clients. Whether you are an accountant,What do all consultants need? In short, trust. This is achieved with professional presentation and the ability to communicate.
                            <br>
                            <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut ed minim veniam, quis nostrud dipisicing elit, sed do eiusmod tempor incididunt exercitationlaborum. </p>
                        <div class="header_btn search_btn jb_cover">

                            <a href="#">learn more</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                            <div class="company_main_wrapper">
                                <div class="company_img_wrapper">
                                    <img src="images/cmp3.png" alt="team_img1">
                                    <div class="btc_team_social_wrapper">
                                        <h1>(usa)</h1>
                                    </div>
                                </div>
                                <div class="opening_job">
                                    <h1><a href="#">25 job open</a></h1></div>
                                <div class="company_img_cont_wrapper">
                                    <h4>burger patty</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                            <div class="company_main_wrapper">
                                <div class="company_img_wrapper">
                                    <img src="images/cmp4.png" alt="team_img1">
                                    <div class="btc_team_social_wrapper">
                                        <h1>(usa)</h1>
                                    </div>
                                </div>
                                <div class="opening_job">
                                    <h1><a href="#">04 job open</a></h1></div>
                                <div class="company_img_cont_wrapper">
                                    <h4>Akshay INC.</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="jb_top_jobs_category job_agency_box jb_cover">

                                <h3><a href="#">laravel</a></h3>
                                <img src="images/jb1.png" alt="img">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="jb_top_jobs_category job_agency_box jb_cover">

                                <h3><a href="#">Wordpress</a></h3>
                                <img src="images/jb2.png" alt="img">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="jb_top_jobs_category job_agency_box jb_cover">

                                <h3><a href="#">AngularJS</a></h3>
                                <img src="images/jb3.png" alt="img">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job agency Wrapper end -->
    <!-- team wrapper start-->
    <div class="team_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>Meet Our Expert Team Member</h3>

                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="team_slider_wrapper jb_cover">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="team_slider_content jb_cover">
                                    <div class="team_slider_img_box jb_cover">
                                        <img src="images/team.png" alt="img" class="img-responsive">
                                    </div>
                                    <div class="team_slider_content_btm jb_cover">
                                        <p>(Sr. Advisor)</p>
                                        <h2><a href="#">Reen Scot</a></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="team_slider_content jb_cover">
                                    <div class="team_slider_img_box jb_cover">
                                        <img src="images/team1.png" alt="img" class="img-responsive">
                                    </div>
                                    <div class="team_slider_content_btm jb_cover">
                                        <p>(director)</p>
                                        <h2><a href="#">jonny doe</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_content jb_cover">
                                    <div class="team_slider_img_box jb_cover">
                                        <img src="images/team2.png" alt="img" class="img-responsive">
                                    </div>
                                    <div class="team_slider_content_btm jb_cover">
                                        <p>(Sr. Advisor)</p>
                                        <h2><a href="#">jenny kim</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="team_slider_content jb_cover">
                                    <div class="team_slider_img_box jb_cover">
                                        <img src="images/team4.png" alt="img" class="img-responsive">
                                    </div>
                                    <div class="team_slider_content_btm jb_cover">
                                        <p>(Sr. Advisor)</p>
                                        <h2><a href="#">sunita A.</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team wrapper end-->
    <!-- job rivew wrapper start-->
    <div class="job_rivew_wrapper jb_cover">
        <div class="job_rivew_img">
            <img src="images/mockup3.png" alt="img">
        </div>
        <div class="job_rivew_testimonial">
            <div class="jb_heading_wraper left_rivew_heading">

                <h3>our job rivew</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    <br> sed do eiusmod tempor incididunt </p>
            </div>
            <div class="rivew_testimonial_slider jb_cover">
                <div class="owl-carousel owl-theme">
                    <div class="item">

                        <div class="jb_saying_content_wrapper jb_cover">
                            <div class="saying_img">
                                <img src="images/testi.png" alt="img">
                            </div>
                            <div class="rating_star"><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i class="flaticon-star"></i><i class="flaticon-star"></i></div>

                            <p>“ I don't always clap, but when I do, it'sbecause of Sella. We can't understandhow we've been Sella. ”</p>
                            <div class="jb_saying_img_name">
                                <h1><a href="#">Marita Irene</a></h1>
                                <p>Support Manager @ Echo</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="jb_saying_content_wrapper jb_cover">
                            <div class="saying_img">
                                <img src="images/testi1.png" alt="img">
                            </div>
                            <div class="rating_star"><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i class="flaticon-star"></i><i class="flaticon-star"></i></div>
                            <p>“ I don't always clap, but when I do, it'sbecause of Sella. We can't understandhow we've been Sella. ”</p>
                            <div class="jb_saying_img_name">
                                <h1><a href="#">Marita Irene</a></h1>
                                <p>Support Manager @ Echo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job rivew wrapper end-->

@endsection
