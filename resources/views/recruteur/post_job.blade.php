@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <form action="{{route('new_job')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="job_filter_category_sidebar pd0 jb_cover">
                    <div class="job_filter_sidebar_heading jb_cover">
                        <h1> post new job</h1>
                    </div>
                    <div class="job_overview_header jb_cover">
                        <div class="row">
                        @if(session('success'))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div id="message" class="alert alert-success">
                                    <script>
                                        setTimeout(function() {
                                            $('#message').fadeOut('slow');
                                        }, 3000);
                                    </script>
                                    <ul>
                                        <li>{{session('success')}}</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>job category</label>
                                    <select name="domaine">
                                        <option value="UI/UX designer" selected>UI/UX designer</option>
                                        <option value="accountant">accountant</option>
                                        <option value="graphic designer">graphic designer</option>
                                        <option value="teacher">teacher</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>job title</label>
                                    <input type="text" name="title" placeholder="Need Graphic Designer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>job type</label>
                                    <select name="type">
                                        <option value="full time" selected>full time</option>
                                        <option value="part time">part time</option>
                                        <option value="temperory"> temperory</option>
                                        <option value="freelance">freelance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>job diplome</label>
                                    <input type="text" name="diplome" placeholder="Need Graphic Designer">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>working hours</label>
                                    <input type="text" name="duree_stage" placeholder="40/h Week">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>salary</label>
                                    <input type="text" name="remuniration" placeholder="40$ per hour">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>competence</label>
                                    <input type="text" name="competence" placeholder="C, javascript">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>experience</label>
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
                        <textarea name="description" id="description" rows="10" cols="80" placeholder="please write your description of this offer in here"></textarea>
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
                                <div class="select_box">
                                    <label>country</label>
                                    <select name="country">
                                        <option value="USA">USA</option>
                                        <option value="france">france</option>
                                        <option value="UK">UK</option>
                                        <option value="germany" selected>germany</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="select_box">
                                    <label>city</label>
                                    <select name="city">
                                        <option value="new york">new york</option>
                                        <option value="california" selected>california</option>
                                        <option value="loss angles"> loss angles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>full address</label>
                                    <input type="text" name="lieuTravailleExact" placeholder="Lundon UK">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>latitude</label>
                                    <input type="text" name="latitude" placeholder="41.4073509">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="contect_form3">
                                    <label>longitude</label>
                                    <input type="text" name="longitude" placeholder="50.4073509">
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
