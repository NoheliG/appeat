$(document).ready(function () {
    $("#aceptar").click(function () {
        var plato = $("#nombre_plato").val();
        var des = $("#descripcion_plato").val();
        var precio = $("#precio_plato").val();
        var stock = $("#stock_plato").val();

// Checking for blank fields.
        if (plato == '' || des == '' || precio == '' || stock == '') {
//            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
//            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
//            $('input[type="text"],input[type="number"]').css("box-shadow", "0 0 3px red");
//            $('input[type="text"],input[type="number"]').css("box-shadow", "0 0 3px red");
            alert("campos vacios");

        } else {
            var data = {nombre_plato: plato, descripcion_plato: des, precio_plato: precio, stock_plato: stock};
            $.ajax({
                url: 'http://localhost/Pruebas/Vista/insertaPlato.php',
                data: data,
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


