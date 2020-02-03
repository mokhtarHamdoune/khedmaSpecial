@extends("layout.master")
@section("content")
<!-- top header wrapper start -->
<div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">
                            @if(Route::is("jobs"))
                                <h1>Jobs Listing</h1>
                            @else
                                <h1>Entreprises</h1>
                            @endif
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                @if(Route::is("jobs"))
                                    <li>Jobs Listing</li>
                                @else
                                    <li>Entreprises</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    @yield("body")
@endsection