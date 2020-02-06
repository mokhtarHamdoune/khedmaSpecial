@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_listing_left_fullwidth jb_cover">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="jp_job_post_side_img">
                            <img src="{{asset('storage/profile_images/'.$user->image)}}" alt="post_img">
                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4>{{$user->name}}</h4>

                            <ul>
                                <li><i class="flaticon-location-pointer"></i>&nbsp; {{$user->country}}</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                            <div class="header_btn search_btn jb_cover">

                                <a href="{{route('companyPage')}}">view profile</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img">
                    <i class="fas fa-book"></i>

                </div>
                <div class="emp_job_side_text">
                    <h1>{{$user->offre()->count()}}</h1>
                    <p>job posted</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="emp_job_post jb_cover">
                <div class="emp_job_side_img parts">
                    <i class="fas fa-envelope-open-text"></i>

                </div>
                <div class="emp_job_side_text">
                    <h1>{{$number}}</h1>
                    <p>total applications</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> view graph</h1>
                </div>
                <div class="job_overview_header jb_cover row">
                    <div class="col-6">
                        <h3>offres par wilaya</h3>
                        <div class="sales-chart" id="app">
                        @if($chart)
                        {!! $chart->container() !!}
                        @endif
                        @if($emp)
                        {{$emp}}
                        @endif
                    </div>                    </div>

                    <div class="col-6">
                        <h3>offres par mois</h3>
                    <label>year</label><form action="{{route('year')}}" method="post">@csrf
                        <input type="number" value="{{$year}}" name="year"><button type="submit">apply</button></form>
                    <div class="sales-chart" id="app">
                        @if($bar)
                        {!! $bar->container() !!}
                        @endif
                        @if($emp)
                        {{$emp}}
                        @endif
                    </div>                    </div>

                    <div class="col-6">
                        <h3>offres par type</h3>
                    <div class="sales-chart" id="app">
                        @if($line)
                        {!! $line->container() !!}
                        @endif
                        @if($emp)
                        {{$emp}}
                        @endif
                    </div>                    </div>

                    <div class="col-6">
                        <h3>postulé/spontané</h3>
                    <div class="sales-chart" id="app">
                        @if($barcandidat)
                        {!! $barcandidat->container() !!}
                        @endif
                        @if($emp)
                        {{$emp}}
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/vue.js')}}"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
        <script src="{{asset('js/Chart.min.js')}}" charset="utf-8"></script>
        @if($chart)
        {!! $chart->script() !!}
        @endif
        @if($bar)
        {!! $bar->script() !!}
        @endif
        @if($line)
        {!! $line->script() !!}
        @endif
        @if($barcandidat)
        {!! $barcandidat->script() !!}
        @endif
@endsection
