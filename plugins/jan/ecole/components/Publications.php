<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Input;
use Request;
use Carbon\Carbon;


use Cms\Classes\Theme;
use RainLab\Pages\Classes\Page as StaticPage;
// use Backend\Classes\FormWidgetBase;

use Jan\Ecole\Models\Publication;
use Jan\Ecole\Models\PublicationEtendue;
use Jan\Ecole\Models\PublicationType;
use Jan\Ecole\Models\Structure;
use Jan\Ecole\Models\Classe;


class Publications extends ComponentBase {


	public function componentDetails() {

			return [
				'name' => 'Liste les publications',
				'description' => 'Retourne une liste des publications'
			];
	}



	public function defineProperties() {

		return [
			'type' => [
				'title'				=> 'Type d\'article',
				'description'		=> 'Détermine le type d\'article',
				'type'				=> 'dropdown'
				],			
			'etendue' => [
				'title'				=> 'Etendue',
				'description'		=> 'Détermine l\'étendue des articles',
				'type'				=> 'dropdown'
				],

			'etendueElements' => [
				'title'				=> 'Eléments de l\'étendue',
				'description'		=> 'Détermine les éléments de l\'étendue sélectionnée',
				'type'				=> 'dropdown',
				'depends'     		=> ['etendue'],
				],

			'results' => [
				'title' 			=> 'Nombre d\'articles affichées',
				'description'		=> 'Défini le nombre d\'articles affichés. La valeur 0 affiche tous les articles',
				'default'			=> 20,
				'validationPattern'	=> '^[0-9]+$',
				'validationMessage'	=> 'Que des chiffres svpl'
				],

			'highlights' => [
				'title'				=> 'Seulement articles vedettes',
				'description'		=> 'N\'afficher que les articles vedettes ?',
				'type'				=> 'dropdown',
				'options'			=> ['0'	=> 'Non',
									 	'1'	=> 'Oui'],
				'default'			=> '0'
				],

			'archive' => [
				'title'				=> 'Condition',
				'description'		=> 'Spécifie les conditions liées aux dates de publication',
				'type'				=> 'dropdown',
				'options'			=> ['0'	=> 'N\'affiche que les articles actifs',
										'1'	=> 'Affiche tous les articles',
										'2'	=> 'N\'affiche que les articles passés',
										'3'	=> 'N\'affiche que les articles futurs (date de survenance)'],
				'default'			=> '0'
				],

			'sortOrder' => [
				'title'				=> 'Ordre de tri',
				'description'		=> 'Détermine comment se fait le tri sur la date de survenance (ascendant ou descendant)',
				'type'				=> 'dropdown',
				'default'			=> 'date_event asc'
				],

			'noPublicationMessage' => [
                'title'        => 'Message en l\'absence d\'articles',
                'description'  => 'Le message qui s\'affiche lorsqu\'il n\'y a aucun article à afficher dans la liste',
                'type'         => 'string',
                'default'      => 'Aucun article pour le moment',
                'showExternalParam' => false
               ],

            'publicationPage' => [
                'title'       => 'Page qui affiche le détail',
                'description' => 'Indique la page de destination du lien et qui affiche le détail d\'une publication.',
                'type'        => 'dropdown',
                'default'     => '',
                'group'       => 'Liens',
            ],

            'publicationAllPage' => [
                'title'       => 'Page pour tous les articles',
                'description' => 'Indique la page de destination du lien et qui affiche tous les articles',
                'type'        => 'dropdown',
                'default'     => '',
                'group'       => 'Liens',
            ]                  
		];
	}


	public function getTypeOptions() {

		$publicationEtendue = PublicationType::where('is_actif', 1)->orderBy('titre')->pluck('titre', 'id')->all();

		return $publicationEtendue;

	}


	public function getEtendueOptions() {

		$publicationEtendue = PublicationEtendue::where('is_actif', 1)->orderBy('sort_order')->pluck('titre', 'id')->all();

		return $publicationEtendue;

	}


	public function getEtendueElementsOptions() {

			$etendue = Request::input('etendue'); // Load the country property value from POST

			switch ($etendue) {

				case 1: // Classe
					$elementsAll = [
							'0' => 'Toutes les classes'
						];
					$elementsDynamic = classe::where('is_frontend', 1)->orderBy('degre')->with('annee')->get()->pluck('fullDegre', 'id')->all(); // orderBy('degre')
					$elements = array_merge($elementsAll, $elementsDynamic);
					break;
				case 2: // Structure
					$elementsAll = [
							'0' => 'Toutes les structures'
						];
					$elementsDynamic = structure::where('is_actif', 1)->orderBy('sort_order')->pluck('titre', 'id')->all();

					$elements = array_merge($elementsAll, $elementsDynamic);
					break;
				default: // Etablissement
					$elements = 'Non relevant';

			}

			// $elements = structure::orderBy('sort_order')->pluck('titre')->all();

			// return $structure[$etendue];
			// See : https://octobercms.com/docs/plugin/components#dropdown-properties > depends
			return $elements;

		}

