<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleStructures2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
