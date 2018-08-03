<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleVolees3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->string('designation')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->dropColumn('designation');
        });
    }
}
