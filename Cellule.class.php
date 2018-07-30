<?php
namespace Algo\StuctureDonnees\StrutureLineaire\Cellule

public class Cellule {

	private $valeur;
	private $celluleSuivante;

	public function __construct {

	}

	public function insere(Cellule apresCellule) {

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