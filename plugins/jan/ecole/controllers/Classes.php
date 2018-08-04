<?php namespace Jan\Ecole\Controllers;

# Classes d'école (attribution années scolaires - volées - degré)

use Backend\Classes\Controller;
use BackendMenu;

class Classes extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController'  
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'jan.ecole.gestion_classes' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jan.Ecole', 'ecole', 'classes');
    }
}
