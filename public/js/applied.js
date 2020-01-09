$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".cancel").on("click",function(e){
    e.preventDefault();
    let cancelIndex=$(this).index(".cancel");
    console.log(cancelIndex);
    $.ajax({
        url:$(this).attr("href"),
        method:"DELETE",
        dataType:"json",
        success:function(response){
            if(response.etat){
                $(".applied_job").eq(cancelIndex).hide(600,function(){
                    $(this).remove();
                });
            }
        }
    });
})