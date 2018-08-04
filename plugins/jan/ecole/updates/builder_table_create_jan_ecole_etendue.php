<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleEtendue extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_etendue', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_etendue');
    }
}
