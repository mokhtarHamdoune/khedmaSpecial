@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar pd0 jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> post new job</h1>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="select_box">
                                <label>job category</label>
                                <select style="display: none;">
                                    <option>UI/UX designer</option>
                                    <option>accountant</option>
                                    <option>graphic designer</option>
                                    <option>teacher</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">UI/UX designer</span><ul class="list"><li data-value="UI/UX designer" class="option selected">UI/UX designer</li><li data-value="accountant" class="option">accountant</li><li data-value="graphic designer" class="option">graphic designer</li><li data-value="teacher" class="option">teacher</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>job title</label>
                                <input type="text" name="name" placeholder="Need Graphic Designer">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="select_box">
                                <label>job type</label>
                                <select style="display: none;">
                                    <option>full time</option>
                                    <option>part time</option>
                                    <option> temperory</option>
                                    <option>freelance</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">full time</span><ul class="list"><li data-value="full time" class="option selected">full time</li><li data-value="part time" class="option">part time</li><li data-value="temperory" class="option"> temperory</li><li data-value="freelance" class="option">freelance</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>working hours</label>
                                <input type="text" name="name" placeholder="40/h Week">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="select_box">
                                <label>salary</label>
                                <select style="display: none;">
                                    <option>$12K - 15k P.A.</option>
                                    <option>$12K - 20k P.A.</option>
                                    <option> $12K - 35k P.A.</option>
                                    <option>$12K - 45k P.A.</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">$12K - 15k P.A.</span><ul class="list"><li data-value="$12K - 15k P.A." class="option selected">$12K - 15k P.A.</li><li data-value="$12K - 20k P.A." class="option">$12K - 20k P.A.</li><li data-value="$12K - 35k P.A." class="option"> $12K - 35k P.A.</li><li data-value="$12K - 45k P.A." class="option">$12K - 45k P.A.</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="select_box">
                                <label>experience</label>
                                <select style="display: none;">
                                    <option>1 year experience</option>
                                    <option>2 year experience</option>
                                    <option> 3 year experience</option>
                                    <option>4 year experience</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">1 year experience</span><ul class="list"><li data-value="1 year experience" class="option selected">1 year experience</li><li data-value="2 year experience" class="option">2 year experience</li><li data-value="3 year experience" class="option"> 3 year experience</li><li data-value="4 year experience" class="option">4 year experience</li></ul></div>
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

                    <div class="wrapper jb_cover">
                        <div class="options">
                            <button onclick="transform('bold', null)">
                                <i class="fas fa-bold"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('italic', null)">
                                <i class="fas fa-italic"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('strikeThrough', null)">
                                <i class="fas fa-strikethrough"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('underline', null)">
                                <i class="fas fa-underline"></i>
                            </button>
                            <div class="seperator"></div>
                            <div class="seperator"></div>
                            <button onclick="transform('justifyLeft', null)">
                                <i class="fas fa-align-left"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('justifyCenter', null)">
                                <i class="fas fa-align-center"></i>
                            </button>
                            <button onclick="transform('justifyRight', null)">
                                <i class="fas fa-align-right"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('insertOrderedList', null)">
                                <i class="fas fa-list-ol"></i>
                            </button>
                            <div class="seperator"></div>
                            <button onclick="transform('insertUnorderedList', null)">
                                <i class="fas fa-list-ul"></i>
                            </button>
                            <div class="seperator"></div>

                            <div class="seperator"></div>
                            <input type="number" onchange="transform('fontSize', this.value)" value="3" max="7" min="1">

                        </div>
                    
                        <select onchange="transform('fontName', this.value)" style="display: none;">
                            <option disabled="">Font</option>
                            <option value="Times New Roman">Times</option>
                            <option value="Arial">Arial</option>
                            <option value="Courier New">Courier New</option>
                            <option value="Tahoma">Tahoma</option>
                            <option value="Arial">Verdana</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">Times</span><ul class="list"><li data-value="Font" class="option disabled">Font</li><li data-value="Times New Roman" class="option selected">Times</li><li data-value="Arial" class="option">Arial</li><li data-value="Courier New" class="option">Courier New</li><li data-value="Tahoma" class="option">Tahoma</li><li data-value="Arial" class="option">Verdana</li></ul></div>
                        <iframe name="editor" id="editor"></iframe>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1>trending keywords</h1>
                </div>
                <div class="job_overview_header jb_cover">
                    <div class="contect_form3">

                        <input type="text" name="name" placeholder="Type Keywords">
                    </div>
                    <div class="jb_btm_keyword jb_cover">
                        <ul>
                            <li><i class="flaticon-tag"></i> Trending Keywords :</li>
                            <li><a href="#">ui designer,</a></li>
                            <li><a href="#">developer,</a></li>
                            <li><a href="#">senior</a></li>
                            <li><a href="#">it company,</a></li>
                            <li><a href="#">design,</a></li>
                            <li><a href="#">call center</a></li>
                        </ul>
                    </div>
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
                                <select style="display: none;">
                                    <option>USA</option>
                                    <option>france</option>
                                    <option>UK</option>
                                    <option>germany</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">USA</span><ul class="list"><li data-value="USA" class="option selected">USA</li><li data-value="france" class="option">france</li><li data-value="UK" class="option">UK</li><li data-value="germany" class="option">germany</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="select_box">
                                <label>city</label>
                                <select style="display: none;">
                                    <option>new york</option>
                                    <option>california</option>
                                    <option> loss angles</option>

                                </select><div class="nice-select" tabindex="0"><span class="current">new york</span><ul class="list"><li data-value="new york" class="option selected">new york</li><li data-value="california" class="option">california</li><li data-value="loss angles" class="option"> loss angles</li></ul></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>full address</label>
                                <input type="text" name="name" placeholder="Lundon UK">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>latitude</label>
                                <input type="text" name="name" placeholder="41.4073509">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>longitude</label>
                                <input type="text" name="name" placeholder="50.4073509">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="contect_form3">
                                <label>zoom</label>
                                <input type="text" name="name" placeholder="20">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="map_wrapper jb_cover">
                                <div id="map">
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