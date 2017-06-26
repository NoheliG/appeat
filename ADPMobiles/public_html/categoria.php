<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            
        <title>Adomicilio Eat</title>
    </head>
    <body>

        <div data-role="page">
            <div data-role="header">

                <a href="index.html" data-inline="true" style="color: #df2727; width:330px; padding-bottom: 20px; padding-top: 20px; font-size: 20px;" data-role="button" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">REGISTRARSE</a>         
                <hr/>
                <div class="menuss" style="margin-top: 15px; position: absolute; top: 60px;" >
                    <button type="button" style="width: 110px;" id="btnMenun" >platillos</button>     
                    <button type="button" style="width: 110px;" id="btnMenub">Bebidas</button>   
                    <button type="button" style="width: 110px;" id="btnMenup" >Postres</button>                 

                </div>
            </div>

            <div data-role="main" class="ui-content" style="margin-top: 70px; color:white" >

                <div>
                    <table class="table" id="tablajson" style="font-size:25px; color:blue;background:cornsilk;">
                        <thead>
                            <tr style="    font-size: 16px;">
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Accc&iacuteon</th>
                                <th>Acccion</th>
                            </tr>
                        </thead>
                        <tbody style="    font-size: 25px;">;
                    </table>

                </div>
            </div>
            <div class="footer" style="margin-top: 470px;width: 380px; margin-left: 7px;">
                <a href="registrarPlato.php"  name="guardar" id="guardare"  value="AGREGAR" class="ui-btn">AGREGAR</a>
            </div>
            <script type="text/javascript" src="js/ListarPlato.js"></script>  
        </div>
    </body>
</html>