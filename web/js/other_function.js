function verif_connexion(connecter) {

    if( connecter ){
        $("#btn_connexion").css({'background-color':'#E30404',"border": "0.125rem solid #E30404","color":"white","cursor":"pointer"});
        $("#btn_connexion").html("DECONNEXION");
        $("#btn_connexion").removeClass("popup-with-move-anim");
        $("#btn_connexion").addClass("as-button");
        $("#btn_connexion").removeAttr("href");
        $("#btn_connexion").attr("onclick", "se_connecter()");
    }
    else{
        $("#btn_connexion").removeAttr("style");
        $("#btn_connexion").html("CONNEXION");
        $("#btn_connexion").removeClass("as-button");
        $("#btn_connexion").addClass("popup-with-move-anim");
        $("#btn_connexion").removeAttr("onclick");
        $("#btn_connexion").attr("href", "#details-lightbox-3");

        var url = "php/deconnexion.php";

        $.post(url, {val:0}, function(data){
            
        },"json");
    }
}

function se_connecter(){

    if(connecter){
        verif_connexion(false);
        document.location.href = "./index.php"; 
    }
    else{
        connexion();
    }

}

function connexion(){

    var mail = $("#cmail").val();
    var mdp  = $("#cpassword").val();

    var url = "php/connexion.php";//fichier php pour se connecter

    if( mail != "" && mdp != "" ){

        $.post(url, {email:mail, password:mdp}, function(data){

            infos = data.infos;

            if(infos.length != 0){
                verif_connexion(true);
                document.location.href = "./index.php"; 
                $("#connect_error").html("");
            }
            else{
                $("#connect_error").html("Addresse mail ou mot de passe incorrect.");
            }
            
        },"json");
    }
    else{
        if(mail == ""){
            $("#connect_error").html("Veuillez saisir votre mail");
        }
        else if(mdp == ""){
            $("#connect_error").html("Veuillez saisir votre mot de passe");
        }
    }
}
        

function filter_table() {
    var input, filter, table, tr, td, i, txtValue;
    input   = document.getElementById("myInput");
    filter  = input.value.toUpperCase();
    table   = document.getElementById("myTable");
    tr      = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        for (var e = 0; e < tr[i].getElementsByTagName("td").length; e++) {
            td = tr[i].getElementsByTagName("td")[e];
            if (td) {
                txtValue = td.textContent || td.innerText;

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } 
                else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
}