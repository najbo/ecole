<?php namespace Jan\Ecole\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanEcoleEtendue extends Migration
{
    public function up()
    {
        Schema::create('jan_ecole_publications_etendues', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('titre');
            $table->boolean('is_actif')->default(1);
            $table->boolean('is_frontend')->default(1);
            $table->integer('sort_order')->default(0);
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jan_ecole_publications_etendues');
    }
}