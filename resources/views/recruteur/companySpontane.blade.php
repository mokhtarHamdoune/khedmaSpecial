@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_main_overflow jb_cover">
                <div class="latest_job_overlow jb_cover">
                    <div class="manage_jobs_wrapper jb_cover">
                        <div class="job_list mange_list applications_recent">
                            <h6>tous les candidats spontane</h6>
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
                                <h6><a href="{{url('candidate_single/'.$candidate->id)}}">
                                    <h4>{{$candidate->civilite!==null ? $candidate->civilite : "Mr"}} {{$candidate->nom!==null ? $candidate->nom :"Name"}} {{$candidate->prenom!==null ? $candidate->prenom:"Surname"}}</h4>
                                </a></h6>
                            </div>
                        </div>
                        <div class="job_list_next recent_app_1">
                            <div class="header_btn download_btn_wrapper jb_cover">
                                <ul>
                                    <li><i class="fas fa-envelope"></i>&nbsp; {{$candidate->email}}</li>
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
                        {{$candidates->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
