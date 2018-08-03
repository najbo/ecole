<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanGestionclassesAnnees extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->string('titre', 65535)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_annees', function($table)
        {
            $table->text('titre')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
