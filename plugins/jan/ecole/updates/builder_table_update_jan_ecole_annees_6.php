<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleAnnees6 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->dateTime('debut')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->date('debut')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
