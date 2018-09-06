<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleDegres extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_classes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('degre');
            $table->text('description')->nullable();
            $table->integer('annee_id')->unsigned();
            $table->integer('structure_id')->unsigned();
            $table->integer('volee_id')->unsigned();
            
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_classes');
    }
}