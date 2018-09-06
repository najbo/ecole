<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleVacances extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_vacances', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            $table->integer('structure_id')->nullable();
            $table->integer('annee_id')->nullable();
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_vacances');
    }
}