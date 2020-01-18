@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_listing_left_fullwidth jb_cover">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="jp_job_post_side_img">
                            <img src="images/ws.png" alt="post_img">

                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4>Webstrot Technology</h4>

                            <ul>
                                <li><i class="fas fa-suitcase"></i>&nbsp; Software Firm</li>
                                <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                            <div class="header_btn search_btn jb_cover">

                                <a href="#">view profile</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img">
                    <i class="fas fa-book"></i>

                </div>
                <div class="emp_job_side_text">
                    <h1>360</h1>
                    <p>job posted</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img ress">
                    <i class="fas fa-user"></i>

                </div>
                <div class="emp_job_side_text">
                    <h1>590</h1>
                    <p>shortlisted resume</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img greens">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="emp_job_side_text">
                    <h1>11,200</h1>
                    <p>total page view</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img parts">
                    <i class="fas fa-envelope-open-text"></i>

                </div>
                <div class="emp_job_side_text">
                    <h1>1,608</h1>
                    <p>total applications</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> view graph</h1>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="sales-chart">
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> company overview</h1>
                </div>
                <div class="job_overview_header jb_cover">

                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="far fa-calendar"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>categories:</li>
                                <li>Design & Creative</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>Location:</li>
                                <li>Los Angeles Califonia PO</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>Hotline::</li>
                                <li>0145636941:</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>email:</li>
                                <li><a href="#">webstrot@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="flaticon-man-user"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>compant size:</li>
                                <li>20-50</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>website:</li>
                                <li><a href="#">www.webstrot.com</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> our location</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div id='map'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> social profile</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> recent applicants</h1>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                            <div class="jp_job_post_side_img">
                                <img src="images/rc1.png" alt="post_img">

                            </div>
                            <div class="jp_job_post_right_cont">
                                <h4>aradhya s.</h4>

                                <ul>
                                    <li>app designer</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                <div class="header_btn search_btn appbtn jb_cover">

                                    <a href="#">send</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                            <div class="jp_job_post_side_img">
                                <img src="images/rc2.png" alt="post_img">

                            </div>
                            <div class="jp_job_post_right_cont">
                                <h4>akshay s.</h4>

                                <ul>
                                    <li>app designer</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                <div class="header_btn search_btn appbtn jb_cover">

                                    <a href="#">send</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                            <div class="jp_job_post_side_img">
                                <img src="images/rc3.png" alt="post_img">

                            </div>
                            <div class="jp_job_post_right_cont">
                                <h4>shruti s.</h4>

                                <ul>
                                    <li>app designer</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                <div class="header_btn search_btn appbtn jb_cover">

                                    <a href="#">send</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                            <div class="jp_job_post_side_img">
                                <img src="images/rc4.png" alt="post_img">

                            </div>
                            <div class="jp_job_post_right_cont">
                                <h4>simona A.</h4>

                                <ul>
                                    <li>UI designer</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                <div class="header_btn search_btn appbtn jb_cover">

                                    <a href="#">send</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> activity</h1>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>Dobrick published an article
</h4>

                                <ul>
                                    <li>2 hours ago</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>Dobrick published an article
</h4>

                                <ul>
                                    <li>2 hours ago</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>Someone bookmarked you
</h4>

                                <ul>
                                    <li>2 hours ago</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>Your Resume Updated!
</h4>

                                <ul>
                                    <li>2 hours ago</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
