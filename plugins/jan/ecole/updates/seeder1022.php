<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\SuperGroup;

class Seeder1022 extends Seeder
{
    public function run()
    {
    
        SuperGroup::truncate();

        SuperGroup::create([
            'id' => 1,
            'titre' => 'Direction',
            'sort_order' => 1,
            'is_frontend' => 1,
            'is_showfonction' => 1
        ]);

        
        SuperGroup::create([
            'id' => 2,
            'titre' => 'Corps enseignant',
            'sort_order' => 2,
            'is_frontend' => 1,
            'is_showfonction' => 0
        ]);
        
        SuperGroup::create([
            'id' => 3,
            'titre' => 'Autres fonctions',
            'sort_order' => 3,
            'is_frontend' => 1,
            'is_showfonction' => 1
        ]);

    }
}