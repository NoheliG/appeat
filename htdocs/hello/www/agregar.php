<?php
 
include('include/config.php');
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
//Nombro variables con metodo POST
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ruc=$_POST['ruc'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

//Añadir consulta
$sql="insert into restaurante ('nombre_restaurante','ruc','telefono','correo') values ('$nombre','$ruc','$telefono','$correo')";
//$resultado=mysql_query($sql);
  $resultado=mysqli_query($conexion,$sql);


//cierro
mysql_close();

?>