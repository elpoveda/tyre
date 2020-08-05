<?php
	
	class Cita
	{
		private $fecha;
		private $hora;
		private $numeroContacto;
		private $tipoLlamada;
		function __construct($fecha, $hora, $numeroContacto, $tipoLlamada)
		{
			$this->fecha = $fecha;
			$this->hora = $hora;
			$this->numeroContacto = $numeroContacto;
			$this->tipoLlamada = $tipoLlamada;
		}

		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getHora(){
			return $this->hora;
		}
		public function setHora($hora){
			$this->hora = $hora;
		}

		public function getNumeroContacto(){
			return $this->numeroContacto;
		}
		public function setNumeroContacto($numeroContacto){
			$this->numeroContacto = $numeroContacto;
		}

		public function getTipoLlamada(){
			return $this->contraseña;
		}
		public function setTipoLlamada($tipoLlamada){
			$this->tipoLlamada = $tipoLlamada;
		}
	}
?>