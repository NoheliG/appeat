var dato1 = "";
var dato2 = "";

function traer() {
    $.getJSON('http://localhost:80/hello/www/traer.php',

        function (data) {
            dato1 = data[0].contacto;
            dato2 = data[0].descripcion;



        }
    );
}
function mostrar() {
    $("dato-1").text(dato1);
    $("dato-2").text(dato2);

}