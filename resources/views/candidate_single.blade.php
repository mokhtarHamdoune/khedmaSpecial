@extends("layout.header_cand")
@section("left_content")
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img src="{{$candidat->photo!==null ? asset('storage/'.$candidat->photo) : asset('/images/blank-profile-pic.png')}}" alt="post_img">

                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4>{{$candidat->civilite!==null ? $candidat->civilite : "Mr"}} {{$candidat->nom!==null ? $candidat->nom :"Name"}} {{$candidat->prenom!==null ? $candidat->prenom:"Surname"}}</h4>

                                            <ul>
                                                <li>{{$candidat->adresse!==null ? $candidat->adresse :  "Not mentioned"}}</li>
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
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>{{$candidat->adresse!==null ? $candidat->adresse :  "Not mentioned"}}</li>
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
                                                <li>{{$candidat->Tel!==null ? $candidat->Tel : "Not mentioned"}}</li>
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
                                                <li><a href="#">{{$candidat->email}}</a></li>
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
                                                <li><a href="#">{{$candidat->in!==null ? $candidat->in : "Not mentioned"}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
