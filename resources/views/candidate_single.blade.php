@extends("layout.header_cand")
@section("left_content")
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img src="{{$candidate->photo!==null ? asset('storage/'.$candidate->photo) : asset('/images/blank-profile-pic.png')}}" alt="post_img">

                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4>{{$candidate->civilite!==null ? $candidate->civilite : "Mr"}} {{$candidate->nom!==null ? $candidate->nom :"Name"}} {{$candidate->prenom!==null ? $candidate->prenom:"Surname"}}</h4>

                                            <ul>
                                                <li><i class="fas fa-suitcase"></i>&nbsp; Software Firm</li>
                                                <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                                            <div class="header_btn search_btn jb_cover">

                                                <a href="{{route('profile')}}">view resume</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> basic information</h1>
                                </div>
                                <div class="job_overview_header jb_cover">

                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>job description:</li>
                                                <li>Graphic Designer</li>
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
                                                <li>{{$candidate->adresse!==null ? $candidate->adresse :  "Not mentioned"}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>phone:</li>
                                                <li>{{$candidate->Tel!==null ? $candidate->Tel : "Not mentioned"}}</li>
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
                                                <li><a href="#">{{$candidate->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>LinkedIn:</li>
                                                <li><a href="#">{{$candidate->in!==null ? $candidate->in : "Not mentioned"}}</a></li>
                                            </ul>
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
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> our location</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div id="map">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img">
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>260</h1>
                                            <p>applied jobs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img greens">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>11,200</h1>
                                            <p>companies viewed</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img parts">
                                            <i class="fas fa-envelope-open-text"></i>

                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>1,608</h1>
                                            <p>favourite jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> recent activity</h1>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="activity_app">
                                                <i class="fas fa-angle-right"></i>
                                            </div>
                                            <div class="activity_logos">
                                                <h4>Our Resume Updated!Dobrick published an article</h4>
                                                <ul>
                                                    <li>5 hours ago</li>
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
                                                <h4>Dobrick published an article</h4>
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
                                                <h4>Someone bookmarked you</h4>
                                                <ul>
                                                    <li>4 hours ago</li>

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
                                                <h4>Your Resume Updated!</h4>
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
