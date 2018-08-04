<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleEtendues2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_etendues', function($table)
        {
            $table->boolean('is_actif')->default(1);
            $table->string('titre')->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_etendues', function($table)
        {
            $table->dropColumn('is_actif');
            $table->string('titre', 191)->change();
        });
    }
}
