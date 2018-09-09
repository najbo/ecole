<?php namespace Jan\Ecole\Updates;

use Seeder;
use Jan\Ecole\Models\Volee;

class Seeder1018 extends Seeder
{
    public function run()
    {

        volee::truncate();
        
        volee::create([
            'titre' => '2016-2024',
            'designation' => 'Licornes',
            'slug' => 'licornes',
            'debut' => '2016-08-01',
            'fin' => '2024.07.31'
        ]);
        
        volee::create([
            'titre' => '2017-2025',
            'designation' => 'Lions',
            'slug' => 'lion',
            'debut' => '2017-08-01',
            'fin' => '2025.07.31'
        ]);

        volee::create([
            'titre' => '2018-2026',
            'designation' => 'Coccinelles',
            'slug' => 'coccinelles',
            'debut' => '2018-08-01',
            'fin' => '2026-07-31'
        ]);        
        
        volee::create([
            'titre' => '2019-2027',
            'designation' => 'Papillons',
            'slug' => 'papillons',
            'debut' => '2019-08-01',
            'fin' => '2027-07-31'
        ]);        
    }
}