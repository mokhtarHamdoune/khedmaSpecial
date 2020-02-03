// $(function(){
//     $.ajax({
//         method:"GET",
//         url:"/jobs",
//         succes:function(respons){

//         }
//     });
// })
$("div.blog_pagination_section ul li a").on("click",function(e){
    e.preventDefault();
    let current=$("div.blog_pagination_section ul").find("li.third_pagger").text();
    if($(this).is('.prev')){
        current--;
    }else if($(this).is('.next')){
        current++;
    }else{
        current=$(this).text();
    }
    //remove and replace thirparty
    current=current%($("div.blog_pagination_section ul li").length-1)==0 ? '1':current%($("div.blog_pagination_section ul li").length-1)
    $("div.blog_pagination_section ul").find("li.third_pagger").removeClass("third_pagger");
    $("div.blog_pagination_section ul li").eq(current).addClass("third_pagger"); 
    $.ajax({
        method:"GET",
        url:"jobs?page="+current,
        dataType:"json",
        success:function(response){
            $(".list_offre").empty();
            response.offres.forEach(element => {
                $(".list_offre").eq(0).append(offreBloc(element,0));
                $(".list_offre").eq(1).append(offreBloc(element,1));
            });
        }
    })
});

$("#filter").on("change",function(e){
    e.preventDefault();
    $.ajax({
        method:"GET",
        url:"jobs/filter",
        data:$(this).serializeArray(),
        dataType:"json",
        success:function(response){
            $(".list_offre").empty();
            response.offres.forEach(element => {
                $(".list_offre").eq(0).append(offreBloc(element,0));
                $(".list_offre").eq(1).append(offreBloc(element,1));
            });
        }
    })
})
function offreBloc(element,index){
    if(index==0){
        return `
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jp_job_post_side_img">
                            <img src="${element.image===null ? 'images/default_cmp_logo.png' : element.image}" alt="post_img" class="cmp_logo" />
                            <br> <span>${element.name}</span>
                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4><a href="${"jobs/details/"+element.id}">${element.title}</a></h4>

                            <ul>
                                <li><i class="flaticon-cash"></i>&nbsp;${element.remuniration}DA/h</li>
                                <li><i class="flaticon-location-pointer"></i>&nbsp;${element.lieuTravailleExact},${element.city}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                            <ul>
                                <li>
                                    <div class="job_adds_right">
                                        <a href="#!"><i class="far fa-heart"></i></a>
                                    </div>
                                </li>
                                <li><a href="job_single.html">${element.type}</a></li>
                                <li> <a href="#">apply</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
    }else{
        return `<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="job_listing_left_fullwidth jb_cover">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="jp_job_post_side_img">
                        <img src="${element.image===null ? 'images/default_cmp_logo.png' : element.image}" class="cmp_logo" alt="post_img" />
                        <br> <span>${element.name}</span>
                    </div>
                    <div class="jp_job_post_right_cont">
                        <h4><a href="${"jobs/details/"+element.id}">${element.title}</a></h4>

                        <ul>
                            <li><i class="flaticon-cash"></i>&nbsp;${element.remuniration}DA/h</li>
                            <li><i class="flaticon-location-pointer"></i>&nbsp;${element.lieuTravailleExact},${element.city}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="jp_job_post_right_btn_wrapper">
                        <ul>
                            <li>
                                <div class="job_adds_right">
                                    <a href="#!"><i class="far fa-heart"></i></a>
                                </div>
                            </li>
                            <li><a href="job_single.html">${element.type}</a></li>
                            <li> <a href="#">apply</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
    }
}
