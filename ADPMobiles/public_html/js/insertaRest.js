$(document).ready(function () {
    $("#guardar2").click(function () {
        var nombre1 = $("#nombre_restaurante").val();
        var ruc1 = $("#ruc").val();
        var telef = $("#telefono").val();
        var correo1 = $("#correo_restaurante").val();
        var usuar = $("#nombre_usuario").val();
        var pass = $("#clave").val();

        // Checking for blank fields.
        if (nombre1 == '' || ruc1 == '') {
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            alert("ingrese datos");
        } else {
            var data = {nombre: nombre1, ruc: ruc1, correo_restaurante: correo1, telefono: telef, usuario: usuar, clave: pass};
            $.ajax({
                url: 'http://www.adpeat.pe.hu/prueba2/Vista/insertarRest.php',
//                url: 'http://192.168.0.21/prueba2/Vista/insertarRest.php',
                data: data,
                async: true,
                method: 'post',
                dataType: 'json',
                success: function (json) {
                    alert("Datos Registrados ");
                    location.href = "menuprincipal.php";
                },
                error: function (error) {
                    alert("ingrese datos");
                }
            });
        }
    });
});