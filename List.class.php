<?php
namespace Algo\StructureDonnees\StructureLineaire;
// use Algo\StructureDonnees\StructureLineaire\Cellule;

class List {

	private $tete; // Cellule représentant le sommet de la File
	private $queue;

	public function __construct( ) {
		$this->tete = null;
		$this->queue = null;
	}


	public function ajoutTete($valeur) {
		$nouvelleCellule = new Cellule($valeur);
		if ($this->tete === null) { // Si premier élément de la liste
			$this->tete = $nouvelleCellule;
			$this->queue = $this->tete;
			$this->tete->setCelluleSuivante();
			$this->tete->setCellulePrecedente();
		} else { // Si deja au moins une cellule dans la liste
			$this->tete->setCelluleSuivante($nouvelleCellule);
			$nouvelleCellule->setCellulePrecedente($this->tete);
			$this->tete = $nouvelleCellule;
		}
	}


	public function ajoutQueue($valeur) {
		$nouvelleCellule = new Cellule($valeur);
		if ($this->tete === null) { // Si premier élément de la liste
			$this->tete = $nouvelleCellule;
			$this->queue = $this->tete;
			$this->tete->setCelluleSuivante();
			$this->tete->setCellulePrecedente();
		} else { // Si deja au moins une cellule dans la liste
			$this->queue->setCellulePrecedente($nouvelleCellule);
			$nouvelleCellule->setCelluleSuivante($this->queue);
			$this->queue = $nouvelleCellule;
		}

	}


	public function supprimeTete() {
		if ($this->tete === $this->queue) { // Si il n'y à plus qu'un élément
			unset($this->tete);
		} else {
			$pivot = $this->tete;
			$this->tete = $this->tete->getCellulePrecedente();
			$this->tete->setCelluleSuivante();
			unset($pivot);
		}
	}


	public function supprimeQueue {
		if ($this->tete === $this->queue) { // Si il n'y à plus qu'un élément
			unset($this->queue);
		} else {
			$pivot = $this->queue;
			$this->queue = $this->queue->getCelluleSuivante();
			$this->tete->setCelluleP();
			unset($pivot);
		}
	}


	public function parcourir() {
	}


	public function isVide() {
		return ($this->sommet === null);
	}

}



?>