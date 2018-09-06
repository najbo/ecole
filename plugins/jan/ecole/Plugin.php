<?php namespace Jan\Ecole;

use System\Classes\PluginBase;
#use October\Rain\Auth\Models\User;
use Backend\Models\User as UserModel;
use Backend\Controllers\Users as UsersController;
use Jan\Ecole\Controllers\Publications;


use Event;
use BackendAuth;

use Carbon\Carbon;
use Lang;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Jan\Ecole\Components\Enseignants' => 'enseignants',
            'Jan\Ecole\Components\Publications' => 'publications',
            'Jan\Ecole\Components\PublicationDetail' => 'publicationdetail',
            'Jan\Ecole\Components\VacancesList' => 'vacancesList'
        ];
    }

    public function registerSettings()
    {
    }


    // Registration des Snippets disponibles dans les pages statiques.

    public function registerPageSnippets()
    {
        return [
           'Jan\Ecole\Components\Enseignants' => 'enseignants',
           'Jan\Ecole\Components\Publications' => 'publications',
           'Jan\Ecole\Components\VacancesList' => 'vacancesList'
        ];
    }

    public function boot()
    {

    $localeCode = Lang::getLocale();
    setlocale(LC_TIME, $localeCode . '_' . strtoupper($localeCode) . '.UTF-8','fra');

    /* Supprime des menus */

    Event::listen('backend.menu.extendItems', function($manager) {
        if(! BackendAuth::getUser()->hasPermission('jan.ecole.gestion_tags')){
            #$manager->removeMainMenuItem('Jan.Ecole', 'publications');
            #$manager->removeSideMenuItem('Jan.Ecole', 'ecole', 'tags');
        }
    });
    





    	UserModel::extend(function($model){
                # $model->hasOne['ecole_enseignant'] = ['Backend\Models\User']; # ajouter au joins le nom du plugin avant le nom de la table !
    	});

        /* Ajout de champs aux publications */

        Publications::extendListColumns(function ($list) {
            $list->addColumns([
                'degre_titre' => [
                    'label' => 'Degré',
                    'relation' => 'classe',
                    'select' => 'degre'
                ]
            ]);
        });

        

    	/* Ajout des champs profile et coordonnées pour les utilisateurs backend- */
    	UsersController::extendFormFields(function($form, $model, $context){
    		$form->addTabFields([
    			'description' => [
    				'label' => 'Description',
    				'tab'=> 'Profile',
    				'type' => 'textarea'
    			],
    			'slug' => [
    				'label' => 'Slug',
    				'type' => 'text',
    				'span' => 'left',
    				'preset' => [
    					'field' => 'first_name',
    					'type' => 'slug']
    			],
    			'adresse' => [
    				'label' => 'Adresse',
    				'tab'=> 'Coordonnées',
    				'type' => 'textarea',
    				'span' => 'full'
    			],
    			'telephone_1' => [
    				'label' => 'Téléphone',
    				'tab'=> 'Coordonnées',
    				'type' => 'text',
    				'span' => 'left'
    			],
    			'tel_non_public' => [
    				'label' => 'Ne pas publier ces informations sur le front-end',
    				'tab'=> 'Coordonnées',
    				'type' => 'switch',
    				'span' => 'left'
    			]
    		]);
    	});
    }
}
