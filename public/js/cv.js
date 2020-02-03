//lets goooo
//start experience
const addExperience=()=>{
    let content=$("#exp_form").serializeArray();
    content.push({name:"cv_id",value:window.laravel.id});
    $.ajax({
        type: "POST",
        url: "../experience",
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("#experiences").prepend(`<div class="jp_listing_overview_list_main_wrapper education_board jb_cover experience">
                <div class="row justify-content-end">
                    <div class="col-1 e_d_container">
                        <p class="edit_exp" id='${response.id_exp}'><i class="fas fa-edit"></i></p>
                    </div>
                    <div class="col-1 e_d_container">
                        <p class="delete_exp" id='${response.id_exp}'><i class="fas fa-minus"></i></p>
                    </div>
                </div>
                <div class="jp_listing_list_icon">
                    <i class="fas fa-suitcase"></i>
                </div>
                    <div class="jp_listing_list_icon_cont_wrapper">
                        <ul class="expcontainer">
                            <li>${content[2].value}/${content[3].value}</li>
                            <li>Intitulé : <span class="exp_item">${content[0].value}<span></li>
                            <li>Entreprise : <a href="#"><span class="exp_item" >${content[1].value}</span></a></li>
                            <li>Description : 
                                <p style="text-indent:1.5em;">${content[4].value}</p>
                            </li>
                        </ul>
                    </div>
                </div>`);
                $("#myModal6").modal("hide");
                $('#exp_form').trigger("reset");
                
            }
        }
    });
}
const updateExperience=(idexp,index_exp)=>{
    let content=$("#exp_form").serializeArray();
    $.ajax({
        type: "PUT",
        url: "../experience/"+idexp,
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("ul.expcontainer").eq(index_exp).replaceWith(`<ul class="expcontainer">
                <li>${content[2].value}/${content[3].value}</li>
                <li>Intitulé : <span class="exp_item">${content[0].value}<span></li>
                <li>Entreprise : <a href="#"><span class="exp_item" >${content[1].value}</span></a></li>
                <li>Description : 
                    <p style="text-indent:1.5em;">${content[4].value}</p>
                </li>
                </ul>`);
                $("#myModal6").modal("hide");
                $('#exp_form').trigger("reset");
            }
        }
    });
   
}
//when the user click on delete
$(document).on("click","p.delete_exp",function(e){
    e.preventDefault();
    let delete_index=$("p.delete_exp").index(this);
    let exp_id=$(this).attr("id");
    $.ajax({
        type: "DELETE",
        url: "../experience/"+exp_id,
        dataType:"json",
        success: function (response) {
            if(response.etat){
                $(".experience").eq(delete_index).remove();
            }
        }
    });
});
 // end_experience
 //start competence
 const addCompetence=()=>{
    let content=$("#cmp_form").serializeArray();
    content.push({name:"cv_id",value:window.laravel.id});
    $.ajax({
        type: "POST",
        url: "../competence",
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("#competences").prepend(`<li>
                        <div class='row'>
                            <div class='col-10 cmpcontainer'>
                                <i class="fas fa-check-square"></i><span>${content[0].value}</span> <span>${content[1].value}</span>
                            </div>
                            <div class="col-1 e_d_container">
                                <p class="edit_cmp" id='${response.id_cmp}'><i class="fas fa-edit"></i></p>
                            </div>
                            <div class="col-1 e_d_container">
                                <p class="delete_cmp" id='${response.id_cmp}'><i class="fas fa-minus"></i></p>
                            </div>
                        </div>
                    </li>`);
                    $("#myModal7").modal("hide");
                    $('#cmp_form').trigger("reset");
            }
        }
    });
}

const editCompetence=(id_cmp,index_cmp)=>{
    let content=$("#cmp_form").serializeArray();
    $.ajax({
        type: "PUT",
        url: "../competence/"+id_cmp,
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $(".cmpcontainer").eq(index_cmp).replaceWith(`<div class='col-10 cmpcontainer'>
                <i class="fas fa-check-square"></i><span>${content[0].value}</span> <span>${content[1].value}</span>
                </div>`);
                $("#myModal7").modal("hide");
                $('#cmp_form').trigger("reset");
            }
        }
    });
}
$(document).on("click","p.delete_cmp",function(e){
    e.preventDefault();
    let delete_index=$("p.delete_cmp").index(this);
    let cmp_id=$(this).attr("id");
    $.ajax({
        type: "DELETE",
        url: "../competence/"+cmp_id,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("#competences li").eq(delete_index).remove();
            }
        }
    });
});
//end competence
//start basics
const editBasics=()=>{
    let content=$("#basic_form").serializeArray();
    $.ajax({
        type: "PUT",
        url: "../basics/"+window.laravel.id,
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("#titre_cv").text(content.shift().value);
                $("#langcontainer").children().not("li:first").remove();
                content.forEach((elem)=>{
                    $("#langcontainer").append(`<li class="lang">${elem.value}</li>`);
                })
                $("#myModal1").modal("hide");
                $('#basic_form').trigger("reset");
            }
        }
    });
}
//end basics
//start formation
const addFormation=()=>{
    let content =$("#form_form").serializeArray();
    content.push({name:"cv_id",value:window.laravel.id});
    $.ajax({
        type: "POST",
        url: "../formation",
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("#formations").prepend(`<div class="jp_listing_overview_list_main_wrapper education_board jb_cover formation">
                    <div class="row justify-content-end">
                        <div class="col-1 e_d_container">
                            <p class="edit_form" id='${response.id_form}'><i class="fas fa-edit"></i></p>
                        </div>
                        <div class="col-1 e_d_container">
                            <p class="delete_form" id='${response.id_form}'><i class="fas fa-minus"></i></p>
                        </div>
                    </div>
                    <div class="jp_listing_list_icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="jp_listing_list_icon_cont_wrapper">
                        <ul class="formcontainer"">
                            <li>${content[3].value}/${content[4].value}</li>
                            <li>Diplome:<span class="form_item">${content[0].value}</span></li>
                            <li>Domaine:<span class="form_item">${content[1].value}</span></li>
                            <li>Lieu:<span class="form_item">${content[2].value}</span></li>
                        </ul>
                </div>
                </div>`);
                $("#myModal4").modal("hide");
                $('#form_form').trigger("reset");
            }
        }
    });
}

