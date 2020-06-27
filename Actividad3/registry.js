$(document).ready(function () {
    function validar_clave(e) {

        var cla1 = $('#register-form #contra').val();
        var cla2 = $('#register-form #contra2').val();
        if (cla1 == '' || cla2 == '') {
          alert('Debes introducir tu clave en los dos campos.');
          e.preventDefault();
          return    false;
        }
        else if (cla1 != cla2) {
            alert("Las claves introducidas no son iguales");
            e.preventDefault();
            return false;
        }
        else {
            alert('Contraseña correcta');
            return true;
        }
    };
    
});

