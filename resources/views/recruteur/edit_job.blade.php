@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <form action="{{route('edit_job',$offre[0]->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar pd0 jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1>Edit job</h1>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                        @if(session('success'))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div id="message" class="alert alert-success">
                                    <script>
                                        setTimeout(function() {
                                            $('#message').fadeOut('slow');
                                        }, 8000);
                                    </script>
                                    <ul>
                                        <li>{{session('success')}}</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>Domaine</label>
                                    <select name="domaine">
                                        <option selected>Informatique</option>
                                        <option>Marketing</option>
                                        <option>Comptabilité</option>
                                        <option>Droits</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Titre</label>
                                <input type="text" name="title" placeholder="Need Graphic Designer" value="{{$offre[0]->title}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>Type</label>
                                    <select name="type">
                                        <option value="cdi" selected>CDI</option>
                                        <option value="stage">Stage</option>
                                        <option value="cdd">CDD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Diplome</label>
                                <input type="text" name="diplome" placeholder="Need Graphic Designer" value="{{$offre[0]->diplome}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Duree</label>
                                    <input type="text" name="duree_stage" placeholder="40/h Week" value="{{$offre[0]->duree_stage}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Renumiration</label>
                                    <input type="text" name="remuniration" placeholder="40$ per hour" value="{{$offre[0]->remuniration}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Competence</label>
                                    <input type="text" name="competence" placeholder="C, javascript" value="{{$offre[0]->competence}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>Experience</label>
                                    <select name="anneesExperience">
                                        <option value="1" selected>1 year experience</option>
                                        <option value="2">2 year experience</option>
                                        <option value="3">3 year experience</option>
                                        <option value="4">4 year experience</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1> about this job</h1>
                    </div>
                    <div class="job_overview_header jb_cover">
                    <textarea name="description" id="description" rows="10" cols="80" placeholder="please write your description of this offer in here">{{$offre[0]->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1>address / location </h1>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>country</label>
                                    <input type="text" name="country" list="country_list" value="{{$offre[0]->country}}">
                                    <div class="select_box">
                                        <datalist id="country_list">
                                            <option value="Algerie" selected>Algerie</option>
                                            <option value="france">france</option>
                                            <option value="UK">UK</option>
                                            <option value="germany">germany</option>
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>Wilaya</label>
                                    <input type="text" name="city" list="city_list" value="{{$offre[0]->city}}">
                                    <div class="select_box">
                                        <datalist id="city_list">
                                            <option value="Alger">Alger</option>
                                            <option value="Canstantine" selected>Constantine</option>
                                            <option value="Tlemcen">Tlemcen</option>
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>full address</label>
                                    <input type="text" name="lieuTravailleExact" placeholder="Lundon UK" value="{{$offre[0]->lieuTravailleExact}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="header_btn search_btn news_btn jb_cover">
                    <button type="submit" class="btn-custom">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
