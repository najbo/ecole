<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleInfoscenter2 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_infoscenter', function($table)
        {
            $table->integer('etendue_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_infoscenter', function($table)
        {
            $table->dropColumn('etendue_id');
        });
    }
}
