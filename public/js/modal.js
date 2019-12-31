$(function() {
    //lets goooo
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //when the user want to change the basic information
    $("#edit_basics").on("click",function(e) {
        e.preventDefault();
        let text=[];
        text.push($("#titre_cv").text());
        $("#langcontainer .lang").each(function(){
            text.push($(this).text());
        });
        $("#myModal1").find("input[name='titre_cv']").val(text.shift());
        if(text.length > 0){
            $("#languages input").val(text.shift());
        }
        if(text.length > 0){
            //remove all the input after the default one to avoid append new inputs to earlier inputs if exist
            $("#languages").children().not("input:first").remove();
            text.forEach((lang)=>{
                $("#languages").append(`<input type="text"  name="langue[]" value='${lang}' placeholder="Langue">`);
            });
        }
        $("#myModal1").modal("show");
    });
    //whene the user click on add  formation,experience or competenc we shoud reset the <form>
    $(".fa-plus-square").click(function(e){
        e.preventDefault();
        let parent=this.parentElement;
        $(parent.getAttribute("data-target")).find('form').find("input").attr("value","");
        $(parent.getAttribute("data-target")).find('form').find("textarea").text("");
        if(parent.getAttribute("data-target")==="#myModal4"){
            $("#submit_form").attr("onclick","addFormation()").text("Ajouter");
        }
        else if(parent.getAttribute("data-target")==="#myModal6"){
            $("#submit_exp").attr("onclick","addExperience()").text("Ajouter");
        }else if(parent.getAttribute("data-target")==="#myModal7"){
            $("#submit_cmp").attr("onclick","addCompetence()").text("Ajouter");
        }
    });
    ///les langues
    $("#add_lang").click(function(e){
        e.preventDefault();
        $("#delete_lang").removeAttr("disabled");
        $("#languages").append(`<input type="text" name="langue[]" placeholder="nouvel langue">`);
        
    })
    $("#delete_lang").click(function(e){
        e.preventDefault();
        if ($("#languages input").length===1) this.setAttribute("disabled","disabled");
        else $("#languages input").last().remove()
    })
    $(document).on("click","p.edit_form",function(e){
        e.preventDefault();
        let edit_index=$("p.edit_form").index(this);
        let text=[];
        $(".formcontainer").eq(edit_index).find(".form_item").each(function(){
            text.push(this.textContent)
        });
        text.push($(".formcontainer").eq(edit_index).children().first().text().split("/")[0]);
        text.push($(".formcontainer").eq(edit_index).children().first().text().split("/")[1]);

        $("#myModal4 input").each(function(){
            this.setAttribute("value",text.shift());
        });
        $("#submit_form").attr("onclick","editFormation("+$(this).attr("id")+","+edit_index+")").text("Editer");
        $("#myModal4").modal("show");
    });
    //whene the user click on edit experience
    $(document).on("click","p.edit_exp",function(e){
        e.preventDefault();
        let text=[];
        let edit_index=$("p.edit_exp").index(this);
        $(".expcontainer").eq(edit_index).find(".exp_item").each(function(){
            text.push(this.textContent)
        });
        text.push($(".expcontainer").eq(edit_index).children().first().text().split("/")[0]);
        text.push($(".expcontainer").eq(edit_index).children().first().text().split("/")[1]);
        text.push($(".expcontainer").eq(edit_index).children().last().children().first().text());
        $("#myModal6 input").each(function(){
            this.setAttribute("value",text.shift());
        });
        $("#myModal6 textarea").text(text.shift());
        $("#submit_exp").attr("onclick","updateExperience("+$(this).attr("id")+","+edit_index+")").text("Editer");
        $("#myModal6").modal("show");
    });
    //whene the user click on edit competence

    $(document).on("click","p.edit_cmp",function(e){
        e.preventDefault();
        let text=[];
        let edit_index=$("p.edit_cmp").index(this);
        $(".cmpcontainer").eq(edit_index).find("span").each(function(){
            text.push(this.textContent)
        });
        // im not sure of this if the current will send to the server
        $("#myModal7 .nice-select .current").text(text.shift());
        $("#myModal7 textarea").text(text.shift());
        $("#submit_cmp").attr("onclick","editCompetence("+$(this).attr("id")+","+edit_index+")").text("Editer");
        $("#myModal7").modal("show");
    });

});