	public function getSortOrderOptions() {

		return [
			'date_event asc' => 'Date de survenance (ascendant)',
			'date_event desc' => 'Date de survenance (descendant)'
		];

	}

	// Liste les pages statices à disposotion pour afficher le détail de la publication

    public function getPublicationPageOptions()
    {
        // Afficher les pages statiques :
        // return StaticPage::sortBy('baseFileName')->lists('url', 'url');
        
    	// Afficher les pages du CMS
        return Page::sortBy('baseFileName')->lists('url', 'baseFileName'); // url ou baseFileName
    }

    public function getPublicationAllPageOptions()
    {
        // Afficher les pages statiques :
        // return StaticPage::sortBy('baseFileName')->lists('url', 'url');
        
    	// Afficher les pages du CMS
        return StaticPage::sortBy('baseFileName')->lists('url', 'baseFileName'); // url ou baseFileName
    }

	############################################# LOAD PUBLICATIONS ############################################ 

	public $publications;

	public function onRun(){

		$this->publications = $this->loadPublications();
	}



	protected function loadPublications() {

		// General definition (actifs = que les publications actives) :

		$query = Publication::actifs();

		// Filtrage sur les plages de dates :

		switch ($this->property('archive')) {
			case 0: // N'affiche que les articles actifs
				$query = $query
				->where('date_debut', '<=', Carbon::now())
				->where(function($query)
					{
						$query->where('date_fin', '>=', Carbon::now())
						->orWhereNull('date_fin');
					})->get();
				break;
			case 1: // Affiche tous les articles
				$query = $query->get();
				break;
			case 2: // N'affiche que les articles passés
				$query = $query
				->where('date_fin', '<=', Carbon::now())
				->get();			
				break;
			case 3: // N'affiche que les articles futurs (basé sur date_event > date de survenance)	
				$query = $query
				->where('date_debut', '<=', Carbon::now())
				
				->where(function($query)
					{
						$query->where('date_event', '>=', Carbon::now())
						->orWhere('date_fin','>=', Carbon::now());
				})->get();	
				break;			
		}			

// dd(Carbon::now()->format('Y-m-d H:i:s'));


		// Type d'article :

		switch ($this->property('type')) {
			case 1: // Compte-rendu (nouvelle, déjà passé)
				$query = $query->where('publicationtype_id', 1);
				break;
			case 2: // Information (ce qui va venir)
				$query = $query->where('publicationtype_id', 2);
				break;
		}


		// Sort order :
		if ($this->property('sortOrder') == 'date_event asc') {

			$query = $query->sortBy('date_event');
		}

		if ($this->property('sortOrder') == 'date_event desc') {

			$query = $query->sortByDesc('date_event');
		}		

		// Manage Etendue :
		switch ($this->property('etendue')) {
			case 1: // Classe
				
				$resultClasse = $query->where('ClasseActif', 1)->where('VoleeActif', 1)->where('AnneeActif', 1)->where('publicationetendue_id', 1);
				

				// $resultClasse = $query
				// 	->with(['classe' => function($query)
				// 	{
				// 	    $query->where('is_actif',1);

				// 	}])->get()
				// ->where('publicationetendue_id', 1);


				switch($this->property('etendueElements')) {

					case 0: // Tous
						$query = $resultClasse;
						break;
					default:
						$query = $resultClasse
						->where('classe_id', '=', $this->property('etendueElements'));					
				}

				break;
			case 2: // Structure
				$resultStructure = $query->where('publicationetendue_id', 2);
				switch($this->property('etendueElements')) {

					case 0: // Tous
						$query = $resultStructure;
						break;
					default:
						$query = $resultStructure
						->where('structure_id', '=', $this->property('etendueElements'));					
				}
				break;
			default: // Etablissement
				$query = $query->where('publicationetendue_id', 3);

		}

		// Manage highlights :
		if ($this->property('highlights') == 1) {
			$query = $query->where('highlight', 1);
		}


		// Number of shown records :
		if ($this->property('results') > 0) {

			$query = $query->take($this->property('results'));

		}

		return $query;
	}

}