<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanGestionclassesVolees extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_volees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre', 255)->nullable();
            $table->text('description')->nullable();
            $table->date('debut')->nullable();
            $table->boolean('archive');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_volees');
    }
}
