<?php 
	require "Conexion.php";
	class Cliente  {
		public function __construct(){

		}
		public function insertar ($codigo,$nombres,$paterno,$materno,$direccion,$telefono,$distrito,$correo,$imagen)
		 {
		 	$sql="INSERT INTO cliente(codigo,nombre,paterno,materno,direccion,telefono,distrito,correo,imagen) VALUES ('$codigo','$nombres','$paterno','$materno','$direccion','$telefono','$distrito','$correo','$imagen')";
		 	return ejecutarConsulta($sql);

		}


		public function editar ($codigo,$nombres,$paterno,$materno,$direccion,$telefono,$distrito,$correo)
		 {
		 	$sql="UPDATE cliente SET codigo='$codigo',nombres='$nombres',paterno='$paterno',materno='$materno',direccion='$direccion',telefono='$telefono',distrito='$distrito',correo='$correo'";
		 	return ejecutarConsulta($sql);

		}


		public function eliminar ($codigo)
		 {
		 	$sql="DELETE FROM cliente WHERE codigo='$codigo'";
		 	return ejecutarConsulta($sql);

		}

		public function listar()
		{
			$sql= "SELECT * FROM cliente";

       		return ejecutarConsulta($sql);	

      }
		}

		
		
	



 ?>