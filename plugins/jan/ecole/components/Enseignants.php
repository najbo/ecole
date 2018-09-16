<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;

use Jan\Ecole\Models\Enseignant;
use Jan\Ecole\Models\EnseignantEtendue;
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

		$query = SuperGroup::with(['etendue' => function ($q) {
		  $q->where('structure_id', 2);
		}])->get(); // or get() or whatever
				 // $this->property('etendueElements')

		$query = SuperGroup::orderBy('sort_order')->whereHas('etendue', function ($query) {
     			$query->where('structure_id', 2);
 			})->get();



		// $query = EnseignantEtendue::
		// 	groupBy('supergroup_id', 'user_id')
  		//  ->having('structure_id', 1)
		// 	->get();

		return $query;
	}

}