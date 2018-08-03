<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanGestionclassesVolees extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->date('fin')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->dropColumn('fin');
        });
    }
}
