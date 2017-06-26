$(document).ready(function () {
    $("#aceptar").click(function () {
        var nombre = $("#nombre_usuario").val();
        var clave = $("#clave").val();
//        var nombre = document.getElementById('nombre_usuario');
//        var clave = document.getElementById('clave');
// Checking for blank fields.
        if (nombre == '' || clave == '') {
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            alert("ingrese usuario y pass1");
        } else {
            var data = {usuario: nombre, password: clave};
            $.ajax({
                url: 'http://www.adpeat.pe.hu/prueba2/Vista/Logearse.php',
                data: data,
                method: 'post',
                dataType: 'json',
                success: function (json) {
                    console.log(JSON.stringify(json.Data));
                    alert("Bienvenida   (" + json.Data.usuario + ")");
                    location.href = "menuprincipal.php";
                    
                },

                error: function (error) {
                    alert("ingrese datos");
                }
            });
        }
    });
});