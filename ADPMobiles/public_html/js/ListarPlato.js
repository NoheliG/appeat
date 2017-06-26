$(document).ready(function () {
    $("#btnMenun").click(function () {
        var data = {};
        $.ajax({
            url: 'http://www.adpeat.pe.hu/prueba2/Vista/ListarPlatos.php',
            data: data,
            async: true,
            method: 'post',
            dataType: 'json',
            success: function (json) {
                console.log(JSON.stringify(json.Data));
                var trHTML = '';
                $.each(json.Data, function (posicion, valor) {
                    trHTML += '<tr style="font-size: 18px;"><td>' + valor.id_plato + '</td><td>' + valor.nombre_plato + '</td><td>' + valor.precio
                            + '</td><td> <a href="http://www.adpeat.pe.hu/prueba2/Vista/eliminarplato.php?cod=' + valor.id_plato + '"><input type="button" name="aceptar" id="editar" value="Eliminar"/>\n\</td><td> <input type="button" name="aceptar" id="eliminar" value="Editar"/></td></tr>';
                });
                $('#tablajson').append(trHTML);


            },

            error: function (error) {
            }
        });
    });




});