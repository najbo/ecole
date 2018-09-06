<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\Structure;

class Seeder1067 extends Seeder
{
    public function run()
    {
        
        Structure::truncate();
        
        Structure::create([
            'id' => 1,
            'abreviation' => 'EP',
            'titre' => 'Ecole primaire',
            'sort_order' => 1
        ]);
        
        Structure::create([
            'id' => 2,
            'abreviation' => 'ES',
            'titre' => 'Ecole secondaire',
            'sort_order' => 2
        ]);
        
        Structure::create([
            'id' => 3,
            'abreviation' => 'EJC',
            'titre' => 'Ecole à journée continue',
            'sort_order' => 1
        ]);        

    }
}