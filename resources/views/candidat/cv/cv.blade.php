@extends("layout.profil")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-5">
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
                                                            <p>Titre :</p>
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
                                                            <p>Langues :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class="col-md-9" id="languages">
                                                                <div class="delete_jb_form language">
                                                                    <input type="text"  name="name" placeholder="Langue">
                                                                </div>
                                                                <div class="delete_jb_form language">
                                                                    <input type="text" name="name" placeholder="Langue">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 d-flex justify-content-between align-items-end">
                                                                   <button class="btn btn-outline-info" id="add_lang">+</button>
                                                                   <button class="btn btn-outline-danger" id="delete_lang">-</button>
                                                            </div>

                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="category_wrapper jb_cover">
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
                                            </div> -->
                                            <!-- <div class="category_wrapper jb_cover">
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
                                            </div> -->
                                            <!-- <div class="category_wrapper jb_cover">
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
                                            </div> -->

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
                                            <li>Titre De Cv :</li>
                                            <li class="basic">{{$cv->titre}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="jp_listing_overview_list_main_wrapper jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>Location:</li>
                                            <li class="basic">Los Angeles Califonia PO</li>
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
                                            <li class="basic">0145636941</li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>Langues:</li>
                                            <li>Englais</li>
                                            <li>Francais</li>
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
                        <h1>Formations<span><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fas fa-plus-square"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal4" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>Fomations</h1>

                                            <div class="category_wrapper jb_cover formation">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>formatoin:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Diplome</label>
                                                            <input type="text" name="name" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Domaine</label>
                                                            <input type="text" name="name">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">leiu</label>
                                                            <input type="text" name="name">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Début Fomation</label>
                                                            <input type="month" name="name" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Fin Formation</label>
                                                            <input type="month" name="name">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row justify-content-end mb-5" id="formation">
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-info float-right" id="add_4">Ajouter</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-danger float-right"  id="delete_4">Supprimer</button>
                                                </div>
                                            </div>                 -->
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
                                <div class="row justify-content-end">
                                    <div class="col-md-1 e_d_container">
                                        <p class="edit"><i class="fas fa-edit"></i></p>
                                    </div>
                                    <div class="col-md-1 e_d_container">
                                        <p class="delete"><i class="fas fa-minus"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul id="formcontainer1">
                                            <li>janvier 2019-décembre 2019</li>
                                            <li>Diplome:<span class="form_item">Ginie Logiciel</span></li>
                                            <li>Domaine:<span class="form_item">Informatique</span></li>
                                            <li>Lieu:<span class="form_item">Tlemcen</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-end">
                                    <div class="col-md-1 e_d_container">
                                        <p class="edit"><i class="fas fa-edit"></i></p>
                                    </div>
                                    <div class="col-md-1 e_d_container">
                                        <p class="delete"><i class="fas fa-minus"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>janvier 2019 - décembre 2019</li>
                                            <li>Diplome:<span>Ginie Logiciel</span></li>
                                            <li>Domaine:<span>Informatique</span></li>
                                            <li>Lieu:<span>Tlemcen</span></li>
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
                        <h1>experiences<span><a href="#" data-toggle="modal" data-target="#myModal6"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal6" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>experiences</h1>

                                            <div class="category_wrapper jb_cover experience">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>experience 1 :</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Intitulé</label>
                                                            <input type="text" name="intetule">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Lieu</label>
                                                            <input type="text" name="lieu" placeholder="Entreprise">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Date début</label>
                                                            <input type="month" name="date_debut" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Date fin</label>
                                                            <input type="month" name="date_fin" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <textarea name="description" rows="2" placeholder="Description"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end mb-5" id="experience">
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-info float-right" id="add_6">Ajouter</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-danger float-right"  id="delete_6">Supprimer</button>
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
                                            <li>janvier 2019 - décembre 2019</li>
                                            <li>Lead UI/UX, Web Design, Interaction Design <a href="#"> at webstrot</a></li>
                                        </ul>
                                        <p>As a UI/UX Designer, i have a strong background of work closely with Developers and associate with Design Research to enhance design suggestions. Manage design wireframes, mockups and navigation maps. My job was to make sure that my Designs are unique.Develop clean well executed design concepts. Coordinate with team on design and prototype of new interfaces.</p>
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
                        <h1>compétences<span><a href="#" data-toggle="modal" data-target="#myModal7"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal7" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-edit"></i>compétences</h1>

                                            <div class="category_wrapper jb_cover competence">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>type here:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="intit" placeholder="Intétulé">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <input type="text" name="exper" placeholder="Anneés d'experiences">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <textarea name="description" rows="2" placeholder="Petite description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end mb-5" id="competence">
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-info float-right" id="add_7">Ajouter</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-outline-danger float-right"  id="delete_7">Supprimer</button>
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
                                    <li><i class="fas fa-check-square"></i>5 years+ experience designing and building products.</li>
                                    

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

@section("script")
<script src="{{asset('js/modal.js')}}"></script>
@endsection