<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleStructures6 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->string('abreviation', 10)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->dropColumn('abreviation');
        });
    }
}
