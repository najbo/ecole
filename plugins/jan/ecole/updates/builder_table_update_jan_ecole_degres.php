<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleDegres extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_degres', function($table)
        {
            $table->boolean('archive')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_degres', function($table)
        {
            $table->boolean('archive')->nullable(false)->change();
        });
    }
}
