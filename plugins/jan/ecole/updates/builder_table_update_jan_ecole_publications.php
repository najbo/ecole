<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublications extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_infoscenter', 'jan_ecole_publications');
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_publications', 'jan_ecole_infoscenter');
    }
}
