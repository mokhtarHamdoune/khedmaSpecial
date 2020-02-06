@extends("layout.header_wrapper_comp")
@section("body")
    <!-- company details wrapper start-->
    <div class="company_details_wrapper jb_cover">
    </div>
    <div class="webstrot_tech_detail jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_listing_left_fullwidth jb_cover">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="jp_job_post_side_img">
                                    <img style="width:100%" src="{{asset('storage/profile_images/'.$rec->image)}}" alt="post_img">

                                </div>
                                <div class="jp_job_post_right_cont web_text">
                                    <h4>{{$rec->name}}</h4>

                                    <ul>
                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$rec->country}}</li>
                                    </ul>
                                </div>
                            </div>
                            @empty(!$candidate)
                            <div class="col-lg-4 align-right header_btn search_btn news_btn overview_btn  jb_cover">
                                @if($candidate->employer()->where('employer_id','=',$rec->id)->exists())
                                <a href="{{route('despontane',$rec->id)}}">cancel spontane</a>
                                @else
                                <a href="{{route('spontane',$rec->id)}}">spontane</a>
                                @endif
                            </div>
                            @else
                            @empty($employer)
                            <div class="col-lg-4 align-right header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="{{url('login')}}">spontane</a>
                            </div>
                            @else
                            <div class="col-lg-4 align-right header_btn search_btn news_btn overview_btn  jb_cover">
                                <a style="pointer-events: none;cursor: default;text-decoration: none;color: black;" href="#">spontane</a>
                            </div>
                            @endempty
                            @endempty
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">About Us :</h2>
                            @empty($rec->about_us)
                            <p class="text-center">This Employer Didn't Provide Any Informaiotns</p>
                            @else
                            <p>{{$rec->about_us}}</p>
                            @endempty
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">Extra Info :</h2>
                            @empty($rec->extra_info)
                            <p class="text-center">This Employer Didn't Provide Any Extra Informaiotns</p>
                            @else
                            <p>{{$rec->extra_info}}</p>
                            @endempty
                        </div>

                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li>Share: </li>
                                <li><a href="http://{{$rec->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://{{$rec->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://{{$rec->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="http://{{$rec->google}}"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related_job_wrapper jb_cover">
                        <h1 class="related_job"> job open </h1>
                        <div class="related_product_job cmpny_related_jobs jb_cover">

                            <div class="owl-carousel owl-theme">
                                @foreach($offres as $key => $offre)
                                @if($key==0 || $key == 3)
                                <div class="item">
                                @endif
                                    <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('storage/profile_images/'.$rec->image)}}" alt="post_img" />
                                                    <br> <span>{{$rec->name}}</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{route('jobs.show',$offre->id)}}">{{$offre->title}}</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp;{{$offre->remuniration}}DA/h</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp;{{$offre->lieuTravailleExact}},{{$offre->city}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">{{$offre->type}}</a></li>
                                                        <li> <a href="#">apply</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    @if($key==2 || $key == 5)
                                </div>
                                    @elseif($offres->last() === $offre)
                            </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> overview company</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Telephone:</li>
                                        <li>{{$rec->telephone}}</li>
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
                                        <li>{{$rec->contact_email}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Country:</li>
                                    <li>{{$rec->country}}</li>
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
                                        <li><a href="{{$rec->website}}">{{$rec->website}}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                                <a href="#" data-toggle="modal" data-target="#myModal01">contact us</a>
                                <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="apply_job jb_cover">
                                                        <h1>Send a Message:</h1>
                                                        <form action="{{route('sendMessage', $rec->id)}}" method="GET">
                                                        <div class="search_alert_box jb_cover">

                                                                @csrf
                                                                <div class="contect_form3" style="width:100%">
                                                                    <input type="text" name="name" placeholder="Name">
                                                            </div>
                                                            <div class="contect_form3" style="width:100%">
                                                                <input type="text" name="Email" placeholder="Email">
                                                            </div>
                                                            <div class="apply_job_form">
                                                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                                            </div>

                                                        </div>
                                                        <div class="header_btn search_btn applt_pop_btn jb_cover">
                                                            <button class="btn btn-outline-info" type="submit">send now</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> social profile</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                <li><a href="http://{{$rec->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://{{$rec->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://{{$rec->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="http://{{$rec->google}}"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- company details wrapper end-->
@endsection
