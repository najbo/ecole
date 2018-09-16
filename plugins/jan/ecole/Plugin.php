<?php namespace Jan\Ecole;

use System\Classes\PluginBase;
#use October\Rain\Auth\Models\User;
use Backend\Models\User as UserModel;
use Backend\Controllers\Users as UsersController;
// use Backend\Controllers\UserGroups as UserGroupsController;
// use Backend\Models\UserGroup as UserGroup;

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
            'Jan\Ecole\Components\Publications' => 'publications',
            'Jan\Ecole\Components\PublicationDetail' => 'publicationdetail',
            'Jan\Ecole\Components\Enseignants' => 'enseignants',
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

            $model->belongsToMany['structures'] = [
                'Jan\Ecole\Models\Structure',
                'table' => 'jan_ecole_users_etendues',
                'key' => 'user_id'
            ];

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

        

    	/* Ajout des champs profil et coordonnées pour les utilisateurs backend- */
    	UsersController::extendFormFields(function($form, $model, $context){
    		$form->addTabFields([
                'fonction' => [
                    'label' => 'Fonction principale',
                    'type' => 'text',
                    'span' => 'auto',
                ],
                'slug' => [
                    'label' => 'Slug',
                    'type' => 'text',
                    'span' => 'auto',
                    'preset' => [
                        'field' => 'first_name',
                        'type' => 'slug']
                ],
                'description' => [
    				'label' => 'Description',
    				'tab'=> 'Profil',
    				'type' => 'textarea'
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
    			'is_telnonpublic' => [
    				'label' => 'Ne pas publier ces informations sur le front-end',
    				'tab'=> 'Coordonnées',
    				'type' => 'switch',
    				'span' => 'auto'
    			],
                'is_avatarnonpublic' => [
                    'label' => 'Ne pas publier la photo sur le front-end',
                    'tab'=> 'Coordonnées',
                    'type' => 'switch',
                    'span' => 'auto'
                ],
                // 'groups' => [
                //     'label' => 'Groupe et Fonction',
                //     'tab'=> 'Groupes et fonctions',
                //     'type' => 'partial',
                //     'path' => '$/jan/ecole/controllers/enseignants/_field_group.htm',
                //     'span' => 'left'
                // ]

               
    		]);

    	});




        // Groupes des backend_user_groups :
        // Etendre le modèle Backend\UserGroups pour ajouter une nouvelle relation (ajout du groupe de goupe)
        // UserGroup::extend(function($model) {
        //     $model->belongsTo['supergroup'] = ['Jan\Ecole\Models\SuperGroup'];
        // });

        /* Ajout du champ jan_gestion_backend_user_groupe > sur le contrôleur Backend\UserGroups- */
/*        UserGroupsController::extendFormFields(function($form, $model, $context){
            $form->addFields([
                'supergroup' => [
                    'label' => 'Groupe',
                    'nameFrom' => 'titre',
                    'type' => 'relation',
                    'span' => 'auto'
                ]

            ]);
        });

        UserGroupsController::extendListColumns(function($list, $model) {

        $list->addColumns([
            'supergroup_titre' => [
                'label' => 'Groupe frontend',
                'type' => 'text',
                'select' => 'titre',
                'relation' => 'supergroup'
            ]
        ]);

    });*/



    }
}
