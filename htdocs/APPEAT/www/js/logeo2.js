$('#aceptar').click(function(){
        var data = { nombre_usuario : $('#nombre_usuario').val(), clave : $('#clave').val() };
        $.ajax({
                url : 'http://localhost/Pruebas/Vista/Logearse.php',
                data : data, 
                method : 'post', //en este caso
                dataType : 'json',
                success : function(response){
                       //codigo de exito
                },
                error: function(error){
                       //codigo error
                }
        });
        var http = new XMLHttpRequest();
var url = "http://localhost/Pruebas/Vista/Logearse.php";
var nombre_usuario = document.getElementById('usu');
var clave = document.getElementById('pass');
//http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
http.open("POST", url, true);

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) { 
       //aqui obtienes la respuesta de tu peticion
       alert(http.responseText);
    }
}
http.send(JSON.stringify({nombre_usuario:nombre_usuario, clave: clave}));
});
