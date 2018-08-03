<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanEcoleStructures3 extends Migration
{
    public function up()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->renameColumn('order', 'sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('jan_ecole_structures', function($table)
        {
            $table->renameColumn('sort_order', 'order');
        });
    }
}
