<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;
use Jan\Ecole\Models\Enseignant;

class Enseignants extends ComponentBase {


	public function componentDetails() {

			return [
				'name' => 'Liste des enseignants',
				'description' => 'Retourne une liste des enseignants'
			];
	}


	public $enseignants;

	public function onRun(){

		$this->enseignants = $this->loadEnseignants();
	}

	protected function loadEnseignants() {

		return Enseignant::all();
	}

}