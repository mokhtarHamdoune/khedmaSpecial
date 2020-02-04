@extends("layout.header_wrapper")
@section("body")
<div class="companies_wrapper jb_cover mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="filter-area jb_cover">

                        <select style="display: none;">
                            <option>short by</option>
                            <option>most recent </option>
                            <option>most popular</option>
                            <option>top rated</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">short by</span><ul class="list"><li data-value="short by" class="option selected">short by</li><li data-value="most recent" class="option">most recent </li><li data-value="most popular" class="option">most popular</li><li data-value="top rated" class="option">top rated</li></ul></div>

                        <div class="showpro">
                            <p>You're Watching 01 to  {{count($employers)}}</p>
                        </div>
                    </div>
                </div>
                @foreach($employers as $employer)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="company_main_wrapper">
                        <div class="company_img_wrapper">
                            <img src="{{asset('storage/profile_images/'.$employer->image)}}"  alt="team_img1">
                            <div class="btc_team_social_wrapper">
                                <h1>Algeria</h1>
                            </div>
                        </div>
                        <div class="opening_job">
                            <h1><a href="{{url('companies/'.$employer->id)}}">{{count($employer->offre)}} offre(s)</a></h1></div>
                        <div class="company_img_cont_wrapper">
                            <h4>{{$employer->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection