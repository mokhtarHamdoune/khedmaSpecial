@extends("layout.header_wrapper")
@section("body")
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1" name="cb">
                                <label for="c1">graphic designer<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c2" name="cb">
                                <label for="c2">
                                    Engineering Jobs <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c3" name="cb">
                                <label for="c3">Mainframe Jobs <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c4" name="cb">
                                <label for="c4">Legal Jobs <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c5" name="cb">
                                <label for="c5">IT Jobs <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c6" name="cb">
                                <label for="c6">PSU Jobs <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c7" name="cb">
                                <label for="c7">government Jobs <span> (1284)</span> </label>
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
                                <input type="checkbox" id="c01" name="cb">
                                <label for="c01">Jobs in delhi
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c02" name="cb">
                                <label for="c02">
                                    Jobs in mumbai
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c03" name="cb">
                                <label for="c03">Jobs in chennai
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c04" name="cb">
                                <label for="c04">Jobs in indore
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c05" name="cb">
                                <label for="c05">Job in bhopal <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c06" name="cb">
                                <label for="c06">Job in pune <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c07" name="cb">
                                <label for="c07">Job in banglore <span> (124)</span> </label>
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
                                <input type="checkbox" id="c11" name="cb">
                                <label for="c11">javascript
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c12" name="cb">
                                <label for="c12">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c13" name="cb">
                                <label for="c13">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c14" name="cb">
                                <label for="c14">marketing
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c15" name="cb">
                                <label for="c15">web design <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c16" name="cb">
                                <label for="c16">PHP<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c17" name="cb">
                                <label for="c17">social media<span> (124)</span> </label>
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
                                        <div id="range-price" class="range-box"></div>

                                        <input type="text" id="price" class="price-box" readonly/>
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
                                <input type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">add resume</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                            <select>
                                <option>short by</option>
                                <option>most recent </option>
                                <option>most popular</option>
                                <option>top rated</option>
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
                                <p>You're Watching 01 to 20</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal01">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-01" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal02">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal02" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-02" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal09">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal09" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-09" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt3.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal03">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal03" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-03" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal05">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal05" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-05" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal04">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal04" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-04" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal051">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal051" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-051" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal06">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal06" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-06" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal07">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal07" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-07" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal061">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal061" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-061" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal011">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal011" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-011" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt3.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal08">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal08" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-08" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal1">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal1" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal2">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal2" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal3">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal3" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-3" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal8">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal8" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-8" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Power Systems Experience Designer </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal4">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal4" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-4" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal5">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal5" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-5" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal6">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal6" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-6" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>google</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Trainee Web Designer, (Fresher)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; $12K - 15k P.A.</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles, Califonia PO, 455001</li>
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
                                                            <li><a href="job_single.html">Part Time</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal7">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal7" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                                                                        <input type="file" id="input-file-now-custom-7" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
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
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li><a href="#">1</a>
                                    </li>
                                    <li class="third_pagger"><a href="#">2</a>
                                    </li>
                                    <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                    </li>

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
    <!--job listing filter  wrapper end-->
@endsection