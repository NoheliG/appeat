<!DOCTYPE html>
<html lang="es">>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="js/insertaRest.js"></script>
        <title>Adomicilio Eat</title>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header">

                <a href="index.html" data-inline="true" style="color: #df2727; width:330px; padding-bottom: 20px; padding-top: 20px; font-size: 20px;" data-role="button" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">REGISTRARSE</a>

            </div>
            <div data-role="main" class="ui-content" style="margin-top: 70px; color:white" >


                <form class="form" style="" action="#" method="post">
                    <label id="texto" >Nombre del Restaurante</label>
                    <input   type="text" id="nombre_restaurante" maxlength="20" name="nombre_restaurante" required="required" />
                    <label id="texto" >N° RUC</label>
                    <input  type="number" id="ruc" name="ruc"  oninput="if(value.length>11)value=value.slice(0,11)"  required="required" />
                    <label id="texto" >Telefono</label>
                    <input  type="number" id="telefono"oninput="if(value.length>9)value=value.slice(0,9)"  name="telefono"  maxlength="9" required="required" />
                    <label id="texto">Correo</label>
                    <input  type="text"   id="correo_restaurante" maxlength="35"  name="correo_restaurante" required="required" />
                    <label id="texto">Usuario</label>
                    <input  type="text" id="nombre_usuario" maxlength="20" name="nombre_usuario" required="required" />
                    <label id="texto" >Contrase&ntilde;a</label>
                    <input  type="password" id="clave" maxlength="20" name="clave" required="required" />

                    <div class="btn1"  style="float: none; width: 300px; margin-left: 30px;">       
                        <a data-inline="true" class="ui-btn" name="guardar2" id="guardar2" style=" float: none; margin-bottom: 10px">GUARDAR</a>     
                    </div>
                </form>
            </div>



        </div>
    </body>
</html>