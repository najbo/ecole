<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleEtendues extends Migration
{
    public function up()
    {
        Schema::rename('jan_ecole_etendue', 'jan_ecole_etendues');
        Schema::table('jan_ecole_etendues', function($table)
        {
            $table->string('titre')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('jan_ecole_etendues', 'jan_ecole_etendue');
        Schema::table('jan_ecole_etendue', function($table)
        {
            $table->string('titre', 191)->change();
        });
    }
}
