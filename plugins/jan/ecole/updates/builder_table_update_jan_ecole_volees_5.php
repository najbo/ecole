<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleVolees5 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->boolean('actif')->default(1);
            $table->dropColumn('archive');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_volees', function($table)
        {
            $table->dropColumn('actif');
            $table->boolean('archive');
        });
    }
}
