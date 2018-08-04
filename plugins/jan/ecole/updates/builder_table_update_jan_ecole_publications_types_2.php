<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublicationsTypes2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_publications_types', function($table)
        {
            $table->integer('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_publications_types', function($table)
        {
            $table->increments('id')->change();
        });
    }
}
