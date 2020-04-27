$(document).ready(function(){
    $('#inscription').click(function(){
        $('#mainindex').empty();
        $('#mainindex').load('moduleco/inscription.html');
    });
    $('#connexion').click(function(){
        $('#mainindex').empty();
        $('#mainindex').load('moduleco/connexion.html');
    });
    $('#subdone').click(function(){
        $('#mainindex').empty();
        $('#mainindex').load('moduleco/connexion.html');
    });
});
function inscription(){
        $.ajax({
            method: "GET",
            url: "user.php",
            data: "login="+ $("#login").val() + "&password="+ $("#password").val() + "&type=insc",
            datatype: "text",
            success: function(datatype){
                if(datatype === "miss"){
                    $("#sectionsub").append("<p>Veuillez remplir tout les champs</p>");
                }
                if(datatype === "login"){
                    $("#sectionsub").append("<p>Ce login est déjà utilisé</p>");
                }
                if(datatype === "ok"){
                    $("#sectionsub").append("<p>Votre compte a bien était créée</p>");
                }
            }
        })
    }
function connexion(){
    $.ajax({
        method: "GET",
        url: "user.php",
        data: "login="+ $("#login").val() + "&password="+ $("#password").val() + "&type=co",
        datatype: "text",
        success: function(datatype){
            if(datatype === "miss"){
                $("#sectionco").append("<p>Veuillez remplir tout les champs</p>");
            }
            if(datatype === "create"){
                $("#sectionco").append("<p>Ce login n'éxiste pas veuillez créer un compte</p>");
                }
            if(datatype === "mdp"){
                $("#sectionco").append("<p>Mot de passe incorrect</p>");
            }
            if(datatype === "co"){
                $("#sectionco").append("<p>Vous êtes bien connecté</p>");
            }
        }
    })
}