<?php

	class Galeria
	{
		private $contenido;
		private $tipoContenido;		

		function __construct($tipoContenido, $contenido)
		{
			$this->tipoContenido = $tipoContenido;
			$this->contenido = $contenido;
		}

		public function getTipoContenido(){
			return $this->tipoContenido;
		}
		public function setTipoContenido($tipoContenido){
			$this->tipoContenido= $tipoContenido;
		}

		public function getContenido(){
			return $this->contenido;
		}
		public function setContenido($contenido){
			$this->contenido = $contenido;
		}
	}

?>