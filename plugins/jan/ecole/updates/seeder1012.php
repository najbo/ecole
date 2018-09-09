<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\PublicationType;

class Seeder1012 extends Seeder
{
    public function run()
    {
        PublicationType::truncate();
        
        PublicationType::create([
            'id'                => 1,
            'abreviation'       => 'news',
            'titre'             => 'Compte-rendu',
            'slug'              => 'news'
          
        ]);
        
        PublicationType::create([
            'id'                => 2,
            'abreviation'       => 'info',
            'titre'             => 'Information',
            'slug'              => 'info'
        ]);
        
    }
}