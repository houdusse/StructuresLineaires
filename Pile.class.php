<?php
namespace Algo\StructureDonnees\StructureLineaire

class Pile {

	private $sommet; // Cellule représentant le sommet de la pile

	public function __construct( ) {


	}


	public function empiler($valeur) {
		if ($this->isVide() == true) {
			$suivant = null;
		} else {
			$suivant = $this->sommet;
		}
		$this->sommet = new Cellule($valeur, $suivant);
	}


	public function depiler() {
		// Sauvegarde de la valeur de la cellule du sommet
		$ancienSommet = $this->sommet;	
		// La cellule suivante devient le nouveau sommet
		$this->sommet = $ancienSommet->getSuivant();
		$valeur =  $ancienSommet->getValeur();
		unset($ancienSommet); // POur gagner de l'espace mémoire
		return $valeur;
	}

	public function isVide() {
		return ($sommet === null);
	}






}



?>