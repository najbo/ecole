<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleStructures extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->string('titre', 191)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->string('titre', 191)->nullable()->change();
        });
    }
}
