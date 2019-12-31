@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="job_main_overflow jb_cover">
            <div class="latest_job_overlow jb_cover">
                <div class="manage_jobs_wrapper jb_cover">
                    <div class="job_list mange_list">

                        <h6>job title</h6>

                    </div>
                    <div class="job_list_next mange_list">
                        <h6>applications</h6>

                    </div>
                    <div class="job_list_next mange_list">
                        <h6>status</h6>

                    </div>
                    <div class="job_list_next mange_list">
                        <h6>action</h6>

                    </div>
                </div>
                @foreach($offres as $offre)
                <div class="latest_job_box jb_cover">
                    <div class="job_list">
                        <h6><a href="#">{{$offre->title}}</a></h6>
                        <p> <i class="far fa-calendar"></i> Date Posted : {{$offre->date_prevue}}</p>
                    </div>

                    <div class="job_list_next">
                        <p><a href="#">{{count($offre->candidate)}} Applications</a></p>
                    </div>

                    <div class="job_list_next">
                        <p class="gn">active</p>
                    </div>

                    <div class="job_list_next">
                        <ul>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
                <div class="blog_pagination_section jb_cover">
                    {{$offres->links()}}
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
