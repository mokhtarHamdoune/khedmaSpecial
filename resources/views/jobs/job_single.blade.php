@extends("layout.header_wrapper")
@section("body")
<div class="job_single_wrapper jb_cover mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs overview</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                                <img src="{{$offre->image ?? asset('images/default_cmp_logo.png')}}" id="job_sing_img" alt="post_img">
                                <h4>{{$offre->title}}</h4>
                                <p>{{$offre->name}}</p>
                                <ul class="job_single_lists">
                                    <li>
                                        <div class="job_adds_right">
                                            <a href="#!"><i class="far fa-heart"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header_btn search_btn part_time_btn jb_cover">

                                            <a href="#">{{$offre->type}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                                <a href="#" data-toggle="modal" data-target="#myModal41">apply now !</a>

                            </div>
                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="apply_job jb_cover">
                                                    <h1>apply for this job :</h1>
                                                    <div class="search_alert_box jb_cover">

                                                        <div class="apply_job_form">

                                                            <input type="text" name="name" placeholder="full name">
                                                        </div>
                                                        <div class="apply_job_form">

                                                            <input type="text" name="Email" placeholder="Enter Your Email">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                                        </div>

                                                        <div class="resume_optional jb_cover">
                                                            <p>resume (optional)</p>
                                                            <div class="width_50">
                                                                <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-27" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">upload resume</span>
                                                            </div>
                                                            <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                                        </div>

                                                    </div>
                                                    <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                        <a href="#">apply now</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jb_keyword_key_wrapper jb_cover">
                            <ul>
                                <li><i class="fa fa-tags"></i> trending Keywords :</li>
                                <li><a href="#">ui designer,</a></li>
                                <li><a href="#">developer,</a></li>
                                <li><a href="#">senior</a></li>
                                <li><a href="#">it company,</a></li>
                                <li><a href="#">design,</a></li>
                                <li><a href="#">call center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">Details</h2>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Date Posted:</li>
                                        <li>{{date("d-m-Y",strtotime($offre->created_at))}}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Job Title:</li>
                                        <li>{{$offre->title}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Diplome:</li>
                                        <li>{{$offre->diplome}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-th-large"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Domaine:</li>
                                        <li>{{$offre->domaine}}</li>
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
                                        <li>{{$offre->lieuTravailleExact}},{{$offre->city}}</li>
                                    </ul>
                                </div>
                            </div>
                            @if($offre->type=="stage" || $offre->type=="cdd")
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Hours:</li>
                                        <li>{{$offre->duree_stage}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Salary:</li>
                                        <li>{{$offre->remuniration}}DA/h</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Experience:</li>
                                        <li>{{$offre->anneesExperience}} ans</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">Job Description</h2>
                            <p>{{$offre->description}}</p>
                            <ul>
                                <li><i class="fas fa-globe-asia"></i>&nbsp;&nbsp; <a href="#">www.example.com</a></li>
                                <li><i class="fas fa-file-download"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>

                            </ul>
                        </div>

                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">location</h2>
                            <div class="map_wrapper jb_cover">
                                <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Petit problème... Une erreur s'est produite</div><div class="gm-err-message">Google&nbsp;Maps ne s'est pas chargé correctement sur cette page. Pour plus d'informations techniques sur cette erreur, veuillez consulter la console JavaScript.</div></div></div></div></div>
                            </div>

                        </div>
                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li>share :</li>
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
    </div>
@endsection