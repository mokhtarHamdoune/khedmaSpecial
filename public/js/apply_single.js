var index=0;
$(document).on("click",".apply",function(e){
    e.preventDefault();
    console.log("apply clicked");
    let href=$(this).attr("href");
    index=$(".apply").index(this);
    $.ajax({
        method:"GET",
        url:"http://127.0.0.1:8000/postuler",
        success:function(response){
            if(!response.isAuth){
                window.location="http://127.0.0.1:8000/login";
            }else{
                $(".search_alert_box").empty();
                response.cvs.forEach((cv,index)=>{
                    $(".search_alert_box").append(`
                        <div class="apply_job_form">
                            <div class="row justify-content-around">
                                <div class="col-8">
                                    <label for="cv_${cv.id}">${cv.titre}</label>
                                </div>
                                <div class="col-2">
                                    <input type="radio" id="cv_${cv.id}" name="cv_id" value="${cv.id}" ${index==0 ? 'checked' :''}>
                                </div>
                            </div>
                        </div>`
                    );
                });
                $("#myModal").show(200).addClass("show");
            }
        }
    })
});
$("#apply_for_this").on("click",function(e){
    e.preventDefault();
    $.ajax({
        method:"POST",
        url:$(this).attr("href"),
        data:$("#postule_form").serialize(),
        dataType:"json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(response){
            if(response.etat){
                $("#myModal").hide().removeClass("show");
                window.location="http://127.0.0.1:8000/jobs";
            }
        }
    });
});