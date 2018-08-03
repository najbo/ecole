<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanGestionclassesStructures extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_structures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre')->nullable();
            $table->text('description')->nullable();
            $table->boolean('archive');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_structures');
    }
}
