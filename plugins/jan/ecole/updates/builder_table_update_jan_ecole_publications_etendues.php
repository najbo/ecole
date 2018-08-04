<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcolePublicationsEtendues extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_etendues', 'jan_ecole_publications_etendues');
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_publications_etendues', 'jan_ecole_etendues');
    }
}
