$(document).ready(function () {
    $("#registro").submit(function(e) {
        e.preventDefault();
        $.post("guardar.php",$("form[id='registro']") .serialize(), function(data) {
            $(":input").val('');
        });
    });
});
