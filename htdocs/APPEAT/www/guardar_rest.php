<?php

session_start();
class Conectar
{
//establecemos la conexión con la base de datos
	public static function con()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("adpeat");
		return $conexion;

		
	}
}
class guardar_rest
{
	public function agregar_res($nombre,$ruc,$telefono,$correo,$usuario,$clave)
	{
		$sql="insert into usuario (nombre_usuario, clave) values('$usuario','$clave');";
		$res=mysql_query($sql,Conectar::con());
		
		$id = mysql_insert_id();
		$sql="insert into restaurante (nombre_restaurante, ruc, telefono, correo_restaurante,fk_idusuario) values('$nombre','$ruc','$telefono','$correo','$id');";
		$res=mysql_query($sql,Conectar::con());
		
		echo"<script type='text/javascript'>
		alert('El registro se realizo correctamente');
		window.location='menuprincipal.html';
		</script>";

		}
	}

	
$nuevo=new guardar_rest();
$nuevo->agregar_res($_POST["nombre"],$_POST["ruc"],$_POST["telefono"],$_POST["correo"],$_POST["usuario"],$_POST["clave"]);

?>