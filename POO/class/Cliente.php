<?php

	class Cliente extends Usuario
	{
		private $actividadEconomica;
		private $nombreSolicitante;
		private $telefonoEmpresa;
		private $telefonoPersonal;

		function __construct($actividadEconomica, $nombreSolicitante, $telefonoEmpresa, $telefonoPersonal)
		{
			parent::__construct();
			$this->actividadEconomica = $actividadEconomica;
			$this->nombreSolicitante = $nombreSolicitante;
			$this->telefonoEmpresa = $telefonoEmpresa;
			$this->telefonoPersonal = $telefonoPersonal;
		}

		public function getActividadEconomica(){
			return $this->actividadEconomica;
		}
		public function setActividadEconomica($actividadEconomica){
			$this->actividadEconomica = $actividadEconomica;
		}

		public function getNombreSolicitante(){
			return $this->nombreSolicitante;
		}
		public function setNombreSolicitante($nombreSolicitante){
			$this->nombreSolicitante = $nombreSolicitante;
		}

		public function getTelefonoEmpresa(){
			return $this->telefonoEmpresa;
		}
		public function setTelefonoEmpresa($telefonoEmpresa){
			$this->telefonoEmpresa = $telefonoEmpresa;
		}

		public function getTelefonoPersonal(){
			return $this->telefonoPersonal;
		}
		public function setNombre($telefonoPersonal){
			$this->telefonoPersonal = $telefonoPersonal;
		}
	}
?>