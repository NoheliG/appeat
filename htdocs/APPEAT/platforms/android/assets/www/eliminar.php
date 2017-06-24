<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "adpeat";

$servidor = mysql_connect($host, $usuario, $pass);
$codi=$_GET['cod'];
mysql_set_charset("utf8", $servidor);
$conexion = mysql_select_db($bd, $servidor);

$consulta = "DELETE from plato Where id_plato='$codi';";
$sql = mysql_query($consulta);
      


//echo $tabla;
mysql_close($servidor);
header("Location:categoria.php");
//			header('Content-type: application/json');
//			header("Access-Control-Allow-Origin: *");
//header("Content-type: text/css; charset: UTF-8");
?>



