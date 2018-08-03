<?php namespace Jan\Ecole;

use System\Classes\PluginBase;
#use October\Rain\Auth\Models\User;
use Backend\Models\User as UserModel;
use Backend\Controllers\Users as UsersController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
    	UserModel::extend(function($model){
                # $model->hasOne['ecole_enseignant'] = ['Backend\Models\User']; # ajouter au koins le nom du plugin avant le nom de la table !
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
