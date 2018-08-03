<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanGestionclassesAnnees3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->boolean('archive')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->integer('archive')->nullable()->unsigned()->default(null)->change();
        });
    }
}
