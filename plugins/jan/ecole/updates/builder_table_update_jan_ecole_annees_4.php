<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleAnnees4 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->string('titre', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->string('titre', 255)->nullable()->change();
        });
    }
}
