@section("head")
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}" />
@endsection
@extends("layout.master")
@section("content")
<!-- top header wrapper start -->
<div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>Candidate Single</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="{{url('/')}}"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Candidate Single</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @yield("left_content")
            </div>
        </div>
    </div>
@endsection
