<?php
namespace Algo\StructureDonnees\StructureLineaire;

class Liste {

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
			$pivot =  $this->tete;
			$valeur = $pivot->getValeur();
			unset($this->tete);
			return $valeur;
		} else {
			$pivot = $this->tete;
			$this->tete = $this->tete->getCellulePrecedente();
			$this->tete->setCelluleSuivante(); // Passage à null
			$valeur = $pivot->getValeur();
			unset($pivot);
			return $valeur;
		}
	}


	public function supprimeQueue() {
		if ($this->tete === $this->queue) { // Si il n'y à plus qu'un élément
			unset($this->queue);
		} else {
			$pivot = $this->queue;
			$this->queue = $this->queue->getCelluleSuivante();
			$this->tete->setCellulePrecedente();  // Passage à null
			$valeur = $pivot->getValeur();
			unset($pivot);
			return $valeur;

		}
	}


	public function parcourir() {
	}


	public function isVide() {
		return ($this->tete === null);
	}

}



?>