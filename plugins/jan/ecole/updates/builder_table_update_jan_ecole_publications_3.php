<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublications3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->renameColumn('typepublication_id', 'publicationtype_id');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->renameColumn('publicationtype_id', 'typepublication_id');
        });
    }
}
