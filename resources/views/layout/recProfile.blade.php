@section("head")
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}" />
@endsection
@extends("layout.header_wrapper")
@section("body")
<div class="employe_dashboard_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="emp_dashboard_sidebar jb_cover">
                    <div class="emp_web_profile jb_cover">
                        <img style="width:50%;" src="{{asset('storage/profile_images/'.$user->image)}}" alt="Cinque Terre">
                        <h4>{{$user->name}}</h4>
                        <div class="skills jb_cover">
                            <div class="skill-item jb_cover">
                                <div class="skills-progress"><span style="width: 100%;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="emp_follow_link jb_cover">
                        <ul class="feedlist">
                            <li><a href="{{url('/recruteur')}}"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                            <li><a href="{{url('/edit_profile_recruteur')}}"> <i class="fas fa-edit"></i>edit profile</a></li>
                            <li><a href="{{url('/company_page')}}"><i class="fas fa-file"></i>company page </a></li>
                            <li><a href="{{url('/manage_jobs')}}"><i class="fas fa-suitcase"></i>manage jobs</a></li>
                            <li><a href="{{url('/company_applications')}}" class="link_active"><i class="fas fa-mobile"></i>applications</a></li>
                            <li><a href="{{url('/company_spontane')}}"><i class="fas fa-mobile"></i>spontane</a></li>
                            <li><a href="{{url('/post_job')}}"><i class="fas fa-user-plus"></i>post new job</a></li>
                            <li><a href="{{url('/messages')}}"><i class="fas fa-envelope"></i>message</a></li>
                        </ul>
                        <ul class="feedlist logout_link jb_cover">
                            <li><a href="#"><i class="fas fa-power-off"></i> log out  </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield("left_content")
        </div>
    </div>
</div>
@endsection
