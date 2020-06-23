$(document).ready(function () {
    $("#registro").submit(function(e) {
        e.preventDefault();
        window.alert($.post("Validar_user.php",$("form[id='registro']") .serialize(), function(data) { $(":input").val('');}) );
        /*
            $.post("iniciar_sesion.php",$("form[id='registro']") .serialize(), function(data) {
                $(":input").val('');          
        
            );
        */
    });
});

