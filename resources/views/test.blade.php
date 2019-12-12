@foreach($offres as $offre)
                    <div class="latest_job_box jb_cover">
                        <div class="job_list recent_app_1">
                            <div class="recent_img">
                                <img src="{{asset('dashboard/images/rs1.jpg')}}" alt="post_img">
                            </div>
                            <div class="recent_cntnt">
                                <h6><a href="#">{{$offre->title}}</a></h6>
                                <ul>
                                    <li><i class="fas fa-suitcase"></i>&nbsp; web designer</li>
                                    <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_list_next recent_app_1">
                            <div class="header_btn download_btn_wrapper jb_cover">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-file-download"></i>download info</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fas fa-envelope"></i>send</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
@endforeach
