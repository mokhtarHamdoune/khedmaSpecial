@extends("layout.profil")
@section("left_content")
    <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_listing_left_fullwidth jb_cover mb-2 mt-0">
                    <div class="search_btn clearfix">
                        <a href="{{route('resume.final',$cv->id)}}" class="float-right">CV OVERVIEW &nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="job_filter_category_sidebar company_wrapper jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1> Informations de base <span><a href="#" data-toggle="modal" id="edit_basics"><i class="fas fa-edit"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <form class="delett_cntn jb_cover" id ="basic_form">
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
                                                            <input type="text" name="titre_cv" placeholder="eg.Graphic Designer">
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
                                                            <div class="col-md-9">
                                                                <div class="delete_jb_form" id="languages">
                                                                    <input type="text"  name="langue[]" placeholder="Langue">
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
                                            <div class="padder_top jb_cover"></div>
                                            <div class="header_btn search_btn applt_pop_btn">
                                                <button type="button" class="btn-custom" onclick="editBasics()">Editer</button>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>
                                        </form>
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
                                            <li id="titre_cv">{{$cv->titre}}</li>
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
                                            <li>{{$candidate->adresse!==null ? $candidate->adresse :'Not mentioned' }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        <ul>
                                            <li>phone :</li>
                                            <li>{{$candidate->Tel!==null ? $candidate->Tel :'Not mentioned' }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                    <div class="jp_listing_list_icon">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                        @php 
                                            $langues=explode(",",$cv->langues);
                                        @endphp
                                        <ul id="langcontainer">
                                            <li>Langues:</li>
                                            @foreach($langues as $langue)
                                                <li class="lang">{{$langue}}</li>
                                            @endforeach
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
                                        <form class="delett_cntn jb_cover" id="form_form">
                                            <h1><i class="fas fa-edit"></i>Fomations</h1>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>formation:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Diplome</label>
                                                            <input type="text" name="dip_form" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Domaine</label>
                                                            <input type="text" name="dom_form">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">lieu</label>
                                                            <input type="text" name="lieu_form">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Début Fomation</label>
                                                            <input type="date" name="debut_form" value="1997-07-24">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Fin Formation</label>
                                                            <input type="date" name="fin_form">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header_btn search_btn applt_pop_btn">
                                                <button type="button" class="btn-custom" id ="submit_form" onclick="addFormation()">save updates</button>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="formations">
                                @foreach($cv->formation as $formation)
                                    <div class="jp_listing_overview_list_main_wrapper education_board jb_cover formation">
                                        <div class="row justify-content-end">
                                            <div class="col-1 e_d_container">
                                                <p class="edit_form" id='{{$formation->id}}'><i class="fas fa-edit"></i></p>
                                            </div>
                                            <div class="col-1 e_d_container">
                                                <p class="delete_form" id='{{$formation->id}}'><i class="fas fa-minus"></i></p>
                                            </div>
                                        </div>
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul class="formcontainer"">
                                                <li>{{$formation->date_debut}}/{{$formation->date_fin}}</li>
                                                <li>Diplome:<span class="form_item">{{$formation->diplome}}</span></li>
                                                <li>Domaine:<span class="form_item">{{$formation->domaine}}</span></li>
                                                <li>Lieu:<span class="form_item">{{$formation->lieu}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar company_wrapper jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1>experiences<span><a href="#" data-toggle="modal" data-target="#myModal6"><i class="fas fa-plus-square"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal6" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <form class="delett_cntn jb_cover" id="exp_form" >
                                            <h1><i class="fas fa-edit"></i>experiences</h1>
                                            <div class="category_wrapper jb_cover">
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
                                                            <input type="text" name="lieu_exp" placeholder="Entreprise">
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Date début</label>
                                                            <input type="date" name="debut_exp" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <label for="">Date fin</label>
                                                            <input type="date" name="fin_exp" >
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <textarea name="desc_exp" rows="5" placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="header_btn search_btn applt_pop_btn">
                                                <button type="button" class="btn-custom" id="submit_exp" onclick="addExperience()">save updates</button>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="experiences">
                                @foreach($cv->experience as $experience)
                                    <div class="jp_listing_overview_list_main_wrapper education_board jb_cover experience">
                                        <div class="row justify-content-end">
                                            <div class="col-1 e_d_container">
                                                <p class="edit_exp" id='{{$experience->id}}'><i class="fas fa-edit"></i></p>
                                            </div>
                                            <div class="col-1 e_d_container">
                                                <p class="delete_exp" id='{{$experience->id}}'><i class="fas fa-minus"></i></p>
                                            </div>
                                        </div>
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-suitcase"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul class="expcontainer">
                                                <li>{{$experience->date_debut}}/{{$experience->date_fin}}</li>
                                                <li>Intitulé : <span class="exp_item">{{$experience->intitule}}<span></li>
                                                <li>Entreprise : <a href="#"><span class="exp_item" >{{$experience->lieu}}</span></a></li>
                                                <li>Description : 
                                                    <p style="text-indent:1.5em;">{{$experience->description}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar company_wrapper jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1>compétences<span><a href="#" data-toggle="modal" data-target="#myModal7"><i class="fas fa-plus-square"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal7" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <form class="delett_cntn jb_cover" id="cmp_form">
                                            <h1><i class="fas fa-edit"></i>compétences</h1>
                                            <div class="category_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="category_lavel jb_cover">
                                                            <p>type here:</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                        <div class="delete_jb_form gallery_link">
                                                            <select style="display: none;" name="cmp_years">
                                                                    <option>0-2 ans</option>
                                                                    <option>2-4 ans</option>
                                                                    <option>4-6 ans</option>
                                                                    <option>6-10 ans</option>
                                                                    <option>+10 ans</option>
                                                            </select><div class="nice-select" tabindex="0"><span class="current">0-2 ans</span><ul class="list"><li data-value="0-2 ans" class="option selected">0-2 ans</li><li data-value="2-4 ans" class="option">2-4 ans</li><li data-value="4-6 ans" class="option">4-6 ans</li><li data-value="6-10 ans" class="option">6-10 ans</li><li data-value="+10 ans" class="option">+10 ans</li></ul></div>              
                                                        </div>
                                                        <div class="delete_jb_form gallery_link">
                                                            <textarea name="description_cmp" rows="2" placeholder="Petite description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header_btn search_btn applt_pop_btn">
                                                <button type="button" class="btn-custom" id="submit_cmp" onclick=""></button>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" data-dismiss="modal">cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <ul class="speical_qualification_wrapper" id="competences">
                                    @foreach($cv->competence as $competence)
                                        <li>
                                            <div class='row'>
                                                <div class='col-10 cmpcontainer'>
                                                    <i class="fas fa-check-square"></i><span>{{$competence->annees_exp}}</span> <span>{{$competence->description}}</span>
                                                </div>
                                                <div class="col-1 e_d_container">
                                                    <p class="edit_cmp" id="{{$competence->id}}"><i class="fas fa-edit"></i></p>
                                                </div>
                                                <div class="col-1 e_d_container">
                                                    <p class="delete_cmp" id="{{$competence->id}}"><i class="fas fa-minus"></i></p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar company_wrapper jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1>Documents<span><a href="#" data-toggle="modal" data-target="#myModal8"><i class="fas fa-plus-square"></i></a></span></h1>
                    </div>
                    <div class="modal fade delete_popup company_popup" id="myModal8" role="dialog">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form class="delett_cntn jb_cover" id="doc_form" enctype="multipart/form-data" >
                                        <h1><i class="fas fa-edit"></i>Nouveaux Documents</h1>
                                        <div class="category_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="category_lavel jb_cover">
                                                        <p>Type de Document:</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="delete_jb_form gallery_link">
                                                        <select style="display: none;" name="type_doc" >
                                                                <option>CV</option>
                                                                <option>Lettre de motivation</option>
                                                                <option>Diplôme</option>
                                                                <option>Certificat</option>
                                                                <option>Autre</option>
                                                        </select><div class="nice-select" tabindex="0"><span class="current">CV</span><ul class="list"><li data-value="CV" class="option selected">CV</li><li data-value="Lettre de motivation" class="option">Lettre de motivation</li><li data-value="Diplôme" class="option">Diplôme</li><li data-value="Certificat" class="option">Certificat</li><li data-value="Autre" class="option">Autre</li></ul></div>              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="category_lavel jb_cover">
                                                        <p>Le Fichier:</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="delete_jb_form gallery_link">
                                                        <div class="box">
                                                            <div class="box__input">
                                                                <input class="box__file" type="file" name="document" id="file" />
                                                                <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                                                            </div>
                                                            <div class="box__uploading">Uploading&hellip;</div>
                                                            <div class="box__success">Done!</div>
                                                            <div class="box__error">Error! <span></span>.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header_btn search_btn applt_pop_btn">
                                            <button type="button" class="btn-custom"  onclick="addDocument()">save updates</button>
                                        </div>
                                        <div class="cancel_wrapper">
                                            <a href="#" data-dismiss="modal">cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <table class="table table-sm table-bordered" id="documents">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">type</th>
                                            <th scope="col">nome</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=0;
                                        @endphp
                                        @foreach($cv->document as $document)
                                            <tr>
                                                <th scope="row">{{++$i}}</th>
                                                <td>{{$document->type}}</td>
                                                <td>{{$document->nom}}</td>
                                                <td class="dowDel"><a href="{{asset('storage/'.$document->fichier)}}" download><i class="fas fa-download"></i></a><a href="{{'document/'.$document->id}}"><i class="fas fa-trash-alt"></i></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
<script>
    window.laravel={"id":{{$cv->id}}}
</script>
<script src="{{asset('js/modal.js')}}"></script>
<script src="{{asset('js/cv.js')}}"></script>
@endsection