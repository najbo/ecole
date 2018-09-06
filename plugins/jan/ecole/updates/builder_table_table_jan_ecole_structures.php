<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableTableJanEcoleStructures extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_structures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('abreviation', 10)->nullable();
            
            $table->string('titre')->nullable();
            
            $table->text('description')->nullable();
            $table->boolean('is_actif')->default(1);
            $table->integer('sort_order')->default(0);
            
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_structures');
    }
}