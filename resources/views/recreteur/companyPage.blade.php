@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> basic information <span><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fas fa-edit"></i></a></span></h1>
                    <div class="modal fade delete_popup company_popup" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>basic information</h1>

                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>category :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="Design &amp; creative">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>location :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="loss angles">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>phone :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="+91 983622711">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>email :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="email" name="email" placeholder="webstrot@example.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>company size :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="padder_top jb_cover"></div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>categories:</li>
                                        <li>Design &amp; Creative</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Location:</li>
                                        <li>Los Angeles Califonia PO</li>
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
                                        <li>0145636941:</li>
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
                                        <li><a href="#">webstrot@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="flaticon-man-user"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>compant size:</li>
                                        <li>20-50</li>
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
                                        <li><a href="#">www.webstrot.com</a></li>
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
                    <h1>about us <span><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fas fa-edit"></i></a></span></h1>
                    <div class="modal fade delete_popup company_popup" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>about us</h1>

                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>write yourself:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <textarea class="require" name="message" rows="5" placeholder="Write Yourself"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="padder_top jb_cover"></div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header pdd jb_cover">
                    <p>Google is and always will be an engineering company. We hire people with a broad set of icalskills who are ready to tackle some of technology's greatest challenges and make an impact on milions, if not billions, of users. At Google, engineers not only revolutionize search, they routinely work on massive scalability and storage solutions,
                        <br>
                        <br> large-scale applications and rely new platforms for developers around the world. From AdWords to rome, Android to Ye, Social to Local, Google engineers are changing the world. From AdWords to Chrome, Aoid to Ye, Social to.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1>intro video<span><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fas fa-edit"></i></a></span></h1>
                    <div class="modal fade delete_popup company_popup" id="myModal4" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>intro video</h1>

                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>video link:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="youtube url or browse video">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="padder_top jb_cover"></div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header pdd jb_cover">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                            <div class="contect_form3">

                                <input type="email" name="email" placeholder="youtube url or browse video">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                            <div class="width_50 browsevideo">
                                <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-233" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">browse video</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1>image gallery<span><a href="#" data-toggle="modal" data-target="#myModal5"><i class="fas fa-edit"></i></a></span></h1>
                    <div class="modal fade delete_popup company_popup" id="myModal5" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>gallery</h1>

                                            <div class="category_wrapper gallery_browse jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>gallery 01 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Link">
                                                        </div>
                                                        <div class="width_50 gallery_link">
                                                            <label>Image </label>
                                                            <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-23" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">browse image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper gallery_browse jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>gallery 02 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Link">
                                                        </div>
                                                        <div class="width_50 gallery_link">
                                                            <label>Image </label>
                                                            <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-231" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">browse image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="padder_top jb_cover"></div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">save updates</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header pdd jb_cover">
                    <ul class="image_gallery jb_cover">
                        <li>
                            <a href="#"><img src="images/gallery1.jpg" alt="img"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/gallery2.jpg" alt="img"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/gallery3.jpg" alt="img"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/gallery4.jpg" alt="img"></a>
                        </li>
                    </ul>
                    <div class="header_btn search_btn jb_cover">

                        <a href="#">add image</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="header_btn search_btn jb_cover">

                <a href="#">save changes</a>
            </div>
        </div>
    </div>
</div>
@endsection