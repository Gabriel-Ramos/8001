/**
 * Created by Renard on 12/06/2016.
 */

function login(papel){
    var data = {};
    var $form = $("#login-form");
    data['cpf'] = $form.find("#cpf").val();
    data['senha'] = $form.find("#senha").val();
    data['papel'] = papel;
    $(".alert-info").fadeIn();
    setTimeout(function(){validaLogin(data)},1000);
    setTimeout(function(){window.location = "dashboard.php"},5000);
}

function validaLogin(data){
    $.post("../../login.php", data, function(response){
        //console.log(response);
        if(response.hasOwnProperty("erro")){
            console.log(response);
            showNotificationBox("error", response["erro"]);
        }
        else if(response.hasOwnProperty("sucesso")) {
            showNotificationBox("success","Bem vindo, "+response["usuario"]["nome"]);
        }
    }, "json");
}

function showNotificationBox(type, text){
    $(".alert").hide();
    switch(type){
        case "error":
            $(".alert-danger").fadeIn();
            break;
        case "success":
            $(".alert-success").children("strong").text(text);
            $(".alert-success").fadeIn();
    }

}

/*$( "form" ).on( "submit", function( event ) {
    event.preventDefault();
    console.log( $( this ).serialize() );
});*/
