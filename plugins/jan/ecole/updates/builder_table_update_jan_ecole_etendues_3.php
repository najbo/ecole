<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleEtendues3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_etendues', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_etendues', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
