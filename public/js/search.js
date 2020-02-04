//lets gooooo
//home search
$("#search").on("input",function(e){
    e.preventDefault();
    if($(this).val()!=""){
        $.ajax({
            method:"GET",
            url:"jobs/search?search="+$(this).val(),
            dataType:"json",
            success:function(response){
                console.log(response);
                $("#search_result").empty();
                $("#search_result").show();
                const {domaines,titles,cities,employers}=response;
                domaines.forEach(element=>{
                    $("#search_result").append(`<a href="jobs/searchJobs?domaine=${element.domaine}">${element.domaine}</a>`)
                });
                titles.forEach(element=>{
                    $("#search_result").append(`<a href="jobs/searchJobs?title=${element.title}">${element.title}</a>`)
                });
                cities.forEach(element=>{
                    $("#search_result").append(`<a href="jobs/searchJobs?wilaya=${element.city}">${element.city}</a>`)
                });
                employers.forEach(element=>{
                    $("#search_result").append(`<a href="jobs/searchJobs?name=${element.name}">${element.name}</a>`)
                });
            }
        });
    }else{
        $("#search_result").empty();
        $("#search_result").hide();
    }
})
$(document).on("click","div.blog_pagination_section ul li a",function(e){
    e.preventDefault();
    let current=$("div.blog_pagination_section ul").find("li.third_pagger").text();
    if($(this).is('.prev')){
        current--;
        current=current==0 ? ($("div.blog_pagination_section ul li").length-2): current;
    }else if($(this).is('.next')){
        current++;
        current=current%($("div.blog_pagination_section ul li").length-1)==0 ? '1' : current;
    }else{
        current=$(this).text();
    }
    $("div.blog_pagination_section ul").find("li.third_pagger").removeClass("third_pagger");
    $("div.blog_pagination_section ul li").eq(current).addClass("third_pagger"); 
    filter($("#filter").serializeArray(),current);
});

$("#filter").on("change",function(e){
    e.preventDefault();
    filter($(this).serializeArray());
});
function filter(content,page=1){
    $.ajax({
        method:"GET",
        url:"jobs/filter?page="+page,
        data:content,
        dataType:"json",
        success:function(response){
            $(".list_offre").empty();
            $(".showpro p").text(`Vous regardez 01 à ${response.all}`);
            if(page==1){
                pagination(response.all);
            }
            response.offres.forEach(element => {
                $(".list_offre").eq(0).append(offreBloc(element,0));
                $(".list_offre").eq(1).append(offreBloc(element,1));
            });
        }
    })
}
function pagination(lines){
    let li="";
    for(let i=2;i<=Math.ceil(lines/10);i++){
        li+=`<li><a href="#">${i}</a></li>`
    }
    $(".blog_pagination_section ul").html(`
    <ul>
        <li>
            <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
        </li>
        <li class="third_pagger"><a href="#">1</a>
        </li>
        ${li}
        <li>
            <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
        </li>
    </ul>
    `);
}
function offreBloc(element,index){
    if(index==0){
        return `
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="jp_job_post_side_img">
                            <img src="storage/profile_images/${element.image}" alt="post_img" class="cmp_logo" />
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
                        <img src="storage/profile_images/${element.image}" class="cmp_logo" alt="post_img" />
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
