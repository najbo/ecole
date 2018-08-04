<?php namespace Jan\Ecole\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class TypesPublication extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'jan.ecole.gestion_typeinfo' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jan.Ecole', 'publications', 'types-publication');
    }

    public function listExtendQuery($query)
    {
        $query->withTrashed();
    }

    public function formExtendQuery($query)
    {
        $query->withTrashed();
    }
}
