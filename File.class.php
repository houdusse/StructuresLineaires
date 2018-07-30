<?php
namespace Algo\StructureDonnees\StructureLineaire;
// use Algo\StructureDonnees\StructureLineaire\Cellule;

class File {

	private $sommet; // Cellule représentant le sommet de la File
	private $sortie;

	public function __construct( ) {
		$this->sommet = null;
		$this->sortie = null;
	}


	public function enfiler($valeur) {
		if ($this->isVide() === true) { // Si c'est la première cellule dans la liste
			$this->sommet = new Cellule($valeur);
			$this->sommet->setCelluleSuivante();
			$this->sommet->setCellulePrecedente();
			$this->sortie = $this->sommet;
			$precedent = null;
		} else {
			$ancienSommet = $this->sommet;
			$this->sommet = new Cellule($valeur);
			$this->sommet->setCellulePrecedente();
			$this->sommet->setCelluleSuivante($ancienSommet);
			$ancienSommet->setCellulePrecedente($this->sommet); // le nouveau sommet devient la cellule precedente de l'ancien sommet
		}

	}


	public function defiler() {
		$celluleCourante = $this->sommet;
		while($celluleCourante->getCelluleSuivante() !== null) {
			$celluleCourante = $celluleCourante->getCelluleSuivante();
		}
		if($celluleCourante == $this->sommet) { // Si c'est la dernière cellule dans la liste
			$this->sortie = $this->sommet;
			$this->sommet->setCelluleSuivante();
			$this->sommet->setCellulePrecedente();
			return $this->sommet->getValeur();
		} else {
			// Quand trouvée alors la cellule précendente devient la nouvelle sortie
			$this->sortie = $celluleCourante->getCellulePrecedente();
			$this->sortie->setCelluleSuivante(); // la cellule suivante est a null dans la nouvelle cellule sortie
			$valeur = $celluleCourante->getValeur();
			// On supprime l'ancienne sortie
			unset($celluleCourante);
			// Et on retourne la valeur de l'ancienne sortie 
			return $valeur;
		}
	}

	public function isVide() {
		return ($this->sommet === null);
	}

}



?>