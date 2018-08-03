<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleDegresUsers2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->renameColumn('actif', 'is_actif');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->renameColumn('is_actif', 'actif');
        });
    }
}
