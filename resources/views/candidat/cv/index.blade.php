@extends("layout.profil")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h1>Vos Cvs</h1>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#add_cv" >Ajouter CV</button>
                        </div>
                    </div>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="row justify-content-around">
                        @foreach ($candidate->cv as $cv)
                        <div class="col-md-5 p-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{$cv->image !== null ? asset('storage/'.$cv->image) : asset('images/default_cv_img.jpg')}}" class="card-img-top" alt="cv">
                                <div class="card-body">
                                    <h5 class="card-title">{{$cv->titre}}</h5>
                                    <p class="card-text">{{$cv->created_at}}</p>
                                    <div class="d-flex justfiy-content-around">
                                        <a href="{{route('resume.show',$cv->id)}}" class="btn btn-primary">Montrer</a>
                                        <form action="{{route('resume.delete',$cv->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
                        @endforeach                    
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade delete_popup company_popup" id="add_cv" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form class="delett_cntn jb_cover"  method="POST" action="{{route('resume.store')}}" enctype="multipart/form-data">
                        @csrf
                        <h1><i class="fas fa-plus-square"></i>Nouvel Cv</h1>
                        <div class="category_wrapper gallery_browse jb_cover">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="category_lavel jb_cover">
                                        <p>Taper Ici:</p>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <div class="delete_jb_form gallery_link">
                                        <label for="">Titre</label>
                                        <input type="text" name="titre_cv" >
                                    </div>
                                    <div class="delete_jb_form gallery_link">
                                        <label for="">Une Image(optionel)</label>
                                        <input type="file" name="cv_img" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header_btn search_btn applt_pop_btn">
                            <button type="submit" class="btn-custom">Ajouter</button>
                        </div>
                        <div class="cancel_wrapper">
                            <a href="#" data-dismiss="modal">Annuler</a>
                        </div>
                    </form>
                </from>
            </div>
        </div>
    </div>
</div>
@endsection