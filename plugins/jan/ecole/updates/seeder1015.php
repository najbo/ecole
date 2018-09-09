<?php namespace Jan\Ecole\Updates;

use Seeder;
use Backend\Models\UserRole;

class Seeder1015 extends Seeder
{
    public function run()
    {
        
       UserRole::truncate();
       
       UserRole::create([
            'name' => 'Enseignant',
            'code' => 'enseignant',
            'description' => 'Les enseignants peuvent gérer les publications de leurs volées',
            'is_system' => 0
        ]);
        
        UserRole::create([
            'name' => 'Gestionnaire',
            'code' => 'gestionnaire',
            'description' => 'Le gestionnaire gère la structure de l\'école',
            'is_system' => 0
        ]);
        
            
    }
}