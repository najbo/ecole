<?php namespace Jan\Ecole\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class VacancesDetails extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'jan.ecole.gestion_vacances_details' 
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
