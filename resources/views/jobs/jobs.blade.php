@extends("layout.header_wrapper")
@section("body")
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <form class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block" id="filter">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Domaines</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1" value="Informatique" name="domaine[]">
                                <label for="c1">Informatique<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c2" value="Marketing" name="domaine[]">
                                <label for="c2">
                                Marketing <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c3" value="Comptabilité" name="domaine[]">
                                <label for="c3">Comptabilité<span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c4" value="Droits" name="domaine[]">
                                <label for="c4">Droits <span> (457)</span>
                                </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Société</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c11" value="0" name="type[]">
                                <label for="c11">Public
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c12" value="1" name="type[]">
                                <label for="c12">
                                    Privé
                                    <span> (42)</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c01" value="Alger" name="wilaya[]">
                                <label for="c01">Alger
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c02" value="Constantine" name="wilaya[]">
                                <label for="c02"> Constantine
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c03" value="Tlemcen" name="wilaya[]">
                                <label for="c03">Tlemcen
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c04" value="Oran" name="wilaya[]">
                                <label for="c04">Oran
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c05" value="Setif" name="wilaya[]">
                                <label for="c05">Setif <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c06" value="Sidi Bel Abbès" name="wilaya[]">
                                <label for="c06">Sidi Bel Abbès <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c07" value="Annaba" name="wilaya[]">
                                <label for="c07">Annaba <span> (124)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Renumeration</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="range-price" class="range-box"></div>

                                        <input type="text" id="price" class="price-box" readonly/>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">
                            <select>
                                <option>Trier par</option>
                                <option>plus récent</option>
                                <option>plus populaire</option>
                            </select>
                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#grid"> <i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#list"><i class="flaticon-list"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="showpro">
                                <p>Vous regardez 01 à {{$all}}</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover mb-5">
                            <div id="grid" class="tab-pane active">
                                <div class="row list_offre">
                                    @foreach($offres as $offre)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="{{asset('storage/profile_images/'.$offre->image)}}" alt="post_img" class="cmp_logo" />
                                                        <br> <span>{{$offre->name}}</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{route('jobs.show',$offre->id)}}">{{$offre->title}}</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp;{{$offre->remuniration}}DA/h</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp;{{$offre->lieuTravailleExact}},{{$offre->city}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">{{$offre->type}}</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal08">apply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row list_offre"> 
                                    @foreach($offres as $offre)      
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="{{asset('storage/profile_images/'.$offre->image)}}" class="cmp_logo" alt="post_img" />
                                                        <br> <span>{{$offre->name}}</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{route('jobs.show',$offre->id)}}">{{$offre->title}}</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp;{{$offre->remuniration}}DA/h</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp;{{$offre->lieuTravailleExact}},{{$offre->city}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">{{$offre->type}}</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal1">apply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li class="third_pagger"><a href="#">1</a>
                                    </li>
                                    @for ($i=2; $i <= ceil(floatval($all/10)); $i++)
                                    <li><a href="#">{{$i}}</a></li>
                                    @endfor
                                    <li>
                                        <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1111" name="cb">
                                <label for="c1111">graphic designer<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c22" name="cb">
                                <label for="c22">
                                    Engineering Jobs <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c33" name="cb">
                                <label for="c33">Mainframe Jobs <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c44" name="cb">
                                <label for="c44">Legal Jobs <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c55" name="cb">
                                <label for="c55">IT Jobs <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c66" name="cb">
                                <label for="c66">PSU Jobs <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c77" name="cb">
                                <label for="c77">government Jobs <span> (1284)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c011" name="cb">
                                <label for="c011">Jobs in delhi
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c021" name="cb">
                                <label for="c021">
                                    Jobs in mumbai
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c031" name="cb">
                                <label for="c031">Jobs in chennai
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c041" name="cb">
                                <label for="c041">Jobs in indore
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c051" name="cb">
                                <label for="c051">Job in bhopal <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c061" name="cb">
                                <label for="c061">Job in pune <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c071" name="cb">
                                <label for="c071">Job in banglore <span> (124)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>your skill's</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c111" name="cb">
                                <label for="c111">javascript
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c121" name="cb">
                                <label for="c121">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c131" name="cb">
                                <label for="c131">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c141" name="cb">
                                <label for="c141">marketing
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c151" name="cb">
                                <label for="c151">web design <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c161" name="cb">
                                <label for="c161">PHP<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c171" name="cb">
                                <label for="c171">social media<span> (124)</span> </label>
                            </p>

                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>salary</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="responsive_range_price" class="range-box"></div>

                                        <input type="text" id="responsive_price" class="price-box" readonly/>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="images/logo2.png" alt="logo" />
                            <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-203" class="dropify" data-height="90" /><span class="post_photo">add resume</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade apply_job_popup show" id="myModal01" role="dialog" style="padding-right: 17px; display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="apply_job jb_cover">
                            <h1>apply for this job :</h1>
                            <div class="search_alert_box jb_cover">

                                <div class="apply_job_form">

                                    <input type="text" name="name" placeholder="full name">
                                </div>
                                <div class="apply_job_form">

                                    <input type="text" name="Email" placeholder="Enter Your Email">
                                </div>
                                <div class="apply_job_form">
                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="resume_optional jb_cover">
                                    <p>resume (optional)</p>
                                    <div class="width_50">
                                        <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-01" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">upload resume</span>
                                    </div>
                                    <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                </div>

                            </div>
                            <div class="header_btn search_btn applt_pop_btn jb_cover">
                                <a href="#">apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--job listing filter  wrapper end-->
@endsection
@section("search")
<script src="{{asset('js/search.js')}}"></script>
@endsection