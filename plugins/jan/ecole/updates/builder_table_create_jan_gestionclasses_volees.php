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
            $table->string('designation')->nullable();
            $table->string('slug')->nullable();
            
            $table->dateTime('debut')->nullable();
            $table->dateTime('fin')->nullable();
            
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            
            $table->timestamp('deleted_at')->nullable();            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_volees');
    }
}