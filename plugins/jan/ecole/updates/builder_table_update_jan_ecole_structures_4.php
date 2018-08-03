<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleStructures4 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
