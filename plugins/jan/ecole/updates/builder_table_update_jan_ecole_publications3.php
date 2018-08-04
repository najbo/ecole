<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublications3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->integer('degre_id')->nullable()->change();
            $table->integer('structure_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->integer('degre_id')->nullable(false)->change();
        });
    }
}