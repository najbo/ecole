<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\Annee;

class Seeder1068 extends Seeder
{
    public function run()
    {
    
        Annee::truncate();

        
        Annee::create([
            'titre' => '2019-20',
            'debut' => '2019-08-01',
            'fin' => '2020-07-31',
        ]);
        
        Annee::create([
            'titre' => '2018-19',
            'debut' => '2018-08-01',
            'fin' => '2019-07-31',
            
        ]);
        
        Annee::create([
            'titre' => '2017-18',
            'debut' => '2017-08-01',
            'fin' => '2018-07-31',
        ]);



    }
}