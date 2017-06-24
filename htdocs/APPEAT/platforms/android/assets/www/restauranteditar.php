<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *;script-src 'self' http://onlineerp.solution.quebec 'unsafe-inline' 'unsafe-eval'; ">
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>Adomicilio Eat</title>
    </head>

    <body>
        <div class="menu">
            <a title="regresa" href="menuprincipal.php"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
            <div id="tituloM">
                <h1 align="center">DATOS RESTAURANTE</h1>
            </div>
        </div>
        <div class="dato">
            <form style="width: 400px;" name="form" action="#" method="POST">

                <input class="inp" type="number" name="codigo" placeholder=""  />
                <label id="texto" for="fname">Nombre del Restaurante</label>
                <input class="inp" type="text" id="nombre" name="nombre" placeholder="" required="required" />
                <label id="texto" for="fdes">Descripcion</label>
                <input class="inp" type="text" id="descripcion" name="descripcion" placeholder="" required="required" />
                <label id="texto" for="fcontacto">Contacto</label>
                <input class="inp" type="text" id="contacto" name="contacto" placeholder="" required="required" />
                <label id="texto" for="fruc">N° RUC</label>
                <input class="inp" type="number" id ="ruc" name="ruc" placeholder="" required="required" />
                <label id="texto" for="ftel">Telefono</label><br>
                <input class="inp" type="number" id="telefono" name="telefono" placeholder="" required="required" /><br>
                <label id="texto" for="fcorreo">Correo</label>
                <input class="inp" type="text" id="correo" name="correo" placeholder="" required="required" />
                <input id="guardar" type="button" value="GUARDAR" title="ACEPTAR" onclick="validar()" />
            </form>
        </div>

        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
       
        <script>
                    $(document).ready(function () {
                        $("#aceptar").click(function () {
                            var nombres = $("#nombre").val();
                            var desc = $("#descripcion").val();
                            var cont = $("#contacto").val();
                            var ruc1 = $("#ruc").val();
                            var telef = $("#telefono").val();
                            var correo1 = $("#correo").val();

//        var nombre = document.getElementById('nombre_usuario');
//        var clave = document.getElementById('clave');
// Checking for blank fields.
                            if (nombres == '' || desc == '' || cont == '' || ruc1 == '' || telef == '' || correo1 == '') {
                                $('input[type="text"],input[type="password"]').css("border", "2px solid red");
                                $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
                                alert("ingrese usuario y pass1");
                            } else {
                               // alert(nombre);
                                var data = {nombre_usuario: nombre, clave: clave};
                                $.ajax({
                                    url: 'http://localhost/Pruebas/Vista/Logearse.php',
                                    data: data,
                                    method: 'post',
                                    dataType: 'json',
                                    success: function (json) {
                                        console.log(JSON.stringify(json.Data));
                                        if (json.error_code == "200") {
                                            alert("Bienvenida   (" + json.Data.nombre_usuario + ")");
                                            location.href = "menuprincipal.php";
<?php
print_r($_SESSION);
//
?>
                                            //    alert("Bienvenida   (" + $_SESSION + ")");
                                        } else {
                                            alert(json.message);

                                        }

                                    }, error: function (error) {
                                        alert("ingrese user y passdd");
<?php
$_SESSION['islogin'] = false
?>
                                    }
                                });
                            }
                        });
                    });
        </script>
    </body>

</html>