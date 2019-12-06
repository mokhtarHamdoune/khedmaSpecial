@extends("layout.profil")
@section("left_content")
    <form class="col-lg-9 col-md-12 col-sm-12 col-12" method="POST" enctype="multipart/form-data" action ="{{url('/candidat/1')}}">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_listing_left_fullwidth jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="jp_job_post_side_img">
                                <img src="{{asset('dashboard/images/pf1.jpg')}}" alt="post_img">
                            </div>
                            <div class="jp_job_post_right_cont edit_profile_wrapper">
                                <h4>JPEG or PNG 500x500px Thumbnail</h4>
                                <div class="width_50">
                                    <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-233" class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">browse image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="browse_img_banner jb_cover">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>nom</label>
                                <input type="text" name="nom" placeholder="Luca">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>prenom</label>
                                <input type="text" name="prenom" placeholder="Wallace">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="select_box">
                                <label>Civilité</label>
                                <select style="display: none;" name="civilite">
                                    <option>Mr</option>
                                    <option>Mme</option>
                                    <option>Mlle</option>
                                    <option>Dr</option>
                                    <option>Pr</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Mr</span><ul class="list"><li data-value="Mr" class="option selected">Mr</li><li data-value="Mme" class="option">Mme</li><li data-value="Mlle" class="option">Mlle</li><li data-value="Dr" class="option">Dr</li><li data-value="Pr" class="option">Pr</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>date naissance</label>
                                <input type="date" name="data_naissance" placeholder="24/07/1997">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>email</label>
                                <input type="email" name="email" placeholder="exemple@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>Télephone</label>
                                <input type="text" name="telephone" placeholder="0790091514">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>address</label>
                                <input type="text" name="address" placeholder="124/A Tlemcen">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>In</label>
                                <input type="text" name="In" placeholder="mokhtarHamdoune">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="width_50">
                            <div class="dropify-wrapper" style="height: 100px;"><div class="dropify-message"> <p></p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="submit"  class="dropify" data-height="90"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></div></div><span class="post_photo">Save changes</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
@endsection
