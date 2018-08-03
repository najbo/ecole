<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleDegres3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_degres', function($table)
        {
            $table->renameColumn('actif', 'is_actif');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_degres', function($table)
        {
            $table->renameColumn('is_actif', 'actif');
        });
    }
}
