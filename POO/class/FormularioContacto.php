<?php

	class FormularioContacto
	{
		private $asunto;
		private $correoElectronico;
		private $mensaje;
		private $nombre;
		function __construct($asunto, $correoElectronico, $mensaje, $nombre)
		{
			$this->asunto = $asunto;
			$this->correoElectronico = $correoElectronico;
			$this->mensaje = $correoElectronico;
			$this->nombre = $nombre;
		}

		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
	}

?>