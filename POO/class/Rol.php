<?php


	class Rol
	{
		private $tipoRol;

		function __construct($tipoRol)
		{
			$this->tipoRol = $tipoRol;
		}


		public function getTipoRol(){
			return $this->tipoRol;
		}
		public function setTipoRol($tipoRol){
			$this->tipoRol = $tipoRol;
		}
	}

?>