@extends("layout.profil")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar company_wrapper jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1> basic information <span><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
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
                                                            <p>job :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="Graphic Designer">
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

                                                            <input type="email" name="email" placeholder="digital@example.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>website
                                                        </p></div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form">

                                                            <input type="text" name="name" placeholder="www.digital.com">
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

                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="far fa-calendar"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>job description:</li>
                                            <li>Graphic Designer</li>
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
                                            <li>phone :</li>
                                            <li>0145636941</li>
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
                                            <li><a href="#">digital@example.com</a></li>
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
                                            <li><a href="#">www.digital.com</a></li>
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
                        <h1> education background<span><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal4" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>education</h1>

                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>education 01 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Institude">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Period">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">

                                                            <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper gallery_browse jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>education 02 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Institude">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Period">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">

                                                            <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

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
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>2018 - Present</li>
                                            <li>Masters in Software Engineering <a href="#"> at CDGI</a></li>
                                        </ul>
                                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>2014 - 2018</li>
                                            <li>Bachelor of Arts <a href="#">at RK university</a></li>
                                        </ul>
                                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>2014 - 2014</li>
                                            <li>metric education <a href="#">at st.thomas school</a></li>
                                        </ul>
                                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
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
                        <h1>work experience <span><a href="#" data-toggle="modal" data-target="#myModal6"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal6" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>experience</h1>

                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>experience 1 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Company">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Period">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">

                                                            <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category_wrapper gallery_browse jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>experience 2 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Title">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Company">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="Period">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">

                                                            <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

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
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-suitcase"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>2018 - Present</li>
                                            <li>Lead UI/UX, Web Design, Interaction Design <a href="#"> at webstrot</a></li>
                                        </ul>
                                        <p>As a UI/UX Designer, i have a strong background of work closely with Developers and associate with Design Research to enhance design suggestions. Manage design wireframes, mockups and navigation maps. My job was to make sure that my Designs are unique.Develop clean well executed design concepts. Coordinate with team on design and prototype of new interfaces.</p>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-suitcase"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>2014 - 2018</li>
                                            <li>Computer Operator/Programmer <a href="#">at digiworld</a></li>
                                        </ul>
                                        <p>We can develop and design anything beyond your imagination. About our work, we don’t say anything because our work speaks. For more, you can ask our clients and they will tell you how much satisfied they are with our services. So, what are you waiting for?We can develop and design anything beyond your imagination. About our work, we don’t say anything because our work speaks. For more, you can ask our clients and they will tell you how much satisfied they are with our services. So, what are you waiting for?</p>
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
                        <h1> special qualification <span><a href="#" data-toggle="modal" data-target="#myModal7"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal7" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>qualification</h1>

                                            <div class="category_wrapper gallery_browse jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>type here:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="01">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="02">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="03">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="name" placeholder="04">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

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
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                <ul class="speical_qualification_wrapper">
                                    <li><i class="fas fa-check-square"></i>5 years+ experience designing and building products.
                                    </li>
                                    <li><i class="fas fa-check-square"></i>Skilled at any Kind Design Tools.
                                    </li>
                                    <li><i class="fas fa-check-square"></i>Passion for people-centered design, solid intuition.
                                    </li>
                                    <li><i class="fas fa-check-square"></i>Hard Worker &amp; Quick Lerner.</li>

                                </ul>

                            </div>

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