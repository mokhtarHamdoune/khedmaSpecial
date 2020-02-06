@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <form action="{{route('rec_infos')}}" method="POST">
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> basic information <span><a href="{{route('edit_profile_recruteur')}}"><i class="fas fa-edit">go to edit page</i></a></span></h1>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Country:</li>
                                    <li>{{$user->country}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Hotline::</li>
                                        <li>{{$user->telephone}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>email:</li>
                                        <li>{{$user->contact_email}}</li>
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
                                        <li><a href="{{$user->website}}">{{$user->website}}</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1>About Us</h1>
                </div>
                <div class="job_overview_header pdd jb_cover">
                    <div class="delete_jb_form">
                        <textarea class="require" name="about_us" rows="5" maxlength="1000" placeholder="what's your company aim? what're you searching for? give us a little bit about you (max 1000 letter)">{{$user->about_us}}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1>Extra Informations</h1>
                </div>
                <div class="job_overview_header pdd jb_cover">
                    <div class="delete_jb_form">
                        <textarea class="require" name="extra_info" rows="5" maxlength="1000" placeholder="provide some extra information, like your work space, which countries you cover, anything (max 1000 letter)">{{$user->extra_info}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="header_btn search_btn jb_cover">

                <button type="submit" class="btn-custom">save changes</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="header_btn search_btn jb_cover">

                <a href="{{url('companies/'.$user->id)}}">preview current state</a>
            </div>
        </div>
</form>
    </div>
</div>
@endsection

