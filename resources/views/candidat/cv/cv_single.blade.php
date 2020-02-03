@section("head")
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}" />
@endsection
@extends("layout.header_wrapper")
@section("body")
<div class="job_single_wrapper jb_cover">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover cv_final">
                                    <h1 style="text-align:center;font-size:2.4em;">CV<span><a href="{{route('resume.show',$cv->id)}}"><i class="fas fa-arrow-left"></i></a></span></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="jb_job_overview_img cv_final_img">
                                        <img src="{{$candidate->photo!==null ? asset('storage/'.$candidate->photo) : asset('/images/blank-profile-pic.png')}}" class="img-thumbnail" alt="post_img">
                                        <h3>{{$candidate->nom}} {{$candidate->prenom}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>Informations de base</h1>
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
                                    <h1>Formations</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="formations">
                                            @foreach($cv->formation as $formation)
                                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover formation">
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
                                    <h1>experiences</h1>
                                </div>
                                
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="experiences">
                                            @foreach($cv->experience as $experience)
                                                <div class="jp_listing_overview_list_main_wrapper education_board jb_cover experience">
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
                                    <h1>compétences</h1>
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
                                    <h1>Documents</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
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
                                                            <td class="dowDel"><a href="{{asset('storage/'.$document->fichier)}}" download><i class="fas fa-download"></i></td>
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
                </div>
            </div>
        </div>
    </div>
@endsection