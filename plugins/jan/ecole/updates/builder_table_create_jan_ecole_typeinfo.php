<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleTypeinfo extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_publications_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->nullable();
            $table->string('titre');
            $table->string('slug')->nullable();
            $table->string('abreviation', 10)->nullable();
            $table->boolean('is_actif')->default(1);
            
            $table->string('no_record')->nullable();
            $table->string('singulier')->nullable();
            $table->string('pluriel')->nullable();
            
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_publications_types');
    }
}