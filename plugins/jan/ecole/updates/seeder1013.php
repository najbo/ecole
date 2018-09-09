<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\PublicationEtendue;

class Seeder1013 extends Seeder
{
    public function run()
    {
        
        PublicationEtendue::truncate();
        
        PublicationEtendue::create([
            'id'                => 1,
            'titre'             => 'Classe',
            'sort_order'        => '1'
          
        ]);
        
        PublicationEtendue::create([
            'id'                => 2,
            'titre'             => 'Structure',
            'sort_order'        => '2'
        ]);
        
        PublicationEtendue::create([
            'id'                => 3,
            'titre'             => 'Etablissement',
            'sort_order'        => '3'
          
        ]);
    }
}