@extends("layout.profil")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">      
            <div class="manage_jobs_wrapper jb_cover">
                <div class="job_list mange_list applications_recent">
                    <h6>04 applied jobs</h6>
                </div>
            </div>
        </div>
        @foreach($candidate->applied_jobs() as $job)
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 applied_job">
                <div class="jb_listing_left_fullwidth jb_cover">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="jb_job_post_side_img">
                                <img src="{{asset('storage/profile_images/'.$job->employer_image)}}" class="cmp_logo" alt="post_img">
                                <br> <span>{{$job->employer}}</span>
                            </div>
                            <div class="jb_job_post_right_cont">
                                <h4><a href="{{route('jobs.show',$job->id)}}">{{$job->domaine}},{{$job->title}}</a></h4>

                                <ul>
                                    <li><i class="flaticon-cash"></i>&nbsp;{{$job->remuniration}}</li>
                                    <li><i class="flaticon-location-pointer"></i>&nbsp; {{$job->city}},{{$job->lieuTravailleExact}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="jb_job_post_right_btn_wrapper">
                                <ul>
                                    <li></li>
                                    <li><a href="#">{{$job->type}}</a></li>
                                    <li><a href="applied_jobs/{{$job->id}}" class="applied_btn cancel">Cancel</a></li>
                                </ul>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
@section("applied")
    <script src="{{asset('js/applied.js')}}"></script>
@endsection