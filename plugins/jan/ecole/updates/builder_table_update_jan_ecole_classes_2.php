<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleClasses2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_classes', function($table)
        {
            $table->renameColumn('classe', 'degre');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_classes', function($table)
        {
            $table->renameColumn('degre', 'classe');
        });
    }
}
