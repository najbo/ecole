<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleAnnees5 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->boolean('actif')->nullable()->default(1);
            $table->date('fin')->nullable();
            $table->dropColumn('archive');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->dropColumn('actif');
            $table->dropColumn('fin');
            $table->boolean('archive')->nullable();
        });
    }
}
