<?php
namespace Algo\StructureDonnees\StructureLineaire;

 class Cellule {

	private $valeur;
	private $celluleSuivante;

	public function __construct($valeur, Cellule $celluleSuivante = null) {
		$this->valeur = $valeur;
		$this->celluleSuivante = $celluleSuivante;
	}


	public function getValeur() {
		return $this->valeur;
	}


	public function getCelluleSuivante() {
		return $this->celluleSuivante;
	}


	public function setValeur($valeur) {
		$this->valeur = $valeur;
	}


	public function setCelluleSuivante(Cellule $celluleSuivante ) {
		$this->celluleSuivante = $celluleSuivante;
	}
}



?>