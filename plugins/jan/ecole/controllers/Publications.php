<?php namespace Jan\Ecole\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BackendAuth;

class Publications extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'jan.ecole.gestion_publications' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jan.Ecole', 'publications', 'publications');
    }

    /* Boot method, called right before the request route.
     *
     * @return array
     */


/*    public function extendListColumns($list) {
            $list->addColumns([
                'degre_titre' => [
                    'label' => 'Degré',
                    'relation' => 'classe',
                    'select' => 'degre'
                ]])
    
        };*/

    public function listExtendQuery($query)
    {
            # if ($this->user->isSuperUser()) {            }
            # $var = $this->classe->degre;
                #$this->user->
            #$query->where('id', 1);

            
/*            $query->whereHas('user', function ($query) {
                $query->where('id', 1);
            })->get();*/

     
            
            # $backendUser  = BackendAuth::getUser();
            // dump(BackendAuth::getUser()->role->code); // THIS WORKS !
            #dump($this->user);
            
            if (! BackendAuth::getUser()->isSuperUser() && BackendAuth::getUser()->role->code <> 'gestionnaire') {

            $query->whereHas('classe', function ($q) 
                {
                    $q->whereHas('users', function ($q)  
                    {
                       
                    $q->where('id', BackendAuth::getUser()->id);
              
            });
        })
        ->orWhere('user_id', BackendAuth::getUser()->id);
        }
        # $query->where('user_id', 1);
         # $query->where('user_id', 1);
    }

    public function listExtendRecords($records)
    {
        # return $records->user();
        
    }
}
