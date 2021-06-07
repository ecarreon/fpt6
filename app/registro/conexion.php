<?php
	function Conectarse()
	{
		//Los parámetros son(host, usuario, contraseña,nombre_base)
		if (!($conexion=mysqli_connect("localhost","root","", "mun")))
		{
			echo "Error conectando a la base de datos.";
			exit();
		}
		
		mysqli_query($conexion,"SET NAMES UTF8");
		
		return $conexion;
	}
	
?>