@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <form id="form" action="{{route('edit_profile_recruteur.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="job_listing_left_fullwidth jb_cover">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jb_cover" style="width:50%">
                            <div class="dropify-wrapper">
                                <div class="dropify-message"> <p></p></div>
                                <div class="dropify-loader"></div>
                                <div class="dropify-errors-container"><ul></ul></div>
                                <input type="file" id="input-file-now-custom-233" name="image" class="dropify" data-default-file="{{asset('storage/profile_images/'.$user->image)}}" />
                                <button type="button" class="dropify-clear">Remove</button>
                            </div>
                            <div class="dropify-preview">
                                <span class="dropify-render"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-infos-message"></p>
                                    </div>
                                </div>
                            </div>
                        </div><span class="post_photo">browse image</span>
                    </div>
                </div>
            </div>

            <div class="browse_img_banner jb_cover">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Webstrot" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>email</label>
                            <input type="email" name="email" placeholder="webstrot@example.com" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>Telephone</label>
                            <input type="number" name="telephone" placeholder="+91 9098085819" value="{{$user->telephone}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>Website</label>
                            <input type="email" name="Website" placeholder="www.webstrot.com">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>Company size</label>
                            <select name="company_size" style="display: none;">
                                <option>1-500</option>
                                <option>1-200</option>
                                <option>1-100</option>
                                <option>1-50</option>

                            </select><div class="nice-select" tabindex="0"><span class="current">1-500</span><ul class="list"><li data-value="1-500" class="option selected">1-500</li><li data-value="1-200" class="option">1-200</li><li data-value="1-100" class="option">1-100</li><li data-value="1-50" class="option">1-50</li></ul></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>Contact email</label>
                            <input type="email" name="contact_email" placeholder="hr@wevstrot.com" value="{{$user->contact_email}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>job description</label>
                            <select name="job_description" style="display: none;">
                                <option>it &amp; computer</option>
                                <option>marketing</option>
                                <option>mechanical</option>
                                <option>doctor</option>

                            </select><div class="nice-select" tabindex="0"><span class="current">it &amp; computer</span><ul class="list"><li data-value="it &amp; computer" class="option selected">it &amp; computer</li><li data-value="marketing" class="option">marketing</li><li data-value="mechanical" class="option">mechanical</li><li data-value="doctor" class="option">doctor</li></ul></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>address</label>
                            <input type="text" name="address" placeholder="124/A Kalani Bagh">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>country</label>
                            <input type="text" name="country" placeholder="India">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>state</label>
                            <select name="state" style="display: none;">
                                <option>Madhya pradesh</option>
                                <option>uttar pradesh</option>
                                <option>himachal pradesh</option>
                                <option>punjab</option>

                            </select><div class="nice-select" tabindex="0"><span class="current">Madhya pradesh</span><ul class="list"><li data-value="Madhya pradesh" class="option selected">Madhya pradesh</li><li data-value="uttar pradesh" class="option">uttar pradesh</li><li data-value="himachal pradesh" class="option">himachal pradesh</li><li data-value="punjab" class="option">punjab</li></ul></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form3">
                            <label>city</label>
                            <input type="text" name="city" placeholder="Dewas">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>zip code</label>
                            <select name="zip_code" style="display: none;">
                                <option>455001</option>
                                <option>422501</option>
                                <option>45310</option>
                                <option>41600</option>

                            </select><div class="nice-select" tabindex="0"><span class="current">455001</span><ul class="list"><li data-value="455001" class="option selected">455001</li><li data-value="422501" class="option">422501</li><li data-value="45310" class="option">45310</li><li data-value="41600" class="option">41600</li></ul></div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="browse jb_cover">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1> social networks</h1>
                            </div>
                            <div class="job_overview_header jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>gmail</label>
                                            <input type="email" name="gmail" placeholder="https://google.com/webstrot" value="{{$user->google}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>facebook</label>
                                            <input type="email" name="facebook" placeholder="https://www.facebook.com/webstrot" value="{{$user->facebook}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>twitter</label>
                                            <input type="email" name="twitter" placeholder="https://www.twitter.com/webstrot" value="{{$user->twitter}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>linkedin</label>
                                            <input type="email" name="linkedin" placeholder="https://www.linkedin.com/webstrot" value="{{$user->linkedin}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1> password &amp; security</h1>
                            </div>
                            <div class="job_overview_header jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>verification email</label>
                                            <input type="email" name="verification_email" placeholder="webstrot@example.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>current pasword</label>
                                            <input type="password" name="current_password" placeholder="*************">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>new pasword</label>
                                            <input type="password" name="new_password" placeholder="*************">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label> repeat new pasword</label>
                                            <input type="password" name="new_password_confirm" placeholder="*************">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="login_remember_box jb_cover">
                            <label class="control control--checkbox">Enable Two Step Verification Via Email
                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_btn search_btn jb_cover">
                    <button type="submit" class="btn-custom" id="save">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
