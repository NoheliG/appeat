// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {

        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post  
function enviarDato() {

    //div donde se mostrará lo resultados
    //divResultado = document.getElementById('resultado');
    //recogemos los valores de los inputs
    nom = document.nuevo.nombre.value;
    usu = document.nuevo.usuario.value;
    clave = document.nuevo.clave.value;
    ruc = document.nuevo.ruc.value;
    telef = document.nuevo.telefono.value;
    correo = document.nuevo.correo.value;


    //instanciamos el objetoAjax
    ajax = objetoAjax();

    //uso del medotod POST
    //archivo que realizará la operacion
    //registro.php
    ajax.open("POST", "http://localhost/hello/www/agregar.php", true);
    //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
    ajax.onreadystatechange = function () {
        //la función responseText tiene todos los datos pedidos al servidor
        if (ajax.readyState == 4) {
            //mostrar resultados en esta capa
            //
            //llamar a funcion para limpiar los inputs
            LimpiarCampos();
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores a registro.php para que inserte los datos
    ajax.send("nombre=" + nom + "&ruc=" + ruc + "&telefono=" + telef + "&correo=" + correo)
}

//función para limpiar los campos
function LimpiarCampos() {
    document.nuevo.nombre.value = "";
    document.nuevo.usuario.value = "";
    document.nuevo.clave.value = "";
    document.nuevo.ruc.value = "";
    document.nuevo.telefono.value = "";
    document.nuevo.correo.value = "";
    document.nuevo.nombre.focus();
}