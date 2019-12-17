const langue=`<div class="delete_jb_form language">
<input type="text" name="name" placeholder="Langue">
</div>`;

const formation_block=`<div class="category_wrapper jb_cover formation">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="category_lavel jb_cover">
            <p>formation:</p>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="delete_jb_form gallery_link">
            <label for="">Diplome</label>
            <input type="text" name="name" >
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Domaine</label>
            <input type="text" name="name">
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Début Fomation</label>
            <input type="month" name="name" placeholder="Date début">
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Fin Formation</label>
            <input type="month" name="name" placeholder="Date fin">
        </div>

    </div>
</div>
</div>`;
const experience_block=`<div class="category_wrapper jb_cover experience">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="category_lavel jb_cover">
            <p>experience 1 :</p>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="delete_jb_form gallery_link">
            <label for="">Intitulé</label>
            <input type="text" name="intetule">
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Lieu</label>
            <input type="text" name="lieu" placeholder="Entreprise">
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Date début</label>
            <input type="month" name="date_debut" >
        </div>
        <div class="delete_jb_form gallery_link">
            <label for="">Date fin</label>
            <input type="month" name="date_fin" >
        </div>
        <div class="delete_jb_form gallery_link">
            <textarea name="description" rows="2" placeholder="Description"></textarea>
        </div>

    </div>
</div>
</div>`;
const competence_block=`<div class="category_wrapper jb_cover competence">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="category_lavel jb_cover">
            <p>type here:</p>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="delete_jb_form gallery_link">
            <input type="text" name="intit" placeholder="Intétulé">
        </div>
        <div class="delete_jb_form gallery_link">
            <input type="text" name="exper" placeholder="Anneés d'experiences">
        </div>
        <div class="delete_jb_form gallery_link">
            <textarea name="description" rows="2" placeholder="Petite description"></textarea>
        </div>
    </div>
</div>
</div>`
$(function() {
    //lets goooo

    ///les langues
    // $("#add_lang").click(function(e){
    //     e.preventDefault();
    //     $("#delete_lang").removeAttr("disabled");
    //     $("#languages").append(langue);
        
    // })
    // $("#delete_lang").click(function(e){
    //     e.preventDefault();
    //     if ($(".language").length===1) this.setAttribute("disabled","disabled");
    //     else $(".language").last().remove()
    // })
    // //formation
    // $("#add_4").click(function (e) { 
    //     e.preventDefault();
    //     $("#formation").before(formation_block);
    //     $("#delete_4").removeAttr("disabled");
    // });
    // $("#delete_4").click(function (e) { 
    //     e.preventDefault();
    //     if($(".formation").length===1) this.setAttribute("disabled","disabled");
    //     else $(".formation").last().remove()
    // });
    // //experience
    // $("#add_6").click(function(e){
    //     e.preventDefault();
    //     $("#experience").before(experience_block);
    //     $("#delete_6").removeAttr("disabled");
    // });

    // $("#delete_6").click(function(e){
    //     e.preventDefault();
    //     if($(".experience").length===1) this.setAttribute("disabled","disabled");
    //     else $(".experience").last().remove();
    // });
    // //comptence
    // $("#add_7").click(function(e){
    //     e.preventDefault();
    //     $("#competence").before(competence_block);
    //     $("#delete_7").removeAttr("disabled");
    // });

    // $("#delete_7").click(function(e){
    //     e.preventDefault();
    //     if($(".competence").length===1) this.setAttribute("disabled","disabled");
    //     else $(".competence").last().remove();
    // });
    // $(".e_d_container p.delete").click(function(e){
    //     e.preventDefault();
    //     console.dir(this);
    // })
    $(".e_d_container p.delete").click(function(e){
        
    })

    $(".e_d_container p.edit").click(function(e){
        let text=[];
        $("#formcontainer1 .form_item").each(function(){
            text.push(this.innerText);
        });
        text.push($("#formcontainer1 li").first().text().split("-")[0]);
        text.push($("#formcontainer1 li").first().text().split("-")[1]);
        console.log(text);
        let i=0;
        $("#myModal4 input").each(function(){
            this.setAttribute("value",text[i]);
            i++;
        });
        $("#myModal4").modal("show");
    })
});