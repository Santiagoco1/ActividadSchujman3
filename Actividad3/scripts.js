$(document).ready(function () {
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
    const range = wrap.querySelector(".range");
    const bubble = wrap.querySelector(".bubble");

    range.addEventListener("input", () => {
        setBubble(range, bubble);
    });
    setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 200;
        const val = range.value;
    const newVal = Number(((val - min) * 100) / (max - min));
    bubble.innerHTML = val;
    // Sorta magic numbers based on size of the native UI thumb
    bubble.style.left = `calc(${newVal}% - (${8 - newVal * 0.15}px))`;
    }

    $("#registro").submit(function(e) {
        e.preventDefault();
        window.alert($("form[id='registro']") .serialize());
        $.post("guardar.php",$("form[id='registro']") .serialize(), function(data) {
            $(":input").val('');
        });
    });
});

function bloqueo(resp){
        var discount_percentage = document.getElementById(resp);
            discount_percentage.disabled = true;
}

function desbloqueo(resp){
    var discount_percentage = document.getElementById(resp);
        discount_percentage.disabled = false;
}