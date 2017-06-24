<!DOCTYPE html>
<html lang="es">

    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title>Adomicilio Eat</title>
    </head>
    <body>
        <div class="menu" style="height:100px">
            <a title="regresa" href="menuprincipal.php"><img src="img/regresar.png" style="width: 32px; height: 32px;margin-left: 25px; margin-top: 13px;"/></a>
            <div id="titulo">
                <h1 align="center"><b>CATEGORIAS</b></h1>  
            </div>
            <hr/>
            <div>

                <div class="menuss" >
                     <button type="button" id="btnMenun" onclick="leer()">platillos</button>
                    
                    <input type="button" name="btnMenub" id="btnMenub" value="Bebidas"/>
                    <input type="button" name="btnMenup" id="btnMenup" value="Postres"/>    
                     
                </div>
                <!--                <ul>
                                    <li><a href="#platillos"><b style="color: white;">Platillos</b></a></li>
                                    <li><a href="#bebidas"><b style="color: white;">Bebidas</b></a></li>
                                    <li><a href="#postres"><b style="color: white;">Postres</b></a></li>
                                </ul>-->
            </div>
        </div>
        
            <div  id="tablajson">
               
            </div>
        
        <div class="footer">
            <a title="regresa" href="registrarPlato.php"> <input name="guardar" id="guardar" type="button" value="AGREGAR" /></a>
        </div>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script>
//            $(document).ready(function () {
//                $("#btnMenun").click(function () {
//                    //var data = {};
//                    $("#tablajson tbody").html("");
//                    $.ajax({
//                        url: 'http://localhost/Pruebas/Vista/ListarPlatos.php',
//                        method: 'post',
//                        dataType: 'json',
//                        success: function (json) {
//                            console.log(JSON.stringify(json.Data));
//                            jQuery.each(json.data, function (index, item) {
//                            var newRow =
//                                    "<tr>"
//
//                                    + "<td>" + json.Data.nombre_plato + "</td>"
//
//                                    + "</tr>";
//                                    $(newRow).appendTo("#tablajson tbody");
//                                    )}
//                            },
//                                    error: function (XMLHttpRequest, textStatus, errorThrown) {
//                                    alert("some error");
//                                }
//
//                    });
//                });
//            });
//         
//var app = {
//            function leer() {
//                var xmlhtpp;
//                if (window.XMLHttpRequest) {
//                    xmlhtpp = new XMLHttpRequest();
//                } else if (window.ActiveXObject) {
//                    xmlhtpp = new ActiveXObject("Microsoft.XMLHTTP");
//                }
//                xmlhtpp.onreadystatechange = function () {
//                    if (xmlhtpp.readyState == 4 && xmlhtpp.status == 200) {
//                        document.getElementById("tablajson").innerHTML = xmlhtpp.responseText;
//                    }
//                }
//                xmlhtpp.open("post", "http://localhost/appeat/www/traer.php", true);
//                xmlhtpp.send(null);
//            }
//        }
            app.initialize();
            
            var app = {
    // Application Constructor
    initialize: function () {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
        var xmlhtpp;
                if (window.XMLHttpRequest) {
                    xmlhtpp = new XMLHttpRequest();
                } else if (window.ActiveXObject) {
                    xmlhtpp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhtpp.onreadystatechange = function () {
                    if (xmlhtpp.readyState == 4 && xmlhtpp.status == 200) {
                        document.getElementById("tablajson").innerHTML = xmlhtpp.responseText;
                    }
                }
                xmlhtpp.open("post", "http://localhost/APPEAT/www/traer.php", true);
                xmlhtpp.send(null);
    },

    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function () {
        this.receivedEvent('deviceready');
    },

    // Update DOM on a Received Event
    receivedEvent: function (id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

app.initialize();
        </script>
    </body>
</html>