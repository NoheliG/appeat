<?php
/****************************************
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: root.
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());

/*Luego hacemos la conexión a la base de datos. 
**De igual manera mandamos un msj si hay algun error*/
mysql_select_db('adpeat')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/
$usuario = $_POST["nombre_usuario"];   
$password = $_POST["clave"];

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = mysql_query("SELECT * FROM usuario WHERE nombre_usuario = '$usuario'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["clave"] == $password)
 {
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['nombre_usuario'] = $usuario;  
  //Redireccionamos a la pagina: index.php
  header("Location: perfil.html");  
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  echo "Password estan incorrectos.";
  echo "<br><a href='sesion.html'>Volver a Intentarlo</a>";
        
 }
}
else
{
 //en caso que el nombre de usuario es incorrecto enviamos un msj y redireccionamos a login.php
//echo '<script languaje="javascript">document.getElementById(contenido).innerHTML = "El mensaje esta vacio";</script>';
  ?>
  
  
  <script languaje="javascript">
    alert ("Contraseña Incorrecta");
    location.href = "sesion.html";
   </script>
  <?php

 echo "Username estan incorrectos.";
  echo "<br><a href='sesion.html'>Volver a Intentarlo</a>";
  
        
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>