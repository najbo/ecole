<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\PublicationType;

class Seeder1060 extends Seeder
{
    public function run()
    {
        
        PublicationType::create([
            'id'                => 1,
            'abreviation'       => 'news',
            'titre'             => 'News',
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