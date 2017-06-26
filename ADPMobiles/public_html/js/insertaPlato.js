$(document).ready(function () {
    $("#aceptar").click(function () {
        var plato = $("#nombre_plato").val();
        var descrip = $("#descrip_plato").val();
        var precio = $("#precio").val();
        var stock = $("#stock").val();

// Checking for blank fields.
        if (plato == '' || descrip == '' || precio == '' || stock == '') {
//            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
//            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
//            $('input[type="text"],input[type="number"]').css("box-shadow", "0 0 3px red");
//            $('input[type="text"],input[type="number"]').css("box-shadow", "0 0 3px red");
            alert("campos vacios");

        } else {
            var data = {nombre_plato: plato, descrip_plato: descrip, precio: precio, stock: stock};
            $.ajax({
                url: 'http://www.adpeat.pe.hu/prueba2/Vista/insertaplato.php',
                data: data,
                async: true,
                method: 'post',
                dataType: 'json',
                success: function (json) {
                    console.log(JSON.stringify(json.Data));
                    alert("Datos Registrados ");
                    location.href = "categoria.php";
                },
                error: function (error) {
                    alert("error datos");
                }
            });
        }
    });
});


