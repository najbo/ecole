<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleAnnees7 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->dateTime('fin')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->date('fin')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
