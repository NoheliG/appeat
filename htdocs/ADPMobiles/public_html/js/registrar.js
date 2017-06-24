$(document).ready(function () {
    $("#aceptar2").click(function () {
        var nombre = $("#nombre").val();
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();
        var ruc = $("#ruc").val();
        var telefono = $("#telefono").val();
        var correo = $("#correo").val();
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
                url: 'http://localhost/Pruebas/Vista/Logearse.php',
                data: data,
                method: 'post',
                dataType: 'json',
                success: function (json) {
                    console.log(JSON.stringify(json.Data));
                    alert("Bienvenida   (" + json.Data.usu + ")");
                    location.href = "menuprincipal.html";

                },

                error: function (error) {
                    alert("ingrese user y passdd");
                }
            });
        }
    });
});