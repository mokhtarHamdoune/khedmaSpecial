@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_main_overflow jb_cover">
                <div class="latest_job_overlow jb_cover">
                    <div class="manage_jobs_wrapper jb_cover">
                        <div class="job_list mange_list applications_recent">
                            <h6>recent applications</h6>
                        </div>
                    </div>
                    @if(count($candidates)>0)
                    @foreach($candidates as $candidate)
                    <div class="latest_job_box jb_cover">
                        <div class="job_list recent_app_1">
                            <div class="recent_img">
                                <img src="{{asset('dashboard/images/rs1.jpg')}}" alt="post_img">
                            </div>
                            <div class="recent_cntnt">
                                <h6><a href="#">{{$candidate[0]}}</a></h6>
                                <ul>
                                    <li><i class="fas fa-suitcase"></i>&nbsp; web designer</li>
                                    <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_list_next recent_app_1">
                            <div class="header_btn download_btn_wrapper jb_cover">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-file-download"></i>download info</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fas fa-envelope"></i>send</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
@endforeach
@endif
                    </div>
                    <div class="blog_pagination_section jb_cover">
                        <ul>
                            <li>
                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li class="third_pagger"><a href="#">2</a>
                            </li>
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                            </li>

                            <li>
                                <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
