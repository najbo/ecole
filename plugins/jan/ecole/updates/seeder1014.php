<?php namespace Jan\Ecole\Updates;

use Seeder;
use Backend\Models\UserGroup;

class Seeder1014 extends Seeder
{
    public function run()
    {
        
        UserGroup::truncate();
        
        UserGroup::create([
            'name' => 'Enseignant primaire',
            'code' => 'ens-prim',
            'description' => 'Groupe des enseignants de l\'école primaire',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'Enseignant secondaire',
            'code' => 'ens-sec',
            'description' => 'Groupe des enseignants de l\'école secondaire',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'Enseignant EJC',
            'code' => 'ens-ejc',
            'description' => 'Groupe des enseignants de l\'école à journée continue',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'Direction primaire',
            'code' => 'dir-prim',
            'description' => 'Groupe de la direction de l\'école primaire',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'Direction secondaire',
            'code' => 'dir-sec',
            'description' => 'Groupe de la direction de l\'école secondaire',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'MITIC',
            'code' => 'mitic',
            'description' => 'Groupe mitic',
            'is_new_user_default' => false
        ]);
        
        UserGroup::create([
            'name' => 'Autres',
            'code' => 'autres',
            'description' => 'Groupe pour autre collaborateurs',
            'is_new_user_default' => false
        ]);
    }
}