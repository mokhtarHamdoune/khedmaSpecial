@extends("layout.recProfile")
@section("left_content")
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_main_overflow jb_cover">
                <div class="latest_job_overlow jb_cover">
                    <div class="manage_jobs_wrapper jb_cover">
                        <div class="job_list mange_list applications_recent">
                            <h6>recent applications</h6>
                        </div>
                    </div>
@if(count($messages)>0)
@foreach($messages as $message)
                    <div class="latest_job_box jb_cover">
                        <div class="job_list recent_app_1">
                            <div class="recent_cntnt">
                                <h6><a href="#" data-toggle="modal" data-target="#myModal01">{{$message->name}}</a></h6>
                            </div>
                        </div>
                        <div class="job_list_next recent_app_1">
                            <div class="header_btn download_btn_wrapper jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="see" id="msg{{$message->id}}" data-toggle="modal" data-target="#myModal01"><i class="fas fa-file-download"></i>view message</a>
                                    </li>
                                    <li>
                                        <a href="#" class="mark">{{$message->status ? "déja vue" : "pas vue"}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="apply_job jb_cover">
                                            <h1>Send a Message:</h1>
                                            <div class="search_alert_box jb_cover">
                                                <div class="apply_job_form">
                                                    <label>Name:</label>
                                                    <input disabled value="{{$message->name}}">
                                                </div>
                                                <div class="apply_job_form">
                                                    <label>Email:</label>
                                                    <input disabled value="{{$message->Email}}">
                                                </div>
                                                <div class="apply_job_form">
                                                    <label>Message</label>
                                                    <textarea disabled placeholder="Message">{{$message->body}}</textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
@endif
                    </div>
                    <div class="blog_pagination_section jb_cover">
                        {{$messages->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("message_script")
<script>
    $(".see").on("click",function(e){
        e.preventDefault();
        console.log($(this).attr("id").substring(3,$(this).attr("id").length));

        $.ajax({
            method:"POST",
            url:"http://127.0.0.1:8000/sendMessage?msg="+$(this).attr("id").substring(3,$(this).attr("id").length),
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   
        })
        $(".mark").eq($(".see").index(this)).text("déja vue");
    });
</script>
@endsection