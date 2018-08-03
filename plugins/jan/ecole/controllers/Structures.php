<?php namespace Jan\Ecole\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Structures extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'jan.ecole.gestion_structures' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jan.Ecole', 'ecole', 'structures');
    }
}
