<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;

use Jan\Ecole\Models\Enseignant;
use Jan\Ecole\Models\Structure;
use Jan\Ecole\Models\SuperGroup;

class Enseignants extends ComponentBase {


	public function componentDetails() {

			return [
				'name' => 'Liste des enseignants',
				'description' => 'Retourne une liste des enseignants'
			];
	}

	public function defineProperties() {

		return [			
			'etendueElements' => [
				'title'				=> 'Eléments de l\'étendue',
				'description'		=> 'Détermine les éléments de l\'étendue sélectionnée',
				'type'				=> 'dropdown'
				],


			'sortOrder' => [
				'title'				=> 'Ordre de tri',
				'description'		=> 'Détermine comment se fait le tri sur la date de survenance (ascendant ou descendant)',
				'type'				=> 'dropdown',
				'default'			=> 'debut asc'
				],
                  
		];
	}	

	public function getEtendueElementsOptions() {

			$elements = structure::where('is_actif', 1)->orderBy('sort_order')->pluck('titre', 'id')->all();

			return $elements;

		}	

	############################################# LOAD ENSEIGNANTS ############################################ 
	public $enseignants;

	public function onRun(){

		$this->enseignants = $this->loadEnseignants();
	}

	protected function loadEnseignants() {

		// $query = Enseignant::all();

		// $query = Enseignant::whereHas('structures', function ($query) {
		//     $query->where('structure_id', $this->property('etendueElements') );
		// })->get();

			//dd($query);
		//where('structure_id', '=', $this->property('etendueElements'));	

		// $query = SuperGroup::all();
		

		//$query = SuperGroup::with('groups.fonctions.teachers')->get()->sortBy('groups.fonctions.teachers.last_name');
		// $query = SuperGroup::with(array('groups.fonctions.teachers' => function ($query) {
  //       	$query->orderBy('last_name');
  //   	}))->orderBy('id')->get();

		 $query = SuperGroup::all();


		$query = SuperGroup::whereHas('etendue', function ($query) {
     		$query->where('structure_id', $this->property('etendueElements'));
 			})->get();

		return $query;
	}

}