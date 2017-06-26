<!DOCTYPE html>
<html>

    <head>

        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">   
         <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title>Adomicilio Eat</title>
    </head>

    <body>
        <div data-role="page">
            <div data-role="header">
                <a href="index.html" data-inline="true" style="color: #df2727; width:330px; padding-bottom: 20px; padding-top: 20px; font-size: 20px;" data-role="button" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">REGISTRARSE</a>
        
         </div>

         <div data-role="main" class="ui-content" style="margin-top: 150px;" >
            
                <form  class = "form" accion="#" method="post">
                 <input class="inp" id="nombre_usuario" type="text" name="nombre_usuario" placeholder="Usuario" required="required"/>
                 <p id="contenido"></p>
                 <input class="inp" id="clave" type="password" name="clave" placeholder="Contrasena"required="required" /><br/>
                 <a style="color:white; text-decoration:none;" href="#"><h3 style="margin-left: 15px;margin-top: 20px;">HAZ OLVIDADO LA CONTRASE&Ntilde;A?</h3></a>
                    <div class="btn1" style="margin-top: 100px; float: none; width: 300px; margin-left: 30px;">       
                     <a data-inline="true" class="ui-btn" name="aceptar" id="aceptar" style=" float: none; margin-bottom: 10px">ACEPTAR</a>     
                   </div>
                </form>

                <div class="btn" style="margin-top: 30px;float: none; width: 300px; margin-left: 30px;">
               
                     <a href="registrar3.php" data-role="button" data-inline="true" class="ui-btn" id="registrar" style=" float: none; margin-bottom: 10px">REGISTRARSE</a>
              
                   </div>
        </div>
                <script type="text/javascript" src="js/login.js"></script>
        </div>
     </body>

</html>