const editFormation=(id_form,index_form)=>{
    let content =$("#form_form").serializeArray();
    $.ajax({
        type: "PUT",
        url: "../formation/"+id_form,
        data: content,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $("ul.formcontainer").eq(index_form).replaceWith(`<ul class="formcontainer"">
                <li>${content[3].value}/${content[4].value}</li>
                <li>Diplome:<span class="form_item">${content[0].value}</span></li>
                <li>Domaine:<span class="form_item">${content[1].value}</span></li>
                <li>Lieu:<span class="form_item">${content[2].value}</span></li>`);
                $("#myModal4").modal("hide");
                $('#form_form').trigger("reset");
            }
        }
    });
}
$(document).on("click","p.delete_form",function(e){
    e.preventDefault();
    let delete_index=$("p.delete_form").index(this);
    let form_id=$(this).attr("id");
    $.ajax({
        type: "DELETE",
        url: "../formation/"+form_id,
        dataType: "json",
        success: function (response) {
            if(response.etat){
                $(".formation").eq(delete_index).remove();
            }
        }
    });

})
//end formation
//the drag file
var $input	 = $('.box__input input[type="file"]' ),
    $label	 = $input.next( 'label' ),
    labelVal = $label.html();

$input.on( 'change', function( e )
{
    showFiles(e.target.files);    
});

var isAdvancedUpload = function() {
    var div = document.createElement('div');
    return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}(); 

var $form = $('.box');

if (isAdvancedUpload) {
  $form.addClass('has-advanced-upload');
  var droppedFile = false;

  $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
  })
  .on('dragover dragenter', function() {
    $form.addClass('is-dragover');
  })
  .on('dragleave dragend drop', function() {
    $form.removeClass('is-dragover');
  })
  .on('drop', function(e) {
    droppedFile = e.originalEvent.dataTransfer.files;
    showFiles( droppedFile );
  });
}
showFiles = function(files) {
    if( files[0].name )
        fileName = files[0].name .split( '\\' ).pop();
    if( fileName )
        $label.html( fileName );
    else
        $label.html( labelVal );
    // Firefox bug fix
    console.log()
    $input
    .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
    .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
};

const addDocument=()=>{
    const form = document.getElementById("doc_form");
    const formData = new FormData(form);
    //if the file was droped not the normal click
    if(droppedFile){
        //we change input file with the dorped file because actualy is empty
        formData.set("document",droppedFile[0]);
    }
    console.log(formData.get("document"));
    formData.append("id_cv",window.laravel.id);
    $(".box__input label").html("Uploading&hellip;");
    $.ajax({
        url: "../document",
        type: "POST",
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            if(response.etat){
                let i = $("#documents tbody").children().length +1
                $("#documents tbody").append(`<tr>
                <th scope="row">${i}</th>
                <td>${formData.get("type_doc")}</td>
                <td>${formData.get("document").name}</td>
                <td class="dowDel"><a href="${response.path}" download><i class="fas fa-download"></i></a><a href="dropFile/${response.doc_id}"><i class="fas fa-trash-alt"></i></i></a></td>
                </tr>`);
                $("#myModal8").modal("hide");
                $('#doc_form').trigger("reset");
                $(".box__input label").html(`<strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.`);
            }
        }
    });
}
$(document).on("click",".dowDel a:nth-child(2)",function(e){
    e.preventDefault();
    let delete_index=$(".dowDel a:nth-child(2)").index(this);

    console.log(delete_index);
    $.ajax({
        type: "DELETE",
        url: "../"+$(this).attr("href"),
        data: "json",
        success: function (response) {
            if(response.etat){
                $("#documents tbody tr").eq(delete_index).remove();
            }
        }
    });
})