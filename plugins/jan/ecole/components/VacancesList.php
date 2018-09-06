<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;

use Carbon\Carbon;

use Jan\Ecole\Models\Vacances;
use Jan\Ecole\Models\Structure;


class VacancesList extends ComponentBase {


	public function componentDetails() {

			return [
				'name' => 'Liste les vacances',
				'description' => 'Retourne une liste des vacances, par structure'
			];
	}



	public function defineProperties() {

		return [			
			'etendueElements' => [
				'title'				=> 'Eléments de l\'étendue',
				'description'		=> 'Détermine les éléments de l\'étendue sélectionnée',
				'type'				=> 'dropdown'
				],


			'autotrash' => [
				'title'				=> 'Suppression auto éléments passés',
				'description'		=> 'Supprime automatiquemt les éléments passés de la liste',
				'type'				=> 'dropdown',
				'options'			=> ['0'	=> 'Oui',
									 	'1'	=> 'Non'],
				'default'			=> '0'
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

	public function getSortOrderOptions() {

		return [
			'debut asc' => 'Début période vac. (ascendant)',
			'debut desc' => 'Début période vac. (descendant)'
		];

	}




	############################################# LOAD PUBLICATIONS ############################################ 

	public $vacances;

	public function onRun(){

		$this->vacances = $this->loadVacances();
	}



	protected function loadVacances() {

		// General definition (actifs = que les publications actives) :
		// $query = vacances::actifs()->get();

		/* DetailActifs ne fonctionne pas !!
		$query = vacances::Actifs()
			->whereHas('vacancesdetail', function ($query) {
					$query->DetailActifs();
			})
		->get(); */

		$query = vacances::actifs()->
			with(['vacancesdetail' => function ($query) {
		    $query->DetailActifs();
		}])->get();

		// ->toSql();
		// dd($query);

		// Filtrage sur les plages de dates :


		// Sort order :
		if ($this->property('sortOrder') == 'debut asc') {

			$query = $query->sortBy('debut');
		}

		if ($this->property('sortOrder') == 'debut desc') {

			$query = $query->sortByDesc('debut');
		}		

		// Manage Etendue :
			$query = $query->where('structure_id', '=', $this->property('etendueElements'));					


		return $query;
	}

}