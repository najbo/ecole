<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublicationsTypes extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_types_publication', 'jan_ecole_publications_types');
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_publications_types', 'jan_ecole_types_publication');
    }
}
