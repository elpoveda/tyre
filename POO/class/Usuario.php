<?php

	class Usuario 
	{
		private $contraseña;
		private $correoElectronico;
		private $nombreUsuario;
		private $numeroContacto;
		
		function __construct($contraseña, $correoElectronico, $nombreUsuario, $numeroContacto, $rol)
		{
			$this->contraseña = $contraseña;
			$this->correoElectronico = $correoElectronico;
			$this->nombreUsuario = $nombreUsuario;
			$this->numeroContacto = $numeroContacto;
		}

		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
		public function getCorreoElectronico(){
			return $this->correoElectronico;
		}
		public function setCorreoElectronico($correoElectronico){
			$this->correoElectronico = $correoElectronico;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getNumeroContacto(){
			return $this->numeroContacto;
		}
		public function setNumeroContacto($numeroContacto){
			$this->numeroContacto = $numeroContacto;
		}
	}

?>