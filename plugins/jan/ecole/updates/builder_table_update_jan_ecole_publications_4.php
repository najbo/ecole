<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublications4 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->renameColumn('degre_id', 'classe_id');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_publications', function($table)
        {
            $table->renameColumn('classe_id', 'degre_id');
        });
    }
}
