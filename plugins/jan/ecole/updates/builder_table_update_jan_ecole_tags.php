<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleTags extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_tags', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_tags', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
