<?php 
        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $bd = "adpeat";
		
		$servidor = mysql_connect($host, $usuario, $pass);
		
	 	mysql_set_charset("utf8", $servidor);
		$conexion = mysql_select_db($bd, $servidor);
			
		$consulta = "SELECT * FROM restaurante";
		$sql = mysql_query($consulta);
	 
		$datos= array();

		while ($obj = mysql_fetch_object($sql)) {
			$datos[] = array('contacto' => $obj->contacto,
							  'descripcion' => $obj->descripcion,
							  
				);
			}
			
			echo '' . json_encode($datos) . '';
			mysql_close($servidor);
			header('Content-type: application/json');
			header("Access-Control-Allow-Origin: *");
?>