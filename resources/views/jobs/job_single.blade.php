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
                                <img src="{{asset('storage/profile_images/'.$offre->image)}}" id="job_sing_img" alt="post_img">
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

                                <a href="#">apply now !</a>

                            </div>
                            @empty(!$employer)
                            @if(!$employer->offre()->where('offres.id','=',$offre->id)->get()->isempty())
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="{{url('edit_job/'.$offre->id)}}">Edit</a>
                            </div>
                            @endif
                            @endempty
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
