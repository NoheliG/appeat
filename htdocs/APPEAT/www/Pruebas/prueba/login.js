$(document).ready(function () {
    $("#login").click(function () {
        var email = $("#email").val();
        var password = $("#password").val();
// Checking for blank fields.
        if (email == '' || password == '') {
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            alert("ingrese user y pass");
        } else {
            var data = {usuario: email, password: password};
            $.ajax({
                url: 'http://localhost/Pruebas/Vista/Logearse.php',
                data: data,
                method: 'post',
                dataType: 'json',
                success: function (json) {
                    console.log(JSON.stringify(json.Data));
                    alert("Bienvenida   (" + json.Data.nombre+")");
                },
                error: function (error) {
                    alert("ingrese user y pass");
                }
            });
        }
    });
});