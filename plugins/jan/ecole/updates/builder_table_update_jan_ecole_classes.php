<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleClasses extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_degres', 'jan_ecole_classes');
        Schema::table('jan_ecole_classes', function($table)
        {
            $table->renameColumn('degre', 'classe');
        });
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_classes', 'jan_ecole_degres');
        Schema::table('jan_ecole_degres', function($table)
        {
            $table->renameColumn('classe', 'degre');
        });
    }
}
