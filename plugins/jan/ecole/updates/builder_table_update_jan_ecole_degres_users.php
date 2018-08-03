<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleDegresUsers extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->boolean('actif')->nullable()->default(1);
            $table->dropColumn('archive');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_degres_users', function($table)
        {
            $table->dropColumn('actif');
            $table->boolean('archive')->nullable();
        });
    }
}
