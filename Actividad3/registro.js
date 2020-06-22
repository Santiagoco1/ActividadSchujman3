$(document).ready(function () {
        $("#registro").submit(function(e) {
        e.preventDefault();
        window.alert($("form[id='registro']") .serialize());
        $.post("registro.php",$("form[id='registro']") .serialize(), function(data) {
            $(":input").val('');
        });
    });
});
