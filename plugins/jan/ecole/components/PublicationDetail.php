<?php namespace Jan\Ecole\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Input;
use Request;
use Carbon\Carbon;


use RainLab\Builder\Classes\ComponentHelper;;


// use Backend\Classes\FormWidgetBase;

use Jan\Ecole\Models\Publication;
use Jan\Ecole\Models\PublicationType;

use SystemException;

class PublicationDetail extends ComponentBase {

    /**
     * A model instance to display
     * @var \October\Rain\Database\Model
     */
    public $record = null;
    
    /**
     * Message to display if the record is not found.
     * @var string
     */
    public $notFoundMessage;
    /**
     * Identifier value to load the record from the database.
     * @var string
     */
    public $identifierValue;

	public function componentDetails() {

			return [
				'name' => 'Détail d\'une publication',
				'description' => 'Affiche le détail d\'une publication'
			];
	}


	public function defineProperties() {

		return [
			'type' => [
				'title'				=> 'Type d\'article',
				'description'		=> 'Détermine le type d\'article',
				'type'				=> 'dropdown'
				],			
            'identifierValue' => [
                'title'       => 'Valeur d\'identification',
                'description' => '...',
                'type'        => 'string',
                'default'     => '{{ :id }}',
                'validation'  => [
                    'required' => [
                        'message' => 'Ce champ est requis'
                    ]
                ]
            ],
			'notFoundMessage' => [
                'title'        => 'Message si article pas trouvé',
                'description'  => 'Le message qui s\'affiche lorsque l\'article recherché n\'est pas trouvé.',
                'type'         => 'string',
                'default'      => 'Cet article n\'existe pas !',
                'showExternalParam' => false
               ],

            
		];
	}

	public function getTypeOptions() {

		$publicationEtendue = PublicationType::where('is_actif', 1)->orderBy('titre')->pluck('titre', 'id')->all();

		return $publicationEtendue;

	}	

    //
    // Rendering and processing
    //

    public function onRun()
    {
        $this->prepareVars();

        $this->record = $this->page['record'] = $this->loadRecord();
    }	

        protected function prepareVars()
	    {
	        $this->notFoundMessage = $this->page['notFoundMessage'] = $this->property('notFoundMessage');
	        $this->displayColumn = $this->page['displayColumn'] = $this->property('displayColumn');
	        $this->modelKeyColumn = $this->page['modelKeyColumn'] = $this->property('modelKeyColumn');
	        $this->identifierValue = $this->page['identifierValue'] = $this->property('identifierValue');

    }

    protected function loadRecord()
    {
    	
        $publication = new Publication;

        //trace_log($publication->where('id', '=', $this->identifierValue)->first());
        return $publication->where('id', '=', $this->identifierValue)->first();
    }    

}